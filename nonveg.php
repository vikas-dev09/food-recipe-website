<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Foodies - Non-Veg Recipes</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      font-family: "Poppins", Arial, sans-serif;
      background-color: #fef6f0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      margin: 0;
      color: #3b2418;
    }

    /* Loader styles */
    #loader {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
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
      display: none;
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

    /* Modal styles */
    .modal-overlay {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
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
      border: 1px solid rgba(255,255,255,0.5);
      animation: slideUp 0.3s ease-out;
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

    /* Header styles */
    .land {
      width: 100%;
      height: 100px; /* Adjust height for larger logo */
      background-color: saddlebrown;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px; /* Reduced vertical padding, adjust as needed */
      color: white;
    }
    .brand {
      font-size: 26px;
      font-weight: bold;
      display: flex; /* Added for logo alignment */
      align-items: center; /* Added for logo alignment */
    }
    /* --- NEW LOGO CSS --- */
    .brand img {
        height: 65px; /* Adjust logo size here, e.g., 55px for a larger one */
        margin-right: 12px;
    }
    /* --- END NEW LOGO CSS --- */

    .nav-section {
      display: flex;
      align-items: center;
      gap: 30px;
    }
    .nav-links {
      display: flex;
      gap: 20px;
    }
    .nav-links a {
      color: white;
      text-decoration: none;
      font-size: 18px;
      padding-bottom: 4px;
      border-bottom: 2px solid transparent;
      transition: all 0.3s ease;
    }
    .nav-links a:hover {
      color: #ffd27f;
      border-bottom: 2px solid #ffd27f;
    }
    /* Search styles */
    .search-wrap {
      position: relative;
      display: flex;
      align-items: center;
      gap: 10px;
      min-width: 320px;
    }
    .search-box {
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 10px;
      padding: 8px 10px;
      border: 1px solid #ddd;
      width: 100%;
      max-width: 420px;
    }
    #searchInput {
      border: 0;
      outline: 0;
      background: transparent;
      color: #3b2418;
      font-size: 16px;
      width: 260px;
      padding: 6px;
    }
    #searchBtn {
      margin-left: 8px;
      border: 0;
      background: #ffd27f;
      color: #3b2418;
      padding: 8px 12px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 600;
    }
    #searchBtn:hover { background: #ffbf4d; }

    /* Suggestions dropdown styles (dark glass) */
    #suggestions {
      position: absolute;
      top: 56px;
      left: 0;
      width: 100%;
      max-height: 280px;
      overflow-y: auto;
      background: rgba(10,10,10,0.5);
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 12px;
      padding: 8px;
      box-shadow: 0 8px 40px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1);
      display: none;
      z-index: 9999;
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
      padding: 12px 14px;
      margin: 4px 0;
      cursor: pointer;
      border-radius: 8px;
      color: #e0e0e0;
      font-weight: 500;
      transition: all 0.25s ease;
      background: transparent;
    }
    .suggest-item:hover {
      background: rgba(200, 200, 200, 0.2);
      transform: translateX(6px);
      color: #fff;
    }
    .suggest-active {
      background: rgba(200, 200, 200, 0.3);
      color: #fff;
      transform: translateX(6px);
    }
    /* No results message style */
    .no-results {
      padding: 20px 14px;
      text-align: center;
      color: #c0c0c0;
      font-weight: 500;
      font-size: 14px;
      background: transparent;
      border-radius: 8px;
      animation: fadeIn 0.3s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-5px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Recipes grid styles */
    .grid-container {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
      padding: 40px 20px;
      flex: 1;
    }

    /* Card styles */
    .card {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      overflow: hidden;
      transition: transform 0.3s ease;
    }
    .card:hover { transform: translateY(-5px); }
    .card img {
      width: 100%; height: 250px; object-fit: cover;
    }
    .card-body {
      padding: 15px;
      text-align: center;
    }
    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #8B4513;
    }
    .card-text {
      font-size: 14px;
      color: #555;
      margin-bottom: 15px;
    }
    .view-btn {
      display: block;
      width: 100%;
      background-color: #8B4513;
      color: white;
      text-decoration: none;
      padding: 10px 0;
      border-radius: 5px;
      font-size: 16px;
      transition: background-color 0.3s;
    }
    .view-btn:hover { background-color: #4d260f; }

    /* Footer styles */
    .footer {
      width: 100%;
      background-color: saddlebrown;
      color: white;
      text-align: center;
      padding: 15px 0;
      font-size: 16px;
      margin-top: auto;
      border-top: 3px solid #ffd27f;
      box-shadow: 0 -2px 8px rgba(0,0,0,0.15);
    }

    /* Responsive styles */
    @media(max-width: 992px) {
      .grid-container { grid-template-columns: repeat(2, 1fr); }
    }
    @media(max-width: 600px) {
      .land {
        flex-direction: column;
        align-items: flex-start;
        padding: 15px;
        height: auto; /* Allow header height to adjust */
      }
      .nav-section {
        flex-direction: column;
        align-items: flex-start;
        width: 100%;
        gap: 15px;
      }
      .search-wrap { width: 100%; min-width: auto; }
      .search-box { max-width: 100%; }
      .grid-container { grid-template-columns: 1fr; }
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
      <div class="modal-text" id="notFoundMessage"></div>
      <button class="modal-btn" onclick="closeNotFoundModal()">Try Again</button>
    </div>
  </div>

  <div class="land">
    <div class="brand">
      <img src="/food_recipe/logo.png" alt="Foodies Logo"> Foodies
    </div>
    <div class="nav-section">
      <div class="nav-links">
        <a href="landing.php">Home</a>
        <a href="catagories.php">Categories</a>
        <a href="contact.php">Contact Us</a>
        <a href="about.php">About Us</a>
      </div>
      <div class="search-wrap">
        <div class="search-box">
          <input id="searchInput" type="text" placeholder="Search recipes (try: chicken)" autocomplete="off" />
          <button id="searchBtn">Search</button>
        </div>
        <div id="suggestions"></div>
      </div>
    </div>
  </div>

  <div class="grid-container">

    <div class="card"><img src="food_image/nonveg/non1.jpeg" /><div class="card-body"><h5 class="card-title">Chicken Biryani</h5><p class="card-text">Traditional Indian biryani rich in flavor & aroma.</p><a href="nonveg/dish1.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non2.jpg" /><div class="card-body"><h5 class="card-title">Butter Chicken</h5><p class="card-text">Creamy tomato-based chicken curry recipe.</p><a href="nonveg/dish2.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non3.jpg" /><div class="card-body"><h5 class="card-title">Mutton Curry</h5><p class="card-text">Spicy and tender mutton curry cooked slowly.</p><a href="nonveg/dish3.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non4.webp" /><div class="card-body"><h5 class="card-title">Chicken Tandoori</h5><p class="card-text">Smoky grilled chicken with tandoori spices.</p><a href="nonveg/dish4.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non5.jpg" /><div class="card-body"><h5 class="card-title">Pork Ribs</h5><p class="card-text">Slow-cooked pork ribs glazed in BBQ sauce.</p><a href="nonveg/dish5.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non6.avif" /><div class="card-body"><h5 class="card-title">Lamb Kebabs</h5><p class="card-text">Grilled lamb skewers marinated in spices.</p><a href="nonveg/dish6.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non11.jpg" /><div class="card-body"><h5 class="card-title">Chicken Shawarma</h5><p class="card-text">Middle Eastern wrap with chicken and sauces.</p><a href="nonveg/dish7.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non8.jpg" /><div class="card-body"><h5 class="card-title">Chicken 65</h5><p class="card-text">Crispy South Indian-style spicy chicken bites.</p><a href="nonveg/dish8.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non10.jpeg" /><div class="card-body"><h5 class="card-title">Prawn Curry</h5><p class="card-text">Rich coconut-based prawn curry.</p><a href="nonveg/dish9.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non7.jpeg" /><div class="card-body"><h5 class="card-title">Fish Fry</h5><p class="card-text">Crispy and spicy shallow-fried fish recipe.</p><a href="nonveg/dish10.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non9.jpeg" /><div class="card-body"><h5 class="card-title">Grilled Salmon</h5><p class="card-text">Simple grilled salmon with herbs & lemon.</p><a href="nonveg/dish11.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non12.jpeg" /><div class="card-body"><h5 class="card-title">Crab Masala</h5><p class="card-text">Spicy and rich crab masala Indian style.</p><a href="nonveg/dish12.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non13.avif" /><div class="card-body"><h5 class="card-title">Fish and Chips</h5><p class="card-text">Classic crispy fish with golden French fries.</p><a href="nonveg/dish13.php" class="view-btn">View Recipe</a></div></div>

    <div class="card"><img src="food_image/nonveg/non14.jpg" /><div class="card-body"><h5 class="card-title">Egg Curry</h5><p class="card-text">Boiled eggs in spicy onion-tomato gravy.</p><a href="nonveg/dish14.php" class="view-btn">View Recipe</a></div></div>

    <div class="card">
      <img src="food_image/nonveg/m2.jpg" />
      <div class="card-body">
        <h5 class="card-title">Mutton Korma</h5>
        <p class="card-text">Fragrant and flavorful mutton biryani.</p>
        <a href="nonveg/dish15.php" class="view-btn">View Recipe</a>
      </div>
    </div>

    <div class="card">
      <img src="food_image/nonveg/m1.jpg" />
      <div class="card-body">
        <h5 class="card-title">Mutton Biryani</h5>
        <p class="card-text">Tender mutton cooked in rich, creamy gravy.</p>
        <a href="nonveg/dish16.php" class="view-btn">View Recipe</a>
      </div>
    </div>
  </div>

  <div class="footer">
    © 2025 Foodies. All rights reserved.
  </div>

  <script>
    // Loader hide on page load
    const loader = document.getElementById('loader');
    window.addEventListener('load', () => {
      loader.classList.add('hidden');
    });
    window.addEventListener('pageshow', () => {
      loader.classList.add('hidden');
    });

    // Modal functions
    const notFoundModal = document.getElementById('notFoundModal');
    const notFoundMessageEl = document.getElementById('notFoundMessage');

    function showNotFoundModal(term){
      notFoundMessageEl.textContent = `Sorry, we couldn't find a recipe for "${term}". Try searching for another one!`;
      notFoundModal.classList.add('show');
    }
    function closeNotFoundModal(){
      notFoundModal.classList.remove('show');
      document.getElementById('searchInput').focus();
    }
    document.addEventListener('keydown', (e) => {
      if(e.key === 'Escape' && notFoundModal.classList.contains('show')){
        closeNotFoundModal();
      }
    });

    // Search suggestions data (non-veg recipes)
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

    let currentActive = 0;

    // Loader functions
    function showLoader(){
      loader.classList.remove('hidden');
    }
    function hideLoader(){
      loader.classList.add('hidden');
    }

    // Search suggestions logic
    input.addEventListener('input', () => {
      const q = input.value.toLowerCase().trim();
      sugg.innerHTML = "";
      currentActive = 0;

      if(!q) {
        sugg.style.display = "none";
        return;
      }

      // Get matching recipes (max 8 results)
      const matches = Object.keys(recipes)
        .filter(recipe => recipe.includes(q))
        .slice(0, 8);

      if(matches.length > 0) {
        sugg.innerHTML = matches.map((match, idx) =>
          `<div class="suggest-item ${idx === 0 ? 'suggest-active' : ''}" onclick="selectRecipe('${match}')">${match}</div>`
        ).join('');
      } else {
        sugg.innerHTML = `<div class="no-results">❌ No recipes found for "${q}"</div>`;
      }

      sugg.style.display = "block";
    });

    // Close suggestions when clicking outside search wrap
    document.addEventListener('click', (e) => {
      if(!e.target.closest('.search-wrap')) {
        sugg.style.display = "none";
      }
    });

    // Keyboard navigation for suggestions
    input.addEventListener('keydown', (e) => {
      const items = sugg.querySelectorAll('.suggest-item');
      if(!items.length) return;

      switch(e.key) {
        case 'ArrowDown':
          e.preventDefault();
          items[currentActive].classList.remove('suggest-active');
          currentActive = (currentActive + 1) % items.length;
          items[currentActive].classList.add('suggest-active');
          items[currentActive].scrollIntoView({ block: 'nearest' });
          break;

        case 'ArrowUp':
          e.preventDefault();
          items[currentActive].classList.remove('suggest-active');
          currentActive = (currentActive - 1 + items.length) % items.length;
          items[currentActive].classList.add('suggest-active');
          items[currentActive].scrollIntoView({ block: 'nearest' });
          break;

        case 'Enter':
          e.preventDefault();
          if(items[currentActive]) {
            selectRecipe(items[currentActive].textContent);
          }
          break;
      }
    });

    // Select recipe from suggestions
    function selectRecipe(name) {
      if(!name || !recipes[name]) return;

      showLoader();
      setTimeout(() => {
        input.value = "";
        sugg.style.display = "none";
        window.location.href = recipes[name];
      }, 500);
    }

    // Search button click handler
    document.getElementById('searchBtn').addEventListener('click', () => {
      const q = document.getElementById('searchInput').value.toLowerCase().trim();

      if(!q) {
        showNotFoundModal("(empty search)");
        return;
      }

      // Find matching recipe
      const matchingRecipe = Object.keys(recipes).find(recipe => recipe.includes(q));

      if(matchingRecipe) {
        showLoader();
        setTimeout(() => {
          document.getElementById('searchInput').value = "";
          sugg.style.display = "none";
          window.location.href = recipes[matchingRecipe];
        }, 500);
      } else {
        showNotFoundModal(q);
      }
    });
  </script>
</body>
</html>