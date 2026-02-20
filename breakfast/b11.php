<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Sabudana Khichdi | Foodies</title>
<style>
  * { box-sizing: border-box; }
  body { font-family: Arial, sans-serif; margin: 0; background-color: #fffaf3; color: #333; line-height: 1.6; }
  .land { width: 100%; background-color: saddlebrown; display: flex; align-items: center; justify-content: space-between; padding: 15px 30px; color: white; flex-wrap: wrap; }
  .brand { font-size: 26px; font-weight: bold; }
  .nav-section { display: flex; align-items: center; gap: 15px; flex-wrap: wrap; }
  .nav-links { display: flex; gap: 20px; flex-wrap: wrap; }
  .nav-links a { color: white; text-decoration: none; font-size: 18px; padding-bottom: 4px; border-bottom: 2px solid transparent; transition: all 0.3s ease; }
  .nav-links a:hover { color: gold; border-bottom: 2px solid white; }
  .lang-btn { background: linear-gradient(135deg, #ffcc70, #ffb347); color: #4b2e05; padding: 6px 16px; border-radius: 20px; font-weight: bold; font-size: 14px; border: none; cursor: pointer; box-shadow: 0 4px 10px rgba(0,0,0,0.2); transition: all 0.3s ease; }
  .lang-btn:hover { background: linear-gradient(135deg, #ffd580, #ffc266); transform: translateY(-2px) scale(1.05); box-shadow: 0 6px 14px rgba(0,0,0,0.3); }
  .container { max-width: 900px; margin: 40px auto; padding: 30px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); position: relative; }
  .heart-btn { position: absolute; top: 20px; right: 25px; background: none; border: none; font-size: 36px; cursor: pointer; color: #ccc; transition: all 0.3s ease; }
  .heart-btn.active { color: red; transform: scale(1.2); }
  .heart-btn:hover { transform: scale(1.1); }
  h1 { text-align: center; color: saddlebrown; font-size: 32px; margin-top: 10px; }
  .food-img { display: flex; justify-content: center; margin: 30px 0; }
  .food-img img { width: 80%; max-width: 500px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); }
  h2 { color: saddlebrown; border-bottom: 2px solid #e2c097; padding-bottom: 5px; margin-top: 30px; }
  ul, ol { padding-left: 25px; }
  ul { list-style-type: square; }
  table { width: 100%; border-collapse: collapse; margin: 20px 0; }
  table, th, td { border: 1px solid #ddd; }
  th, td { padding: 10px; text-align: left; }
  th { background-color: #f5e0c3; }
  .video-section { text-align: center; margin-top: 30px; }
  .video-section button { background: linear-gradient(135deg, #ff7e5f, #feb47b); color: white; padding: 14px 30px; border-radius: 30px; font-weight: 600; font-size: 18px; cursor: pointer; border: none; box-shadow: 0 8px 16px rgba(0,0,0,0.25); transition: all 0.3s ease; }
  .video-section button:hover { background: linear-gradient(135deg, #feb47b, #ff7e5f); transform: translateY(-3px) scale(1.05); box-shadow: 0 12px 24px rgba(0,0,0,0.3); }
  .footer { background-color: saddlebrown; color: white; text-align: center; padding: 15px 0; font-size: 16px; margin-top: 40px; }
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
  <h1>Sabudana Khichdi</h1>
  <div class="food-img">
 <img src="/food_recipe/food_image/break/bk11.jpeg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);" alt="bk11">
</div>  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>1 cup sabudana (tapioca pearls)</li>
      <li>1 potato (boiled and cubed)</li>
      <li>2 tbsp roasted peanuts (crushed)</li>
      <li>1 green chili (chopped)</li>
      <li>1/2 tsp cumin seeds</li>
      <li>2 tbsp ghee or oil</li>
      <li>Salt and lemon juice to taste</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>1 ಕಪ್ ಸಬ್ಬಕ್ಕಿ</li>
      <li>1 ಆಲೂಗಡ್ಡೆ (ಬೇಯಿಸಿದ ಮತ್ತು ಕತ್ತರಿಸಿದ)</li>
      <li>2 ಟೇಬಲ್ ಸ್ಪೂನ್ ಬೇಯಿಸಿದ ಕಡಲೆಕಾಯಿ (ಕುಟ್ಟಿ ಮಾಡಿದ)</li>
      <li>1 ಹಸಿಮೆಣಸು (ಕತ್ತರಿಸಿದ)</li>
      <li>1/2 ಟೀ ಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
      <li>2 ಟೇಬಲ್ ಸ್ಪೂನ್ ತುಪ್ಪ ಅಥವಾ ಎಣ್ಣೆ</li>
      <li>ಉಪ್ಪು ಮತ್ತು ನಿಂಬೆ ರಸ ರುಚಿಗೆ ತಕ್ಕಷ್ಟು</li>
    </ul>

    <h2 data-lang="en">Steps to Make Sabudana Khichdi</h2>
    <h2 data-lang="kn" style="display:none;">ಸಬ್ಬಕ್ಕಿ ಖಿಚ್ಡಿ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Soak sabudana in water for 4–5 hours, then drain.</li>
      <li>Heat ghee, add cumin seeds and green chili.</li>
      <li>Add potatoes and sauté for 2–3 minutes.</li>
      <li>Add soaked sabudana, peanuts, and salt. Mix well.</li>
      <li>Cook for 5–6 minutes until pearls turn translucent.</li>
      <li>Garnish with lemon juice and coriander. Serve hot.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಸಬ್ಬಕ್ಕಿಯನ್ನು 4–5 ಗಂಟೆ ನೀರಿನಲ್ಲಿ ನೆನೆಸಿಟ್ಟು ನೀರು ಹಾಕಿ.</li>
      <li>ತುಪ್ಪ ಬಿಸಿ ಮಾಡಿ ಜೀರಿಗೆ, ಹಸಿಮೆಣಸು ಹಾಕಿ.</li>
      <li>ಆಲೂಗಡ್ಡೆ ಸೇರಿಸಿ 2–3 ನಿಮಿಷ ಹುರಿಯಿರಿ.</li>
      <li>ಸಬ್ಬಕ್ಕಿ, ಕಡಲೆಕಾಯಿ, ಉಪ್ಪು ಸೇರಿಸಿ ಕಲಸಿ.</li>
      <li>5–6 ನಿಮಿಷ ಬೇಯಿಸಿ ಸಬ್ಬಕ್ಕಿ ಪಾರದರ್ಶಕವಾದಾಗ ತೆಗೆದುಕೊಳ್ಳಿ.</li>
      <li>ನಿಂಬೆ ರಸ ಮತ್ತು ಕೊತ್ತಂಬರಿ ಹಾಕಿ ಬಿಸಿ ಬಿಸಿ ಸರ್ವ್ ಮಾಡಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition Information (per serving)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>300 kcal</td></tr>
      <tr><td>Protein</td><td>5 g</td></tr>
      <tr><td>Carbohydrates</td><td>45 g</td></tr>
      <tr><td>Fat</td><td>10 g</td></tr>
    </table>

    <div class="video-section">
      <h2 data-lang="en">View Favorites</h2>
      <button onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
  const heartBtn = document.getElementById("heartBtn");
  const recipeData = { id: 75, name: "Sabudana Khichdi", link: "breakfast/b11.php", image: "../food_image/breakfast/sabudana_khichdi.jpg" };
  let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
  if (favorites.find(r => r.id === recipeData.id)) { heartBtn.classList.add("active"); heartBtn.textContent = "❤️"; }

  heartBtn.addEventListener("click", () => {
    let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
    const exists = favorites.find(r => r.id === recipeData.id);
    if (exists) { favorites = favorites.filter(r => r.id !== recipeData.id); heartBtn.classList.remove("active"); heartBtn.textContent = "♡"; }
    else { favorites.push(recipeData); heartBtn.classList.add("active"); heartBtn.textContent = "❤️"; }
    localStorage.setItem("favorites", JSON.stringify(favorites));
  });

  const headerLangBtn = document.getElementById("headerLangBtn");
  let currentLang = localStorage.getItem("language") || "en";
  function updateLanguage() {
    document.querySelectorAll("#recipe-content [data-lang]").forEach(el => {
      el.style.display = el.getAttribute("data-lang") === currentLang ? "" : "none";
    });
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
