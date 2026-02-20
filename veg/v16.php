<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Thepla | Foodies</title>
<style>
  * { box-sizing: border-box; }
  body { font-family: Arial, sans-serif; margin: 0; background-color: #fffef5; color: #333; line-height: 1.6; }

  .land { width: 100%; background-color: saddlebrown; display: flex; align-items: center; justify-content: space-between; padding: 15px 30px; color: white; flex-wrap: wrap; }
  .brand { font-size: 26px; font-weight: bold; }
  .nav-section { display: flex; align-items: center; gap: 15px; flex-wrap: wrap; }
  .nav-links { display: flex; gap: 20px; flex-wrap: wrap; }
  .nav-links a { color: white; text-decoration: none; font-size: 18px; padding-bottom: 4px; border-bottom: 2px solid transparent; transition: all 0.3s ease; }
  .nav-links a:hover { color: gold; border-bottom: 2px solid white; }

  .lang-btn { background: linear-gradient(135deg, #ffec99, #ffd84d); color: #4b2e05; padding: 6px 16px; border-radius: 20px; font-weight: bold; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.2); transition: all 0.3s ease; }
  .lang-btn:hover { background: linear-gradient(135deg, #fff0b3, #ffe066); transform: translateY(-2px) scale(1.05); box-shadow: 0 6px 14px rgba(0,0,0,0.3); }

  .container { max-width: 900px; margin: 40px auto; padding: 30px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); position: relative; }
  .heart-btn { position: absolute; top: 20px; right: 25px; background: none; border: none; font-size: 36px; cursor: pointer; color: #ccc; transition: all 0.3s ease; }
  .heart-btn.active { color: red; transform: scale(1.2); }
  .heart-btn:hover { transform: scale(1.1); }

  h1 { text-align: center; color: saddlebrown; font-size: 32px; margin-top: 10px; }
  .food-img { display: flex; justify-content: center; margin: 30px 0; }
  .food-img img { width: 80%; max-width: 500px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }

  h2 { color: saddlebrown; border-bottom: 2px solid #f3da8e; padding-bottom: 5px; margin-top: 30px; }
  ul { list-style-type: square; padding-left: 25px; }
  ol { padding-left: 25px; }
  table { width: 100%; border-collapse: collapse; margin: 20px 0; }
  table, th, td { border: 1px solid #ddd; }
  th, td { padding: 10px; text-align: left; }
  th { background-color: #fff3cd; }

  .video-section { text-align: center; margin-top: 30px; }
  .fav-btn { background: linear-gradient(135deg, #ff7e5f, #feb47b); color: #fff; padding: 16px 36px; border-radius: 40px; font-weight: 700; font-size: 20px; cursor: pointer; border: none; box-shadow: 0 6px 18px rgba(0,0,0,0.25); transition: all 0.3s ease; display: inline-flex; align-items: center; gap: 10px; }
  .fav-btn:hover { background: linear-gradient(135deg, #feb47b, #ff7e5f); transform: translateY(-4px) scale(1.07); box-shadow: 0 12px 28px rgba(0,0,0,0.3); }
  .fav-btn:active { transform: scale(0.98); box-shadow: 0 4px 12px rgba(0,0,0,0.2); }

  .footer { background-color: saddlebrown; color: white; text-align: center; padding: 15px 0; font-size: 16px; margin-top: 40px; }

  @media (max-width: 768px) {
    .land { flex-direction: column; align-items: flex-start; padding: 20px; gap: 15px; }
    .nav-section { flex-direction: column; gap: 10px; width: 100%; }
    .container { padding: 20px; }
    .heart-btn { top: 15px; right: 15px; }
  }
</style>
</head>
<body>

<div class="land">
  <div class="brand" style="font-size:26px; font-weight:bold; display:flex; align-items:center;">
    <img src="/food_recipe/logo.png" alt="Foodies Logo" class="logo" style="height:65px; margin-right:12px;"> 
    Foodies
  </div>

  <div class="nav-section">
    <div class="nav-links">
      <a href="../landing.php">Home</a>
      <a href="../catagories.php">Categories</a>
      <a href="../contact.php">Contact Us</a>
      <a href="../about.php">About Us</a>
    </div>
    <button class="lang-btn" id="headerLangBtn">🏴 ENG / ಕನ್ನಡ</button>
  </div>
</div>


<div class="container">
  <button class="heart-btn" id="heartBtn">♡</button>
  <h1>Thepla</h1>
  <div class="food-img">
<img src="/food_recipe/food_image/vegs/veg16.jpg" style="width:300px;height:300px;object-fit:cover;box-shadow:0 4px 8px rgba(0,0,0,1.3);">
  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>2 cups wheat flour</li>
      <li>1/2 cup grated bottle gourd (dudhi)</li>
      <li>1 tsp turmeric powder</li>
      <li>1 tsp red chili powder</li>
      <li>1 tsp cumin seeds</li>
      <li>Salt to taste</li>
      <li>2 tbsp oil</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>2 ಕಪ್ ಗೋಧಿ ಹಿಟ್ಟು</li>
      <li>1/2 ಕಪ್ ತುಪ್ಪ ತುರಿದ ಚುಚ್ಚಿ (ದುಧಿ)</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಹಳದಿ ಪುಡಿ</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಕೆಂಪು ಮೆಣಸು ಪುಡಿ</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
      <li>ಉಪ್ಪು ರುಚಿಗೆ ತಕ್ಕಂತೆ</li>
      <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಎಣ್ಣೆ</li>
    </ul>

    <h2 data-lang="en">Steps to Make Thepla</h2>
    <h2 data-lang="kn" style="display:none;">ತೆಪ್ಲಾ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Mix all ingredients and knead into soft dough.</li>
      <li>Divide into small balls and roll into thin circles.</li>
      <li>Cook on a hot griddle until golden on both sides.</li>
      <li>Serve hot with yogurt or pickle.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಎಲ್ಲಾ ಸಾಮಗ್ರಿಗಳನ್ನು ಕಲಸಿ ಮೃದುವಾದ ಹಿಟ್ಟಿನಲ್ಲಿ ಮಿಶ್ರಣ ಮಾಡಿ.</li>
      <li>ಸಣ್ಣ ಗೋಡೆಯಾಗಿ ಭಾಗಿಸಿ ಸಣ್ಣ ವೃತ್ತಾಕಾರದ ರೋಲ್ ಮಾಡಿ.</li>
      <li>ಹಾಟ್ ಗ್ರಿಡಲ್ ಮೇಲೆ ಎರಡೂ ಬದಿಗಳೂ ಬಂಗಾರ ಬಣ್ಣ ತರುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
      <li>ಬಿಸಿಯಾಗಿ ದಹಿ ಅಥವಾ achar ಜೊತೆಗೆ ಸೇವಿಸಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition Information (per serving)</h2>
    <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>250 kcal</td></tr>
      <tr><td>Carbohydrates</td><td>48 g</td></tr>
      <tr><td>Protein</td><td>6 g</td></tr>
      <tr><td>Fat</td><td>5 g</td></tr>
      <tr><td>Fiber</td><td>4 g</td></tr>
    </table>
    <table data-lang="kn" style="display:none;">
      <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
      <tr><td>ಕ್ಯಾಲೊರಿ</td><td>250 kcal</td></tr>
      <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>48 g</td></tr>
      <tr><td>ಪ್ರೋಟೀನ್</td><td>6 g</td></tr>
      <tr><td>ಕೊಬ್ಬು</td><td>5 g</td></tr>
      <tr><td>ಫೈಬರ್</td><td>4 g</td></tr>
    </table>

    <div class="video-section">
      <h2 data-lang="en">View Favorites</h2>
      <h2 data-lang="kn" style="display:none;">ಪ್ರಿಯತೆ ನೋಡಿ</h2>
      <button class="fav-btn" onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
      <button class="fav-btn" onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">▶ ಪ್ರಿಯತೆ ❤️</button>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
  const heartBtn = document.getElementById("heartBtn");
  const recipeData = { id: 126, name: "Thepla", link: "veg/v14.php", image: "../food_image/recipes/thepla.jpg" };
  let favorites = JSON.parse(localStorage.getItem("favorites")) || [];

  if (favorites.find(r => r.id === recipeData.id)) {
    heartBtn.classList.add("active"); heartBtn.textContent = "❤️";
  } else {
    heartBtn.classList.remove("active"); heartBtn.textContent = "♡";
  }

  heartBtn.addEventListener("click", () => {
    let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
    const exists = favorites.find(r => r.id === recipeData.id);
    if (exists) {
      favorites = favorites.filter(r => r.id !== recipeData.id);
      heartBtn.classList.remove("active");
      heartBtn.textContent = "♡";
    } else {
      favorites.push(recipeData);
      heartBtn.classList.add("active");
      heartBtn.textContent = "❤️";
    }
    localStorage.setItem("favorites", JSON.stringify(favorites));
  });

  const headerLangBtn = document.getElementById("headerLangBtn");
  let currentLang = localStorage.getItem("language") || "en";

  function updateLanguage() {
    document.querySelectorAll("#recipe-content [data-lang]").forEach(el => {
      el.style.display = el.getAttribute("data-lang") === currentLang ? "" : "none";
    });
    headerLangBtn.textContent = currentLang === "en" ? "🏴 ENG / ಕನ್ನಡ" : "🇮🇳 ಕನ್ನಡ / ENG";
  }

  updateLanguage();

  headerLangBtn.addEventListener("click", () => {
    currentLang = currentLang === "en" ? "kn" : "en";
    localStorage.setItem("language", currentLang);
    updateLanguage();
  });
</script>

</body>
</html>
