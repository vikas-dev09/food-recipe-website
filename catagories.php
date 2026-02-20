<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Categories - Foodies</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }

    /* --- STICKY FOOTER & LAYOUT --- */
    html, body { height: 100%; }
    body {
      font-family: "Poppins", Arial, sans-serif;
      background-color: #F7E9D7;
      color: #3b2418;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* --- HEADER --- */
    .land {
        width:100%; display:flex; align-items:center; justify-content:space-between;
        padding:28px 36px; background:#8B4513; color:#fff;
        box-shadow:0 6px 18px rgba(0,0,0,0.25);
        flex-shrink: 0;
    }
    .brand { display: flex; align-items: center; font-size:28px; font-weight:700; letter-spacing:1px; }

    /* Style for logo image */
    .logo {
        height: 65px; /* adjusted size to 45px */
        width: auto;
        margin-right: 10px; /* space between logo and text */
        border-radius: 50%; /* optional: makes it circular */
        object-fit: cover;
    }

    .nav-section { display:flex; align-items:center; gap:20px; }
    .nav-links { display:flex; gap:18px; }
    .nav-links a { color:#fff; text-decoration:none; font-size:20px; padding-bottom:4px; border-bottom:2px solid transparent; transition:all .18s; }
    .nav-links a:hover { color:#ffd27f; border-bottom-color:#ffd27f; }

    /* --- SEARCH BOX --- */
    .search-wrap { position:relative; display:flex; align-items:center; gap:10px; }
    .search-box {
        display:flex; align-items:center; background:#fff; border-radius:10px;
        padding:8px 10px; border:1px solid #ddd;
    }
    .search-box input {
        border:0; outline:0; background:transparent; color:#3b2418;
        font-size:16px; width:260px; padding:6px;
    }
    .search-box button {
        margin-left:8px; border:0; background:#ffd27f; color:#3b2418;
        padding:8px 12px; border-radius:8px; cursor:pointer; font-weight:600;
        transition: all 0.2s;
    }
    .search-box button:hover { background:#ffbf4d; }

    /* --- DARK GLASS SUGGESTIONS (COMPLETE DARK GLASS TRANSPARENT) --- */
    #suggestions {
        position:absolute; left:0; top:56px; width:100%; max-height:280px;
        overflow-y:auto; background:rgba(10,10,10,0.5); backdrop-filter:blur(15px);
        border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:8px;
        box-shadow:0 8px 40px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1);
        display:none; z-index:9999;
        transition:all 0.2s ease-in-out;
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
    .suggest-item {
        padding:12px 14px; margin:4px 0; cursor:pointer; border-radius:8px;
        color:#e0e0e0; font-weight:500; transition:all 0.25s ease;
        background: transparent;
    }
    .suggest-item:hover {
        background:rgba(200, 200, 200, 0.2);
        transform:translateX(6px);
        color:#fff;
    }
    .suggest-active {
        background:rgba(200, 200, 200, 0.3);
        color:#fff;
        transform:translateX(6px);
    }

    /* --- NO RESULTS MESSAGE --- */
    .no-results {
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

    /* --- ROTATING TEXT --- */
    .rotating-text-bar {
        width:100%; height:40px; background:#f5e0c3; 
        box-shadow:0 2px 6px rgba(0,0,0,0.1); font-family:'Georgia',serif; 
        font-weight:600; font-size:18px; color:#8B4513; 
        display:flex; align-items:center; justify-content:center; 
        overflow:hidden; flex-shrink: 0;
    }

    /* --- CATEGORIES GRID --- */
    /* --- CATEGORIES GRID --- */
.categories {
  max-width:1200px; 
  margin:50px auto; 
  display:grid;
  grid-template-columns:repeat(auto-fit, minmax(160px, 1fr));
  gap:40px; 
  justify-items:center; 
  padding:0 20px;
  flex:1;
  width: 100%;
}

.category-item {
  text-align:center;
  cursor:pointer;
  text-decoration:none;
  color:#3b2418;
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:10px;
  /* IMPORTANT: no transform here */
  transition: color 0.25s ease;
}

.category-item:hover {
  color:#8B4513;
}

/* Only scale the circle + image, not the whole card */
.category-circle {
  width:160px;
  height:160px;
  border-radius:50%;
  overflow:hidden;
  border:3px solid #8B4513;
  box-shadow:0 4px 8px rgba(0,0,0,0.1);
  display:flex;
  justify-content:center;
  align-items:center;
  background:#fff;
  transition: transform 0.25s ease-out;   /* unified timing */
  will-change: transform;
}

.category-circle img {
  width:100%;
  height:100%;
  object-fit:cover;
  border-radius:50%;
  transition: transform 0.25s ease-out;   /* unified timing */
  will-change: transform;
}

.category-item:hover .category-circle {
  transform: scale(1.06);
}

.category-item:hover .category-circle img {
  transform: scale(1.12);
}


    .category-name { font-weight:bold; font-size:18px; }

    /* --- FOOTER --- */
    .footer {
      width:100%; background:#8B4513; color:white; text-align:center;
      padding:20px 0; font-size:16px; margin-top:auto;
      border-top: 3px solid #ffd27f;
      box-shadow: 0 -2px 8px rgba(0,0,0,0.15);
      flex-shrink: 0;
    }

    /* Loader Styles */
    #loader {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.5);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 99999;
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
    }
    #loader.show {
      opacity: 1;
      pointer-events: auto;
    }
    .loader-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    /* Spinner animation */
    .spinner {
      width: 50px;
      height: 50px;
      border: 5px solid #ccc;
      border-top-color: #8B4513;
      border-radius: 50%;
      animation: spin 1s linear infinite;
    }
    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    /* Optional: loading text */
    .loading-text {
      margin-top: 15px;
      font-size: 16px;
      color: #fff;
      font-family: "Poppins", Arial, sans-serif;
    }

    /* --- MODAL --- */
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
  </style>
</head>
<body>

  <!-- LOADER -->
  <div id="loader">
    <div class="loader-inner">
      <div class="spinner"></div>
      <div class="loading-text">Loading...</div>
    </div>
  </div>

  <!-- MODAL FOR NOT FOUND MESSAGE -->
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

  <!-- HEADER with logo before "Foodies" -->
  <div class="land">
    <div class="brand">
      <img src="/food_recipe/logo.png" alt="Foodies Logo" class="logo"> 
      Foodies
    </div>
    <div class="nav-section">
      <div class="nav-links">
        <a href="landing.php">Home</a>
        <a href="catagories.php">Categories</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
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

  <!-- ROTATING TEXT -->
  <div class="rotating-text-bar">
    <div id="fadeText" style="position:absolute; opacity:0; transition:opacity 1.5s ease-in-out;">
      "Chop it, spice it, savor the flavor!"
    </div>
  </div>

  <!-- CATEGORIES GRID -->
  <div class="categories">
    <a href="nonveg.php" class="category-item">
      <div class="category-circle"><img src="food_image/briyani.jpg" alt="Non-Veg" /></div>
      <div class="category-name">Non-Veg</div>
    </a>
    <a href="veg.php" class="category-item">
      <div class="category-circle"><img src="food_image/veg.jpg" alt="Veg" /></div>
      <div class="category-name">Veg</div>
    </a>
    <a href="vegan.php" class="category-item">
      <div class="category-circle"><img src="food_image/vegan.jpg" alt="Vegan" /></div>
      <div class="category-name">Vegan</div>
    </a>
    <a href="seafood.php" class="category-item">
      <div class="category-circle"><img src="food_image/parta.jpg" alt="Pescatarian" /></div>
      <div class="category-name">Seafood</div>
    </a>
    <a href="sweet.php" class="category-item">
      <div class="category-circle"><img src="food_image/sweet.jpg" alt="Sweet" /></div>
      <div class="category-name">Sweet</div>
    </a>
    <a href="egg_veg.php" class="category-item">
      <div class="category-circle"><img src="food_image/egg_oat.jpg" alt="Ovo-Vegetarian" /></div>
      <div class="category-name">Ovo-Vegetarian</div>
    </a>
    <a href="jain_food.php" class="category-item">
      <div class="category-circle"><img src="food_image/jain.webp" alt="Jain Food" /></div>
      <div class="category-name">Jain Food</div>
    </a>
    <a href="juice.php" class="category-item">
      <div class="category-circle"><img src="food_image/drinks.jpg" alt="Juice" /></div>
      <div class="category-name">Juice</div>
    </a>
    <a href="breakfast.php" class="category-item">
      <div class="category-circle"><img src="food_image/breakfast.jpg" alt="Breakfast" /></div>
      <div class="category-name">Breakfast</div>
    </a>
    <a href="dinner.php" class="category-item">
      <div class="category-circle"><img src="food_image/dinner.jpg" alt="Dinner" /></div>
      <div class="category-name">Dinner</div>
    </a>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    © 2025 Foodies. All rights reserved.
  </div>

<script>
    // ================== LOADER ==================
const loader = document.getElementById("loader");

function showLoader() {
  if (!loader) return;
  loader.classList.add("show");
}

function hideLoader() {
  if (!loader) return;
  loader.classList.remove("show");
}

// Hide loader on normal load and when coming back via back/forward cache
window.addEventListener("load", hideLoader);
window.addEventListener("pageshow", () => {
  hideLoader();
});

// Optional: show loader when clicking any category card
document.querySelectorAll(".category-item").forEach(link => {
  link.addEventListener("click", () => {
    showLoader();
  });
});

// ================== NOT FOUND MODAL ==================
const notFoundModal = document.getElementById("notFoundModal");
const notFoundMessageEl = document.getElementById("notFoundMessage");

function showNotFoundModal(searchTerm) {
  if (!notFoundModal || !notFoundMessageEl) return;
  notFoundMessageEl.textContent = `Sorry, we couldn't find a recipe for "${searchTerm}". Try searching for another one!`;
  notFoundModal.classList.add("show");
}

function closeNotFoundModal() {
  if (!notFoundModal) return;
  notFoundModal.classList.remove("show");
  const input = document.getElementById("searchInput");
  if (input) input.focus();
}

// Close modal with ESC
document.addEventListener("keydown", (e) => {
  if (e.key === "Escape" && notFoundModal && notFoundModal.classList.contains("show")) {
    closeNotFoundModal();
  }
});

// Make closeNotFoundModal global for inline onclick
window.closeNotFoundModal = closeNotFoundModal;

// ================== ROTATING TEXT ==================
const texts = [
  "A dash of love in every bite!",
  "Fresh ingredients, pure delight!",
  "Slice it fine, spice it right!"
];

const fadeText = document.getElementById("fadeText");
let textIndex = 0;

function rotateText() {
  if (!fadeText) return;
  fadeText.style.opacity = 0;
  setTimeout(() => {
    fadeText.textContent = texts[textIndex];
    fadeText.style.opacity = 1;
    textIndex = (textIndex + 1) % texts.length;
  }, 1500);
}

if (fadeText) {
  // Initialize first text and fade in
  fadeText.textContent = texts[0];
  fadeText.style.opacity = 1;
  setInterval(rotateText, 5000);
}

// ================== SEARCH + SUGGESTIONS ==================

// Map of recipe search terms to URLs
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


const input = document.getElementById("searchInput");
const sugg = document.getElementById("suggestions");
const searchBtn = document.getElementById("searchBtn");
let currentActive = 0;

// Build suggestions as user types
if (input && sugg) {
  input.addEventListener("input", () => {
    const q = input.value.toLowerCase().trim();
    sugg.innerHTML = "";
    currentActive = 0;

    if (!q) {
      sugg.style.display = "none";
      return;
    }

    const matches = Object.keys(recipes)
      .filter(name => name.includes(q))
      .slice(0, 8);

    if (matches.length > 0) {
      sugg.innerHTML = matches
        .map(
          (m, idx) =>
            `<div class="suggest-item ${idx === 0 ? "suggest-active" : ""}" data-index="${idx}" onclick="selectRecipe('${m.replace(/'/g, "\\'")}')">${m}</div>`
        )
        .join("");
    } else {
      sugg.innerHTML = `<div class="no-results">❌ No recipes found for "${q}"</div>`;
    }

    sugg.style.display = "block";
  });
}

// Close suggestions when clicking outside
document.addEventListener("click", (e) => {
  if (!e.target.closest(".search-wrap") && sugg) {
    sugg.style.display = "none";
  }
});

// Keyboard navigation in suggestions
if (input && sugg) {
  input.addEventListener("keydown", (e) => {
    const items = sugg.querySelectorAll(".suggest-item");
    if (!items.length) return;

    if (e.key === "ArrowDown") {
      e.preventDefault();
      items[currentActive].classList.remove("suggest-active");
      currentActive = (currentActive + 1) % items.length;
      items[currentActive].classList.add("suggest-active");
      items[currentActive].scrollIntoView({ block: "nearest" });
    } else if (e.key === "ArrowUp") {
      e.preventDefault();
      items[currentActive].classList.remove("suggest-active");
      currentActive = (currentActive - 1 + items.length) % items.length;
      items[currentActive].classList.add("suggest-active");
      items[currentActive].scrollIntoView({ block: "nearest" });
    } else if (e.key === "Enter") {
      e.preventDefault();
      const active = sugg.querySelector(".suggest-active");
      if (active) {
        selectRecipe(active.textContent);
      }
    }
  });
}

// Global so onclick in suggestions works
function selectRecipe(name) {
  if (!name) return;
  const url = recipes[name.toLowerCase()];
  if (!url) return;

  showLoader();
  setTimeout(() => {
    if (input) input.value = "";
    if (sugg) sugg.style.display = "none";
    window.location.href = url;
  }, 300);
}
window.selectRecipe = selectRecipe;

// Search button click handler
if (searchBtn && input) {
  searchBtn.addEventListener("click", () => {
    const q = input.value.toLowerCase().trim();

    if (!q) {
      showNotFoundModal("(empty search)");
      return;
    }

    const exact = recipes[q];
    const partialKey = Object.keys(recipes).find((k) => k.includes(q));
    const page = exact || (partialKey && recipes[partialKey]);

    if (!page) {
      showNotFoundModal(q);
      return;
    }

    showLoader();
    setTimeout(() => {
      input.value = "";
      if (sugg) sugg.style.display = "none";
      window.location.href = page;
    }, 300);
  });
}

</script>
</body>
</html>