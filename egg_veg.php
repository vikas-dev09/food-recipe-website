<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Foodies - Juice & Egg Recipes</title>
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

<!-- Main Content -->
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

  <!-- Egg Recipes Grid -->
  <div class="grid-container">
    <!-- Egg Recipe Cards -->
    <div class="card">
      <img src="food_image/egg/eg1.jpg" alt="Egg Curry" />
      <div class="card-body">
        <h5 class="card-title">Egg Curry</h5>
        <p class="card-text">Hard-boiled eggs simmered in rich, spicy curry.</p>
        <a href="egg/e1.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg2.webp" alt="Masala Omelette" />
      <div class="card-body">
        <h5 class="card-title">Masala Omelette</h5>
        <p class="card-text">Fluffy eggs cooked with onions, tomatoes, and spices.</p>
        <a href="egg/e2.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg3.jpg" alt="Egg Bhurji" />
      <div class="card-body">
        <h5 class="card-title">Egg Bhurji</h5>
        <p class="card-text">Scrambled eggs with onions, peppers, and Indian spices.</p>
        <a href="egg/e3.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg4.jpg" alt="Egg Biryani" />
      <div class="card-body">
        <h5 class="card-title">Egg Biryani</h5>
        <p class="card-text">Aromatic spiced rice layered with boiled eggs and gravy.</p>
        <a href="egg/e4.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg5.webp" alt="Egg Pakora" />
      <div class="card-body">
        <h5 class="card-title">Egg Pakora</h5>
        <p class="card-text">Deep-fried spiced egg fritters perfect as snacks.</p>
        <a href="egg/e5.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg6.jpg" alt="Egg Tikka" />
      <div class="card-body">
        <h5 class="card-title">Egg Tikka</h5>
        <p class="card-text">Grilled marinated eggs with smoky tandoori flavors.</p>
        <a href="egg/e6.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg7.webp" alt="Egg Paratha" />
      <div class="card-body">
        <h5 class="card-title">Egg Paratha</h5>
        <p class="card-text">Flatbread stuffed with spiced eggs, perfect breakfast.</p>
        <a href="egg/e7.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg8.jpg" alt="Anda Pulao" />
      <div class="card-body">
        <h5 class="card-title">Anda Pulao</h5>
        <p class="card-text">Fragrant rice cooked with boiled eggs and spices.</p>
        <a href="egg/e8.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg9.jpeg" alt="Egg Sandwich" />
      <div class="card-body">
        <h5 class="card-title">Egg Sandwich</h5>
        <p class="card-text">Soft bread layered with boiled eggs, veggies, and sauces.</p>
        <a href="egg/e9.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg10.jpeg" alt="Egg Chaat" />
      <div class="card-body">
        <h5 class="card-title">Egg Chaat</h5>
        <p class="card-text">Spiced eggs with onions, tomatoes, and tangy chutney.</p>
        <a href="egg/e10.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg11.webp" alt="Boiled Eggs with Spices" />
      <div class="card-body">
        <h5 class="card-title">Boiled Eggs with Spices</h5>
        <p class="card-text">Simple boiled eggs seasoned with aromatic Indian spices.</p>
        <a href="egg/e11.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg12.jpg" alt="Egg Masala Toast" />
      <div class="card-body">
        <h5 class="card-title">Egg Masala Toast</h5>
        <p class="card-text">Toasted bread topped with spiced scrambled eggs.</p>
        <a href="egg/e12.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg13.jpg" alt="Egg Kofta Curry" />
      <div class="card-body">
        <h5 class="card-title">Egg Kofta Curry</h5>
        <p class="card-text">Soft egg balls cooked in rich and creamy curry.</p>
        <a href="egg/e13.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg14.jpg" alt="Egg Dhokla" />
      <div class="card-body">
        <h5 class="card-title">Egg Dhokla</h5>
        <p class="card-text">Steamed savory egg cakes flavored with spices.</p>
        <a href="egg/e14.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg15.webp" alt="Anda Fry" />
      <div class="card-body">
        <h5 class="card-title">Anda Fry</h5>
        <p class="card-text">Spicy fried eggs, crispy on the outside, soft inside.</p>
        <a href="egg/e15.php" class="view-btn">View Recipe</a>
      </div>
    </div>
    <div class="card">
      <img src="food_image/egg/eg16.jpg" alt="Egg Roll" />
      <div class="card-body">
        <h5 class="card-title">Egg Roll</h5>
        <p class="card-text">Wrapped flatbread with spiced eggs and veggies inside.</p>
        <a href="egg/e16.php" class="view-btn">View Recipe</a>
      </div>
    </div>
  </div>

  <!-- Juice Recipes Grid -->
  

  <!-- Footer -->
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
    }, 500);
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