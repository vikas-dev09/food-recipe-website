<?php
// MySQL connection (XAMPP)
$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "food_recipe.db";

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$errorMsg = '';
$showSuccessAlert = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userName = trim($_POST['userName']);
    $rating = intval($_POST['rating']);
    $comments = trim($_POST['comments']);
    $imagePath = 'profi.webp'; // default image

    // Image Upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $targetDir = "uploads/";
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $fileName = time() . "_" . basename($_FILES["image"]["name"]);
        $targetFilePath = $targetDir . $fileName;

        $fileType = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

        if (in_array($fileType, $allowedTypes)) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath)) {
                $imagePath = $targetFilePath;
            } else {
                $errorMsg = "Failed to upload image.";
            }
        } else {
            $errorMsg = "Only JPG, JPEG, PNG, GIF allowed.";
        }
    }

    // Save Review
    if (!$errorMsg && $userName && $rating && $comments) {
        $stmt = $conn->prepare("INSERT INTO reviews (username, rating, comments, image) VALUES (?, ?, ?, ?)");
        if ($stmt) {
            $stmt->bind_param("siss", $userName, $rating, $comments, $imagePath);
            if ($stmt->execute()) {
                $showSuccessAlert = true;
            } else {
                $errorMsg = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $errorMsg = "Prepare failed: " . $conn->error;
        }
    } elseif (!$errorMsg) {
        $errorMsg = "Please fill in all required fields.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submit Review - Foodies</title>

<style>
* { box-sizing: border-box; margin: 0; padding: 0; font-family: Arial, sans-serif; }
body { background: #fef6f0; display: flex; flex-direction: column; min-height: 100vh; color: #333; }

/* HEADER WITH LOGO */
.land {
    width: 100%;
    background-color: saddlebrown;
    color: white;
    padding: 20px 30px;  
    font-size: 26px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}
.header-logo {
    width: 85px;
    height:85px;
    border-radius: 50%;
    object-fit: cover;
    position: absolute;
    left: 20px;
}


.container {
    max-width: 600px;
    background: white;
    margin: 50px auto;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
}

h1 { text-align: center; color: saddlebrown; margin-bottom: 30px; }
label { font-weight: bold; color: saddlebrown; margin-bottom: 8px; display: block; }

input[type=text], textarea, input[type=file] {
    width: 100%; padding: 10px; margin-bottom: 20px;
    border: 1px solid #ccc; border-radius: 5px; font-size: 16px;
}
textarea { height: 120px; }

.stars { display: flex; gap: 8px; margin-bottom: 20px; cursor: pointer; font-size: 32px; }
.star { color: #ccc; transition: 0.3s; }
.star.filled { color: gold; }

.submit-btn {
    background: saddlebrown; color: white;
    padding: 12px 25px; border: none;
    border-radius: 6px; font-size: 18px;
    cursor: pointer; display: block; margin: auto;
}
.submit-btn:hover { background: gold; color: saddlebrown; }

.msg { text-align: center; margin-bottom: 15px; font-weight: bold; }

.footer {
    background: saddlebrown; color: white;
    text-align: center; padding: 15px 0; margin-top: auto;
}
</style>
</head>

<body>

<!-- HEADER WITH ROUND LOGO -->
<div class="land">
    <img src="logo.png" class="header-logo">
    <span>Foodies</span>
</div>

<div class="container">
<h1>Submit Your Recipe Review</h1>

<?php if($errorMsg): ?>
<p class="msg" style="color:red;"><?php echo $errorMsg; ?></p>
<?php endif; ?>

<form method="post" enctype="multipart/form-data">

  <label>User Name:</label>
  <input type="text" name="userName" required>

  <label>Rating:</label>
  <div class="stars" id="starRating">
      <span class="star" data-value="1">☆</span>
      <span class="star" data-value="2">☆</span>
      <span class="star" data-value="3">☆</span>
      <span class="star" data-value="4">☆</span>
      <span class="star" data-value="5">☆</span>
  </div>
  <input type="hidden" id="rating" name="rating" required>

  <label>Comments:</label>
  <textarea name="comments" required></textarea>

  <label>Upload Image (optional):</label>
  <input type="file" name="image" accept="image/*">

  <button type="submit" class="submit-btn">Submit Review</button>

</form>
</div>

<div class="footer">All rights reserved © 2025</div>

<script>
const stars = document.querySelectorAll('.star');
let currentRating = 0;

function updateStars(rating){
    stars.forEach(star => {
        const value = parseInt(star.getAttribute('data-value'));
        star.textContent = (value <= rating) ? '★' : '☆';
        star.classList.toggle("filled", value <= rating);
    });
}

stars.forEach(star => {
  star.addEventListener("click", () => {
      currentRating = parseInt(star.dataset.value);
      document.getElementById("rating").value = currentRating;
      updateStars(currentRating);
  });
  star.addEventListener("mouseover", () => updateStars(parseInt(star.dataset.value)));
  star.addEventListener("mouseout", () => updateStars(currentRating));
});

<?php if($showSuccessAlert): ?>
alert("Review submitted successfully!");
window.location.href = "landing.php";
<?php endif; ?>
</script>

</body>
</html>
