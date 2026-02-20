<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Koonthal Roast | Foodies</title>
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
        <h1>Koonthal Roast (Kerala Squid Roast)</h1>
        <div class="food-img">
<img src="/food_recipe/food_image/para/pal16.jpg" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);">
        </div>
        
        <div id="recipe-content">
            <h2 data-lang="en">Ingredients</h2>
            <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
            <ul data-lang="en">
                <li>500g fresh squid (cleaned, scored & cut into rings/pieces)</li>
                <li>3 large onions, very finely sliced</li>
                <li>2 tomatoes, finely chopped</li>
                <li>2 tbsp ginger-garlic paste</li>
                <li>3 sprigs curry leaves</li>
                <li>2 tbsp Kashmiri chilli powder</li>
                <li>1 tbsp red chilli powder (spicy variety)</li>
                <li>1 tbsp coriander powder</li>
                <li>½ tsp turmeric powder</li>
                <li>1 tsp garam masala</li>
                <li>1 tsp fennel seeds (perumjeerakam)</li>
                <li>1 tsp black pepper powder</li>
                <li>4–5 tbsp coconut oil</li>
                <li>½ cup thick coconut milk (optional, for extra richness)</li>
                <li>Salt to taste</li>
            </ul>
            <ul data-lang="kn" style="display:none;">
                <li>500ಗ್ರಾಂ ತಾಜಾ ಕಾನ್ವಲಿ/ಕೂಂತಲ್ (ಶುಚಿಗೊಳಿಸಿ, ಗೆರೆಗಳಿಟ್ಟು ಉಂಗುರಗಳಾಗಿ ಕತ್ತರಿಸಿದ್ದು)</li>
                <li>3 ದೊಡ್ಡ ಈರುಳ್ಳಿ, ಅತ್ಯಂತ ಸಣ್ಣಗೆ ಕತ್ತರಿಸಿದ್ದು</li>
                <li>2 ಟೊಮೇಟೋ, ಸಣ್ಣಗೆ ಕೊಚ್ಚಿದ್ದು</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್</li>
                <li>3 ಕರಿಬೇವು ಸಿಪ್ಪೆ</li>
                <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕಾಶ್ಮೀರಿ ಮೆಣಸಿನ ಪುಡಿ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಖಾರ ಮೆಣಸಿನ ಪುಡಿ</li>
                <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಕೊತ್ತಂಬರಿ ಪುಡಿ</li>
                <li>½ ಟೀಸ್ಪೂನ್ ಅರಿಶಿನ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಗರಂ ಮಸಾಲಾ</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಸೋಂಪು</li>
                <li>1 ಟೀಸ್ಪೂನ್ ಕರಿಮೆಣಸು ಪುಡಿ</li>
                <li>4-5 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತೆಂಗಿನ ಎಣ್ಣೆ</li>
                <li>½ ಕಪ್ ದಪ್ಪ ತೆಂಗಿನ ಹಾಲು (ಐಚ್ಛಿಕ)</li>
                <li>ರುಚಿಗೆ ಉಪ್ಪು</li>
            </ul>
            
            <h2 data-lang="en">Steps to Make Koonthal Roast</h2>
            <h2 data-lang="kn" style="display:none;">ಕೂಂತಲ್ ರೋಸ್ಟ್ ತಯಾರಿಸುವ ವಿಧಾನ</h2>
            <ol data-lang="en">
                <li>Clean squid thoroughly, score diamond pattern on the inside, cut into rings or pieces. Marinate with turmeric, 1 tsp chilli powder, salt & 1 tsp ginger-garlic paste for 20 mins.</li>
                <li>Heat 3 tbsp coconut oil in a wide heavy kadhai. Add fennel seeds + curry leaves.</li>
                <li>Add finely sliced onions + little salt. Fry on medium flame till deep dark golden brown (this takes 15–20 mins – don’t rush this step!).</li>
                <li>Add ginger-garlic paste, fry till raw smell disappears.</li>
                <li>Add all dry masalas (Kashmiri + spicy chilli, coriander, pepper, garam masala). Roast on low flame for 2–3 minutes till oil separates.</li>
                <li>Add chopped tomatoes. Cook till completely mushy and oil floats on top.</li>
                <li>Add marinated squid pieces. Mix well and cook on high flame for 3–4 minutes (squid releases water).</li>
                <li>Reduce flame to low, cover and cook for 8–10 minutes, stirring occasionally.</li>
                <li>Remove lid, add thick coconut milk (if using). Cook on medium-high flame till almost dry and squid is beautifully coated in dark masala.</li>
                <li>Finish with a final drizzle of coconut oil + handful of fresh curry leaves. Toss for 1 minute.</li>
                <li>Serve hot with Kerala matta rice, appam, or just eat straight from the pan – this is pure addiction!</li>
            </ol>
            <ol data-lang="kn" style="display:none;">
                <li>ಕಾನ್ವಲಿಯನ್ನು ಚೆನ್ನಾಗಿ ಶುಚಿಗೊಳಿಸಿ, ಒಳಭಾಗದಲ್ಲಿ ಡೈಮಂಡ್ ಆಕಾರದ ಗೆರೆಗಳಿಟ್ಟು ಉಂಗುರಗಳು/ತುಂಡುಗಳಾಗಿ ಕತ್ತರಿಸಿ. ಅರಿಶಿನ, 1 ಟೀಸ್ಪೂನ್ ಮೆಣಸಿನ ಪುಡಿ, ಉಪ್ಪು, 1 ಟೀಸ್ಪೂನ್ ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್ ಹಚ್ಚಿ 20 ನಿಮಿಷ ಮ್ಯಾರಿನೇಟ್ ಮಾಡಿ.</li>
                <li>ಅಗಲ ದಪ್ಪ ಕಡಾಯಿಯಲ್ಲಿ 3 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತೆಂಗಿನ ಎಣ್ಣೆ ಬಿಸಿ ಮಾಡಿ. ಸೋಂಪು + ಕರಿಬೇವು ಸೇರಿಸಿ.</li>
                <li>ತುಂಡು ತುಂಡು ಈರುಳ್ಳಿ + ಸ್ವಲ್ಪ ಉಪ್ಪು ಹಾಕಿ. ಮಧ್ಯಮ ಉರಿಯಲ್ಲಿ ಗಾಢ ಕಂದು ಬಣ್ಣ ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ (15-20 ನಿಮಿಷ – ಇದನ್ನು ತ್ವರೆ ಮಾಡಬೇಡಿ!).</li>
                <li>ಶುಂಠಿ-ಬೆಳ್ಳುಳ್ಳಿ ಪೇಸ್ಟ್ ಸೇರಿಸಿ ವಾಸನೆ ಹೋಗುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಎಲ್ಲಾ ಪುಡಿ ಮಸಾಲೆಗಳನ್ನು ಸೇರಿಸಿ ಕಡಿಮೆ ಉರಿಯಲ್ಲಿ 2-3 ನಿಮಿಷ ಎಣ್ಣೆ ಬಿಟ್ಟು ಬರುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಟೊಮೇಟೋ ಸೇರಿಸಿ ಪೂರ್ತಿ ಮೆತ್ತಗಾಗುವವರೆಗೆ ಬೇಯಿಸಿ.</li>
                <li>ಮ್ಯಾರಿನೇಟ್ ಮಾಡಿದ ಕಾನ್ವಲಿ ಸೇರಿಸಿ ಹೆಚ್ಚಿನ ಉರಿಯಲ್ಲಿ 3-4 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
                <li>ಉರಿ ಕಡಿಮೆ ಮಾಡಿ ಮುಚ್ಚಿ 8-10 ನಿಮಿಷ ಬೇಯಿಸಿ.</li>
                <li>ಮುಚ್ಚಳ ತೆಗೆದು ದಪ್ಪ ತೆಂಗಿನ ಹಾಲು ಸೇರಿಸಿ (ಇಚ್ಛೆ). ರಸ ಒಣಗಿ ಕಾನ್ವಲಿ ಮಸಾಲೆಯಲ್ಲಿ ಚೆನ್ನಾಗಿ ಲೇಪಿತವಾಗುವವರೆಗೆ ಹುರಿಯಿರಿ.</li>
                <li>ಕೊನೆಯಲ್ಲಿ ತೆಂಗಿನ ಎಣ್ಣೆ + ತಾಜಾ ಕರಿಬೇವು ಸುರಿದು 1 ನಿಮಿಷ ಟಾಸ್ ಮಾಡಿ.</li>
                <li>ಕೆಂಪು ಅನ್ನ, ಅಪ್ಪಂ ಅಥವಾ ನೇರವಾಗಿ ಕಡಾಯಿಂದಲೇ ತಿನ್ನಿರಿ – ಇದು ಶುದ್ಧ ವ್ಯಸನ!</li>
            </ol>
            
            <h2 data-lang="en">Nutrition Information (per serving)</h2>
            <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
            <table data-lang="en">
                <tr><th>Nutrient</th><th>Amount</th></tr>
                <tr><td>Calories</td><td>340 kcal</td></tr>
                <tr><td>Protein</td><td>32 g</td></tr>
                <tr><td>Carbohydrates</td><td>12 g</td></tr>
                <tr><td>Fat</td><td>20 g</td></tr>
                <tr><td>Omega-3</td><td>1.4 g</td></tr>
                <tr><td>Sodium</td><td>680 mg</td></tr>
            </table>
            <table data-lang="kn" style="display:none;">
                <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
                <tr><td>ಕ್ಯಾಲೊರಿ</td><td>340 kcal</td></tr>
                <tr><td>ಪ್ರೋಟೀನ್</td><td>32 g</td></tr>
                <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>12 g</td></tr>
                <tr><td>ಕೊಬ್ಬು</td><td>20 g</td></tr>
                <tr><td>ಒಮೆಗಾ-3</td><td>1.4 g</td></tr>
                <tr><td>ಸೋಡಿಯಂ</td><td>680 mg</td></tr>
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
            id: 96,
            name: "Koonthal Roast (Kerala Squid Roast)",
            link: "patra/p16.php",
            image: "../food_image/seafood/koon thal_roast.jpg"
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