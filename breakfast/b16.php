<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Appam | Foodies</title>
<style>
*{box-sizing:border-box}body{font-family:Arial,sans-serif;margin:0;background-color:#fffaf3;color:#333;line-height:1.6}.land{width:100%;background-color:saddlebrown;display:flex;align-items:center;justify-content:space-between;padding:15px 30px;color:white;flex-wrap:wrap}.brand{font-size:26px;font-weight:bold}.nav-section{display:flex;align-items:center;gap:15px;flex-wrap:wrap}.nav-links{display:flex;gap:20px;flex-wrap:wrap}.nav-links a{color:white;text-decoration:none;font-size:18px;padding-bottom:4px;border-bottom:2px solid transparent;transition:all .3s ease}.nav-links a:hover{color:gold;border-bottom:2px solid white}.lang-btn{background:linear-gradient(135deg,#ffcc70,#ffb347);color:#4b2e05;padding:6px 16px;border-radius:20px;font-weight:bold;font-size:14px;border:none;cursor:pointer;box-shadow:0 4px 10px rgba(0,0,0,.2);transition:all .3s ease}.lang-btn:hover{background:linear-gradient(135deg,#ffd580,#ffc266);transform:translateY(-2px) scale(1.05);box-shadow:0 6px 14px rgba(0,0,0,.3)}.container{max-width:900px;margin:40px auto;padding:30px;background-color:#fff;border-radius:12px;box-shadow:0 4px 12px rgba(0,0,0,.1);position:relative}.heart-btn{position:absolute;top:20px;right:25px;background:none;border:none;font-size:36px;cursor:pointer;color:#ccc;transition:all .3s ease}.heart-btn.active{color:red;transform:scale(1.2)}.heart-btn:hover{transform:scale(1.1)}h1{text-align:center;color:saddlebrown;font-size:32px;margin-top:10px}.food-img{display:flex;justify-content:center;margin:30px 0}.food-img img{width:80%;max-width:500px;border-radius:15px;box-shadow:0 4px 8px rgba(0,0,0,.2)}h2{color:saddlebrown;border-bottom:2px solid #e2c097;padding-bottom:5px;margin-top:30px}ul{list-style-type:square;padding-left:25px}ol{padding-left:25px}table{width:100%;border-collapse:collapse;margin:20px 0}table,th,td{border:1px solid #ddd}th,td{padding:10px;text-align:left}th{background-color:#f5e0c3}.video-section{text-align:center;margin-top:30px}.video-section button{background:linear-gradient(135deg,#ff7e5f,#feb47b);color:white;padding:14px 30px;border-radius:30px;font-weight:600;font-size:18px;cursor:pointer;border:none;box-shadow:0 8px 16px rgba(0,0,0,.25);transition:all .3s ease}.video-section button:hover{background:linear-gradient(135deg,#feb47b,#ff7e5f);transform:translateY(-3px) scale(1.05);box-shadow:0 12px 24px rgba(0,0,0,.3)}.footer{background-color:saddlebrown;color:white;text-align:center;padding:15px 0;font-size:16px;margin-top:40px}@media(max-width:768px){.land{flex-direction:column;align-items:flex-start;padding:20px;gap:15px}.nav-section{flex-direction:column;gap:10px;width:100%}.container{padding:20px}.heart-btn{top:15px;right:15px}}
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
  <h1>Appam</h1>
  <div class="food-img">
 <img src="/food_recipe/food_image/break/bk16.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);" alt="bk16">  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>1 cup raw rice</li>
      <li>1/4 cup cooked rice</li>
      <li>1/2 cup grated coconut</li>
      <li>1/2 tsp dry yeast</li>
      <li>Salt and sugar to taste</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>1 ಕಪ್ ಅಕ್ಕಿ</li>
      <li>1/4 ಕಪ್ ಬೇಯಿಸಿದ ಅಕ್ಕಿ</li>
      <li>1/2 ಕಪ್ ತೆಂಗಿನ ತುರಿ</li>
      <li>1/2 ಟೀಸ್ಪೂನ್ ಡ್ರೈ ಈಸ್ಟ್</li>
      <li>ಉಪ್ಪು ಮತ್ತು ಸಕ್ಕರೆ ರುಚಿಗೆ</li>
    </ul>

    <h2 data-lang="en">Steps</h2>
    <h2 data-lang="kn" style="display:none;">ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Soak raw rice for 4 hours and grind with cooked rice and coconut.</li>
      <li>Add yeast, salt, and sugar; ferment overnight.</li>
      <li>Pour batter in appam pan and swirl for thin edges.</li>
      <li>Cook until soft in the center and crisp around.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಅಕ್ಕಿಯನ್ನು 4 ಗಂಟೆ ನೆನೆಸಿ, ಬೇಯಿಸಿದ ಅಕ್ಕಿ ಮತ್ತು ತೆಂಗಿನಕಾಯಿ ಸೇರಿಸಿ ರುಬ್ಬಿ.</li>
      <li>ಈಸ್ಟ್, ಉಪ್ಪು, ಸಕ್ಕರೆ ಸೇರಿಸಿ ರಾತ್ರಿ ಪೂರ್ತಿ ಹಿಟ್ಟನ್ನು ಹುರಿಯಲು ಬಿಡಿ.</li>
      <li>ಹಿಟ್ಟನ್ನು ಅಪ್ಪಂ ಪ್ಯಾನ್‌ನಲ್ಲಿ ಸುರಿದು ತಿರುಗಿಸಿ.</li>
      <li>ಮಧ್ಯಭಾಗ ಮೃದುವಾಗಿ ಮತ್ತು ಅಂಚುಗಳು ಕ್ರಿಸ್ಪ್ ಆಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition (per appam)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>150 kcal</td></tr>
      <tr><td>Protein</td><td>3 g</td></tr>
      <tr><td>Carbs</td><td>28 g</td></tr>
      <tr><td>Fat</td><td>3 g</td></tr>
    </table>

    <div class="video-section">
      <button onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
      <button onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">▶ ಪ್ರಿಯತೆ ❤️</button>
    </div>
  </div>
</div>

<div class="footer">© 2025 Foodies. All rights reserved.</div>

<script>
const heartBtn=document.getElementById("heartBtn");
const recipeData={id:80,name:"Appam",link:"breakfast/b16.php",image:"../food_image/south/appam.jpg"};
let favorites=JSON.parse(localStorage.getItem("favorites"))||[];
if(favorites.find(r=>r.id===recipeData.id)){heartBtn.classList.add("active");heartBtn.textContent="❤️";}
heartBtn.addEventListener("click",()=>{let f=JSON.parse(localStorage.getItem("favorites"))||[];const e=f.find(r=>r.id===recipeData.id);if(e){f=f.filter(r=>r.id!==recipeData.id);heartBtn.classList.remove("active");heartBtn.textContent="♡";}else{f.push(recipeData);heartBtn.classList.add("active");heartBtn.textContent="❤️";}localStorage.setItem("favorites",JSON.stringify(f));});
const headerLangBtn=document.getElementById("headerLangBtn");let currentLang=localStorage.getItem("language")||"en";
function updateLang(){document.querySelectorAll("[data-lang]").forEach(el=>{el.style.display=el.getAttribute("data-lang")===currentLang?"":"none";});headerLangBtn.textContent=currentLang==="en"?"🏴 ENG / ಕನ್ನಡ":"🇮🇳 ಕನ್ನಡ / ENG";}
updateLang();
headerLangBtn.addEventListener("click",()=>{currentLang=currentLang==="en"?"kn":"en";localStorage.setItem("language",currentLang);updateLang();});
</script>

</body>
</html>
