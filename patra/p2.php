<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Shrimp Scampi | Foodies</title>
<style>
/* Same CSS as Veggie Stir-Fry page */
* { box-sizing: border-box; }
body { font-family: Arial, sans-serif; margin:0; background-color:#fffaf3; color:#333; line-height:1.6; }
.land { width:100%; background-color:saddlebrown; display:flex; align-items:center; justify-content:space-between; padding:15px 30px; color:white; flex-wrap:wrap; }
.brand { font-size:26px; font-weight:bold; }
.nav-section { display:flex; align-items:center; gap:15px; flex-wrap:wrap; }
.nav-links { display:flex; gap:20px; flex-wrap:wrap; }
.nav-links a { color:white; text-decoration:none; font-size:18px; padding-bottom:4px; border-bottom:2px solid transparent; transition:all 0.3s ease; }
.nav-links a:hover { color:gold; border-bottom:2px solid white; }
.lang-btn { background:linear-gradient(135deg,#ffcc70,#ffb347); color:#4b2e05; padding:6px 16px; border-radius:20px; font-weight:bold; font-size:14px; border:none; cursor:pointer; box-shadow:0 4px 10px rgba(0,0,0,.2); transition:all .3s ease; }
.lang-btn:hover { background:linear-gradient(135deg,#ffd580,#ffc266); transform:translateY(-2px) scale(1.05); box-shadow:0 6px 14px rgba(0,0,0,.3); }
.container { max-width:900px; margin:40px auto; padding:30px; background-color:#fff; border-radius:12px; box-shadow:0 4px 12px rgba(0,0,0,.1); position:relative; }
.heart-btn { position:absolute; top:20px; right:25px; background:none; border:none; font-size:36px; cursor:pointer; color:#ccc; transition:all 0.3s ease; }
.heart-btn.active { color:red; transform:scale(1.2); }
.heart-btn:hover { transform:scale(1.1); }
h1 { text-align:center; color:saddlebrown; font-size:32px; margin-top:10px; }
.food-img { display:flex; justify-content:center; margin:30px 0; }
.food-img img { width:80%; max-width:500px; border-radius:15px; box-shadow:0 4px 8px rgba(0,0,0,.2); }
h2 { color:saddlebrown; border-bottom:2px solid #e2c097; padding-bottom:5px; margin-top:30px; }
ul, ol { padding-left:25px; }
ul { list-style-type:square; }
table { width:100%; border-collapse:collapse; margin:20px 0; }
table, th, td { border:1px solid #ddd; }
th, td { padding:10px; text-align:left; }
th { background-color:#f5e0c3; }
.video-section { text-align:center; margin-top:30px; }
.video-section button { background:linear-gradient(135deg,#ff7e5f,#feb47b); color:white; padding:14px 30px; border-radius:30px; font-weight:600; font-size:18px; cursor:pointer; border:none; box-shadow:0 8px 16px rgba(0,0,0,.25); transition:all 0.3s ease; }
.video-section button:hover { background:linear-gradient(135deg,#feb47b,#ff7e5f); transform:translateY(-3px) scale(1.05); box-shadow:0 12px 24px rgba(0,0,0,.3); }
.footer { background-color:saddlebrown; color:white; text-align:center; padding:15px 0; font-size:16px; margin-top:40px; }
@media(max-width:768px){.land{flex-direction:column;align-items:flex-start;padding:20px;gap:15px}.nav-section{flex-direction:column;gap:10px;width:100%}.container{padding:20px}.heart-btn{top:15px;right:15px}}
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
  <h1>Shrimp Scampi</h1>
  <div class="food-img">
<img src="/food_recipe/food_image/para/pa2.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>200g shrimp</li>
      <li>3 cloves garlic, minced</li>
      <li>3 tbsp butter</li>
      <li>2 tbsp olive oil</li>
      <li>1 tbsp lemon juice</li>
      <li>Salt & pepper to taste</li>
      <li>Fresh parsley for garnish</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>200 ಗ್ರಾಂ ಚೀಗೆ</li>
      <li>3 ಬೆಳ್ಳುಳ್ಳಿ ಹಣ್ಣು, ಸುಪ್ಪಿಸಿ</li>
      <li>3 ಟೇಬಲ್ ಸ್ಪೂನ್ ಬೆಣ್ಣೆ</li>
      <li>2 ಟೇಬಲ್ ಸ್ಪೂನ್ ಒಲಿವ್ ಎಣ್ಣೆ</li>
      <li>1 ಟೇಬಲ್ ಸ್ಪೂನ್ ಲೆಮನ್ ಜ್ಯೂಸ್</li>
      <li>ಉಪ್ಪು & ಮೆಣಸು ರುಚಿಗೆ</li>
      <li>ಹೊಸ ಪರ್ಸ್ಲಿ</li>
    </ul>

    <h2 data-lang="en">Steps</h2>
    <h2 data-lang="kn" style="display:none;">ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Melt butter and oil in a pan.</li>
      <li>Add garlic and sauté until fragrant.</li>
      <li>Add shrimp, cook until pink.</li>
      <li>Stir in lemon juice, salt, and pepper.</li>
      <li>Garnish with parsley and serve with pasta or bread.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಪ್ಯಾನ್‌ನಲ್ಲಿ ಬೆಣ್ಣೆ ಮತ್ತು ಎಣ್ಣೆ ಕರಗಿಸಿ.</li>
      <li>ಬೆಳ್ಳುಳ್ಳಿ ಸೇರಿಸಿ ಸುಡಿಸಿ.</li>
      <li>ಚೀಗೆ ಸೇರಿಸಿ ಬಾಡು ಬಣ್ಣ ಬರುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
      <li>ಲೆಮನ್ ಜ್ಯೂಸ್, ಉಪ್ಪು ಮತ್ತು ಮೆಣಸು ಸೇರಿಸಿ ಕಲಸಿ.</li>
      <li>ಪರ್ಸ್ಲಿ ಹಾಕಿ ಪಾಸ್ತಾ ಅಥವಾ ರೊಟ್ಟಿ ಜೊತೆಗೆ ಬಿಸಿ ಸೇವಿಸಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition (per serving)</h2>
    <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>240 kcal</td></tr>
      <tr><td>Protein</td><td>22 g</td></tr>
      <tr><td>Carbs</td><td>4 g</td></tr>
      <tr><td>Fat</td><td>16 g</td></tr>
    </table>
    <table data-lang="kn" style="display:none;">
      <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
      <tr><td>ಕ್ಯಾಲೊರಿ</td><td>240 kcal</td></tr>
      <tr><td>ಪ್ರೋಟೀನ್</td><td>22 g</td></tr>
      <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>4 g</td></tr>
      <tr><td>ಕೊಬ್ಬು</td><td>16 g</td></tr>
    </table>

    <div class="video-section">
      <button onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
      <button onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">▶ ಪ್ರಿಯತೆ ❤️</button>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
const heartBtn = document.getElementById("heartBtn");
const recipeData = { id: 82, name: "Shrimp Scampi", link: "patra/p2.php", image: "../food_image/patra/shrimp_scampi.jpg" };
let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
if(favorites.find(r => r.id === recipeData.id)) { heartBtn.classList.add("active"); heartBtn.textContent = "❤️"; }
heartBtn.addEventListener("click", () => {
  let f = JSON.parse(localStorage.getItem("favorites")) || [];
  const exists = f.find(r => r.id === recipeData.id);
  if(exists) { f = f.filter(r => r.id !== recipeData.id); heartBtn.classList.remove("active"); heartBtn.textContent = "♡"; }
  else { f.push(recipeData); heartBtn.classList.add("active"); heartBtn.textContent = "❤️"; }
  localStorage.setItem("favorites", JSON.stringify(f));
});

const headerLangBtn = document.getElementById("headerLangBtn");
let currentLang = localStorage.getItem("language") || "en";
function updateLanguage() {
  document.querySelectorAll("#recipe-content [data-lang]").forEach(el => {
    el.style.display = el.getAttribute("data-lang") === currentLang ? "" : "none";
  });
  headerLangBtn.textContent = currentLang==="en"?"🏴 ENG / ಕನ್ನಡ":"🇮🇳 ಕನ್ನಡ / ENG";
}
updateLanguage();
headerLangBtn.addEventListener("click", () => { currentLang = currentLang==="en"?"kn":"en"; localStorage.setItem("language", currentLang); updateLanguage(); });
</script>

</body>
</html>
