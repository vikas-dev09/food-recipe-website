<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sushi Rolls | Foodies</title>
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
        <h1>Sushi Rolls</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pa6.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>2 cups sushi rice</li>
                <li>2 tbsp rice vinegar</li>
                <li>1 tbsp sugar</li>
                <li>1 tsp salt</li>
                <li>4 sheets nori (seaweed)</li>
                <li>1 avocado, sliced</li>
                <li>4 oz fresh tuna or salmon</li>
                <li>1 cucumber, julienned</li>
                <li>1 carrot, julienned</li>
                <li>1/4 cup pickled ginger</li>
                <li>Wasabi paste</li>
                <li>Soy sauce</li>
                <li>Pickled radish (daikon)</li>
                <li>Sesame seeds for garnish</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>2 ಕಪ್ ಸುಶಿ ರೈಸ್</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ರೈಸ್ ವಿನೆಗರ್</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಗರ್</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಉಪ್ಪು</li>
                <li>4 ಹಾಳೆಗಳ ನೋರಿ (ಸಮುದ್ರ ಸಸ್ಯ)</li>
                <li>1 ಅವೊಕಾಡೋ, ತುಣುಕುಗಳಾಗಿ</li>
                <li>4 ಔನ್ಸ್ ತಾಜಾ ಟುನಾ ಅಥವಾ ಸಾಲ್ಮನ್</li>
                <li>1 ಸೆಲರಿ, ಜುಲಿಯನ್ ಆಗಿ ಕತ್ತರಿಸಿದ</li>
                <li>1 ಕ್ಯಾರೆಟ್, ಜುಲಿಯನ್ ಆಗಿ ಕತ್ತರಿಸಿದ</li>
                <li>1/4 ಕಪ್ ಪಿಕಲ್ಡ್ ಗಿಂಗರ್</li>
                <li>ವಾಸಾಬಿ ಪೇಸ್ಟ್</li>
                <li>ಸೋಯಾ ಸಾಸ್</li>
                <li>ಪಿಕಲ್ಡ್ ರಾಡಿಷ್ (ಡೈಕಾನ್)</li>
                <li>ಅಲಂಕಾರಕ್ಕಾಗಿ ಎಲ್ಮೆಣಸ್ ಬೀಜಗಳು</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Sushi Rolls</h2>
            <h2 data-lang="kn" style="display:none;">ಸುಶಿ ರೋಲ್ಸ್ ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
            <ol data-lang="en">
                <li>Rinse sushi rice until water runs clear. Cook rice according to package instructions.</li>
                <li>In a small bowl, mix rice vinegar, sugar, and salt. Pour over cooked rice and gently fold. Let cool.</li>
                <li>Place a bamboo sushi mat on a clean surface. Lay one nori sheet shiny-side down on the mat.</li>
                <li>Spread a thin, even layer of sushi rice (about 3/4 cup) over the nori, leaving a 1-inch border at the top.</li>
                <li>Arrange fillings (avocado, tuna/salmon, cucumber, carrot) horizontally across the center of the rice.</li>
                <li>Using the mat, lift the edge closest to you and roll tightly over the fillings. Tuck in the sides as you roll.</li>
                <li>Continue rolling until the nori is fully enclosed. Wet the top border with water to seal the roll.</li>
                <li>Repeat with remaining nori sheets and fillings.</li>
                <li>Slice rolls into 6-8 pieces using a sharp, wet knife.</li>
                <li>Garnish with sesame seeds. Serve with soy sauce, wasabi, pickled ginger, and daikon.</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಸುಶಿ ರೈಸ್ ಅನ್ನು ಸ್ಪಷ್ಟವಾದ ನೀರಿನವರೆಗೆ ತೊಳೆಯಿರಿ. ಪ್ಯಾಕೇಜ್ ಸೂಚನೆಗಳ ಪ್ರಕಾರ ರೈಸ್ ಬೇಯಿಸಿ.</li>
                <li>ಸಣ್ಣ ಬೌಲ್‌ನಲ್ಲಿ ರೈಸ್ ವಿನೆಗರ್, ಶುಗರ್ ಮತ್ತು ಉಪ್ಪು ಮಿಶ್ರಣ ಮಾಡಿ. ಬೇಯಿಸಿದ ರೈಸ್‌ನ ಮೇಲೆ ಸುರಿಸಿ ಮತ್ತು ನಿಧಾನವಾಗಿ ಮಿಶ್ರಣ ಮಾಡಿ. ತಣ್ಣಗಾಗಲು ಬಿಡಿ.</li>
                <li>ಸ್ವಚ್ಛವಾದ ಸುರಕ್ಷಿತ ಮೇಲ್ಮೈಯಲ್ಲಿ ಬಾಂಬೂ ಸುಶಿ ಮ್ಯಾಟ್ ಇಡಿ. ನೋರಿ ಹಾಳೆಯನ್ನು ಹೊಳೆಯುವ ಬದಿಯನ್ನು ಕೆಳಕ್ಕೆ ಇರಿಸಿ ಮ್ಯಾಟ್‌ನಲ್ಲಿ ಇಡಿ.</li>
                <li>ನೋರಿ ಮೇಲೆ ಸುಶಿ ರೈಸ್ (3/4 ಕಪ್) ತೆಳುವಾದ, ಸಮನಾದ ಪದರವಾಗಿ ಹರಡಿ, ಮೇಲ್ಭಾಗದಲ್ಲಿ 1-ಇಂಚ್ ಅಂಚನ್ನು ಬಿಟ್ಟು.</li>
                <li>ರೈಸ್ ನ ಮಧ್ಯಭಾಗದಲ್ಲಿ ಅವೊಕಾಡೋ, ಟುನಾ/ಸಾಲ್ಮನ್, ಸೆಲರಿ, ಕ್ಯಾರೆಟ್ ತುಣುಕುಗಳನ್ನು ಅಡ್ಡವಾಗಿ ಅರೇಂಜ್ ಮಾಡಿ.</li>
                <li>ಮ್ಯಾಟ್ ಬಳಸಿ, ನಿಮಗೆ ಹತ್ತಿರವಿರುವ ಅಂಚನ್ನು ಎತ್ತಿ ಮತ್ತು ಫಿಲ್ಲಿಂಗ್ಸ್ ಮೇಲೆ ಬಿಗಿಯಾಗಿ ರೋಲ್ ಮಾಡಿ. ನೀವೆ ರೋಲ್ ಮಾಡುವಾಗ ಬದಿಗಳನ್ನು ಟಕ್ ಮಾಡಿ.</li>
                <li>ನೋರಿ ಸಂಪೂರ್ಣವಾಗಿ ಸುತ್ತುವವರೆಗೆ ರೋಲ್ ಮಾಡುವುದನ್ನು ಮುಂದುವರಿಸಿ. ನೀರಿನಿಂದ ಮೇಲಿನ ಅಂಚನ್ನು ಒಣಗಿಸಿ ಸೀಲ್ ಮಾಡಿ.</li>
                <li>ಉಳಿದ ನೋರಿ ಹಾಳೆಗಳು ಮತ್ತು ಫಿಲ್ಲಿಂಗ್ಸ್‌ನೊಂದಿಗೆ ಪುನರಾವರ್ತಿಸಿ.</li>
                <li>ರೋಲ್‌ಗಳನ್ನು ತೀಕ್ಷ್ಣವಾದ, ಒದ್ದೆಯಾದ ಚಾಕುಯಿಂದ 6-8 ತುಣುಕುಗಳಾಗಿ ಕತ್ತರಿಸಿ.</li>
                <li>ಎಲ್ಮೆಣಸ್ ಬೀಜಗಳೊಂದಿಗೆ ಅಲಂಕರಿಸಿ. ಸೋಯಾ ಸಾಸ್, ವಾಸಾಬಿ, ಪಿಕಲ್ಡ್ ಗಿಂಗರ್ ಮತ್ತು ಡೈಕಾನ್‌ನೊಂದಿಗೆ ಸೇವಿಸಿ.</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>220 kcal</td></tr>
                <tr><td>Protein</td><td>9 g</td></tr>
                <tr><td>Carbohydrates</td><td>28 g</td></tr>
                <tr><td>Fat</td><td>8 g</td></tr>
                <tr><td>Fiber</td><td>3 g</td></tr>
                <tr><td>Sodium</td><td>350 mg</td></tr>
                <tr><td>Omega-3</td><td>0.5 g</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>220 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>9 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>28 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>8 g</td></tr>
                <tr><td>ಫೈಬರ್</td><td>3 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>350 mg</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>0.5 g</td></tr>
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
            id: 86,
            name: "Sushi Rolls",
            link: "patra/p6.php",
            image: "../food_image/sushi/sushi_rolls.jpg"
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