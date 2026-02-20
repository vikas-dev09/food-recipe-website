

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Login | Foodies</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #fff3e0 0%, #ffd8b1 100%);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
      position: relative;
    }

    header {
      width: 100%;
      text-align: center;
      padding: 25px 0;
    }

    header h1 {
      font-size: 34px;
      font-weight: 700;
      color: #6b240c;
      letter-spacing: 1px;
    }

    header h1 span {
      color: #d2691e;
    }

    /* Animated floating food icons */
    .floating-icon {
      position: absolute;
      width: 70px;
      opacity: 0.3;
      animation: float 8s ease-in-out infinite;
    }

    .floating-icon:nth-child(1) { top: 15%; left: 5%; animation-delay: 0s; }
    .floating-icon:nth-child(2) { bottom: 20%; right: 10%; animation-delay: 2s; }
    .floating-icon:nth-child(3) { top: 10%; right: 15%; animation-delay: 4s; }
    .floating-icon:nth-child(4) { bottom: 10%; left: 15%; animation-delay: 6s; }

    @keyframes float {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-20px); }
    }

    /* Login container */
    .login-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.25);
      border-radius: 20px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      width: 380px;
      padding: 40px 30px;
      text-align: center;
      z-index: 10;
      animation: fadeIn 1.2s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .login-container h2 {
      color: #6b240c;
      margin-bottom: 25px;
      font-size: 28px;
      font-weight: 700;
    }

    .login-container input {
      width: 100%;
      padding: 12px;
      margin: 10px 0 20px 0;
      border: none;
      border-radius: 10px;
      font-size: 16px;
      background: rgba(255, 255, 255, 0.85);
      outline: none;
      transition: all 0.3s ease;
    }

    .login-container input:focus {
      box-shadow: 0 0 10px rgba(210, 105, 30, 0.4);
      transform: scale(1.02);
    }

    .login-container button {
      width: 100%;
      background: linear-gradient(135deg, #d2691e, #8b4513);
      color: white;
      border: none;
      padding: 14px;
      border-radius: 10px;
      font-size: 18px;
      cursor: pointer;
      transition: all 0.3s ease;
      margin-top: 10px;
      font-weight: 600;
    }

    .login-container button:hover {
      background: linear-gradient(135deg, #8b4513, #5a2a0b);
      transform: translateY(-2px);
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
    }

    #message {
      margin-top: 15px;
      min-height: 24px;
    }

    .error-message {
      color: #e63946;
      font-weight: 500;
      animation: shake 0.3s;
    }

    .success-message {
      color: #2a9d8f;
      font-weight: 500;
    }

    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      50% { transform: translateX(5px); }
      75% { transform: translateX(-5px); }
    }

    footer {
      text-align: center;
      color: #5a2a0b;
      font-size: 15px;
      padding: 15px;
      opacity: 0.9;
      z-index: 5;
    }

    footer a {
      color: #d2691e;
      text-decoration: none;
      font-weight: 600;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 450px) {
      .login-container {
        width: 90%;
        padding: 25px;
      }
    }
  </style>
</head>
<body>

  <header>
    <h1>🍴 <span>Foodies</span> Admin Portal</h1>
  </header>

  <!-- Floating icons (decorative food images) -->
  <img src="https://cdn-icons-png.flaticon.com/512/3075/3075977.png" class="floating-icon" alt="Burger">
  <img src="https://cdn-icons-png.flaticon.com/512/415/415733.png" class="floating-icon" alt="Pizza">
  <img src="https://cdn-icons-png.flaticon.com/512/3075/3075955.png" class="floating-icon" alt="Cupcake">
  <img src="https://cdn-icons-png.flaticon.com/512/3075/3075987.png" class="floating-icon" alt="Ice Cream">

  <!-- Login box -->
  <div class="login-container">
    <h2>Admin Login</h2>
    <input type="text" id="username" placeholder="👤 Enter Username" />
    <input type="password" id="password" placeholder="🔒 Enter Password" />
    <button onclick="validateLogin()">Login</button>
    <div id="message"></div>
  </div>

  <footer>
    © 2025 <a href="#">Foodies</a>. All Rights Reserved.
  </footer>

  <script>
  // Clear inputs when page is loaded or revisited
  window.addEventListener("pageshow", function(event) {
    if (event.persisted || window.performance && window.performance.navigation.type === 2) {
      document.getElementById("username").value = "";
      document.getElementById("password").value = "";
      document.getElementById("message").innerHTML = "";
    }
  });

  function validateLogin() {
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const message = document.getElementById("message");

    const correctUser = "naik0104";
    const correctPass = "dhoDost2";

    if (username === "" || password === "") {
      message.innerHTML = '<p class="error-message">⚠️ Please fill all fields.</p>';
      return;
    }

    if (username === correctUser && password === correctPass) {
      message.innerHTML = '<p class="success-message">✅ Login successful! Redirecting...</p>';
      setTimeout(() => {
        window.location.href = "information.php";
      }, 1200);
    } else {
      message.innerHTML = '<p class="error-message">❌ Invalid username or password.</p>';
    }
  }
</script>

</body>
</html>
