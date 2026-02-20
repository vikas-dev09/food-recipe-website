<?php
// MySQL connection (XAMPP)
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "food_recipe.db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$adminMsg = "";

// Handle admin actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    // REPLY TO CONTACT MESSAGE
    if ($action === 'reply_contact') {
        $contact_id = intval($_POST['contact_id'] ?? 0);
        $reply_text = trim($_POST['reply_text'] ?? '');

        if ($contact_id > 0 && $reply_text !== '') {
            $stmt = $conn->prepare("UPDATE contact SET reply = ? WHERE id = ?");
            if ($stmt) {
                $stmt->bind_param("si", $reply_text, $contact_id);
                if ($stmt->execute()) {
                    $adminMsg = "Reply saved for contact ID {$contact_id}.";
                } else {
                    $adminMsg = "Failed to save reply: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $adminMsg = "Prepare failed: " . $conn->error;
            }
        } else {
            $adminMsg = "Reply text cannot be empty.";
        }
    }

    // DELETE REVIEW
    if ($action === 'delete_review') {
        $review_id = intval($_POST['review_id'] ?? 0);

        if ($review_id > 0) {
            $stmt = $conn->prepare("DELETE FROM reviews WHERE id = ?");
            if ($stmt) {
                $stmt->bind_param("i", $review_id);
                if ($stmt->execute()) {
                    $adminMsg = "Review ID {$review_id} deleted successfully.";
                } else {
                    $adminMsg = "Failed to delete review: " . $stmt->error;
                }
                $stmt->close();
            } else {
                $adminMsg = "Prepare failed: " . $conn->error;
            }
        } else {
            $adminMsg = "Invalid review ID.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Foodies Admin Dashboard</title>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
<style>
/* Flex layout to keep footer at bottom */
body {
    font-family: 'Inter', sans-serif;
    background: linear-gradient(to right, #fffaf3, #ffe3d8);
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    color: #333;
}

/* Main content wrapper */
.main-content {
    flex: 1;
    padding: 20px;
}

/* Header */
h1 {
    text-align: center;
    color: #d84315;
    margin: 20px 0;
    font-size: 2.8em;
    text-shadow: 1px 1px 3px #ffccbc;
}

/* Admin message */
.admin-msg {
    max-width: 1200px;
    margin: 0 auto 15px auto;
    padding: 10px 15px;
    border-radius: 8px;
    background: #fff3e0;
    border: 1px solid #ffb74d;
    color: #e65100;
    font-weight: 600;
}

/* Grid Layout */
.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
    gap: 30px;
    margin-bottom: 50px;
}

/* Card Style */
.section {
    background: #fff3e0;
    border-radius: 15px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    padding: 25px;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s;
}
.section:hover {
    transform: translateY(-5px);
}

.section-title {
    font-size: 1.7em;
    color: #ef6c00;
    margin-bottom: 15px;
    font-weight: 700;
    text-shadow: 0 1px 2px #ffcc80;
}

/* Scrollable Table Container */
.section-container {
    max-height: 500px;
    overflow-y: auto;
    border-radius: 10px;
}

/* Table Styles */
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ffd180;
    font-size: 0.95em;
}
th {
    background: #ff8a65;
    color: #fff;
    position: sticky;
    top: 0;
    z-index: 2;
    text-transform: uppercase;
}
tr:nth-child(even) { background: #ffe0b2; }
tr:hover { background: #ffcc80; }

/* Scrollbar */
.section-container::-webkit-scrollbar {
    width: 10px;
}
.section-container::-webkit-scrollbar-thumb {
    background: #ff8a65;
    border-radius: 5px;
}
.section-container::-webkit-scrollbar-track {
    background: #ffe0b2;
}

/* Inputs */
.inline-input, .inline-textarea {
    width: 100%;
    border-radius: 5px;
    border: 1px solid #ffb74d;
    padding: 5px;
    font-size: 0.9em;
}
.inline-textarea {
    min-height: 60px;
}

/* Buttons */
.btn {
    padding: 6px 10px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    font-size: 0.85em;
    font-weight: 600;
}
.btn-save { background: #388e3c; color: #fff; }
.btn-delete { background: #d32f2f; color: #fff; }

/* Sticky Footer */
footer {
    width: 100%;
    text-align: center;
    padding: 20px 0;
    background: linear-gradient(to right, #ff5722, #ff8a65);
    color: #fff;
    font-weight: 500;
    box-shadow: 0 -4px 10px rgba(0,0,0,0.1);
}
</style>
</head>
<body>

<div class="main-content">

<!-- LOGO ADDED HERE -->
<div style="text-align:center; margin-top:20px;">
    <img src="logo.png" alt="Foodies Logo" style="width:150px; height:auto;">
</div>

<h1>Foodies Admin Dashboard</h1>

<?php if ($adminMsg): ?>
    <div class="admin-msg"><?php echo htmlspecialchars($adminMsg); ?></div>
<?php endif; ?>

<div class="dashboard-grid">

<!-- CONTACT SECTION -->
<div class="section">
    <div class="section-title">Contact Form Messages</div>
    <div class="section-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Details</th>
                <th>Reply</th>
            </tr>
            <?php
            $sql = "SELECT * FROM contact ORDER BY id DESC";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($row['id'])."</td>";
                    echo "<td>";
                    echo "<strong>Name:</strong> ".htmlspecialchars($row['c_name'])."<br>";
                    echo "<strong>Email:</strong> ".htmlspecialchars($row['c_email'])."<br>";
                    echo "<strong>Subject:</strong> ".htmlspecialchars($row['c_subject'])."<br>";
                    echo "<strong>Message:</strong> ".nl2br(htmlspecialchars($row['c_msg']))."<br>";
                    echo "<strong>Submitted At:</strong> ".htmlspecialchars($row['submitted_at'])."<br>";
                    if (!empty($row['reply'])) {
                        echo "<strong>Your Reply:</strong> ".nl2br(htmlspecialchars($row['reply']));
                    }
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post'>";
                    echo "<input type='hidden' name='action' value='reply_contact'>";
                    echo "<input type='hidden' name='contact_id' value='".htmlspecialchars($row['id'])."'>";
                    echo "<textarea class='inline-textarea' name='reply_text' placeholder='Type your reply here...'>"
                         . htmlspecialchars($row['reply'] ?? '') . "</textarea><br><br>";
                    echo "<button type='submit' class='btn btn-save'>Save Reply</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No messages found.</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

<!-- REVIEWS SECTION -->
<div class="section">
    <div class="section-title">Recipe Reviews</div>
    <div class="section-container">
        <table>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Rating</th>
                <th>Comments</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            <?php
            $sql = "SELECT * FROM reviews ORDER BY id DESC";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imgSrc = !empty($row['image']) ? htmlspecialchars($row['image']) : 'profi.webp';
                    echo "<tr>";
                    echo "<td>".htmlspecialchars($row['id'])."</td>";
                    echo "<td>".htmlspecialchars($row['username'])."</td>";
                    echo "<td>".htmlspecialchars($row['rating'])."</td>";
                    echo "<td>".nl2br(htmlspecialchars($row['comments']))."</td>";
                    echo "<td><img src='".$imgSrc."' style='width:50px; height:50px; object-fit:cover; border-radius:5px;'></td>";
                    echo "<td>".htmlspecialchars($row['created_at'])."</td>";
                    echo "<td>
                          <form method='post' onsubmit=\"return confirm('Delete this review?');\">
                              <input type='hidden' name='action' value='delete_review'>
                              <input type='hidden' name='review_id' value='".htmlspecialchars($row['id'])."'>
                              <button type='submit' class='btn btn-delete'>Delete</button>
                          </form>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No reviews found.</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

<!-- USERS SECTION -->
<div class="section">
    <div class="section-title">Registered Users</div>
    <div class="section-container">
        <table>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Date of Birth</th>
                <th>Favorite Food</th>
                <th>Created At</th>
            </tr>
            <?php
            $sql = "SELECT * FROM users ORDER BY id DESC";
            $result = $conn->query($sql);
            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".htmlspecialchars($row['id'])."</td>
                            <td>".htmlspecialchars($row['full_name'])."</td>
                            <td>".htmlspecialchars($row['email'])."</td>
                            <td>".htmlspecialchars($row['gender'])."</td>
                            <td>".htmlspecialchars($row['dob'])."</td>
                            <td>".htmlspecialchars($row['fav_food'])."</td>
                            <td>".htmlspecialchars($row['created_at'])."</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No users found.</td></tr>";
            }
            ?>
        </table>
    </div>
</div>

</div> <!-- End dashboard-grid -->

</div> <!-- End main-content -->

<footer>
    &copy; 2025 Foodies Admin Dashboard. All Rights Reserved.
</footer>

</body>
</html>

<?php
$conn->close();
?>
