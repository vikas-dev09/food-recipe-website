<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rava Fish Fry | Foodies</title>
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
        <h1>Rava Fish Fry</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal10.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>6–8 pieces fish (pomfret, king fish, or seer fish steaks)</li>
                <li>1 cup fine semolina (bombay rava/chiroti rava)</li>
                <li>3 tbsp rice flour (for extra crispiness)</li>
                <li>2 tbsp red chili powder</li>
                <li>1 tsp turmeric powder</li>
                <li>1 tbsp ginger-garlic paste</li>
                <li>1 tbsp lemon juice</li>
                <li>1 tsp black pepper powder</li>
                <li>1 tsp garam masala</li>
                <li>2 sprigs curry leaves, finely chopped</li>
                <li>Salt to taste</li>
                <li>Coconut oil or any oil for shallow frying</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>6-8 ಮೀನು ತುಂಡುಗಳು (ಪಾಪ್ಲೆಟ್, ಸುರಮೈ ಅಥವಾ ಅನಜಲ್)</li>
                <li>1 ಕಪ್ ಒಳ್ಳೆಯ ರವೆ (ಚಿರೋಟಿ ರವೆ)</li>
                <li>3 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಅಕ್ಕಿ ಹಿಟ್ಟು (ಹೆಚ್ಚು ಗರಿಗರಿಯಾಗಲು)</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕೆಂಪು ಮೆಣಸಿನ ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಅರಿಶಿನ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ನಿಂಬೆ ರಸ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಕರಿಮೆಣಸು ಪುಡಿ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಗರಂ ಮಸಾಲಾ</li>
                <li>2 ಕರಿಬೇವು ಸಿಪ್ಪೆ, ಸಣ್ಣಗೆ ಕತ್ತರಿಸಿದ್ದು</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
                <li>ತೆಂಗಿನ ಎಣ್ಣೆ ಅಥವಾ ಯಾವುದೇ ಎಣ್ಣೆ ಶಾಲೋ ಫ್ರೈಗೆ</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Rava Fish Fry</h2>
            <h2 data-lang="kn" style="display:none;">ರವೆ ಮೀನು ಫ್ರೈ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Wash fish pieces and pat completely dry with kitchen towel.</li>
                <li>Make shallow slits on both sides for better masala absorption.</li>
                <li>In a bowl, mix red chili powder, turmeric, ginger-garlic paste, lemon juice, pepper, garam masala, chopped curry leaves, and salt.</li>
                <li>Apply this masala generously on all sides of the fish. Marinate for minimum 30 minutes (better if 2–3 hours in fridge).</li>
                <li>Mix semolina and rice flour in a wide plate. Add a pinch of salt and chili powder to it.</li>
                <li>Heat oil in a wide pan on medium flame (enough for shallow frying).</li>
                <li>Coat each marinated fish piece evenly with rava mixture, pressing gently so it sticks well.</li>
                <li>Place carefully in hot oil. Fry 3–4 pieces at a time without overcrowding.</li>
                <li>Fry on medium flame for 3–4 minutes per side till golden and crispy.</li>
                <li>Remove onto tissue paper. Serve immediately with onion rings and lemon wedges.</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಮೀನು ತುಂಡುಗಳನ್ನು ಚೆನ್ನಾಗಿ ತೊಳೆದು, ಪೂರ್ತಿ ಒಣಗಿಸಿ.</li>
                <li>ಎರಡೂ ಬದಿಗಳಲ್ಲಿ ಆಳವಿಲ್ಲದ ಗೆರೆಗಳನ್ನು ಹಾಕಿ.</li>
                <li>ಒಂದು ಬೌಲ್‌ನಲ್ಲಿ ಮೆಣಸಿನ ಪುಡಿ, ಅರಿಶಿನ, ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್, ನಿಂಬೆ ರಸ, ಮೆಣಸು ಪುಡಿ, ಗರಂ ಮಸಾಲಾ, ಕತ್ತರಿಸಿದ ಕರಿಬೇವು, ಉಪ್ಪು ಮಿಶ್ರಣ ಮಾಡಿ.</li>
                <li>ಈ ಮಸಾಲೆಯನ್ನು ಮೀನಿನ ಎಲ್ಲಾ ಬದಿಗಳಲ್ಲಿ ಚೆನ್ನಾಗಿ ಹಚ್ಚಿ. ಕನಿಷ್ಠ 30 ನಿಮಿಷ (ಫ್ರಿಜ್‌ನಲ್ಲಿ 2-3 ಗಂಟೆ ಇಟ್ಟರೆ ಇನ್ನೂ ಒಳ್ಳೆಯದು).</li>
                <li>ರವೆ ಮತ್ತು ಅಕ್ಕಿ ಹಿಟ್ಟನ್ನು ಒಂದು ದೊಡ್ಡ ತಟ್ಟೆಯಲ್ಲಿ ಮಿಶ್ರಣ ಮಾಡಿ. ಸ್ವಲ್ಪ ಉಪ್ಪು ಮತ್ತು ಮೆಣಸಿನ ಪುಡಿ ಸೇರಿಸಿ.</li>
                <li>ವಿಶಾಲವಾದ ಪಾತ್ರೆಯಲ್ಲಿ ಎಣ್ಣೆಯನ್ನು ಮಧ್ಯಮ ಉರಿಯಲ್ಲಿ ಬಿಸಿ ಮಾಡಿ.</li>
                <li>ಪ್ರತಿ ಮೀನು ತುಂಡನ್ನು ರವೆ ಮಿಶ್ರಣದಲ್ಲಿ ಚೆನ್ನಾಗಿ ಲೇಪಿಸಿ, ಚೆನ್ನಾಗಿ ಅಂಟಿಕೊಳ್ಳಲು ಸ್ವಲ್ಪ ಒತ್ತಿರಿ.</li>
                <li>ಬಿಸಿ ಎಣ್ಣೆಯಲ್ಲಿ ಮೆಲ್ಲನೆ ಇಡಿ. ಒಮ್ಮೆಗೆ 3-4 ತುಂಡುಗಳಷ್ಟೇ ಹಾಕಿ.</li>
                <li>ಮಧ್ಯಮ ಉರಿಯಲ್ಲಿ ಪ್ರತಿ ಬದಿಗೆ 3-4 ನಿಮಿಷ ಗರಿಗರಿಯಾಗಿ ಚಿನ್ನದ ಬಣ್ಣ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಟಿಶ್ಯೂ ಪೇಪರ್ ಮೇಲೆ ತೆಗೆದಿಡಿ. ಈರುಳ್ಳಿ ಉಂಗುರಗಳು ಮತ್ತು ನಿಂಬೆ ತುಂಡುಗಳೊಂದಿಗೆ ತಕ್ಷಣ ಸವಿಯಿರಿ!</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per piece)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ತುಂಡು)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>185 kcal</td></tr>
                <tr><td>Protein</td><td>18 g</td></tr>
                <tr><td>Carbohydrates</td><td>9 g</td></tr>
                <tr><td>Fat</td><td>9 g</td></tr>
                <tr><td>Omega-3</td><td>0.8 g</td></tr>
                <tr><td>Sodium</td><td>320 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>185 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>18 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>9 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>9 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>0.8 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>320 mg</td></tr>
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
            id: 90,
            name: "Rava Fish Fry",
            link: "patra/p10.php",
            image: "../food_image/seafood/rava_fish_fry.jpg"
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