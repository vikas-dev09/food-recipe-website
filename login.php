<?php
session_start();

// ---------- PHP: Database connection ----------
$servername = "localhost";
$username   = "root";     // default XAMPP user
$password   = "";         // default no password
$dbname     = "food_recipe.db"; // make sure this DB exists

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


// ---------- PHP: Handle Registration ----------
if (isset($_POST['register'])) {
  $full_name = $_POST['full_name'];
  $email     = $_POST['email'];
  $gender    = $_POST['gender'];
  $dob       = $_POST['dob'];
  $password  = $_POST['password'];
  $confirm   = $_POST['confirm_password'];
  $fav_food  = $_POST['fav_food'];

  if ($password !== $confirm) {
    echo "<script>alert('Passwords do not match!');</script>";
  } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{10,}$/', $password)) {
    echo "<script>alert('Password must be at least 10 characters long and include uppercase, lowercase, and a number.');</script>";
  } else {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Use prepared statement
    $stmt = $conn->prepare("INSERT INTO users (full_name, email, gender, dob, password, fav_food) 
                            VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $full_name, $email, $gender, $dob, $hashed_password, $fav_food);

    if ($stmt->execute()) {
      echo "<script>alert('Registration successful! You can now log in.');</script>";
    } else {
      $err = addslashes($stmt->error);
      echo "<script>alert('Error: $err');</script>";
    }

    $stmt->close();
  }
}


// ---------- PHP: Handle Login ----------
if (isset($_POST['login'])) {
  $email    = $_POST['email'];
  $password = $_POST['password'];

  // prepared select
  $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
  $stmt->bind_param("s", $email);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row           = $result->fetch_assoc();
    $stored_pass   = $row['password'];
    $login_success = false;

    // normal: hashed
    if (password_verify($password, $stored_pass)) {
      $login_success = true;
    } 
    // fallback: old plain-text password in DB → migrate to hash
    elseif ($password === $stored_pass) {
      $login_success = true;

      // migrate to hash now
      $newHash = password_hash($password, PASSWORD_DEFAULT);
      $upd = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
      $upd->bind_param("ss", $newHash, $email);
      $upd->execute();
      $upd->close();
    }

    if ($login_success) {
      // store session
      $_SESSION['user_email']    = $row['email'];
      $_SESSION['user_fullname'] = $row['full_name'];
      // if you have id column:
      if (isset($row['id'])) {
        $_SESSION['user_id'] = $row['id'];
      }

      echo "<script>
              alert('Login successful! Welcome back, " . addslashes($row['full_name']) . "');
              window.location.href = 'landing.php';
            </script>";
    } else {
      echo "<script>alert('Incorrect password!');</script>";
    }

  } else {
    echo "<script>alert('No account found with this email.');</script>";
  }

  $stmt->close();
}


// ---------- PHP: Handle Forgot Password ----------
if (isset($_POST['reset'])) {
  $email        = $_POST['email'];
  $fav_food     = $_POST['fav_food'];
  $new_password = $_POST['new_password'];

  if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{10,}$/', $new_password)) {
    echo "<script>alert('New password must be at least 10 characters long and include uppercase, lowercase, and a number.');</script>";
  } else {
    $hashed_new = password_hash($new_password, PASSWORD_DEFAULT);

    // verify email + fav_food
    $check = $conn->prepare("SELECT * FROM users WHERE email = ? AND fav_food = ?");
    $check->bind_param("ss", $email, $fav_food);
    $check->execute();
    $res = $check->get_result();

    if ($res->num_rows > 0) {
      $upd = $conn->prepare("UPDATE users SET password = ? WHERE email = ?");
      $upd->bind_param("ss", $hashed_new, $email);
      $upd->execute();
      $upd->close();

      echo "<script>alert('Password reset successful! You can now log in.');</script>";
    } else {
      echo "<script>alert('Email or favorite food incorrect!');</script>";
    }

    $check->close();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foodies 🍕 | Login & Register</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

* {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
  font-family: 'Poppins', sans-serif;
}

body {
  background: linear-gradient(135deg, #ffb347, #ffcc33, #ff7e5f, #feb47b);
  background-size: 300% 300%;
  animation: gradientMove 8s ease infinite;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
}

@keyframes gradientMove {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.container {
  width: 400px;
  background: white;
  border-radius: 30px;
  box-shadow: 0 8px 30px rgba(255,136,0,0.4);
  overflow: hidden;
  text-align: center;
  animation: pop 0.8s ease;
}

@keyframes pop {
  from { transform: scale(0.9); opacity: 0; }
  to   { transform: scale(1); opacity: 1; }
}

.header {
  background: linear-gradient(135deg, #ff9966, #ff5e62);
  color: white;
  padding: 25px 0;
}

.header h2 {
  font-size: 28px;
  font-weight: 700;
}

.form-container {
  padding: 30px 40px;
  display: none;
  transition: 0.4s ease;
}

.form-container.active {
  display: block;
}

input, select {
  width: 100%;
  padding: 12px;
  border-radius: 10px;
  border: 2px solid #f3f3f3;
  margin-bottom: 15px;
  font-size: 15px;
  outline: none;
  transition: 0.3s;
}

input:focus, select:focus {
  border-color: #ff9966;
  box-shadow: 0 0 6px rgba(255,153,102,0.5);
}

button {
  width: 100%;
  background: linear-gradient(45deg, #ff9966, #ff5e62);
  color: white;
  padding: 12px;
  border: none;
  border-radius: 30px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
}

button:hover {
  transform: scale(1.05);
  box-shadow: 0 0 15px rgba(255,94,98,0.4);
}

.toggle, .forgot {
  margin-top: 10px;
  font-size: 14px;
  color: #555;
}

.toggle a, .forgot a {
  color: #ff5e62;
  text-decoration: none;
  font-weight: 600;
  cursor: pointer;
}

.emoji {
  font-size: 40px;
  animation: bounce 2s infinite;
}

@keyframes bounce {
  0%,100% { transform: translateY(0); }
  50% { transform: translateY(-8px); }
}

footer {
  font-size: 13px;
  color: #666;
  margin-top: 15px;
}

.password-container {
  position: relative;
}

.password-container .toggle-password {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  font-size: 22px;
}
</style>
</head>

<body>

<div class="container">

  <div class="header">
    <div class="emoji">🍕🍔🍩</div>
    <h2>Welcome to Foodies</h2>
    <p>Eat. Share. Smile 😊</p>
  </div>

  <!-- Login Form -->
  <form method="POST" class="form-container active" id="loginForm">
    <h3>Login to Continue</h3>

    <input type="email" name="email" placeholder="Email" required>

    <div class="password-container">
      <input type="password" name="password" placeholder="Password" required id="loginPassword">
      <span class="toggle-password" onclick="togglePassword('loginPassword', this)">🙈</span>
    </div>

    <button type="submit" name="login">Login</button>

    <div class="forgot"><a id="forgotPassword">Forgot Password?</a></div>
    <div class="toggle">Don't have an account? <a id="showRegister">Register</a></div>
  </form>


  <!-- Register Form -->
  <form method="POST" class="form-container" id="registerForm" onsubmit="return validateRegister()">
    <h3>Create a Happy Account 😄</h3>

    <input type="text" name="full_name" placeholder="Full Name" required>
    <input type="email" name="email" placeholder="Email" required>

    <select name="gender" required>
      <option value="">Select Gender</option>
      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
    </select>

    <input type="date" name="dob" required>

    <div class="password-container">
      <input type="password" name="password" placeholder="Password (min 10 chars, A–Z, a–z, 0–9)" required id="registerPassword">
      <span class="toggle-password" onclick="togglePassword('registerPassword', this)">🙈</span>
    </div>

    <div class="password-container">
      <input type="password" name="confirm_password" placeholder="Confirm Password" required id="registerConfirmPassword">
      <span class="toggle-password" onclick="togglePassword('registerConfirmPassword', this)">🙈</span>
    </div>

    <input type="text" name="fav_food" placeholder="Your Favorite Food?" required>

    <button type="submit" name="register">Register</button>

    <div class="toggle">Already a member? <a id="showLogin">Login</a></div>
  </form>


  <!-- Forgot Password Form -->
  <form method="POST" class="form-container" id="forgotForm">
    <h3>Reset Password 🔑</h3>

    <input type="email" name="email" placeholder="Enter your Email" required>
    <input type="text" name="fav_food" placeholder="Your Favorite Food?" required>

    <div class="password-container">
      <input type="password" name="new_password" placeholder="New Password (min 10 chars, A–Z, a–z, 0–9)" required id="forgotPasswordInput">
      <span class="toggle-password" onclick="togglePassword('forgotPasswordInput', this)">🙈</span>
    </div>

    <button type="submit" name="reset">Reset Password</button>

    <div class="toggle">Back to <a id="backToLogin">Login</a></div>
  </form>

  <footer>© 2025 Foodies App | Made with ❤️ for food lovers</footer>

</div>


<script>
// FORM SWITCH
const loginForm   = document.getElementById("loginForm");
const registerForm= document.getElementById("registerForm");
const forgotForm  = document.getElementById("forgotForm");

document.getElementById("showRegister").onclick = () => {
  loginForm.classList.remove("active");
  registerForm.classList.add("active");
};

document.getElementById("showLogin").onclick = () => {
  registerForm.classList.remove("active");
  loginForm.classList.add("active");
};

document.getElementById("forgotPassword").onclick = () => {
  loginForm.classList.remove("active");
  forgotForm.classList.add("active");
};

document.getElementById("backToLogin").onclick = () => {
  forgotForm.classList.remove("active");
  loginForm.classList.add("active");
};


// PASSWORD SHOW/HIDE
function togglePassword(id, el) {
  const input = document.getElementById(id);

  if (input.type === "password") {
    input.type = "text";
    el.textContent = "👀";
  } else {
    input.type = "password";
    el.textContent = "🙈";
  }
}


// FRONTEND REGISTER VALIDATION
function validateRegister() {
  const p = document.getElementById("registerPassword").value;
  const c = document.getElementById("registerConfirmPassword").value;

  const pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{10,}$/;

  if (p !== c) {
    alert("Passwords do not match!");
    return false;
  }

  if (!pattern.test(p)) {
    alert("Password must be at least 10 characters and include uppercase, lowercase, and a number.");
    return false;
  }

  return true;
}
</script>

</body>
</html>
