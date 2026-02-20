<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tuna Salad | Foodies</title>
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
        <h1>Tuna Salad</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pa3.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            
            <ul data-lang="en">
                <li>2 cans (5 oz each) tuna in water, drained</li>
                <li>1/3 cup mayonnaise (or Greek yogurt for healthier version)</li>
                <li>2 celery stalks, finely chopped</li>
                <li>1/4 red onion, finely diced</li>
                <li>2 tbsp dill pickles or relish</li>
                <li>1 tbsp lemon juice</li>
                <li>1 tsp Dijon mustard</li>
                <li>2 tbsp fresh parsley, chopped</li>
                <li>1/2 tsp black pepper</li>
                <li>Salt to taste</li>
                <li>Lettuce leaves, bread, or crackers for serving</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>2 ಕ್ಯಾನ್ (5 ಔನ್ಸ್ ಪ್ರತಿ) ನೀರಿನಲ್ಲಿ ಟ್ಯೂನಾ, ಒಳಗಿನ ನೀರು ಹೋಗಿಸಿದ</li>
                <li>1/3 ಕಪ್ ಮಯೋನೀಸ್ (ಅಥವಾ ಆರೋಗ್ಯಕರವಾಗಿ ಗ್ರೀಕ್ ಯೋಗರ್ಟ್)</li>
                <li>2 ಸೆಲರಿ ಕಾಂಡಗಳು, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ</li>
                <li>1/4 ಕೆಂಪು ಈರುಳ್ಳಿ, ಸಣ್ಣಗೆ ಕತ್ತರಿಸಿದ</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಡಿಲ್ ಪಿಕಲ್ ಅಥವಾ ರೆಲಿಶ್</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ನಿಂಬೆ ರಸ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಡಿಜಾನ್ ಮಸ್ಟರ್ಡ್</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಹಸಿ ಪಾರ್ಸ್ಲಿ, ಕತ್ತರಿಸಿದ</li>
                <li>1/2 ಟೀಸ್ಪೂನ್ ಕರಿಮೆಣಸು ಪುಡಿ</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
                <li>ಸೇವಿಸಲು ಲೆಟಿಸ್ ಎಲೆಗಳು, ಬ್ರೆಡ್ ಅಥವಾ ಕ್ರಾಕರ್ಸ್</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Tuna Salad</h2>
            <h2 data-lang="kn" style="display:none;">ಟ್ಯೂನಾ ಸಲಾಡ್ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            
            <ol data-lang="en">
                <li>Drain the tuna cans thoroughly and place tuna in a large mixing bowl.</li>
                <li>Add mayonnaise (or Greek yogurt), lemon juice, and Dijon mustard.</li>
                <li>Add finely chopped celery, red onion, dill pickles/relish, and fresh parsley.</li>
                <li>Sprinkle black pepper and salt to taste.</li>
                <li>Mix everything gently but thoroughly until well combined.</li>
                <li>Taste and adjust seasoning or add more mayo if desired.</li>
                <li>Chill in the refrigerator for at least 15-20 minutes (best when chilled for 1 hour).</li>
                <li>Serve on lettuce leaves, in sandwiches, with crackers, or over toast.</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಟ್ಯೂನಾ ಕ್ಯಾನ್‌ಗಳನ್ನು ಸಂಪೂರ್ಣವಾಗಿ ಒಳಗಿನ ನೀರು ಹೋಗಿಸಿ, ದೊಡ್ಡ ಬೌಲ್‌ಗೆ ಹಾಕಿ.</li>
                <li>ಮಯೋನೀಸ್ (ಅಥವಾ ಗ್ರೀಕ್ ಯೋಗರ್ಟ್), ನಿಂಬೆ ರಸ ಮತ್ತು ಡಿಜಾನ್ ಮಸ್ಟರ್ಡ್ ಸೇರಿಸಿ.</li>
                <li>ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ ಸೆಲರಿ, ಕೆಂಪು ಈರುಳ್ಳಿ, ಡಿಲ್ ಪಿಕಲ್ ಮತ್ತು ಹಸಿ ಪಾರ್ಸ್ಲಿ ಸೇರಿಸಿ.</li>
                <li>ಕರಿಮೆಣಸು ಪುಡಿ ಮತ್ತು ರುಚಿಗೆ ಉಪ್ಪು ಹಾಕಿ.</li>
                <li>ಎಲ್ಲವನ್ನೂ ಎಚ್ಚರಿಕೆಯಿಂದ ಚೆನ್ನಾಗಿ ಮಿಶ್ರಣ ಮಾಡಿ.</li>
                <li>ರುಚಿ ನೋಡಿ, ಬೇಕಿದ್ದಲ್ಲಿ ಹೆಚ್ಚು ಮಯೋನೀಸ್ ಅಥವಾ ಉಪ್ಪು ಸೇರಿಸಿ.</li>
                <li>ಕನಿಷ್ಠ 15-20 ನಿಮಿಷ ಫ್ರಿಜ್‌ನಲ್ಲಿ ತಂಪಾಗಿಸಿ (1 ಗಂಟೆ ಇದ್ದರೆ ಉತ್ತಮ).</li>
                <li>ಲೆಟಿಸ್ ಎಲೆಗಳ ಮೇಲೆ, ಸ್ಯಾಂಡ್‌ವಿಚ್‌ನಲ್ಲಿ, ಕ್ರಾಕರ್ಸ್ ಜೊತೆ ಅಥವಾ ಟೋಸ್ಟ್ ಮೇಲೆ ಸೇವಿಸಿ.</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>285 kcal</td></tr>
                <tr><td>Protein</td><td>28 g</td></tr>
                <tr><td>Carbohydrates</td><td>4 g</td></tr>
                <tr><td>Fat</td><td>18 g</td></tr>
                <tr><td>Omega-3</td><td>0.8 g</td></tr>
                <tr><td>Sodium</td><td>620 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>285 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>28 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>4 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>18 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>0.8 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>620 mg</td></tr>
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
        const recipeData = {
            id: 83,
            name: "Tuna Salad",
            link: "patra/p3.php",
            image: "../food_image/tuna/tuna_salad.jpg"
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


