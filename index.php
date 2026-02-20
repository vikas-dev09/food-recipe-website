<?php
session_start();  

// ---------------- LOGIN STATUS FLAG ----------------
$isLoggedIn = isset($_SESSION['user_id']); // change to your own session key if needed

// Optional: show logged-in user
$full_name = $_SESSION['full_name'] ?? 'Guest';
$profile_image = $_SESSION['profile_image'] ?? 'food_image/profile.jpg';

// Database connection
$dbName = "food_recipe.db";
$conn = mysqli_connect("localhost", "root", "", $dbName);
if (!$conn) die("Database Connection Failed: " . mysqli_connect_error());

// Default reviews
$defaultReviews = [
    ["username"=>"Aarav","rating"=>5,"comments"=>"Amazing Indian food, tastes just like home!","image"=>"food_image/profile.jpg"],
    ["username"=>"Priya","rating"=>4,"comments"=>"Loved the spices and preparation style!","image"=>"food_image/profile.jpg"],
    ["username"=>"Rohan","rating"=>5,"comments"=>"Perfect recipes, simple and delicious.","image"=>"food_image/profile.jpg"],
    ["username"=>"Meera","rating"=>3,"comments"=>"Good taste but can improve presentation.","image"=>"food_image/profile.jpg"],
    ["username"=>"Kunal","rating"=>4,"comments"=>"Very tasty, loved the South Indian dishes!","image"=>"food_image/profile.jpg"],
];

// Fetch reviews from database
$sql = "SELECT username, rating, comments, image FROM reviews ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
$dbReviews = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row['rating'] = intval($row['rating']);
        $row['image'] = $row['image'] ?: 'profi.webp';
        $dbReviews[] = $row;
    }
}

$allReviews = array_merge($defaultReviews, $dbReviews);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Food Recipes | Foodies</title>
<style>
*{box-sizing:border-box;}
body{
    margin:0;
    font-family:"Poppins", Arial, sans-serif;
    background-color: #F7E9D7;
    color:#3b2418;
    display:flex;
    flex-direction:column;
    min-height:100vh;
}
.content{flex:1}

/* Header */
.land{
    width:100%;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:28px 36px;
    background:#8B4513;
    color:#fff;
    box-shadow:0 6px 18px rgba(0,0,0,0.25);
}
.brand{
    font-size:28px;
    font-weight:700;
    letter-spacing:1px;
    display:flex;
    align-items:center;
}
.brand img {
    height: 65px;
    margin-right: 12px;
}
.nav-section{display:flex;align-items:center;gap:20px}
.nav-links{display:flex;gap:18px;align-items:center;}
.nav-links a{
    color:#fff;
    text-decoration:none;
    font-size:20px;
    padding-bottom:4px;
    border-bottom:2px solid transparent;
    transition:all .18s;
}
.nav-links a:hover{
    color:#ffd27f;
    border-bottom-color:#ffd27f;
}

/* Favorites button in nav – yellow pill */
.fav-nav-btn{
    margin-left:10px;
    padding:8px 18px;
    border-radius:999px;
    background:#ffd27f;
    color:#8B4513;
    font-size:16px;
    font-weight:600;
    text-decoration:none;
    border:2px solid transparent;
    display:inline-flex;
    align-items:center;
    gap:6px;
    transition:background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
}
.fav-nav-btn:hover{
    background:#ffbf4d;
    color:#3b2418;
    transform:translateY(-1px);
    box-shadow:0 3px 8px rgba(0,0,0,0.25);
}

/* Search Box */
.search-wrap{position:relative;display:flex;align-items:center;gap:10px}
.search-box{display:flex;align-items:center;background:#fff;border-radius:10px;padding:8px 10px;border:1px solid #ddd;}
.search-box input{border:0;outline:0;background:transparent;color:#3b2418;font-size:16px;width:260px;padding:6px;}
.search-box button{margin-left:8px;border:0;background:#ffd27f;color:#3b2418;padding:8px 12px;border-radius:8px;cursor:pointer;font-weight:600;}
.search-box button:hover{background:#ffbf4d}

/* Suggestions (dark glass) */
#suggestions{
    position:absolute;left:0;top:56px;width:100%;max-height:280px;overflow-y:auto;
    background:rgba(10,10,10,0.5);
    backdrop-filter:blur(15px);
    color:#fff;
    border:1px solid rgba(255,255,255,0.08);
    border-radius:10px;
    padding:8px;
    box-shadow:0 8px 40px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1);
    display:none;z-index:9999;
}
#suggestions::-webkit-scrollbar {
    width: 8px;
}
#suggestions::-webkit-scrollbar-track {
    background: transparent;
    border-radius: 10px;
}
#suggestions::-webkit-scrollbar-thumb {
    background: rgba(200, 200, 200, 0.3);
    border-radius: 10px;
    transition: all 0.2s ease;
}
#suggestions::-webkit-scrollbar-thumb:hover {
    background: rgba(200, 200, 200, 0.6);
}
.suggest-item{
    padding:12px 14px; margin:4px 0; cursor:pointer; border-radius:8px;
    color:#e0e0e0; font-weight:500; transition:all 0.25s ease;
    background: transparent;
}
.suggest-item:hover{
    background:rgba(200, 200, 200, 0.2);
    transform:translateX(6px);
    color:#fff;
}
.suggest-active{
    background:rgba(200, 200, 200, 0.3);
    color:#fff;
    transform:translateX(6px);
}

/* No results */
.no-results{
    padding:20px 14px; text-align:center; color:#c0c0c0;
    font-weight:500; font-size:14px;
    background: transparent;
    border-radius:8px;
    animation: fadeIn 0.3s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(-5px); }
    to { opacity: 1; transform: translateY(0); }
}
@keyframes noResultPulse {
    0%   { transform: scale(1);   }
    20%  { transform: scale(1.03); }
    40%  { transform: scale(0.97); }
    60%  { transform: scale(1.02); }
    80%  { transform: scale(0.99); }
    100% { transform: scale(1);   }
}
.no-result-animate{
    animation: noResultPulse 0.6s ease-out;
}

/* Hero */
.hero-image{
    width:100%;
    height:700px;
    object-fit:cover;
    display:block;
    margin-top:6px;
    border-radius:14px;
    box-shadow:0 8px 28px rgba(0,0,0,0.25);
}

/* Reviews */
h1{text-align:center;margin:28px 0;color:saddlebrown}
.review-section{
    width:100%;
    overflow:hidden;
    padding:28px 0;
    background:#f8f8f8
}
.slider{
    display:flex;
    gap:18px;
    width:max-content;
    animation:scrollReviews 55s linear infinite;
    padding:12px 28px
}
@keyframes scrollReviews{
    from{transform:translateX(0)}
    to{transform:translateX(-50%)}
}
.review-card{
    width:300px;
    height:380px;
    flex-shrink:0;
    border-radius:10px;
    background:#fff;
    box-shadow:0 4px 18px rgba(0,0,0,0.12);
    overflow:hidden;
    transition:transform .22s
}
.review-card:hover{transform:scale(1.03)}
.review-card img{
    width:100%;
    height:250px;
    object-fit:cover;
    display:block
}
figcaption{padding:12px 16px;color:#333}
.username{font-weight:700;color:saddlebrown;margin-bottom:6px;font-size:18px}
.review-stars{display:flex;gap:6px;font-size:20px;margin-bottom:8px}
.star{color:#ccc}.star.filled{color:gold}
.review-comment{color:#555;line-height:1.4;font-size:14px;margin-top:6px}

/* REVIEW BUTTON – matching favorites style */
.review-btn{
    display:inline-block;
    padding:10px 20px;
    background:#ffd27f;
    color:#8B4513;
    border-radius:999px;
    text-decoration:none;
    font-weight:600;
    border:2px solid transparent;
    transition:background .2s, transform .2s, box-shadow .2s, color .2s;
}
.review-btn:hover{
    background:#ffbf4d;
    color:#3b2418;
    transform: translateY(-1px);
    box-shadow:0 3px 8px rgba(0,0,0,0.25);
}

/* LOADER */
#loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(247, 233, 215, 0.95);
    backdrop-filter: blur(8px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    visibility: visible;
    transition: opacity 0.6s ease-out, visibility 0.6s ease-out;
}
#loader.hidden {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}
.food-loader-container {
    position: relative;
    width: 120px;
    height: 120px;
    display: flex;
    justify-content: center;
    align-items: center;
}
.pot {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 8px solid #FFC107;
    border-top-color: transparent;
    border-bottom-color: transparent;
    animation: potSpin 1.5s cubic-bezier(0.68, -0.55, 0.27, 1.55) infinite;
    position: absolute;
}
.steam {
    position: absolute;
    width: 30px;
    height: 30px;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    opacity: 0;
    animation: riseAndFade 2.5s ease-out infinite;
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
}
.steam:nth-child(2) { left: 20px; animation-delay: 0.5s; }
.steam:nth-child(3) { left: -20px; animation-delay: 1s; }
.cooking-icon {
    font-size: 50px;
    color: #E67E22;
    animation: pulse 1.5s ease-in-out infinite alternate;
    z-index: 10;
}
@keyframes potSpin { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
@keyframes riseAndFade {
    0% { transform: translateY(0) scale(0.5); opacity: 0.8; }
    50% { opacity: 0.5; }
    100% { transform: translateY(-80px) scale(1.2); opacity: 0; }
}
@keyframes pulse { 0% { transform: scale(1); } 100% { transform: scale(1.1); } }
.loader-text {
    color: #8B4513;
    margin-top: 30px;
    font-size: 24px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}
.dots { display: inline-block; margin-left: 8px; }
.dot {
    display: inline-block;
    width: 12px;
    height: 12px;
    background: #E67E22;
    border-radius: 50%;
    margin: 0 4px;
    animation: dotBounce 1.4s infinite ease-in-out both;
}
.dot:nth-child(1) { animation-delay: -0.32s; }
.dot:nth-child(2) { animation-delay: -0.16s; }
.dot:nth-child(3) { animation-delay: 0s; }
@keyframes dotBounce {
    0%, 80%, 100% { transform: scale(0); opacity: 0.5; }
    40% { transform: scale(1); opacity: 1; }
}

.footer{
    background:#8B4513;
    color:#fff;
    text-align:center;
    padding:14px 0;
    margin-top:auto
}

/* MODAL FOR NOT FOUND */
.modal-overlay {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    background: rgba(0,0,0,0.6); backdrop-filter: blur(8px);
    display: none; justify-content: center; align-items: center;
    z-index: 10000; animation: fadeIn 0.3s ease-in-out;
}
.modal-overlay.show { display: flex; }
.modal-content {
    background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,248,255,0.98) 100%);
    border-radius: 16px; padding: 40px;
    text-align: center; box-shadow: 0 10px 50px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.8);
    max-width: 400px; width: 90%;
    animation: slideUp 0.3s ease-out;
    border: 1px solid rgba(255,255,255,0.5);
}
@keyframes slideUp {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}
.modal-icon {
    font-size: 60px; margin-bottom: 15px;
}
.modal-title {
    font-size: 24px; font-weight: 700; color: #8B4513;
    margin-bottom: 10px;
}
.modal-text {
    font-size: 16px; color: #555; margin-bottom: 25px;
    line-height: 1.6;
}
.modal-btn {
    background: linear-gradient(135deg, #8B4513 0%, #a0531f 100%);
    color: #fff; border: none;
    padding: 12px 30px; border-radius: 8px; font-size: 16px;
    font-weight: 600; cursor: pointer; transition: all 0.3s;
    box-shadow: 0 4px 15px rgba(139,69,19,0.3);
}
.modal-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(139,69,19,0.5);
}

@media(max-width:900px){
    .search-box input{width:150px}
    .hero-image{height:300px}
    .slider{animation:none;flex-wrap:wrap;justify-content:center;padding:12px}
    .review-card{margin:10px auto}
    .nav-links{flex-wrap:wrap;}
}
</style>
</head>
<body>

<div id="loader">
    <div class="food-loader-container">
        <div class="pot"></div>
        <div class="steam"></div>
        <div class="steam"></div>
        <div class="steam"></div>
        <div class="cooking-icon">&#127858;</div>
    </div>
    <p class="loader-text">
        Whipping up delicious recipes
        <span class="dots">
            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
        </span>
    </p>
</div>

<div id="notFoundModal" class="modal-overlay">
  <div class="modal-content">
    <div class="modal-icon">🔍</div>
    <div class="modal-title">Recipe Not Found</div>
    <div class="modal-text" id="notFoundMessage">
      Sorry, we couldn't find that recipe. Try searching for another one!
    </div>
    <button class="modal-btn" onclick="closeNotFoundModal()">Try Again</button>
  </div>
</div>

<div class="content">
  <div class="land">
    <div class="brand">
      <img src="/food_recipe/logo.png" alt="Foodies Logo"> 
      Foodies
    </div>
    <div class="nav-section">
      <div class="nav-links">
        <a href="landing.php">Home</a>
        <a href="catagories.php" class="login-required">Categories</a>
        <a href="contact.php" class="login-required">Contact Us</a>
        <a href="about.php" class="login-required">About Us</a>
        <!-- Favorites INSIDE nav menu + login required -->
        <a href="duplicate.php" class="fav-nav-btn login-required">❤️ Favorites</a>
      </div>

      <div class="search-wrap" style="min-width:320px">
        <div class="search-box" style="width:100%;max-width:420px">
          <input id="searchInput" type="text" autocomplete="off" placeholder="Search recipes (try: chicken biryani)">
          <button id="searchBtn" type="button">Search</button>
        </div>
        <div id="suggestions"></div>
      </div>
    </div>
  </div>

  <img src="food_image/fornt4.jpg" class="hero-image" alt="Food Banner">

  <h1>Reviews</h1>
  <div class="review-section">
    <div class="slider" id="reviewsSlider">
      <?php foreach ($allReviews as $r): 
        $img = htmlspecialchars($r['image']);
        $user = htmlspecialchars($r['username']);
        $comments = nl2br(htmlspecialchars($r['comments']));
        $rating = intval($r['rating']);
      ?>
        <figure class="review-card">
          <img src="<?= $img ?>" alt="Reviewer image">
          <figcaption>
            <div class="username"><?= $user ?></div>
            <div class="review-stars">
              <?php for($i=1;$i<=5;$i++): ?>
                <?= $i <= $rating ? '<span class="star filled">★</span>' : '<span class="star">☆</span>' ?>
              <?php endfor; ?>
            </div>
            <div class="review-comment"><?= $comments ?></div>
          </figcaption>
        </figure>
      <?php endforeach; ?>
    </div>
    <div style="text-align: center; margin-top: 30px;">
        <!-- Write review also needs login -->
        <a href="review.php" class="review-btn login-required">Write a Review</a>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
// ---------- PHP → JS LOGIN FLAG ----------
const IS_LOGGED_IN = <?php echo $isLoggedIn ? 'true' : 'false'; ?>;

// 🔐 LOGIN GUARD: Categories / Contact / About / Review / Favorites
document.querySelectorAll('.login-required').forEach(link => {
    link.addEventListener('click', (e) => {
        if (!IS_LOGGED_IN) {
            e.preventDefault();
            alert("Please login to access this feature.");
            window.location.href = "login.php"; // change if your login page path is different
        }
    });
});

// ---------- RECIPES MAP ----------
const recipes = {
 "chicken biryani": "nonveg/dish1.php",
 "butter chicken": "nonveg/dish2.php",
 "mutton curry": "nonveg/dish3.php",
 "chicken tandoori": "nonveg/dish4.php",
 "pork ribs": "nonveg/dish5.php",
 "lamb kebabs": "nonveg/dish6.php",
 "chicken shawarma": "nonveg/dish7.php",
 "chicken 65": "nonveg/dish8.php",
 "prawn curry": "nonveg/dish9.php",
 "fish fry": "nonveg/dish10.php",
 "grilled salmon": "nonveg/dish11.php",
 "crab masala": "nonveg/dish12.php",
 "fish and chips": "nonveg/dish13.php",
 "egg curry": "nonveg/dish14.php",
 "omelette": "nonveg/dish15.php",
 "deviled eggs": "nonveg/dish16.php",
 "dal": "veg/v1.php",
 "chole": "veg/v2.php",
 "paneer butter masala": "veg/v3.php",
 "aloo gobi": "veg/v4.php",
 "rajma": "veg/v5.php",
 "palak paneer": "veg/v6.php",
 "vegetable pulao": "veg/v7.php",
 "bhindi masala": "veg/v8.php",
 "baingan bharta": "veg/v9.php",
 "dosa with sambar": "veg/v10.php",
 "idli with coconut chutney": "veg/v11.php",
 "poori with aloo sabzi": "veg/v12.php",
 "khichdi": "veg/v13.php",
 "veg biryani": "veg/v14.php",
 "roti with mixed veg": "veg/v15.php",
 "thepla": "veg/v16.php",
 "lobia masala": "vegan/v1.php",
 "kala chana curry": "vegan/v2.php",
 "toor dal fry": "vegan/v3.php",
 "gatte ki sabzi": "vegan/v4.php",
 "vankaya pachadi": "vegan/v5.php",
 "lauki chana dal": "vegan/v6.php",
 "lemon rice": "vegan/v7.php",
 "masoor dal": "vegan/v8.php",
 "roti": "vegan/v9.php",
 "jeera rice": "vegan/v10.php",
 "samosa": "vegan/v11.php",
 "bhel puri": "vegan/v12.php",
 "poha": "vegan/v13.php",
 "cabbage sabzi": "vegan/v14.php",
 "tinda masala": "vegan/v15.php",
 "tamarind chutney": "vegan/v16.php",
 "grilled salmon with lemon": "patra/p1.php",
 "shrimp scampi": "patra/p2.php",
 "tuna salad": "patra/p3.php",
 "fish tacos": "patra/p4.php",
 "baked cod with herbs": "patra/p5.php",
 "sushi rolls": "patra/p6.php",
 "clam chowder": "patra/p8.php",
 "fish curry": "patra/p9.php",
 "seafood paella": "patra/p10.php",
 "miso soup with tofu": "patra/p11.php",
 "smoked salmon bagel": "patra/p12.php",
 "sardine sandwich": "patra/p13.php",
 "grilled tilapia with vegetables": "patra/p14.php",
 "crab cakes": "patra/p15.php",
 "veggie stir-fry with shrimp": "patra/p16.php",
 "masala omelette": "egg/e2.php",
 "egg bhurji": "egg/e3.php",
 "egg biryani": "egg/e4.php",
 "egg pakora": "egg/e5.php",
 "egg tikka": "egg/e6.php",
 "egg paratha": "egg/e7.php",
 "anda pulao": "egg/e8.php",
 "egg sandwich": "egg/e9.php",
 "egg chaat": "egg/e10.php",
 "boiled eggs with spices": "egg/e11.php",
 "egg masala toast": "egg/e12.php",
 "egg kofta curry": "egg/e13.php",
 "egg dhokla": "egg/e14.php",
 "anda fry": "egg/e15.php",
 "egg roll": "egg/e16.php",
 "jain dal tadka": "jain/j1.php",
 "jain paneer butter masala": "jain/j2.php",
 "jain matar paneer": "jain/j3.php",
 "jain aloo capsicum sabzi": "jain/j4.php",
 "jain vegetable biryani": "jain/j5.php",
 "jain khichdi": "jain/j6.php",
 "jain kadai paneer": "jain/j7.php",
 "jain malai kofta": "jain/j8.php",
 "jain mixed vegetable curry": "jain/j9.php",
 "jain navratan korma": "jain/j10.php",
 "jain gatte ki sabzi": "jain/j11.php",
 "jain sabudana khichdi": "jain/j12.php",
 "jain moong dal halwa": "jain/j13.php",
 "jain sev tamatar": "jain/j14.php",
 "jain lauki curry": "jain/j15.php",
 "jain bajra roti": "jain/j16.php",
 "mango juice": "juice/f1.php",
 "sugarcane juice": "juice/f2.php",
 "aam panna": "juice/f3.php",
 "watermelon juice": "juice/f4.php",
 "orange juice": "juice/f5.php",
 "pomegranate juice": "juice/f6.php",
 "carrot juice": "juice/f7.php",
 "lemonade": "juice/f8.php",
 "cucumber juice": "juice/f9.php",
 "mosambi juice": "juice/f10.php",
 "apple juice": "juice/f11.php",
 "grapes juice": "juice/f12.php",
 "beetroot juice": "juice/f13.php",
 "papaya juice": "juice/f14.php",
 "tender coconut water": "juice/f15.php",
 "ginger-lemon juice": "juice/f16.php",
 "idli": "breakfast/b1.php",
 "dosa": "breakfast/b2.php",
 "upma": "breakfast/b3.php",
 "paratha": "breakfast/b5.php",
 "puri bhaji": "breakfast/b6.php",
 "chole bhature": "breakfast/b7.php",
 "medu vada": "breakfast/b8.php",
 "masala dosa": "breakfast/b9.php",
 "uttapam": "breakfast/b10.php",
 "sabudana khichdi": "breakfast/b11.php",
 "moong dal chilla": "breakfast/b12.php",
 "pav bhaji": "breakfast/b13.php",
 "aloo sandwich": "breakfast/b14.php",
 "dhokla": "breakfast/b15.php",
 "appam": "breakfast/b16.php",
 "vegetable biryani": "dinner/d1.php",
 "jeera rice": "dinner/d2.php",
 "pulao": "dinner/d3.php",
 "tamarind rice": "dinner/d4.php",
 "tomato rice": "dinner/d6.php",
 "curd rice": "dinner/d7.php",
 "sambar rice": "dinner/d8.php",
 "coconut rice": "dinner/d9.php",
 "egg pulao": "dinner/d10.php",
 "paneer pulao": "dinner/d11.php",
 "mushroom pulao": "dinner/d12.php",
 "veg fried rice": "dinner/d13.php",
 "spinach rice": "dinner/d14.php",
 "kashmiri pulao": "dinner/d15.php",
 "gulab jamun": "sweet/s1.php",
 "jalebi": "sweet/s2.php",
 "rasgulla": "sweet/s3.php",
 "rasmalai": "sweet/s4.php",
 "kheer": "sweet/s5.php",
 "gajar halwa": "sweet/s6.php",
 "soan papdi": "sweet/s7.php",
 "besan ladoo": "sweet/s8.php",
 "kaju katli": "sweet/s9.php",
 "motichoor ladoo": "sweet/s10.php",
 "sandesh": "sweet/s11.php",
 "malpua": "sweet/s12.php",
 "peda": "sweet/s13.php",
 "rabri": "sweet/s14.php",
 "modak": "sweet/s15.php",
 "payasam": "sweet/s16.php"
};

const input = document.getElementById('searchInput');
const sugg = document.getElementById('suggestions');
const searchBtn = document.getElementById('searchBtn');
const loaderEl = document.getElementById('loader');

const notFoundModal = document.getElementById('notFoundModal');
const notFoundMessageEl = document.getElementById('notFoundMessage');
const modalContent = notFoundModal.querySelector('.modal-content');

let currentActive = 0;

// Loader functions
function showLoader() {
    loaderEl.classList.remove('hidden');
}
function hideLoader() {
    loaderEl.classList.add('hidden');
}

window.addEventListener("load", hideLoader);
window.addEventListener("pageshow", e=>{
    hideLoader();
    if (e.persisted && sugg) sugg.style.display = "none";
});
window.addEventListener("beforeunload", showLoader);

// Not found modal
function showNotFoundModal(searchTerm) {
    notFoundMessageEl.textContent = `Sorry, we couldn't find a recipe for "${searchTerm}". Try searching for another one!`;
    notFoundModal.classList.add('show');
    modalContent.classList.remove('no-result-animate');
    void modalContent.offsetWidth;
    modalContent.classList.add('no-result-animate');
}
function closeNotFoundModal() {
    notFoundModal.classList.remove('show');
    modalContent.classList.remove('no-result-animate');
    input.focus();
}
document.addEventListener('keydown', (e) => {
    if(e.key === 'Escape' && notFoundModal.classList.contains('show')) {
        closeNotFoundModal();
    }
});

// Suggestions
input.addEventListener('input', ()=>{
    const q = input.value.toLowerCase().trim();
    sugg.innerHTML = "";
    currentActive = 0;
    if(!q){ sugg.style.display="none"; return; }

    const matches = Object.keys(recipes).filter(r=>r.includes(q)).slice(0,10);
    if (matches.length) {
      sugg.innerHTML = matches
        .map((m, idx)=>`<div class='suggest-item ${idx===0?'suggest-active':''}' data-index='${idx}' onclick="selectRecipe('${m}')">${m}</div>`)
        .join("");
    } else {
      sugg.innerHTML = `<div class='no-results no-result-animate'>❌ No recipes found for "${q}"</div>`;
    }
    sugg.style.display = "block";
});

document.addEventListener("click", e=>{
    if(!e.target.closest(".search-wrap")) sugg.style.display="none";
});

input.addEventListener('keydown', e=>{
    const items = sugg.querySelectorAll('.suggest-item');
    if(items.length === 0) return;
    const active = sugg.querySelector('.suggest-active');
    if(e.key==='ArrowDown'){
      e.preventDefault();
      if(active) active.classList.remove('suggest-active');
      currentActive = (currentActive + 1) % items.length;
      items[currentActive].classList.add('suggest-active');
      items[currentActive].scrollIntoView({block:'nearest'});
    }else if(e.key==='ArrowUp'){
      e.preventDefault();
      if(active) active.classList.remove('suggest-active');
      currentActive = (currentActive - 1 + items.length) % items.length;
      items[currentActive].classList.add('suggest-active');
      items[currentActive].scrollIntoView({block:'nearest'});
    }else if(e.key==='Enter' && active){
      e.preventDefault();
      selectRecipe(active.textContent);
    }
});

function selectRecipe(name){
    if(!name) return;

    // 🔐 Block search if not logged in
    if (!IS_LOGGED_IN) {
        alert("Please login to search recipes.");
        window.location.href = "login.php";
        return;
    }

    const url = recipes[name.toLowerCase()];
    if(!url) return;
    showLoader();
    setTimeout(()=>{
      input.value = "";
      sugg.style.display = "none";
      window.location.href = url;
    },500);
}

searchBtn.addEventListener("click", ()=>{
    const q = input.value.toLowerCase().trim();

    // 🔐 Block search button if not logged in
    if (!IS_LOGGED_IN) {
        alert("Please login to search recipes.");
        window.location.href = "login.php";
        return;
    }

    if(!q){
      showNotFoundModal("(empty search)");
      return;
    }
    const page = recipes[q] || Object.keys(recipes).find(k=>k.includes(q));
    if(!page){
      showNotFoundModal(q);
      return;
    }
    showLoader();
    setTimeout(()=>{
      input.value = "";
      sugg.style.display = "none";
      window.location.href = page;
    },500);
});
</script>

</body>
</html>
