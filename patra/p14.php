<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prawn 65 | Foodies</title>
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
        <h1>Prawn 65</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pa14.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>500g medium prawns (cleaned & deveined)</li>
                <li>2 tbsp ginger-garlic paste</li>
                <li>2 tbsp thick curd</li>
                <li>2 tbsp red chilli powder (preferably Kashmiri)</li>
                <li>1 tsp turmeric powder</li>
                <li>1 tbsp coriander powder</li>
                <li>1 tsp cumin powder</li>
                <li>1 tsp garam masala</li>
                <li>1 tsp black pepper powder</li>
                <li>2 tbsp rice flour</li>
                <li>2 tbsp cornflour</li>
                <li>1 tbsp lemon juice</li>
                <li>10-12 curry leaves (finely chopped)</li>
                <li>4 green chillies, slit</li>
                <li>Red food colour (optional, just a pinch)</li>
                <li>Oil for deep frying</li>
                <li>Salt to taste</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>500ಗ್ರಾಂ ಮಧ್ಯಮ ಗಾತ್ರದ ಸೀಗಡಿ (ಶುಚಿಗೊಳಿಸಿ ನರಗಳನ್ನು ತೆಗೆದಿದ್ದು)</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ದಪ್ಪ ಮೊಸರು</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕೆಂಪು ಮೆಣಸಿನ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಅರಿಶಿನ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕೊತ್ತಂಬರಿ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಗರಂ ಮಸಾಲಾ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಕರಿಮೆಣಸು ಪುಡಿ</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಅಕ್ಕಿ ಹಿಟ್ಟು</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಜೊಳದ ಹಿಟ್ಟು</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ನಿಂಬೆ ರಸ</li>
                <li>10-12 ಕರಿಬೇವು ಎಲೆಗಳು (ಸಣ್ಣಗೆ ಕತ್ತರಿಸಿದ್ದು)</li>
                <li>4 ಹಸಿರು ಮೆಣಸಿನಕಾಯಿ</li>
                <li>ಕೆಂಪು ಆಹಾರ ಬಣ್ಣ (ಐಚ್ಛಿಕ)</li>
                <li>ಡೀಪ್ ಫ್ರೈಗೆ ಎಣ್ಣೆ</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Prawn 65</h2>
            <h2 data-lang="kn" style="display:none;">ಪ್ರಾನ್ 65 ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Pat dry prawns completely. This is the most important step for crispiness!</li>
                <li>In a bowl, mix ginger-garlic paste, curd, all dry spices, lemon juice, red colour, chopped curry leaves, and salt.</li>
                <li>Add prawns and mix well. Marinate for minimum 1 hour (better if 3–4 hours in fridge).</li>
                <li>Add rice flour + cornflour to the marinated prawns. Mix gently – it should form a thick coating.</li>
                <li>Heat oil in a deep kadhai on medium-high flame.</li>
                <li>Drop prawns one by one (don’t overcrowd). Fry on medium flame for 3–4 minutes till golden & crispy.</li>
                <li>Remove on tissue paper.</li>
                <li>For tempering: Heat 2 tbsp oil, add slit green chillies + curry leaves. Let them splutter.</li>
                <li>Add fried prawns, toss on high flame for 30 seconds.</li>
                <li>Serve immediately with lemon wedges and onion rings – watch them disappear in seconds!</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಸೀಗಡಿಗಳನ್ನು ಪೂರ್ತಿ ಒಣಗಿಸಿ – ಇದು ಗರಿಗರಿಯಾಗಲು ಅತಿ ಮುಖ್ಯ!</li>
                <li>ಒಂದು ಬೌಲ್‌ನಲ್ಲಿ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್, ಮೊಸರು, ಎಲ್ಲಾ ಪುಡಿ ಮಸಾಲೆಗಳು, ನಿಂಬೆ ರಸ, ಕೆಂಪು ಬಣ್ಣ, ಕತ್ತರಿಸಿದ ಕರಿಬೇವು, ಉಪ್ಪು ಮಿಶ್ರಣ ಮಾಡಿ.</li>
                <li>ಸೀಗಡಿಗಳನ್ನು ಸೇರಿಸಿ ಚೆನ್ನಾಗಿ ಕಲಸಿ. ಕನಿಷ್ಠ 1 ಗಂಟೆ (ಫ್ರಿಜ್‌ನಲ್ಲಿ 3-4 ಗಂಟೆ ಇಟ್ಟರೆ ಇನ್ನೂ ಒಳ್ಳೆಯದು).</li>
                <li>ಮ್ಯಾರಿನೇಟ್ ಆದ ಸೀಗಡಿಗೆ ಅಕ್ಕಿ ಹಿಟ್ಟು + ಜೊಳದ ಹಿಟ್ಟು ಸೇರಿಸಿ ಮೆಲ್ಲನೆ ಕಲಸಿ – ದಪ್ಪ ಲೇಪನ ರೂಪುಗೊಳ್ಳಬೇಕು.</li>
                <li>ಆಳವಾದ ಬಾಣಲೆಯಲ್ಲಿ ಎಣ್ಣೆಯನ್ನು ಮಧ್ಯಮ-ಹೆಚ್ಚಿನ ಉರಿಯಲ್ಲಿ ಬಿಸಿ ಮಾಡಿ.</li>
                <li>ಸೀಗಡಿಗಳನ್ನು ಒಂದೊಂದೇ ಬಿಟ್ಟು ಹಾಕಿ. ಮಧ್ಯಮ ಉರಿಯಲ್ಲಿ 3-4 ನಿಮಿಷ ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಟಿಶ್ಯೂ ಪೇಪರ್ ಮೇಲೆ ತೆಗೆದಿಡಿ.</li>
                <li>ತಾಲಿಕೆಗೆ: 2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ, ಒಡೆದ ಹಸಿರು ಮೆಣಸು + ಕರಿಬೇವು ಸೇರಿಸಿ ಸಿಡಿಯಲು ಬಿಡಿ.</li>
                <li>ಹುರಿದ ಸೀಗಡಿಗಳನ್ನು ಸೇರಿಸಿ ಹೆಚ್ಚಿನ ಉರಿಯಲ್ಲಿ 30 ಸೆಕೆಂಡು ಟಾಸ್ ಮಾಡಿ.</li>
                <li>ತಕ್ಷಣ ನಿಂಬೆ ತುಂಡುಗಳು ಮತ್ತು ಈರುಳ್ಳಿ ಉಂಗುರಗಳೊಂದಿಗೆ ಸವಿಯಿರಿ – ಕ್ಷಣಗಳಲ್ಲಿ ಮಾಯವಾಗುತ್ತವೆ!</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>260 kcal</td></tr>
                <tr><td>Protein</td><td>24 g</td></tr>
                <tr><td>Carbohydrates</td><td>12 g</td></tr>
                <tr><td>Fat</td><td>14 g</td></tr>
                <tr><td>Sodium</td><td>580 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>260 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>24 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>12 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>14 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>580 mg</td></tr>
            </table>
            
            <div class="video-section">
                <h2 data-lang="en">View Favorites</h2>
                <h2 data-lang="kn" style="display:none;">ಪ್ರಿಯತೆ ನ cosmeticಡಿ</h2>
                <button onclick="window.location.href='../duplicate.php'" data-lang="en">▶ View Favorites ❤️</button>
                <button onclick="window.location.href='../duplicate.php'" data-lang="kn" style="display:none;">▶ ಪ್ರಿಯತೆ ❤️</button>
            </div>
        </div>
    </div>
    
    <div class="footer">© 2025 Foodies. All rights reserved.</div>
    
    <script>
        const heartBtn = document.getElementById("heartBtn");
        const recipeData = {
            id: 94,
            name: "Prawn 65",
            link: "patra/p14.php",
            image: "../food_image/seafood/prawn_65.jpg"
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