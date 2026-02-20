<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>About Us - Foodies</title>
  <style>
   * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Poppins", Arial, sans-serif;
  background-color: #F7E9D7;
  color: #3b2418;
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

/* --- HEADER --- */
.land {
  width: 100%;
  height: 100px;
  background-color: saddlebrown;   /* or #8B4513 */
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 20px;
  color: white;
}

.brand {
  display: flex;
  align-items: center;
  font-size: 26px;
  font-weight: bold;
}

/* Logo styling */
.brand .logo {
  height: 65px;
  width: 65px;
  margin-right: 10px;
  border-radius: 50%;
  object-fit: cover;
}

.nav-section {
  display:flex;
  align-items:center;
  gap:20px;
}

.nav-links {
  display:flex;
  gap:18px;
}

.nav-links a {
  color:#fff;
  text-decoration:none;
  font-size:20px;
  padding-bottom:4px;
  border-bottom:2px solid transparent;
  transition:all .18s;
}

.nav-links a:hover {
  color:#ffd27f;
  border-bottom-color:#ffd27f;
}

/* --- SEARCH BOX --- */
.search-wrap {
  position:relative;
  display:flex;
  align-items:center;
  gap:10px;
  min-width: 320px;
}

.search-box {
  display:flex;
  align-items:center;
  background:#fff;
  border-radius:10px;
  padding:8px 10px;
  border:1px solid #ddd;
  width: 100%;
  max-width: 420px;
}

.search-box input {
  border:0;
  outline:0;
  background:transparent;
  color:#3b2418;
  font-size:16px;
  width:260px;
  padding:6px;
}

.search-box button {
  margin-left:8px;
  border:0;
  background:#ffd27f;
  color:#3b2418;
  padding:8px 12px;
  border-radius:8px;
  cursor:pointer;
  font-weight:600;
}

.search-box button:hover {
  background:#ffbf4d;
}

/* --- DARK GLASS SUGGESTIONS --- */
#suggestions {
  position:absolute;
  left:0;
  top:56px;
  width:100%;
  max-height:280px;
  overflow-y:auto;
  background: rgba(10,10,10,0.5);
  backdrop-filter: blur(15px);
  border: 1px solid rgba(255,255,255,0.08);
  border-radius:12px;
  padding:8px;
  box-shadow:0 8px 40px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1);
  display:none;
  z-index:9999;
  transition: all 0.2s ease-in-out;
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
  padding:12px 14px;
  margin:4px 0;
  cursor:pointer;
  border-radius:8px;
  color:#e0e0e0;
  font-weight:500;
  transition:all 0.25s ease;
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

.no-results {
  padding:20px 14px;
  text-align:center;
  color:#c0c0c0;
  font-weight:500;
  font-size:14px;
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

.no-result-animate {
  animation: noResultPulse 0.6s ease-out;
}

/* --- ABOUT SECTION CONTENT --- */
.about-container {
  max-width: 1100px;
  margin: 40px auto 60px;
  padding: 0 20px;
  flex-grow: 1;
}

.about-header {
  text-align: center;
  margin-bottom: 24px;
}

.about-header h1 {
  font-size: 32px;
  margin-bottom: 10px;
  color: #8B4513;
}

.about-header p {
  font-size: 18px;
  color: #5a3a27;
}

.highlight { 
  color: #8B4513;
  font-weight: bold; 
}

.project-section {
  background: #fdf2e5;
  border-radius: 16px;
  padding: 24px 24px 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
  margin-bottom: 32px;
  margin-top: 10px;
}

.project-section h2 {
  margin-top: 0;
  margin-bottom: 10px;
  font-size: 24px;
  color: #8B4513;
}

.project-section p {
  font-size: 17px;
  line-height: 1.7;
  margin-bottom: 14px;
  color: #3b2418;
  text-align: justify;
}

.project-section ul {
  margin: 8px 0 0 18px;
  padding: 0;
  font-size: 16px;
  line-height: 1.7;
  color: #3b2418;
}

/* --- TEAM SECTION --- */
.team-section {
  margin-top: 10px;
  margin-bottom: 32px;
}

.team-section h2 {
  font-size: 24px;
  margin-bottom: 8px;
  color: #8B4513;
}

.team-section p {
  font-size: 16px;
  margin-bottom: 18px;
  color: #4b3121;
}

.team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 24px;
}

.team-card {
  background: #fdf2e5;
  border-radius: 16px;
  padding: 18px 16px 20px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.08);
}

.team-avatar-wrap {
  width: 120px;
  height: 120px;
  margin: 0 auto 12px;
  border-radius: 50%;
  overflow: hidden;
  border: 3px solid #8B4513;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #fff;
}

.team-avatar-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.team-name {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 4px;
  color: #8B4513;
}

.team-role {
  font-size: 14px;
  font-weight: 500;
  color: #6b4a35;
  margin-bottom: 8px;
}

.team-note {
  font-size: 14px;
  color: #3b2418;
  line-height: 1.6;
}

/* --- FOOTER --- */
.footer {
  width: 100%;
  background-color: #8B4513;
  color: white;
  text-align: center;
  padding: 15px 0;
  font-size: 16px;
  margin-top: auto;
}

/* --- LOADER --- */
#loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(247, 233, 215, 0.95);
  backdrop-filter: blur(8px);
  -webkit-backdrop-filter: blur(8px);
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

.steam:nth-child(2) { 
  left: 20px; 
  animation-delay: 0.5s; 
}

.steam:nth-child(3) { 
  left: -20px; 
  animation-delay: 1s; 
}

.cooking-icon { 
  font-size: 50px; 
  color: #E67E22; 
  animation: pulse 1.5s ease-in-out infinite alternate; 
  z-index: 10; 
}

@keyframes potSpin { 
  0% { transform: rotate(0deg); } 
  100% { transform: rotate(360deg); } 
}

@keyframes riseAndFade { 
  0% { transform: translateY(0) scale(0.5); opacity: 0.8; } 
  50% { opacity: 0.5; } 
  100% { transform: translateY(-80px) scale(1.2); opacity: 0; } 
}

@keyframes pulse { 
  0% { transform: scale(1); } 
  100% { transform: scale(1.1); } 
}

.loader-text { 
  color: #8B4513; 
  margin-top: 30px; 
  font-size: 24px; 
  font-weight: 600; 
  letter-spacing: 1.5px; 
  text-shadow: 1px 1px 2px rgba(0,0,0,0.1); 
}

.dots { 
  display: inline-block; 
  margin-left: 8px; 
}

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

/* --- MODAL FOR NOT FOUND --- */
.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
  backdrop-filter: blur(8px);
  display: none;
  justify-content: center;
  align-items: center;
  z-index: 10000;
  animation: fadeIn 0.3s ease-in-out;
}

.modal-overlay.show { 
  display: flex; 
}

.modal-content {
  background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,248,255,0.98) 100%);
  border-radius: 16px;
  padding: 40px;
  text-align: center;
  box-shadow: 0 10px 50px rgba(0,0,0,0.4), inset 0 1px 0 rgba(255,255,255,0.8);
  max-width: 400px;
  width: 90%;
  animation: slideUp 0.3s ease-out;
  border: 1px solid rgba(255,255,255,0.5);
}

@keyframes slideUp {
  from { transform: translateY(30px); opacity: 0; }
  to { transform: translateY(0); opacity: 1; }
}

.modal-icon {
  font-size: 60px;
  margin-bottom: 15px;
}

.modal-title {
  font-size: 24px;
  font-weight: 700;
  color: #8B4513;
  margin-bottom: 10px;
}

.modal-text {
  font-size: 16px;
  color: #555;
  margin-bottom: 25px;
  line-height: 1.6;
}

.modal-btn {
  background: linear-gradient(135deg, #8B4513 0%, #a0531f 100%);
  color: #fff;
  border: none;
  padding: 12px 30px;
  border-radius: 8px;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s;
  box-shadow: 0 4px 15px rgba(139,69,19,0.3);
}

.modal-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(139,69,19,0.5);
}

@media (max-width: 768px) {
  .land { 
    flex-direction: column; 
    align-items: flex-start; 
    padding: 20px; 
    gap: 15px; 
    height: auto; 
  }
  .nav-section { 
    flex-direction: column; 
    align-items: flex-start; 
    width: 100%; 
  }
  .search-wrap { 
    width: 100%; 
  }
  .search-box { 
    width: 100%; 
  }
  .about-container { 
    margin: 30px auto 40px; 
  }
}

  </style>
</head>
<body>

  <!-- LOADER -->
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

  <!-- NOT FOUND MODAL -->
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

  <!-- HEADER -->
  <div class="land">
    <div class="brand">
      <img src="/food_recipe/logo.png" alt="Foodies Logo" class="logo" />
      Foodies
    </div>
    <div class="nav-section">
      <div class="nav-links">
          <a href="landing.php">Home</a>
        <a href="catagories.php">Categories</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
      </div>
      <!-- Search bar -->
      <div class="search-wrap">
        <div class="search-box">
          <input id="searchInput" type="text" placeholder="Search recipes (try: chicken biryani)" autocomplete="off" />
          <button id="searchBtn">Search</button>
        </div>
        <div id="suggestions"></div>
      </div>
    </div>
  </div>

  <!-- ABOUT CONTENT -->
  <div class="about-container">
    <div class="about-header">
      <h1>About Us</h1>
      <p>Foodies is a simple recipe hub built to make it easy to find food that matches your diet and mood.</p>
    </div>

    <!-- TEAM SECTION -->
    <div class="team-section">
<h2 style="text-align: center;">Our Team</h2>
      <p>
        Foodies is developed by a small team. Names are placeholders for now – you can replace them
        with real names later, but the structure and images are ready.
      </p>

      <div class="team-grid">
        <!-- Team Member 1 -->
        <div class="team-card">
          <div class="team-avatar-wrap">
            <img src="/food_recipe/food_image/about1.jpeg
" alt="Team Member 1">
          </div>
          <div class="team-name">Vikas Naik</div>
          <div class="team-role">Developer  </div>
          
        </div>

        <!-- Team Member 2 -->
        <div class="team-card">
          <div class="team-avatar-wrap">
 <img src="/food_recipe/food_image/abou2.0.jpeg
" alt="Team Member 1">          </div>
          <div class="team-name">Shailesh naik</div>
          <div class="team-role">Designer</div>
          
        </div>
      </div>
    </div>

    <!-- PROJECT EXPLANATION -->
    <div class="project-section">
      <h2>About the Foodies Project</h2>
      <p>
        <span class="highlight">Foodies</span> is a web-based recipe platform that organizes dishes by
        category (Non-Veg, Veg, Vegan, Jain, Egg, Seafood, Breakfast, Dinner, Sweets, Juices, and more).
      </p>
      <p>
        The goal is simple: help users quickly discover recipes that fit their preferences 
        without wasting time.
      </p>
      <p>Key features:</p>
      <ul>
        <li>Centralized <b>categories page</b> with clear visual tiles for each food type.</li>
        <li><b>Global search</b> with suggestions across all recipe categories.</li>
        <li><b>Dedicated pages</b> for Non-Veg, Veg, Vegan, Jain, Egg, Seafood, Breakfast, Dinner, etc.</li>
        <li>Custom <b>loader</b> and <b>“not found” modal</b> for a smoother user experience.</li>
        <li>Same header and design system reused on all pages for consistency.</li>
      </ul>
      <p>
        This project can work as a college mini-project, portfolio piece, or base for a full production recipe site.
      </p>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    © 2025 Foodies. All rights reserved.
  </div>

  <script>
    // LOADER
    const loader = document.getElementById('loader');
    function showLoader(){ loader.classList.remove('hidden'); }
    function hideLoader(){ loader.classList.add('hidden'); }

    window.addEventListener("load", hideLoader);
    window.addEventListener("pageshow", e=>{ 
      hideLoader(); 
      if(e.persisted && document.getElementById('suggestions')) {
        document.getElementById('suggestions').style.display="none";
      }
    });
    window.addEventListener("beforeunload", showLoader);

    // RECIPE DATABASE
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
    
    const notFoundModal = document.getElementById('notFoundModal');
    const notFoundMessageEl = document.getElementById('notFoundMessage');
    const modalContent = notFoundModal.querySelector('.modal-content');
    
    let currentActive = 0;

    // Modal functions
    function showNotFoundModal(term){
      notFoundMessageEl.textContent = `Sorry, we couldn't find a recipe for "${term}". Try searching for another one!`;
      notFoundModal.classList.add('show');
      modalContent.classList.remove('no-result-animate');
      void modalContent.offsetWidth;
      modalContent.classList.add('no-result-animate');
    }
    function closeNotFoundModal(){
      notFoundModal.classList.remove('show');
      modalContent.classList.remove('no-result-animate');
      input.focus();
    }
    window.closeNotFoundModal = closeNotFoundModal;

    document.addEventListener('keydown', e=>{
      if(e.key === 'Escape' && notFoundModal.classList.contains('show')){
        closeNotFoundModal();
      }
    });

    // SEARCH LOGIC - SUGGESTIONS ON INPUT
    input.addEventListener('input', ()=>{
      const q = input.value.toLowerCase().trim();
      sugg.innerHTML = "";
      currentActive = 0;
      if(!q){ 
        sugg.style.display="none"; 
        return; 
      }
      const matches = Object.keys(recipes).filter(r=>r.includes(q)).slice(0,8);
      if(matches.length) {
        sugg.innerHTML = matches.map((m,idx)=>
          `<div class='suggest-item ${idx===0?'suggest-active':''}' data-index='${idx}' onclick="selectRecipe('${m}')">${m}</div>`
        ).join("");
      } else {
        sugg.innerHTML = `<div class='no-results no-result-animate'>❌ No recipes found for "${q}"</div>`;
      }
      sugg.style.display = "block";
    });

    // Close suggestions when clicking outside
    document.addEventListener("click", e => { 
      if(!e.target.closest(".search-wrap")) sugg.style.display="none"; 
    });

    // Keyboard navigation
    input.addEventListener('keydown', (e) => {
      const items = sugg.querySelectorAll('.suggest-item');
      if(!items.length) return;
      const active = sugg.querySelector('.suggest-active');
      
      if(e.key === 'ArrowDown') {
        e.preventDefault();
        if(!active) {
          items[0].classList.add('suggest-active');
          currentActive = 0;
        } else {
          active.classList.remove('suggest-active');
          currentActive = (currentActive + 1) % items.length;
          items[currentActive].classList.add('suggest-active');
          items[currentActive].scrollIntoView({block:'nearest'});
        }
      } else if(e.key === 'ArrowUp') {
        e.preventDefault();
        if(!active) {
          items[items.length-1].classList.add('suggest-active');
          currentActive = items.length-1;
        } else {
          active.classList.remove('suggest-active');
          currentActive = (currentActive - 1 + items.length) % items.length;
          items[currentActive].classList.add('suggest-active');
          items[currentActive].scrollIntoView({block:'nearest'});
        }
      } else if(e.key === 'Enter' && active) {
        e.preventDefault();
        selectRecipe(active.textContent);
      }
    });

    // Select from suggestions
    function selectRecipe(name){ 
      if(!name) return;
      const url = recipes[name.toLowerCase()];
      if(!url) return;
      showLoader();
      setTimeout(() => {
        input.value = "";
        sugg.style.display = "none";
        window.location.href = url;
      }, 500);
    }
    window.selectRecipe = selectRecipe;

    // SEARCH BUTTON LOGIC – SAME BEHAVIOR AS BREAKFAST PAGE
    searchBtn.addEventListener("click", () => {
      const q = input.value.toLowerCase().trim();

      // Empty search -> popup
      if (!q) {
        showNotFoundModal("(empty search)");
        return;
      }

      // Try exact, then partial
      const pageKey = recipes[q]
        ? q
        : Object.keys(recipes).find(k => k.includes(q));

      // No recipe → POPUP MODAL (like egg/breakfast page)
      if (!pageKey) {
        showNotFoundModal(q);
        return;
      }

      const page = recipes[pageKey];
      showLoader();
      setTimeout(() => {
        input.value = "";
        sugg.style.display = "none";
        window.location.href = page;
      }, 500);
    });
  </script>
</body>
</html>
