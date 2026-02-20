<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fish Molee | Foodies</title>
    <style>
        * { box-sizing: border-box; }
        body { 
            font-family: Arial, sans-serif; 
            margin: 0; 
            background-color: #fffaf3; 
            color: #333; 
            line-height: 1.6; 
        }
        
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
        .nav-links a { 
            color: white; 
            text-decoration: none; 
            font-size: 18px; 
            padding-bottom: 4px; 
            border-bottom: 2px solid transparent; 
            transition: all 0.3s ease; 
        }
        .nav-links a:hover { 
            color: gold; 
            border-bottom: 2px solid white; 
        }
        
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
            max-width: 900px; 
            margin: 40px auto; 
            padding: 30px;
            background-color: #fff; 
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1); 
            position: relative;
        }
        .heart-btn {
            position: absolute; 
            top: 20px; 
            right: 25px; 
            background: none;
            border: none; 
            font-size: 36px; 
            cursor: pointer; 
            color: #ccc;
            transition: all 0.3s ease;
        }
        .heart-btn.active { 
            color: red; 
            transform: scale(1.2); 
        }
        .heart-btn:hover { 
            transform: scale(1.1); 
        }
        
        h1 { 
            text-align: center; 
            color: saddlebrown; 
            font-size: 32px; 
            margin-top: 10px; 
        }
        .food-img { 
            display: flex; 
            justify-content: center; 
            margin: 30px 0; 
        }
        .food-img img { 
            width: 80%; 
            max-width: 500px; 
            border-radius: 15px; 
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); 
        }
        
        h2 { 
            color: saddlebrown; 
            border-bottom: 2px solid #e2c097; 
            padding-bottom: 5px; 
            margin-top: 30px; 
        }
        ul, ol { 
            padding-left: 25px; 
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin: 20px 0; 
        }
        table, th, td { 
            border: 1px solid #ddd; 
        }
        th, td { 
            padding: 10px; 
            text-align: left; 
        }
        th { 
            background-color: #f5e0c3; 
        }
        
        .video-section { 
            text-align: center; 
            margin-top: 30px; 
        }
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
        
        .footer { 
            background-color: saddlebrown; 
            color: white; 
            text-align: center; 
            padding: 15px 0; 
            font-size: 16px; 
            margin-top: 40px; 
        }
        
        @media (max-width: 768px) {
            .land { 
                flex-direction: column; 
                align-items: flex-start; 
                padding: 20px; 
                gap: 15px; 
            }
            .nav-section { 
                flex-direction: column; 
                gap: 10px; 
                width: 100%; 
            }
            .container { 
                padding: 20px; 
            }
            .heart-btn { 
                top: 15px; 
                right: 15px; 
            }
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
        <h1>Fish Molee</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal8.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>1 lb (450g) firm white fish (like cod, tilapia, or snapper)</li>
                <li>1 tbsp coconut oil</li>
                <li>2 medium onions, sliced</li>
                <li>1 red bell pepper, sliced</li>
                <li>1 green chili, slit (optional)</li>
                <li>2 garlic cloves, minced</li>
                <li>1 tsp ginger, grated</li>
                <li>1 tsp turmeric powder</li>
                <li>1 tsp cumin powder</li>
                <li>1 tsp coriander powder</li>
                <li>1/2 tsp Kashmiri red chili powder</li>
                <li>1 tsp salt (or to taste)</li>
                <li>1/2 cup coconut milk</li>
                <li>1 tbsp curry leaves</li>
                <li>Fresh cilantro for garnish</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>1 ಪೌಂಡ್ (450 ಗ್ರಾಂ) ದೃಢವಾದ ಬಿಳಿ ಮೀನು (ಕಾಡ್, ಟಿಲಾಪಿಯಾ ಅಥವಾ ಸ್ನ್ಯಾಪರ್)</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತೆಂಗಿನ ಎಣ್ಣೆ</li>
                <li>2 ಮಧ್ಯಮ ಈರುಳ್ಳಿ, ತುಣುಕುಗಳಾಗಿ</li>
                <li>1 ಕೆಂಪು ಬೆಲ್ ಪೆಪ್ಪರ್, ತುಣುಕುಗಳಾಗಿ</li>
                <li>1 ಹಸಿರು ಮೆಣಸು, ಬೇರ್ (ಐಚ್ಛಿಕ)</li>
                <li>2 ಬೆಳ್ಳುಳ್ಳಿ ಹೋಳುಗಳು, ಕೊಚ್ಚಿದ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಶುಂಠಿ, ರಸಗೊಳಿಸಿದ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಹಳದಿ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಕೊತ್ತಂಬರಿ ಪುಡಿ</li>
                <li>1/2 ಟೀಸ್ಪೂನ್ ಕಾಶ್ಮೀರಿ ರೆಡ್ ಮೆಣಸು ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಉಪ್ಪು (ರುಚಿಗೆ)</li>
                <li>1/2 ಕಪ್ ತೆಂಗಿನ ಹಾಲು</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕರ್ರಿ ಎಲೆಗಳು</li>
                <li>ಹಸಿರು ಕೊತ್ತಂಬರಿ ಅಲಂಕಾರಕ್ಕಾಗಿ</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Fish Molee</h2>
            <h2 data-lang="kn" style="display:none;">ಮೀನು ಮೋಲೆ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
            <ol data-lang="en">
                <li>Heat coconut oil in a deep pan over medium flame.</li>
                <li>Add sliced onions and sauté until translucent (about 3-4 minutes).</li>
                <li>Add minced garlic, grated ginger, green chili, and curry leaves. Sauté for 1 minute.</li>
                <li>Add sliced red bell pepper and cook for 2 minutes until slightly softened.</li>
                <li>Add turmeric, cumin, coriander, red chili powder, and salt. Mix well.</li>
                <li>Place fish chunks in the pan and coat with the spice mixture. Cook for 2 minutes.</li>
                <li>Pour in coconut milk, bring to a gentle simmer, and cover. Cook for 8-10 minutes until fish is tender and flakes easily.</li>
                <li>Garnish with fresh cilantro before serving.</li>
                <li>Serve hot with steamed rice and roti.</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಮಧ್ಯಮ ಬಿಸಿಯಲ್ಲಿ ತೆಂಗಿನ ಎಣ್ಣೆಯನ್ನು ಪ್ಯಾನ್‌ನಲ್ಲಿ ಬಿಸಿ ಮಾಡಿ.</li>
                <li>ತುಣುಕುಗಳಾಗಿರುವ ಈರುಳ್ಳಿಯನ್ನು ಸೇರಿಸಿ 3-4 ನಿಮಿಷಗಳವರೆಗೆ ಸ್ವಚ್ಛವಾಗುವವರೆಗೆ sauté ಮಾಡಿ.</li>
                <li>ಕೊಚ್ಚಿದ ಬೆಳ್ಳುಳ್ಳಿ, ರಸಗೊಳಿಸಿದ ಶುಂಠಿ, ಹಸಿರು ಮೆಣಸು ಮತ್ತು ಕರ್ರಿ ಎಲೆಗಳನ್ನು ಸೇರಿಸಿ 1 ನಿಮಿಷ sauté ಮಾಡಿ.</li>
                <li>ತುಣುಕುಗಳಾಗಿರುವ ಕೆಂಪು ಬೆಲ್ ಪೆಪ್ಪರ್ ಸೇರಿಸಿ 2 ನಿಮಿಷ ಸ್ವಲ್ಪ ಮೃದುವಾಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
                <li>ಹಳದಿ, ಜೀರಿಗೆ, ಕೊತ್ತಂಬರಿ, ರೆಡ್ ಮೆಣಸು ಪುಡಿ ಮತ್ತು ಉಪ್ಪು ಸೇರಿಸಿ. ಚೆನ್ನಾಗಿ ಮಿಶ್ರಣ ಮಾಡಿ.</li>
                <li>ಪ್ಯಾನ್‌ನಲ್ಲಿ ಮೀನು ತುಂಡುಗಳನ್ನು ಇಡಿ ಮತ್ತು ಮಸಾಲಾ ಮಿಶ್ರಣದಿಂದ ಕವರ್ ಮಾಡಿ. 2 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
                <li>ತೆಂಗಿನ ಹಾಲು ಸುರಿಯಿರಿ, ಸೌಮ್ಯವಾದ ಉಬ್ಬನಿಗೆ ತಂದು ಮುಚ್ಚಿ. 8-10 ನಿಮಿಷ ಬೇಯಿಸಿ ಮೀನು ಕುದಿದು ಮೃದುವಾಗಿ ಚೂರುಚೂರಾಗುವವರೆಗೆ.</li>
                <li>ಸೇವಿಸುವ ಮೊದಲು ಹಸಿರು ಕೊತ್ತಂಬರಿಯಿಂದ ಅಲಂಕರಿಸಿ.</li>
                <li>ಬಿಸಿ ಬಿಸಿ ರೈಸ್ ಮತ್ತು ರೋಟಿಯೊಂದಿಗೆ ಸೇವಿಸಿ.</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>320 kcal</td></tr>
                <tr><td>Protein</td><td>28 g</td></tr>
                <tr><td>Carbohydrates</td><td>12 g</td></tr>
                <tr><td>Fat</td><td>20 g</td></tr>
                <tr><td>Saturated Fat</td><td>5 g</td></tr>
                <tr><td>Omega-3</td><td>1.1 g</td></tr>
                <tr><td>Sodium</td><td>580 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>320 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>28 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>12 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>20 g</td></tr>
                <tr><td>ಸ್ಯಾಚುರೇಟೆಡ್ ಫ್ಯಾಟ್</td><td>5 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>1.1 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>580 mg</td></tr>
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
            id: 88,
            name: "Fish Molee",
            link: "patra/p8.php",
            image: "../food_image/fish/fish_molee.jpg"
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