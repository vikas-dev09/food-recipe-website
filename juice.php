<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Foodies - Juice Recipes</title>
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" />
<style>
  /* Reset and base styles */
  * {
    box-sizing: border-box;
  }
  body {
    font-family: "Poppins", Arial, sans-serif;
    background-color: #fef6f0;
    margin: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
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
    height: 100px;
    background-color: saddlebrown;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 20px;
    color: white;
  }
  .brand {
    font-size: 26px;
    font-weight: bold;
    display: flex;
    align-items: center;
  }
  .brand img {
    height: 65px;
    margin-right: 12px;
  }
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

  /* Suggestions dropdown styles */
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
  }
  .suggest-item {
    padding: 12px 14px;
    margin: 4px 0;
    cursor: pointer;
    border-radius: 8px;
    color: #e0e0e0;
    font-weight: 500;
    transition: all 0.25s ease;
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
  .no-results {
    padding: 20px 14px;
    text-align: center;
    color: #c0c0c0;
    font-weight: 500;
  }

  /* Grid container for cards */
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
    border-top: 3px solid #ffd27f;
  }

  /* Responsive styles */
  @media(max-width: 992px) {
    .grid-container { grid-template-columns: repeat(2, 1fr); }
  }
  @media(max-width: 600px) {
    .land {
      flex-direction: column;
      height: auto;
      padding: 10px;
    }
    .nav-section {
      flex-direction: column;
      gap: 10px;
    }
    .search-wrap {
      min-width: auto;
    }
    .grid-container {
      grid-template-columns: 1fr;
    }
  }
</style>
</head>
<body>

<!-- Loader -->
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
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </span>
  </p>
</div>

<!-- Main Content wrapped in container -->
<div id="mainContent" style="display: none;">
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
      <img src="/food_recipe/logo.png" alt="Foodies Logo" />
      Foodies
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
          <input id="searchInput" type="text" placeholder="Search recipes (try: mango)" autocomplete="off" />
          <button id="searchBtn">Search</button>
        </div>
        <div id="suggestions"></div>
      </div>
    </div>
  </div>

  <!-- JUICE RECIPE CARDS -->
  <div class="grid-container">
  <!-- Repeat this card block for each recipe -->
  <div class="card">
    <img src="food_image/jucie/ju1.jpeg" alt="Mango Juice" />
    <div class="card-body">
      <h5 class="card-title">Mango Juice</h5>
      <p class="card-text">Refreshing juice made from ripe mangoes, perfect for summer.</p>
      <a href="juice/f1.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju2.avif" alt="Sugarcane Juice" />
    <div class="card-body">
      <h5 class="card-title">Sugarcane Juice</h5>
      <p class="card-text">Sweet, fresh sugarcane juice served chilled.</p>
      <a href="juice/f2.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju3.jpg" alt="Aam Panna" />
    <div class="card-body">
      <h5 class="card-title">Aam Panna</h5>
      <p class="card-text">Tangy and spicy raw mango drink to beat the heat.</p>
      <a href="juice/f3.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju4.avif" alt="Watermelon Juice" />
    <div class="card-body">
      <h5 class="card-title">Watermelon Juice</h5>
      <p class="card-text">Sweet and hydrating watermelon juice for hot days.</p>
      <a href="juice/f4.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju5.jpeg" alt="Orange Juice" />
    <div class="card-body">
      <h5 class="card-title">Orange Juice</h5>
      <p class="card-text">Freshly squeezed oranges for a vitamin C boost.</p>
      <a href="juice/f5.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju6.avif" alt="Pomegranate Juice" />
    <div class="card-body">
      <h5 class="card-title">Pomegranate Juice</h5>
      <p class="card-text">Sweet and tangy juice loaded with antioxidants.</p>
      <a href="juice/f6.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju7.jpg" alt="Carrot Juice" />
    <div class="card-body">
      <h5 class="card-title">Carrot Juice</h5>
      <p class="card-text">Bright orange juice packed with vitamins and minerals.</p>
      <a href="juice/f7.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju8.jpg" alt="Lemonade" />
    <div class="card-body">
      <h5 class="card-title">Lemonade / Nimbu Pani</h5>
      <p class="card-text">Refreshing lemon drink with a hint of sweetness and salt.</p>
      <a href="juice/f8.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju9.webp" alt="Cucumber Juice" />
    <div class="card-body">
      <h5 class="card-title">Cucumber Juice</h5>
      <p class="card-text">Cooling cucumber juice, perfect for summer refreshment.</p>
      <a href="juice/f9.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju10.webp" alt="Mosambi Juice" />
    <div class="card-body">
      <h5 class="card-title">Mosambi Juice</h5>
      <p class="card-text">Sweet citrus juice made from fresh sweet limes.</p>
      <a href="juice/f10.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju11.webp" alt="Apple Juice" />
    <div class="card-body">
      <h5 class="card-title">Apple Juice</h5>
      <p class="card-text">Fresh apple juice, naturally sweet and healthy.</p>
      <a href="juice/f11.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju12.jpg" alt="Grapes Juice" />
    <div class="card-body">
      <h5 class="card-title">Grapes Juice</h5>
      <p class="card-text">Purple or green grape juice, refreshing and rich in antioxidants.</p>
      <a href="juice/f12.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju13.webp" alt="Beetroot Juice" />
    <div class="card-body">
      <h5 class="card-title">Beetroot Juice</h5>
      <p class="card-text">Earthy and sweet juice, perfect for detox and energy.</p>
      <a href="juice/f13.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju14.jpg" alt="Papaya Juice" />
    <div class="card-body">
      <h5 class="card-title">Papaya Juice</h5>
      <p class="card-text">Smooth and tropical juice full of vitamins and fiber.</p>
      <a href="juice/f14.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju15.jpg" alt="Tender Coconut Water" />
    <div class="card-body">
      <h5 class="card-title">Tender Coconut Water</h5>
      <p class="card-text">Natural electrolyte drink, hydrating and refreshing.</p>
      <a href="juice/f15.php" class="view-btn">View Recipe</a>
    </div>
  </div>
  <div class="card">
    <img src="food_image/jucie/ju16.webp" alt="Ginger-Lemon Juice" />
    <div class="card-body">
      <h5 class="card-title">Ginger-Lemon Juice</h5>
      <p class="card-text">Spicy and tangy juice, excellent for digestion and immunity.</p>
      <a href="juice/f16.php" class="view-btn">View Recipe</a>
    </div>
  </div>

  <!-- FOOTER -->
  <div class="footer">
    &copy; 2025 Foodies. All rights reserved.
  </div>
</div> <!-- end mainContent -->

<!-- Scripts -->
<script>
  // When page loads, hide loader, show main content
  window.addEventListener('load', () => {
    setTimeout(() => {
      document.getElementById('loader').classList.add('hidden');
      document.getElementById('mainContent').style.display = 'block';
    }, 500); // optional delay for smooth transition
  });

  // Modal handling
  const notFoundModal = document.getElementById('notFoundModal');
  const notFoundMessageEl = document.getElementById('notFoundMessage');

  function showNotFoundModal(term) {
    notFoundMessageEl.textContent = `Sorry, we couldn't find a recipe for "${term}". Try searching for another one!`;
    notFoundModal.classList.add('show');
  }

  function closeNotFoundModal() {
    notFoundModal.classList.remove('show');
    document.getElementById('searchInput').focus();
  }

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && notFoundModal.classList.contains('show')) {
      closeNotFoundModal();
    }
  });

  // Recipes database
  const recipes = {
    "mango juice": "juice/f1.php",
    "sugarcane juice": "juice/f2.php",
    "aam panna": "juice/f3.php",
    "watermelon juice": "juice/f4.php",
    "orange juice": "juice/f5.php",
    "pomegranate juice": "juice/f6.php",
    "carrot juice": "juice/f7.php",
    "lemonade nimbu pani": "juice/f8.php",
    "cucumber juice": "juice/f9.php",
    "mosambi juice": "juice/f10.php",
    "apple juice": "juice/f11.php",
    "grapes juice": "juice/f12.php",
    "beetroot juice": "juice/f13.php",
    "papaya juice": "juice/f14.php",
    "tender coconut water": "juice/f15.php",
    "ginger lemon juice": "juice/f16.php"
  };const recipes = {
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
  const suggestionsBox = document.getElementById('suggestions');
  const searchBtn = document.getElementById('searchBtn');
  let currentActiveIndex = 0;

  function showLoader() {
    document.getElementById('loader').classList.remove('hidden');
  }

  function hideLoader() {
    document.getElementById('loader').classList.add('hidden');
  }

  // Suggestions input event
  input.addEventListener('input', () => {
    const query = input.value.trim().toLowerCase();
    suggestionsBox.innerHTML = '';
    currentActiveIndex = 0;

    if (!query) {
      suggestionsBox.style.display = 'none';
      return;
    }

    const matches = Object.keys(recipes)
      .filter(key => key.includes(query))
      .slice(0, 8);

    if (matches.length > 0) {
      matches.forEach((name, idx) => {
        const div = document.createElement('div');
        div.className = 'suggest-item' + (idx === 0 ? ' suggest-active' : '');
        div.setAttribute('data-name', name);
        div.textContent = name;
        div.addEventListener('click', () => selectRecipe(name));
        suggestionsBox.appendChild(div);
      });
      suggestionsBox.style.display = 'block';
    } else {
      const noResult = document.createElement('div');
      noResult.className = 'no-results';
      noResult.textContent = `❌ No recipes found for "${query}"`;
      suggestionsBox.appendChild(noResult);
      suggestionsBox.style.display = 'block';
    }
  });

  document.addEventListener('click', (e) => {
    if (!e.target.closest('.search-wrap')) {
      suggestionsBox.style.display = 'none';
    }
  });

  input.addEventListener('keydown', (e) => {
    const items = suggestionsBox.querySelectorAll('.suggest-item');
    if (items.length === 0) return;

    const active = suggestionsBox.querySelector('.suggest-active');

    if (e.key === 'ArrowDown') {
      e.preventDefault();
      if (active) active.classList.remove('suggest-active');
      currentActiveIndex = (currentActiveIndex + 1) % items.length;
      items[currentActiveIndex].classList.add('suggest-active');
      items[currentActiveIndex].scrollIntoView({ block: 'nearest' });
    } else if (e.key === 'ArrowUp') {
      e.preventDefault();
      if (active) active.classList.remove('suggest-active');
      currentActiveIndex = (currentActiveIndex - 1 + items.length) % items.length;
      items[currentActiveIndex].classList.add('suggest-active');
      items[currentActiveIndex].scrollIntoView({ block: 'nearest' });
    } else if (e.key === 'Enter' && active) {
      e.preventDefault();
      selectRecipe(active.getAttribute('data-name'));
    }
  });

  function selectRecipe(name) {
    if (!name || !recipes[name]) return;
    showLoader();
    setTimeout(() => {
      window.location.href = recipes[name];
    }, 500);
  }

  document.getElementById('searchBtn').addEventListener('click', () => {
    const query = input.value.trim().toLowerCase();
    if (!query) {
      showNotFoundModal("(empty search)");
      return;
    }
    const matchedKey = Object.keys(recipes).find(key => key.includes(query));
    if (matchedKey) {
      showLoader();
      setTimeout(() => {
        window.location.href = recipes[matchedKey];
      }, 500);
    } else {
      showNotFoundModal(query);
    }
  });
</script>

</body>
</html>