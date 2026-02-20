<?php 
session_start();

// Optional: show logged-in user (if you use sessions)
$full_name = $_SESSION['full_name'] ?? 'Guest';
$profile_image = $_SESSION['profile_image'] ?? 'food_image/profile.jpg';

// ---------------- DATABASE CONNECTION -----------------
$dbName = "food_recipe.db"; // as confirmed
$conn = mysqli_connect("localhost", "root", "", $dbName);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// ---------------- FIXED DEFAULT REVIEWS (Always Display 5) ----------------
$defaultReviews = [
    ["username"=>"Aarav","rating"=>5,"comments"=>"Amazing Indian food, tastes just like home!","image"=>"food_image/profile.jpg"],
    ["username"=>"Priya","rating"=>4,"comments"=>"Loved the spices and preparation style!","image"=>"food_image/profile.jpg"],
    ["username"=>"Rohan","rating"=>5,"comments"=>"Perfect recipes, simple and delicious.","image"=>"food_image/profile.jpg"],
    ["username"=>"Meera","rating"=>3,"comments"=>"Good taste but can improve presentation.","image"=>"food_image/profile.jpg"],
    ["username"=>"Kunal","rating"=>4,"comments"=>"Very tasty, loved the South Indian dishes!","image"=>"food_image/profile.jpg"],
];

// ---------------- FETCH REVIEWS FROM DATABASE ----------------
$sql = "SELECT username, rating, comments, image FROM reviews ORDER BY id DESC";
$result = mysqli_query($conn, $sql);

$dbReviews = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $row['rating'] = intval($row['rating']);
        $row['image'] = $row['image'] ? $row['image'] : 'food_image/profile.jpg';
        $dbReviews[] = $row;
    }
}

// FINAL LIST = DEFAULT + DB REVIEWS
$allReviews = array_merge($defaultReviews, $dbReviews);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Food Recipes | Foodies</title>

<style>
  *{box-sizing:border-box}
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
  background:#8B4513;     /* HEADER COLOR UPDATED */
  color:#ffffff;
  box-shadow:0 6px 18px rgba(0,0,0,0.25);
}
.brand{font-size:28px;font-weight:700;letter-spacing:1px}

/* nav links */
.nav-section{display:flex;align-items:center;gap:20px}
.nav-links{display:flex;gap:18px}
.nav-links a{
  color:#ffffff;text-decoration:none;font-size:20px;
  padding-bottom:4px;border-bottom:2px solid transparent;
  transition:all .18s;
}
.nav-links a:hover{color:#ffd27f;border-bottom-color:#ffd27f}

/* Search Box */
.search-wrap{position:relative;display:flex;align-items:center;gap:10px}
.search-box{
  display:flex;align-items:center;background:#ffffff;
  border-radius:10px;padding:8px 10px;border:1px solid #ddd;
}
.search-box input{
  border:0;outline:0;background:transparent;color:#3b2418;
  font-size:16px;width:260px;padding:6px;
}
.search-box button{
  margin-left:8px;border:0;background:#ffd27f;color:#3b2418;
  padding:8px 12px;border-radius:8px;cursor:pointer;font-weight:600;
}
.search-box button:hover{background:#ffbf4d}

/* ----------------- DARK GLASS SUGGESTION BOX ----------------- */
#suggestions{
  position:absolute;left:0;top:56px;width:100%;max-height:280px;overflow:auto;
  background:rgba(0,0,0,0.65);       /* dark transparent */
  backdrop-filter:blur(6px);         /* glass effect */
  color:#ffffff;
  border:1px solid rgba(255,255,255,0.15);
  border-radius:10px;
  padding:6px;
  box-shadow:0 8px 24px rgba(0,0,0,0.28);
  display:none;z-index:9999;
}
.suggest-item{
  padding:10px 12px;cursor:pointer;border-radius:6px;
  color:white;
}
.suggest-item:hover,
.suggest-active{
  background:rgba(255,255,255,0.15);
}

/* Hero */
.hero-image {
    width: 100%;
    height: 700px;
    object-fit: cover;
    display: block;
    margin-top: 6px;
    border-radius: 14px;
    box-shadow: 0 8px 28px rgba(0,0,0,0.25);
}

/* Reviews */
h1{ text-align:center;margin:28px 0;color:saddlebrown}
.review-section{width:100%;overflow:hidden;padding:28px 0;background:#f8f8f8}
.slider{display:flex;gap:18px;width:max-content;animation:scrollReviews 55s linear infinite;padding:12px 28px}
@keyframes scrollReviews{from{transform:translateX(0)}to{transform:translateX(-50%)}}

.review-card{width:300px;height:420px;flex-shrink:0;border-radius:10px;background:#fff;box-shadow:0 4px 18px rgba(0,0,0,0.12);overflow:hidden;transition:transform .22s}
.review-card:hover{transform:scale(1.03)}
.review-card img{width:100%;height:250px;object-fit:cover;display:block}
figcaption{padding:12px 16px;color:#333}
.username{font-weight:700;color:saddlebrown;margin-bottom:6px;font-size:18px}
.review-stars{display:flex;gap:6px;font-size:20px;margin-bottom:8px}
.star{color:#ccc}.star.filled{color:gold}
.review-comment{color:#555;line-height:1.4;font-size:14px;margin-top:6px}

/* button */
.review-btn{display:inline-block;margin-top:12px;padding:10px 16px;background:#8B4513;color:#fff;border-radius:8px;text-decoration:none}

/* Footer */
.footer{background:#8B4513;color:#fff;text-align:center;padding:14px 0;margin-top:auto}

/* Responsive */
@media(max-width:900px){
  .search-box input{width:150px}
  .hero-image{height:300px}
  .slider{animation:none;flex-wrap:wrap;justify-content:center;padding:12px}
  .review-card{margin:10px auto}
}
</style>
</head>
<body>
<div class="content">

  <!-- Header -->
  <div class="land">
    <div class="brand">Foodies</div>

    <div class="nav-section">
      <div class="nav-links">
        <a href="landing.php">Home</a>
        <a href="catagories.php">Categories</a>
        <a href="contact.html">Contact Us</a>
        <a href="about.html">About Us</a>
      </div>

      <div class="search-wrap" style="min-width:320px">
        <div class="search-box" style="width:100%;max-width:420px">
          <input id="searchInput" type="text" autocomplete="off" placeholder="Search recipes (try: chicken biryani)">
          <button id="searchBtn" type="button">Search</button>
        </div>

        <!-- suggestions -->
        <div id="suggestions"></div>
      </div>
    </div>
  </div>

  <!-- Hero -->
  <img src="food_image/fornt4.jpg" class="hero-image" alt="Food Banner">

  <!-- Reviews -->
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
            <a class="review-btn" href="review.php">Write a Review</a>
          </figcaption>
        </figure>
      <?php endforeach; ?>

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
            <a class="review-btn" href="review.php">Write a Review</a>
          </figcaption>
        </figure>
      <?php endforeach; ?>

    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
/* ------------------------------ Recipes list ------------------------------ */
const recipes = {
  "chicken biryani":"nonveg/dish1.html","butter chicken":"nonveg/dish2.html","mutton curry":"nonveg/dish3.html",
  "chicken tandoori":"nonveg/dish4.html","pork ribs":"nonveg/dish5.html","lamb kebabs":"nonveg/dish6.html",
  "chicken shawarma":"nonveg/dish7.html","chicken 65":"nonveg/dish8.html","fish fry":"nonveg/dish10.html",
  "prawn curry":"nonveg/dish11.html","grilled salmon":"nonveg/dish12.html","crab masala":"nonveg/dish13.html",
  "fish and chips":"nonveg/dish14.html","egg curry":"nonveg/dish15.html","omelette":"nonveg/dish16.html","deviled eggs":"nonveg/dish17.html",

  "dal":"veg/v1.html","chole":"veg/v2.html","paneer butter masala":"veg/v3.html","aloo gobi":"veg/v4.html","rajma":"veg/v5.html",
  "palak paneer":"veg/v6.html","veg biryani":"veg/v7.html","baingan bharta":"veg/v8.html","vegetable pulao":"veg/v9.html",
  "khichdi":"veg/v10.html","dosa with sambar":"veg/v11.html","idli with coconut chutney":"veg/v12.html","roti with mixed veg curry":"veg/v13.html",
  "thepla":"veg/v14.html","poori with aloo sabzi":"veg/v15.html",

  "vegan samosa":"vegan/ve11.html","bhel puri":"vegan/ve12.html","poha":"vegan/ve13.html","cabbage sabzi":"vegan/ve14.html",
  "tinda masala":"vegan/ve15.html","tamarind chutney":"vegan/ve16.html",

  "mango juice":"juice/f1.html","sugarcane juice":"juice/f2.html","aam panna":"juice/f3.html","watermelon juice":"juice/f4.html",
  "orange juice":"juice/f5.html","pomegranate juice":"juice/f6.html","carrot juice":"juice/f7.html","lemonade":"juice/f8.html",
  "cucumber juice":"juice/f9.html","mosambi juice":"juice/f10.html","apple juice":"juice/f11.html","grapes juice":"juice/f12.html",
  "beetroot juice":"juice/f13.html","papaya juice":"juice/f14.html","tender coconut water":"juice/f15.html","ginger-lemon juice":"juice/f16.html",

  "vegetable biryani":"dinner/d1.html","jeera rice":"dinner/d2.html","pulao":"dinner/d3.html","tamarind rice":"dinner/d4.html",
  "lemon rice":"dinner/d5.html","tomato rice":"dinner/d6.html","curd rice":"dinner/d7.html","sambar rice":"dinner/d8.html",
  "coconut rice":"dinner/d9.html","egg pulao":"dinner/d10.html","paneer pulao":"dinner/d11.html","mushroom pulao":"dinner/d12.html",
  "veg fried rice":"dinner/d13.html","spinach rice":"dinner/d14.html","kashmiri pulao":"dinner/d15.html","khichdi dinner":"dinner/d16.html",

  "idli":"breakfast/b1.html","dosa":"breakfast/b2.html","upma":"breakfast/b3.html","poha breakfast":"breakfast/b4.html","paratha":"breakfast/b5.html",
  "puri bhaji":"breakfast/b6.html","chole bhature":"breakfast/b7.html","medu vada":"breakfast/b8.html","masala dosa":"breakfast/b9.html",
  "uttapam":"breakfast/b10.html","sabudana khichdi":"breakfast/b11.html","moong dal chilla":"breakfast/b12.html","pav bhaji":"breakfast/b13.html",
  "aloo sandwich":"breakfast/b14.html","dhokla":"breakfast/b15.html","appam":"breakfast/b16.html",

  "egg curry":"egg/e1.html","masala omelette":"egg/e2.html","egg bhurji":"egg/e3.html","egg biryani":"egg/e4.html","egg pakora":"egg/e5.html",
  "egg tikka":"egg/e6.html","egg paratha":"egg/e7.html","anda pulao":"egg/e8.html","egg sandwich":"egg/e9.html","egg chaat":"egg/e10.html",
  "boiled eggs with spices":"egg/e11.html","egg masala toast":"egg/e12.html","egg kofta curry":"egg/e13.html","egg dhokla":"egg/e14.html",
  "anda fry":"egg/e15.html","egg roll":"egg/e16.html",

  "jain dal tadka":"jain/j1.html","jain paneer butter masala":"jain/j2.html","jain matar paneer":"jain/j3.html","jain aloo capsicum sabzi":"jain/j4.html",
  "jain vegetable biryani":"jain/j5.html","jain khichdi":"jain/j6.html","jain kadai paneer":"jain/j7.html","jain malai kofta":"jain/j8.html",
  "jain mixed vegetable curry":"jain/j9.html","jain navratan korma":"jain/j10.html","jain gatte ki sabzi":"jain/j11.html","jain sabudana khichdi":"jain/j12.html",
  "jain moong dal halwa":"jain/j13.html","jain sev tamatar":"jain/j14.html","jain lauki curry":"jain/j15.html","jain bajra roti":"jain/j16.html"
};

/* ---------- suggestion UI & search logic ---------- */
const input = document.getElementById('searchInput');
const sugg = document.getElementById('suggestions');
const searchBtn = document.getElementById('searchBtn');

let matches = [];
let active = -1;

input.addEventListener('input', onInput);
input.addEventListener('keydown', onKeyDown);

document.addEventListener('click', e => {
    if(!e.target.closest('.search-wrap')) sugg.style.display = 'none';
});

searchBtn.addEventListener('click', searchRecipe);

function onInput(){
  const q = (input.value||'').toLowerCase().trim();
  sugg.innerHTML = '';
  active = -1;
  if(!q){ sugg.style.display='none'; return; }

  matches = Object.keys(recipes).filter(k => k.includes(q)).slice(0,10);

  if(matches.length===0){
    const parts = q.split(/\s+/).filter(Boolean);
    if(parts.length){
      matches = Object.keys(recipes).filter(k => parts.every(p => k.split(' ').some(w => w.startsWith(p)))).slice(0,10);
    }
  }

  if(matches.length===0){ sugg.style.display='none'; return; }

  matches.forEach((m,idx)=>{
    const d = document.createElement('div');
    d.className='suggest-item';
    d.textContent = m;
    d.onclick = ()=> choose(idx);
    sugg.appendChild(d);
  });

  sugg.style.display='block';
}

function onKeyDown(e){
  if(sugg.style.display==='none' || matches.length===0) return;

  if(e.key==='ArrowDown'){ 
    e.preventDefault(); active = (active+1)%matches.length; updateActive(); 
  }
  else if(e.key==='ArrowUp'){ 
    e.preventDefault(); active = (active-1+matches.length)%matches.length; updateActive(); 
  }
  else if(e.key==='Enter'){ 
    e.preventDefault(); if(active>=0) choose(active); else searchRecipe(); 
  }
  else if(e.key==='Escape'){ sugg.style.display='none'; }
}

function updateActive(){
  const items = sugg.querySelectorAll('.suggest-item');
  items.forEach(it => it.classList.remove('suggest-active'));

  if(active>=0 && items[active]) {
    items[active].classList.add('suggest-active');
    items[active].scrollIntoView({block:'nearest'});
    input.value = matches[active];
  }
}

function choose(idx){
  const key = matches[idx];
  if(!key) return;
  window.location.href = recipes[key];
}

function searchRecipe(){
  const q = (input.value||'').toLowerCase().trim();
  if(!q){ alert('Please type a recipe name'); return; }

  if(recipes[q]) { window.location.href = recipes[q]; return; }

  const first = Object.keys(recipes).find(k => k.includes(q));
  if(first){ window.location.href = recipes[first]; return; }

  alert('Recipe not found. Try another keyword.');
}
</script>
</body>
</html>
