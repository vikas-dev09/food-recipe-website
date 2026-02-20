<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Chicken Biryani | Foodies</title>
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
  <h1>Chicken Biryani</h1>
  <div class="food-img">
<img src="/food_recipe/food_image/nonveg/non1.jpeg"  style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);" alt="non1">
  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>500g chicken, cut into pieces</li>
      <li>2 cups basmati rice</li>
      <li>2 large onions, thinly sliced</li>
      <li>2 tomatoes, chopped</li>
      <li>1/2 cup yogurt</li>
      <li>2 tbsp ginger-garlic paste</li>
      <li>1/2 tsp turmeric powder</li>
      <li>1 tsp red chili powder</li>
      <li>1 tsp garam masala</li>
      <li>4 cups water</li>
      <li>Salt to taste</li>
      <li>Fresh coriander and mint leaves</li>
      <li>2 tbsp ghee or oil</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>500 ಗ್ರಾಂ ಚಿಕನ್, ತುಂಡುಗಳಿಗೆ ಕತ್ತರಿಸಿ</li>
      <li>2 ಕಪ್ ಬಸ್ಮತಿ ಅಕ್ಕಿ</li>
      <li>2 ದೊಡ್ಡ ಈರುಳ್ಳಿ, ಸಣ್ಣ ತುಂಡುಗಳಾಗಿ ಕತ್ತರಿಸಿದ</li>
      <li>2 ಟೊಮೇಟೋ, ಚಿರುಗೊಂಡ</li>
      <li>1/2 ಕಪ್ ಮೊಸರು</li>
      <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್</li>
      <li>1/2 ಟೀಸ್ಪೂನ್ ಹಳದಿ ಪುಡಿ</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಮೆಣಸು ಪುಡಿ</li>
      <li>1 ಟೀಸ್ಪೂನ್ ಗರಂ ಮಸಾಲಾ</li>
      <li>4 ಕಪ್ ನೀರು</li>
      <li>ಉಪ್ಪು ರುಚಿಗೆ</li>
      <li>ಹಸಿರು ಕೊತ್ತಂಬರಿ ಮತ್ತು ಪುದೀನಾ ಎಲೆಗಳು</li>
      <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ghe ಅಥವಾ ಎಣ್ಣೆ</li>
    </ul>

    <h2 data-lang="en">Steps to Make Chicken Biryani</h2>
    <h2 data-lang="kn" style="display:none;">ಚಿಕನ್ ಬಿರಿಯಾನಿ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Wash and soak rice for 30 minutes. Drain.</li>
      <li>Heat ghee/oil in a large pan, fry onions until golden brown. Remove half for garnish.</li>
      <li>Add ginger-garlic paste, tomatoes, turmeric, chili powder, and salt. Cook until oil separates.</li>
      <li>Add chicken pieces and yogurt. Cook until chicken is tender.</li>
      <li>Boil 4 cups of water, add soaked rice and cook until 70% done. Drain.</li>
      <li>Layer chicken and partially cooked rice. Sprinkle fried onions, coriander, mint, and garam masala.</li>
      <li>Cover tightly and cook on low heat for 20 minutes (dum cooking).</li>
      <li>Serve hot with raita or salad.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಅಕ್ಕಿಯನ್ನು ತೊಳಸಿ 30 ನಿಮಿಷ ನೆನೆಸಿರಿ. ನೀರು ഒഴಿಸಿ.</li>
      <li>ದೊಡ್ಡ ಪ್ಯಾನ್‌ನಲ್ಲಿ ghe/ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ, ಈರುಳ್ಳಿ ಹಳದಿ ಬಣ್ಣಕ್ಕೆ ಬಿಸಿ ಮಾಡಿ. ಅರ್ಧವನ್ನು ಅಲಂಕಾರದಿಗಾಗಿ ತೆಗೆದು ಹಾಕಿ.</li>
      <li>ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್, ಟೊಮೇಟೋ, ಹಳದಿ, ಮೆಣಸು ಪುಡಿ, ಉಪ್ಪು ಸೇರಿಸಿ. ಎಣ್ಣೆ ಬೇರ್ಪಡುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
      <li>ಚಿಕನ್ ತುಂಡುಗಳು ಮತ್ತು ಮೊಸರು ಸೇರಿಸಿ. ಚಿಕನ್ ಸೊಗಸಾಗಿ ಬೇಯಿಸು.</li>
      <li>4 ಕಪ್ ನೀರು ಕುದಿಸಿ, ನೆನೆಸಿದ ಅಕ್ಕಿ ಸೇರಿಸಿ 70% ಬೇಯಿಸಿ. ನೀರು ഒഴಿಸಿ.</li>
      <li>ಚಿಕನ್ ಮತ್ತು ಅರ್ಧ ಬೇಯಿಸಿದ ಅಕ್ಕಿ ಲೇಯರ್ ಮಾಡಿ. ಹಳದಿ ಈರುಳ್ಳಿ, ಕೊತ್ತಂಬರಿ, ಪುದೀನಾ, ಗರಂ ಮಸಾಲಾ ಸಿಂಪಡಿಸಿ.</li>
      <li>ಮುಚ್ಚಿ, ಕಡಿಮೆ ಬಿಸಿ 20 ನಿಮಿಷ (dum cooking) ಮಾಡಿ.</li>
      <li>ರೈತಾ ಅಥವಾ ಸ್ಯಾಲಡ್ ಜೊತೆ ಬಿಸಿ ಬಿಸಿ ಸೇವಿಸಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition Information (per serving)</h2>
    <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>450 kcal</td></tr>
      <tr><td>Protein</td><td>25 g</td></tr>
      <tr><td>Carbohydrates</td><td>50 g</td></tr>
      <tr><td>Fat</td><td>15 g</td></tr>
      <tr><td>Sodium</td><td>600 mg</td></tr>
    </table>
    <table data-lang="kn" style="display:none;">
      <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
      <tr><td>ಕ್ಯಾಲೊರಿ</td><td>450 kcal</td></tr>
      <tr><td>ಪ್ರೋಟೀನ್</td><td>25 g</td></tr>
      <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>50 g</td></tr>
      <tr><td>ಕೊಬ್ಬು</td><td>15 g</td></tr>
      <tr><td>ಸೋಡಿಯಂ</td><td>600 mg</td></tr>
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
  const recipeData = { id: 49, name: "Chicken Biryani", link: "nonveg/dish1.php", image: "../food_image/chicken/chicken_biryani.jpg" };
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
