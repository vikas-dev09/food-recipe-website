<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fish Chilli Fry (Desi Style) | Foodies</title>
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
            box-shadow: 0 4px 12px rgba(0,0,0,0. 1); position: relative;
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
        <h1>Fish Chilli Fry (Desi Style)</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal2.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರිಗಳು</h2>
            <ul data-lang="en">
                <li>500g firm fish (seer fish / surmai, king fish or pomfret steaks)</li>
                <li>15–20 dry red chillies (preferably Bedgi or Kashmiri for color)</li>
                <li>10 garlic cloves</li>
                <li>1.5" ginger</li>
                <li>1 tbsp tamarind paste (thick)</li>
                <li>1 tsp cumin seeds</li>
                <li>1 large onion, finely chopped</li>
                <li>1 large tomato, finely chopped</li>
                <li>1 sprig curry leaves</li>
                <li>1 tsp turmeric powder</li>
                <li>1 tbsp vinegar</li>
                <li>4–5 tbsp coconut oil or any oil</li>
                <li>Salt to taste</li>
                <li>Fresh coriander for garnish</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>500ಗ್ರಾಂ ಗಟ್ಟಿಯಾದ ಮೀನು (ಸುರಮೈ, ಅನಜಲ್ ಅಥವಾ ಪಾಪ್ಲೆಟ್)</li>
                <li>15-20 ಒಣ ಕೆಂಪು ಮೆಣಸಿನಕಾಯಿ (ಬೆಡಗಿ ಅಥವಾ ಕಾಶ್ಮೀರಿ)</li>
                <li>10 ಬೆಳ್ಳುಳ್ಳಿ ಎಸಳು</li>
                <li>1.5 ಇಂಚು ಶುಂಠಿ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ದಪ್ಪ ಹುಣಸೆಹಣ್ಣು ಪೇಸ್ಟ್</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
                <li>1 ದೊಡ್ಡ ಈರುಳ್ಳಿ, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ್ದು</li>
                <li>1 ದೊಡ್ಡ ಟೊಮೇಟೋ, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ್ದು</li>
                <li>1 ಕರಿಬೇವು ಸಿಪ್ಪೆ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಅರಿಶಿನ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ವಿನೆಗರ್</li>
                <li>4-5 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತೆಂಗಿನ ಎಣ್ಣೆ</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
                <li>ಅಲಂಕಾರಕ್ಕೆ ತಾಜಾ ಕೊತ್ತಂಬರಿ</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Fish Chilli Fry (Desi Style)</h2>
            <h2 data-lang="kn" style="display:none;">ದೇಸಿ ಸ್ಟೈಲ್ ಫಿಶ್ ಚಿಲ್ಲಿ ಫ್ರೈ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Wash fish, pat dry, apply salt + turmeric + 1 tsp vinegar. Rest 15 mins.</li>
                <li>Soak dry red chillies in warm water for 20 mins.</li>
                <li>Grind soaked chillies + garlic + ginger + cumin + tamarind paste + little salt + 2 tbsp vinegar into a thick, fiery red masala paste.</li>
                <li>Heat oil in a wide pan. Shallow fry fish pieces till 80% cooked (2–3 mins per side). Remove and keep aside.</li>
                <li>In the same pan, add curry leaves and chopped onion. Fry till golden.</li>
                <li>Add chopped tomato and cook till soft and oil separates.</li>
                <li>Add 3–4 heaped tbsp of the ground red masala paste. Fry on medium flame for 4–5 minutes till raw smell disappears and oil leaves the sides.</li>
                <li>Add ¼ cup water, mix well to make thick gravy.</li>
                <li>Slide in the fried fish pieces. Coat well with masala. Cook on low flame for 4–5 minutes.</li>
                <li>Taste and adjust salt/vinegar/chilli. Garnish with lots of coriander.</li>
                <li>Serve piping hot with pav, rice, or as a side with dal-rice – this is pure fire!</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಮೀನನ್ನು ತೊಳೆದು ಒಣಗಿಸಿ, ಉಪ್ಪು + ಅರಿಶಿನ + 1 ಟೀಸ್ಪೂನ್ ವಿನೆಗರ್ ಹಚ್ಚಿ 15 ನಿಮಿಷ ಬಿಡಿ.</li>
                <li>ಒಣ ಮೆಣಸಿನಕಾಯಿಗಳನ್ನು ಬೆಚ್ಚಗಿನ ನೀರಿನಲ್ಲಿ 20 ನಿಮಿಷ ನೆನೆಸಿ.</li>
                <li>ನೆನೆಸಿದ ಮೆಣಸು + ಬೆಳ್ಳುಳ್ಳಿ + ಶುಂಠಿ + ಜೀರಿಗೆ + ಹುಣಸೆಹಣ್ಣು ಪೇಸ್ಟ್ + ಸ್ವಲ್ಪ ಉಪ್ಪು + 2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ವಿನೆಗರ್ ಜೊತೆ ದಪ್ಪ ಕೆಂಪು ಮಸಾಲೆ ರುಬ್ಬಿ.</li>
                <li>ಅಗಲ ಪಾತ್ರೆಯಲ್ಲಿ ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ, ಮೀನು ತುಂಡುಗಳನ್ನು 80% ಬೇಯುವವರೆಗೆ ಶಾಲೋ ಫ್ರೈ ಮಾಡಿ ತೆಗೆದಿಡಿ.</li>
                <li>ಅದೇ ಪಾತ್ರೆಯಲ್ಲಿ ಕರಿಬೇವು + ಈರುಳ್ಳಿ ಹಾಕಿ ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಟೊಮೇಟೋ ಸೇರಿಸಿ ಮೃದುವಾಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
                <li>3-4 ದೊಡ್ಡ ಚಮಚ ರುಬ್ಬಿದ ಕೆಂಪು ಮಸಾಲೆ ಸೇರಿಸಿ, ಎಣ್ಣೆ ಬಿಟ್ಟು ಬರುವವರೆಗೆ 4-5 ನಿಮಿಷ ಚೆನ್ನಾಗಿ ಹುರಿಯಿರಿ.</li>
                <li>¼ ಕಪ್ ನೀರು ಸೇರಿಸಿ ದಪ್ಪ ರಸ ಮಾಡಿ.</li>
                <li>ಹುರಿದ ಮೀನು ತುಂಡುಗಳನ್ನು ಜಾರಿಸಿ ಮಸಾಲೆಯಲ್ಲಿ ಚೆನ್ನಾಗಿ ಲೇಪಿಸಿ. ಕಡಿಮೆ ಉರಿಯಲ್ಲಿ 4-5 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
                <li>ರುಚಿ ನೋಡಿ ಉಪ್ಪು/ವಿನೆಗರ್/ಖಾರ ಹೆಚ್ಚಿಸಿ. ಧಾರಾಳ ಕೊತ್ತಂಬರಿ ಎಲೆ ಚೆಲ್ಲಿ.</li>
                <li>ಪಾವ್, ಅನ್ನ ಅಥವಾ ದಾಲ್-ಅನ್ನದ ಜೊತೆ ಬಿಸಿ ಬಿಸಿಯಾಗಿ ಸವಿಯಿರಿ – ಇದು ಶುದ್ಧ ಅಗ್ನಿ!</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>295 kcal</td></tr>
                <tr><td>Protein</td><td>28 g</td></tr>
                <tr><td>Carbohydrates</td><td>8 g</td></tr>
                <tr><td>Fat</td><td>18 g</td></tr>
                <tr><td>Omega-3</td><td>1.5 g</td></tr>
                <tr><td>Sodium</td><td>580 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>295 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>28 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>8 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>18 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>1.5 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>580 mg</td></tr>
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
            id: 92,
            name: "Fish Chilli Fry (Desi Style)",
            link: "patra/p12.php",
            image: "../food_image/seafood/fish_chilli_fry.jpg"
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