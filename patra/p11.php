<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kashmiri Fish Yakhni | Foodies</title>
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
        ul, ol { padding-left: 25px; }
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
        <h1>Kashmiri Fish Yakhni</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal11.webp" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>600g fish fillets (Rohu, Trout or any firm white fish)</li>
                <li>2 cups thick curd (hung for 1 hour)</li>
                <li>2 large onions, finely sliced</li>
                <li>2 tbsp fennel seeds (saunf) – powdered</li>
                <li>1 tsp dry ginger powder (sonth)</li>
                <li>1 tsp cumin seeds</li>
                <li>4 cloves</li>
                <li>4 green cardamom</li>
                <li>2 black cardamom</li>
                <li>1 blade mace (javitri)</li>
                <li>1 bay leaf</li>
                <li>½ tsp asafoetida (hing)</li>
                <li>4 tbsp mustard oil (or ghee)</li>
                <li>Fresh coriander & mint for garnish</li>
                <li>Salt to taste</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>600ಗ್ರಾಂ ಮೀನು ಫಿಲೆಟ್ (ರೋಹು, ಟ್ರೌಟ್ ಅಥವಾ ಯಾವುದೇ ಗಟ್ಟಿಯಾದ ಬಿಳಿ ಮೀನು)</li>
                <li>2 ಕಪ್ ದಪ್ಪ ಮೊಸರು (1 ಗಂಟೆ ತೊಟ್ಟಿಕ್ಕಿ ಬಿಟ್ಟಿದ್ದು)</li>
                <li>2 ದೊಡ್ಡ ಈರುಳ್ಳಿ, ತೆಳುವಾಗಿ ಕತ್ತರಿಸಿದ</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಸೋಂಪು ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಒಣ ಶುಂಠಿ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
                <li>4 ಲವಂಗ</li>
                <li>4 ಹಸಿರು ಏಲಕ್ಕಿ</li>
                <li>2 ಕಪ್ಪು ಏಲಕ್ಕಿ</li>
                <li>1 ಜಾವಿತ್ರಿ</li>
                <li>1 ತೇಜ್ ಪತ್ರೆ</li>
                <li>½ ಟೀಸ್ಪೂನ್ ಇಂಗು</li>
                <li>4 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಸಾಸಿವೆ ಎಣ್ಣೆ (ಅಥವಾ ತುಪ್ಪ)</li>
                <li>ಅಲಂಕಾರಕ್ಕೆ ತಾಜಾ ಕೊತ್ತಂಬರಿ & ಪುದಿನಾ</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Kashmiri Fish Yakhni</h2>
            <h2 data-lang="kn" style="display:none;">ಕಾಶ್ಮೀರಿ ಮೀನು ಯಖ್ನಿ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Lightly rub fish fillets with salt and turmeric. Rest for 10 minutes.</li>
                <li>Heat mustard oil to smoking point, cool slightly, then shallow fry fish till light golden on both sides (just 1 minute per side). Remove and keep aside.</li>
                <li>In the same oil, add cumin seeds, cloves, green & black cardamom, mace, bay leaf, and asafoetida.</li>
                <li>Add sliced onions and fry on medium flame till they turn golden.</li>
                <li>Lower flame, add fennel powder and dry ginger powder. Stir for 30 seconds.</li>
                <li>Switch off flame. Let it cool slightly.</li>
                <li>Whisk hung curd till smooth. Add 1 cup water and whisk again.</li>
                <li>Switch flame back to low, slowly add whisked curd while stirring continuously (this prevents curdling).</li>
                <li>Add salt and fried fish pieces gently.</li>
                <li>Cook on lowest flame for 8–10 minutes till gravy thickens and fish is perfectly cooked.</li>
                <li>Garnish with fresh coriander and mint leaves.</li>
                <li>Serve hot with steamed rice or Kashmiri roti.</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಮೀನು ತುಂಡುಗಳಿಗೆ ಸ್ವಲ್ಪ ಉಪ್ಪು ಮತ್ತು ಅರಿಶಿನ ಉಜ್ಜಿ 10 ನಿಮಿಷ ಬಿಡಿ.</li>
                <li>ಸಾಸಿವೆ ಎಣ್ಣೆಯನ್ನು ಹುಳಿ ಬರುವವರೆಗೆ ಬಿಸಿ ಮಾಡಿ, ಸ್ವಲ್ಪ ತಂಪಾಗಲು ಬಿಟ್ಟು ಮೀನನ್ನು ಎರಡೂ ಬದಿಗಳಲ್ಲಿ ತಿಳಿ ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಶಾಲೋ ಫ್ರೈ ಮಾಡಿ. ತೆಗೆದು ಪಕ್ಕಕ್ಕಿಡಿ.</li>
                <li>ಅದೇ ಎಣ್ಣೆಯಲ್ಲಿ ಜೀರಿಗೆ, ಲವಂಗ, ಏಲಕ್ಕಿ, ಜಾವಿತ್ರಿ, ತೇಜ್ ಪತ್ರೆ, ಇಂಗು ಸೇರಿಸಿ.</li>
                <li>ಈರುಳ್ಳಿಯನ್ನು ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಉರಿ ಕಡಿಮೆ ಮಾಡಿ, ಸೋಂಪು ಪುಡಿ ಮತ್ತು ಒಣ ಶುಂಠಿ ಪುಡಿ ಸೇರಿಸಿ 30 ಸೆಕೆಂಡು ಕಲಸಿ.</li>
                <li>ಅಡುಗೆ ಆಫ್ ಮಾಡಿ. ಸ್ವಲ್ಪ ತಂಪಾಗಲು ಬಿಡಿ.</li>
                <li>ತೊಟ್ಟ ಮೊಸರನ್ನು ನಯವಾಗಿ ಬಡಿದುಕೊಳ್ಳಿ. 1 ಕಪ್ ನೀರು ಸೇರಿಸಿ ಮತ್ತೊಮ್ಮೆ ಬಡಿಯಿರಿ.</li>
                <li>ಕಡಿಮೆ ಉರಿಯಲ್ಲಿ ಮತ್ತೆ ಅಡುಗೆ ಆನ್ ಮಾಡಿ, ನಿರಂತರ ಕಲಕುತ್ತಾ ಮೊಸರು ಮಿಶ್ರಣವನ್ನು ನಿಧಾನವಾಗಿ ಸೇರಿಸಿ (ಇದು ಒಡೆಯದಂತೆ ತಡೆಯುತ್ತದೆ).</li>
                <li>ಉಪ್ಪು ಮತ್ತು ಹುರಿದ ಮೀನು ತುಂಡುಗಳನ್ನು ಮೆಲ್ಲನೆ ಸೇರಿಸಿ.</li>
                <li>ಅತಿ ಕಡಿಮೆ ಉರಿಯಲ್ಲಿ 8-10 ನಿಮಿಷ ಬೇಯಿಸಿ ರಸ ದಪ್ಪವಾಗುವವರೆಗೂ.</li>
                <li>ತಾಜಾ ಕೊತ್ತಂಬರಿ ಮತ್ತು ಪುದಿನಾ ಸೊಪ್ಪುಗಳಿಂದ ಅಲಂಕರಿಸಿ.</li>
                <li>ಬಿಸಿಯಾದ ಅನ್ನ ಅಥವಾ ಕಾಶ್ಮೀರಿ ರೊಟಿಯೊಂದಿಗೆ ಸವಿಯಿರಿ.</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>320 kcal</td></tr>
                <tr><td>Protein</td><td>32 g</td></tr>
                <tr><td>Carbohydrates</td><td>10 g</td></tr>
                <tr><td>Fat</td><td>18 g</td></tr>
                <tr><td>Omega-3</td><td>1.6 g</td></tr>
                <tr><td>Sodium</td><td>460 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>320 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>32 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>10 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>18 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>1.6 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>460 mg</td></tr>
            </table>
            
            <div class="video-section">
                <h2 data-lang="en">View Favorites</h2>
                <h2 data-lang="kn" style="display:none;">ಪ್ರಿಯತೆ ನೋಡಿ</h2>
                <button onclick="window.location.href='../duplicate.php'" data-lang="en">View Favorites ❤️</button>
                <button onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">ಪ್ರಿಯತೆ ❤️</button>
            </div>
        </div>
    </div>
    
    <div class="footer">© 2025 Foodies. All rights reserved.</div>
    
    <script>
        const heartBtn = document.getElementById("heartBtn");
        const recipeData = {
            id: 91,
            name: "Kashmiri Fish Yakhni",
            link: "patra/p11.php",
            image: "../food_image/seafood/kashmiri_fish_yakhni.jpg"
        };
        
        let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
        if (favorites.find(r => r.id === recipeData.id)) {
            heartBtn.classList.add("active");
            heartBtn.textContent = "❤️";
        } else {
            heartBtn.classList.remove("active");
            heartBtn.textContent = "♡";
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
            headerLangBtn.textContent = currentLang === "en" ? "ENG / ಕನ್ನಡ" : "ಕನ್ನಡ / ENG";
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