<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goan Crab Xacuti | Foodies</title>
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
        <h1>Goan Crab Xacuti</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal13.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>1 kg fresh crabs (cleaned & cut, legs cracked)</li>
                <li>2 large onions, finely chopped</li>
                <li>2 tomatoes, finely chopped</li>
                <li>1 cup grated fresh coconut</li>
                <li>8–10 dry Kashmiri red chillies</li>
                <li>6 cloves</li>
                <li>1 tbsp peppercorns</li>
                <li>1 tbsp poppy seeds (khus khus)</li>
                <li>1 tbsp coriander seeds</li>
                <li>1 tsp cumin seeds</li>
                <li>½ tsp turmeric</li>
                <li>6 garlic cloves</li>
                <li>1" ginger</li>
                <li>1 star anise</li>
                <li>1 small piece mace</li>
                <li>1 marble-sized tamarind</li>
                <li>4 tbsp coconut oil</li>
                <li>Salt to taste</li>
                <li>Fresh coriander for garnish</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>1 ಕೆ.ಜಿ ತಾಜಾ ಏಡಿ (ಶುಚಿಗೊಳಿಸಿ, ಕಾಲುಗಳನ್ನು ಒಡೆದಿದ್ದು)</li>
                <li>2 ದೊಡ್ಡ ಈರುಳ್ಳಿ, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ್ದು</li>
                <li>2 ಟೊಮೇಟೋ, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ್ದು</li>
                <li>1 ಕಪ್ ತಾಜಾ ತುರಿದ ತೆಂಗಿನಕಾಯಿ</li>
                <li>8-10 ಕಾಶ್ಮೀರಿ ಒಣ ಮೆಣಸಿನಕಾಯಿ</li>
                <li>6 ಲವಂಗ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಮೆಣಸು</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಗಸಗಸೆ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕೊತ್ತಂಬರಿ ಬೀಜ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಜೀರಿಗೆ</li>
                <li>½ ಟೀಸ್ಪೂನ್ ಅರಿಶಿನ</li>
                <li>6 ಬೆಳ್ಳುಳ್ಳಿ ಎಸಳು</li>
                <li>1 ಇಂಚು ಶುಂಠಿ</li>
                <li>1 ಸ್ಟಾರ್ ಅನೈಸ್</li>
                <li>ಸ್ವಲ್ಪ ಜಾವಿತ್ರಿ</li>
                <li>ಚಿಕ್ಕ ಮಾರ್ಬಲ್ ಗಾತ್ರದ ಹುಣಸೆಹಣ್ಣು</li>
                <li>4 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತೆಂಗಿನ ಎಣ್ಣೆ</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
                <li>ಅಲಂಕಾರಕ್ಕೆ ತಾಜಾ ಕೊತ್ತಂಬರಿ</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Goan Crab Xacuti</h2>
            <h2 data-lang="kn" style="display:none;">ಗೋವನ್ ಕ್ರ್ಯಾಬ್ ಶಾಗುತಿ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Dry roast coconut till golden brown. Keep aside.</li>
                <li>In the same pan, roast all whole spices (cloves, pepper, coriander, cumin, poppy seeds, star anise, mace, red chillies) till fragrant.</li>
                <li>Grind roasted coconut + roasted spices + garlic + ginger + tamarind + turmeric with little water into a very smooth, thick paste.</li>
                <li>Heat coconut oil in a heavy-bottomed pot. Add chopped onions and fry till deep golden brown.</li>
                <li>Add chopped tomatoes and cook till completely mushy.</li>
                <li>Add the ground xacuti masala paste. Fry on medium flame for 8–10 minutes till oil separates and raw smell disappears completely.</li>
                <li>Add cleaned crabs + salt. Mix well to coat every piece with masala.</li>
                <li>Add 1–1.5 cups hot water (depending on desired gravy thickness).</li>
                <li>Cover and cook on medium flame for 12–15 minutes till crabs are perfectly cooked and gravy thickens.</li>
                <li>Taste and adjust salt. Garnish with fresh coriander.</li>
                <li>Serve hot with sannas, pav, or steamed rice — this is pure Goan heaven!</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ತೆಂಗಿನಕಾಯಿಯನ್ನು ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಒಣಗೆ ಹುರಿಯಿರಿ. ಪಕ್ಕಕ್ಕಿಡಿ.</li>
                <li>ಅದೇ ಪಾತ್ರೆಯಲ್ಲಿ ಎಲ್ಲಾ ಪೂರ್ತಿ ಮಸಾಲೆಗಳನ್ನು (ಲವಂಗ, ಮೆಣಸು, ಕೊತ್ತಂಬರಿ, ಜೀರಿಗೆ, ಗಸಗಸೆ, ಸ್ಟಾರ್ ಅನೈಸ್, ಜಾವಿತ್ರಿ, ಕೆಂಪು ಮೆಣಸು) ಸುಗಂಧ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಹುರಿದ ತೆಂಗಿನಕಾಯಿ + ಮಸಾಲೆ + ಬೆಳ್ಳುಳ್ಳಿ + ಶುಂಠಿ + ಹುಣಸೆಹಣ್ಣು + ಅರಿಶಿನವನ್ನು ಸ್ವಲ್ಪ ನೀರಿನೊಂದಿಗೆ ಅತ್ಯಂತ ನಯವಾದ ಪೇಸ್ಟ್ ಆಗಿ ರುಬ್ಬಿ.</li>
                <li>ದಪ್ಪ ಪಾತ್ರೆಯಲ್ಲಿ ತೆಂಗಿನ ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ. ಈರುಳ್ಳಿಯನ್ನು ಗಾಢ ಚಿನ್ನದ ಬಣ್ಣಕ್ಕೆ ಹುರಿಯಿರಿ.</li>
                <li>ಟೊಮೇಟೋ ಸೇರಿಸಿ ಪೂರ್ತಿ ಮೆತ್ತಗಾಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
                <li>ರುಬ್ಬಿದ ಶಾಗುತಿ ಮಸಾಲೆ ಪೇಸ್ಟ್ ಸೇರಿಸಿ. ಎಣ್ಣೆ ಬೇರ್ಪಡುವವರೆಗೆ 8-10 ನಿಮಿಷ ಚೆನ್ನಾಗಿ ಹುರಿಯಿರಿ.</li>
                <li>ಶುಚಿಗೊಳಿಸಿದ ಏಡಿಗಳನ್ನು + ಉಪ್ಪು ಸೇರಿಸಿ ಎಲ್ಲಾ ತುಂಡುಗಳಿಗೂ ಮಸಾಲೆ ಚೆನ್ನಾಗಿ ಲೇಪನವಾಗುವಂತೆ ಕಲಸಿ.</li>
                <li>1-1.5 ಕಪ್ ಬಿಸಿ ನೀರು ಸೇರಿಸಿ (ರಸದ ದಪ್ಪಕ್ಕೆ ತಕ್ಕಂತೆ).</li>
                <li>ಮುಚ್ಚಿ ಮಧ್ಯಮ ಉರಿಯಲ್ಲಿ 12-15 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
                <li>ರುಚಿ ನೋಡಿ ಉಪ್ಪು ಸರಿಹೊಂದಿಸಿ. ತಾಜಾ ಕೊತ್ತಂಬರಿಯಿಂದ ಅಲಂಕರಿಸಿ.</li>
                <li>ಸನ್ನಾಸ್, ಪಾವ್ ಅಥವಾ ಬಿಳಿ ಅನ್ನದೊಂದಿಗೆ ಬಿಸಿಯಾಗಿ ಸವಿಯಿರಿ — ಇದು ಶುದ್ಧ ಗೋವನ್ ಸ್ವರ್ಗ!</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>380 kcal</td></tr>
                <tr><td>Protein</td><td>32 g</td></tr>
                <tr><td>Carbohydrates</td><td>12 g</td></tr>
                <tr><td>Fat</td><td>24 g</td></tr>
                <tr><td>Omega-3</td><td>1.8 g</td></tr>
                <tr><td>Sodium</td><td>720 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>380 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>32 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>12 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>24 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>1.8 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>720 mg</td></tr>
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
            id: 93,
            name: "Goan Crab Xacuti",
            link: "patra/p13.php",
            image: "../food_image/seafood/crab_xacuti.jpg"
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