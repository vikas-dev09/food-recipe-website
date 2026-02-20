<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Egg Kofta Curry | Foodies</title>
<style>
  * { box-sizing: border-box; }
  body { font-family: Arial, sans-serif; margin: 0; background-color: #fffaf3; color: #333; line-height: 1.6; }

  .land {
    width: 100%;
    background-color: saddlebrown;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 30px;
    color: white;
    flex-wrap: wrap;
  }
  .brand { font-size: 26px; font-weight: bold; }
  .nav-section { display: flex; align-items: center; gap: 15px; flex-wrap: wrap; }
  .nav-links { display: flex; gap: 20px; flex-wrap: wrap; }
  .nav-links a { color: white; text-decoration: none; font-size: 18px; padding-bottom: 4px; border-bottom: 2px solid transparent; transition: all 0.3s ease; }
  .nav-links a:hover { color: gold; border-bottom: 2px solid white; }

  .lang-btn {
    background: linear-gradient(135deg, #ffcc70, #ffb347);
    color: #4b2e05;
    padding: 6px 16px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 14px;
    border: none;
    cursor: pointer;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    transition: all 0.3s ease;
  }
  .lang-btn:hover {
    background: linear-gradient(135deg, #ffd580, #ffc266);
    transform: translateY(-2px) scale(1.05);
    box-shadow: 0 6px 14px rgba(0,0,0,0.3);
  }

  .container {
    max-width: 900px; margin: 40px auto; padding: 30px;
    background-color: #fff; border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1); position: relative;
  }
  .heart-btn {
    position: absolute; top: 20px; right: 25px; background: none;
    border: none; font-size: 36px; cursor: pointer; color: #ccc;
    transition: all 0.3s ease;
  }
  .heart-btn.active { color: red; transform: scale(1.2); }
  .heart-btn:hover { transform: scale(1.1); }

  h1 { text-align: center; color: saddlebrown; font-size: 32px; margin-top: 10px; }
  .food-img { display: flex; justify-content: center; margin: 30px 0; }
  .food-img img { width: 80%; max-width: 500px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }

  h2 { color: saddlebrown; border-bottom: 2px solid #e2c097; padding-bottom: 5px; margin-top: 30px; }
  ul { list-style-type: square; padding-left: 25px; }
  ol { padding-left: 25px; }
  table { width: 100%; border-collapse: collapse; margin: 20px 0; }
  table, th, td { border: 1px solid #ddd; }
  th, td { padding: 10px; text-align: left; }
  th { background-color: #f5e0c3; }

  .video-section { text-align: center; margin-top: 30px; }
  .video-section button {
    background: linear-gradient(135deg, #ff7e5f, #feb47b);
    color: white;
    padding: 14px 30px;
    border-radius: 30px;
    font-weight: 600;
    font-size: 18px;
    cursor: pointer;
    border: none;
    box-shadow: 0 8px 16px rgba(0,0,0,0.25);
    transition: all 0.3s ease;
  }
  .video-section button:hover {
    background: linear-gradient(135deg, #feb47b, #ff7e5f);
    transform: translateY(-3px) scale(1.05);
    box-shadow: 0 12px 24px rgba(0,0,0,0.3);
  }

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
  <h1>Egg Kofta Curry</h1>
  <div class="food-img">
  <img src="/food_recipe/food_image/egg/eg13.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);" alt="e13">
  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>4 boiled eggs</li>
      <li>2 raw eggs</li>
      <li>2 medium onions (finely chopped)</li>
      <li>2 tomatoes (pureed)</li>
      <li>1 green chili (chopped)</li>
      <li>1 tbsp ginger-garlic paste</li>
      <li>2 tbsp gram flour (besan)</li>
      <li>1 tsp red chili powder</li>
      <li>1/2 tsp turmeric powder</li>
      <li>1 tsp garam masala</li>
      <li>1/2 tsp cumin seeds</li>
      <li>3 tbsp oil</li>
      <li>Salt to taste</li>
      <li>Fresh coriander leaves for garnish</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>4 ಉಪ್ಪು ಮೊಟ್ಟೆಗಳು</li>
      <li>2 ಕಚ್ಚಾ ಮೊಟ್ಟೆಗಳು</li>
      <li>2 ಮಧ್ಯಮ ಈರುಳ್ಳಿ (ಸೂಕ್ಷ್ಮವಾಗಿ ನುಗ್ಗಿಸಬೇಕು)</li>
      <li>2 ಟೊಮೇಟೋಗಳು (ಪ್ಯೂರಿ ಮಾಡಬೇಕು)</li>
      <li>1 ಹಸಿಮೆಣಸಿನಕಾಯಿ (ಚೂರುಮಾಡಿ)</li>
      <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್</li>
      <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕಡಲೆಹಿಟ್ಟು</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಮೆಣಸು ಪುಡಿ</li>
      <li>1/2 ಟೀಸ್ಪೂನ್ ಹಳದಿ ಪುಡಿ</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಗರಂ ಮಸಾಲಾ</li>
      <li>1/2 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
      <li>3 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಎಣ್ಣೆ</li>
      <li>ಉಪ್ಪು ರುಚಿಗೆ</li>
      <li>ಅಲಂಕಾರಕ್ಕೆ ಕೊತ್ತಂಬರಿ ಎಲೆಗಳು</li>
    </ul>

    <h2 data-lang="en">Steps to Make Egg Kofta Curry</h2>
    <h2 data-lang="kn" style="display:none;">ಎಗ್ ಕೊಫ್ತಾ ಕರಿಯ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Grate the boiled eggs and mix with raw eggs, salt, chili powder, and gram flour.</li>
      <li>Shape the mixture into small balls (koftas).</li>
      <li>Heat oil in a pan and fry the koftas until golden brown. Keep aside.</li>
      <li>In the same pan, add cumin seeds and let them splutter.</li>
      <li>Add onions and sauté until golden brown, then add ginger-garlic paste and cook.</li>
      <li>Add tomato puree, turmeric, chili powder, and salt. Cook until oil separates.</li>
      <li>Add water and simmer the curry for 5 minutes.</li>
      <li>Gently add the fried egg koftas into the curry and cook for 3–4 minutes.</li>
      <li>Garnish with coriander and serve hot with roti or rice.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಉಪ್ಪು ಮೊಟ್ಟೆಗಳನ್ನು ತುರಿದು ಅದಕ್ಕೆ ಕಚ್ಚಾ ಮೊಟ್ಟೆ, ಉಪ್ಪು, ಮೆಣಸು ಪುಡಿ ಮತ್ತು ಕಡಲೆಹಿಟ್ಟು ಸೇರಿಸಿ.</li>
      <li>ಮಿಶ್ರಣದಿಂದ ಸಣ್ಣ ಉಂಡೆಗಳಂತೆ ಮಾಡಿಕೊಳ್ಳಿ (ಕೊಫ್ತಾ).</li>
      <li>ಪ್ಯಾನ್‌ನಲ್ಲಿ ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ, ಕೊಫ್ತಾಗಳನ್ನು ಬಂಗಾರದ ಬಣ್ಣದವರೆಗೆ ಹುರಿಯಿರಿ. ಬದಿಗಿಟ್ಟು.</li>
      <li>ಅದೇ ಪ್ಯಾನ್‌ನಲ್ಲಿ ಜೀರಿಗೆ ಹಾಕಿ ಸಿಡಿಯಲು ಬಿಡಿ.</li>
      <li>ಈರುಳ್ಳಿ ಹಾಕಿ ಬಂಗಾರದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಬೇಯಿಸಿ, ನಂತರ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್ ಸೇರಿಸಿ.</li>
      <li>ಟೊಮೇಟೋ ಪ್ಯೂರಿ, ಹಳದಿ ಪುಡಿ, ಮೆಣಸು ಪುಡಿ ಮತ್ತು ಉಪ್ಪು ಸೇರಿಸಿ. ಎಣ್ಣೆ ಪ್ರತ್ಯೇಕವಾಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
      <li>ನೀರು ಹಾಕಿ 5 ನಿಮಿಷ ಸಿಮ್ಮರ್ ಮಾಡಿ.</li>
      <li>ಹುರಿದ ಕೊಫ್ತಾಗಳನ್ನು ಸೇರಿಸಿ ಮತ್ತು 3–4 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
      <li>ಕೊತ್ತಂಬರಿ ಎಲೆಗಳಿಂದ ಅಲಂಕರಿಸಿ ಬಿಸಿ ಬಿಸಿ ರೊಟ್ಟಿ ಅಥವಾ ಅನ್ನದೊಂದಿಗೆ ಸವಿಯಿರಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition Information (per serving)</h2>
    <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>350 kcal</td></tr>
      <tr><td>Protein</td><td>18 g</td></tr>
      <tr><td>Carbohydrates</td><td>10 g</td></tr>
      <tr><td>Fat</td><td>26 g</td></tr>
      <tr><td>Fiber</td><td>2 g</td></tr>
      <tr><td>Sodium</td><td>400 mg</td></tr>
    </table>
    <table data-lang="kn" style="display:none;">
      <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
      <tr><td>ಕ್ಯಾಲೊರಿ</td><td>350 kcal</td></tr>
      <tr><td>ಪ್ರೋಟೀನ್</td><td>18 g</td></tr>
      <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>10 g</td></tr>
      <tr><td>ಕೊಬ್ಬು</td><td>26 g</td></tr>
      <tr><td>ಫೈಬರ್</td><td>2 g</td></tr>
      <tr><td>ಸೋಡಿಯಂ</td><td>400 mg</td></tr>
    </table>

    <div class="video-section">
      <h2 data-lang="en">View Favorites</h2>
      <h2 data-lang="kn" style="display:none;">ಪ್ರಿಯತೆ ನೋಡಿ</h2>
      <button onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
      <button onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">▶ ಪ್ರಿಯತೆ ❤️</button>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
  const heartBtn = document.getElementById("heartBtn");
  const recipeData = { id: 13, name: "Egg Kofta Curry", link: "egg/e13.php", image: "../food_image/egg/egg_kofta_curry.jpg" };
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
