<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Motichoor Ladoo | Foodies</title>
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
.brand { 
  font-size: 26px; 
  font-weight: bold; 
}
.nav-section { 
  display: flex; 
  align-items: center; 
  gap: 15px; 
  flex-wrap: wrap; 
}
.nav-links { 
  display: flex; 
  gap: 20px; 
  flex-wrap: wrap; 
}
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
  display: flex;
  align-items: center;
  gap: 5px;
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
  object-fit: cover;
  height: 300px;
}
h2 { 
  color: saddlebrown; 
  border-bottom: 2px solid #e2c097; 
  padding-bottom: 5px; 
  margin-top: 30px; 
}
ul { 
  list-style-type: square; 
  padding-left: 25px; 
}
ol { 
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
.language-indicator {
  display: inline-block;
  margin-left: 5px;
  font-size: 12px;
  vertical-align: middle;
}
.toast {
  position: fixed;
  bottom: 20px;
  right: 20px;
  background-color: rgba(0,0,0,0.8);
  color: white;
  padding: 12px 20px;
  border-radius: 5px;
  z-index: 1000;
  font-size: 14px;
  transition: all 0.3s ease;
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
  .food-img img {
    height: 250px;
  }
}
@media (max-width: 480px) {
  .food-img img {
    height: 200px;
  }
  .video-section button {
    padding: 12px 20px;
    font-size: 16px;
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
  <h1>Motichoor Ladoo</h1>
  <div class="food-img">
    <!-- Replace with your actual image path -->
<img src="/food_recipe/food_image/swt/sw10.avif" style="width: 300px; height: 300px; object-fit: cover; box-shadow: 0 4px 8px rgba(0, 0, 0, 1.3);" alt="sw10">
  </div>

  <div id="recipe-content">
    <h2 data-lang="en">Ingredients</h2>
    <h2 data-lang="kn" style="display:none;">ಸಾಮಗ್ರಿಗಳು</h2>
    <ul data-lang="en">
      <li>1 cup besan (gram flour)</li>
      <li>1 cup sugar</li>
      <li>1/2 cup water</li>
      <li>1/4 tsp cardamom powder</li>
      <li>2 tbsp ghee</li>
      <li>Oil for frying</li>
      <li>1 tbsp milk</li>
      <li>Few strands of saffron (optional)</li>
    </ul>
    <ul data-lang="kn" style="display:none;">
      <li>1 ಕಪ್ ಬೇಸನ್ (ಕಡಲೆ ಹಿಟ್ಟು)</li>
      <li>1 ಕಪ್ ಸಕ್ಕರೆ</li>
      <li>1/2 ಕಪ್ ನೀರು</li>
      <li>1/4 ಟೀಸ್ಪೂನ್ ಏಲಕ್ಕಿ ಪುಡಿ</li>
      <li>2 ಟೇಬಲ್‌ಸ್ಪೂನ್ ತುಪ್ಪ</li>
      <li>ವೈಯಿಂಗ್‌ಗಾಗಿ ಎಣ್ಣೆ</li>
      <li>1 ಟೇಬಲ್‌ಸ್ಪೂನ್ ಹಾಲು</li>
      <li>ಕೆಲವು ಕೇಸರಿ ದಾರಗಳು (ಐಚ್ಛಿಕ)</li>
    </ul>

    <h2 data-lang="en">Steps to Make Motichoor Ladoo</h2>
    <h2 data-lang="kn" style="display:none;">ಮೋತಿಚೂರ್ ಲಡ್ಡು ತಯಾರಿಸುವ ಹಂತಗಳು</h2>
    <ol data-lang="en">
      <li>Mix besan with ghee and milk to make a thick batter.</li>
      <li>Prepare sugar syrup by boiling sugar and water until one-string consistency.</li>
      <li>Pass the besan batter through a perforated spoon to make small boondis.</li>
      <li>Fry the boondis until golden brown and crisp.</li>
      <li>Mix the fried boondis with sugar syrup and cardamom powder.</li>
      <li>Shape the mixture into round ladoos while warm.</li>
      <li>Garnish with saffron strands and let them cool completely.</li>
    </ol>
    <ol data-lang="kn" style="display:none;">
      <li>ಬೇಸನ್ ಅನ್ನು ತುಪ್ಪ ಮತ್ತು ಹಾಲಿನೊಂದಿಗೆ ದಪ್ಪ ಬ್ಯಾಟರ್ ಮಾಡಿ.</li>
      <li>ಸಕ್ಕರೆ ಮತ್ತು ನೀರನ್ನು ಕುದಿಸಿ ಒಂದು ದಾರದ ಸ್ಥಿರತೆಯ ಸಿರಪ್ ತಯಾರಿಸಿ.</li>
      <li>ಬೇಸನ್ ಬ್ಯಾಟರ್ ಅನ್ನು ರಂಧ್ರಗಳಿರುವ ಸ್ಪೂನ್ ಮೂಲಕ ಹಾಯಿಸಿ ಸಣ್ಣ ಬೂಂದಿಗಳನ್ನು ಮಾಡಿ.</li>
      <li>ಬೂಂದಿಗಳನ್ನು ಗೋಲ್ಡನ್ ಬ್ರೌನ್ ಮತ್ತು ಕ್ರಿಸ್ಪ್ ಆಗುವವರೆಗೆ ಫ್ರೈ ಮಾಡಿ.</li>
      <li>ಫ್ರೈ ಮಾಡಿದ ಬೂಂದಿಗಳನ್ನು ಸಕ್ಕರೆ ಸಿರಪ್ ಮತ್ತು ಏಲಕ್ಕಿ ಪುಡಿಯೊಂದಿಗೆ ಮಿಶ್ರಣ ಮಾಡಿ.</li>
      <li>ಬೆಚ್ಚಗಿರುವಾಗ ಮಿಶ್ರಣವನ್ನು ಗುಂಡಗಿನ ಲಡ್ಡುಗಳ ಆಕಾರಕ್ಕೆ ತನ್ನಿ.</li>
      <li>ಕೇಸರಿ ದಾರಗಳಿಂದ ಅಲಂಕರಿಸಿ ಸಂಪೂರ್ಣವಾಗಿ ತಣ್ಣಗಾಗಲು ಬಿಡಿ.</li>
    </ol>

    <h2 data-lang="en">Nutrition Information (per serving)</h2>
    <h2 data-lang="kn" style="display:none;">ಪೌಷ್ಟಿಕ ಮಾಹಿತಿ (ಪ್ರತಿ ಸೇವಿಂಗ್)</h2>
    <table data-lang="en">
      <tr><th>Nutrient</th><th>Amount</th></tr>
      <tr><td>Calories</td><td>280 kcal</td></tr>
      <tr><td>Protein</td><td>5 g</td></tr>
      <tr><td>Carbohydrates</td><td>45 g</td></tr>
      <tr><td>Fat</td><td>9 g</td></tr>
      <tr><td>Fiber</td><td>2 g</td></tr>
      <tr><td>Sodium</td><td>15 mg</td></tr>
    </table>
    <table data-lang="kn" style="display:none;">
      <tr><th>ಪೋಷಕಾಂಶ</th><th>ಪ್ರಮಾಣ</th></tr>
      <tr><td>ಕ್ಯಾಲೊರಿ</td><td>280 kcal</td></tr>
      <tr><td>ಪ್ರೋಟೀನ್</td><td>5 g</td></tr>
      <tr><td>ಕಾರ್ಬೊಹೈಡ್ರೇಟ್ಸ್</td><td>45 g</td></tr>
      <tr><td>ಕೊಬ್ಬು</td><td>9 g</td></tr>
      <tr><td>ಫೈಬರ್</td><td>2 g</td></tr>
      <tr><td>ಸೋಡಿಯಂ</td><td>15 mg</td></tr>
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
    id: 106, 
    name: "Motichoor Ladoo", 
    link: "sweet/s10.php", 
    image: "../food_image/sweet/motichoor_ladoo.jpg" 
  };
  
  let favorites = JSON.parse(localStorage.getItem("favorites")) || [];

  // Initialize heart button state
  if (favorites.find(r => r.id === recipeData.id)) {
    heartBtn.classList.add("active"); 
    heartBtn.textContent = "❤️";
  } else {
    heartBtn.classList.remove("active"); 
    heartBtn.textContent = "♡";
  }

  // Toggle favorite
  heartBtn.addEventListener("click", () => {
    let favorites = JSON.parse(localStorage.getItem("favorites")) || [];
    const exists = favorites.find(r => r.id === recipeData.id);
    
    if (exists) {
      favorites = favorites.filter(r => r.id !== recipeData.id);
      heartBtn.classList.remove("active");
      heartBtn.textContent = "♡";
      showToast("Removed from favorites");
    } else {
      favorites.push(recipeData);
      heartBtn.classList.add("active");
      heartBtn.textContent = "❤️";
      showToast("Added to favorites");
    }
    localStorage.setItem("favorites", JSON.stringify(favorites));
  });

  // Language toggle functionality
  const headerLangBtn = document.getElementById("headerLangBtn");
  const langIcon = document.getElementById("langIcon");
  const langText = document.getElementById("langText");
  
  let currentLang = localStorage.getItem("language") || "en";

  function updateLanguage() {
    document.querySelectorAll("#recipe-content [data-lang]").forEach(el => {
      el.style.display = el.getAttribute("data-lang") === currentLang ? "" : "none";
    });
    
    // Update button text and icon
    if (currentLang === "en") {
      langIcon.textContent = "🏴";
      langText.textContent = "ENG / ಕನ್ನಡ";
    } else {
      langIcon.textContent = "🇮🇳";
      langText.textContent = "ಕನ್ನಡ / ENG";
    }
  }

  updateLanguage();

  headerLangBtn.addEventListener("click", () => {
    currentLang = currentLang === "en" ? "kn" : "en";
    localStorage.setItem("language", currentLang);
    updateLanguage();
  });

  // Toast notification function
  function showToast(message) {
    // Remove existing toast if any
    const existingToast = document.querySelector('.toast');
    if (existingToast) {
      existingToast.remove();
    }
    
    // Create new toast
    const toast = document.createElement('div');
    toast.className = 'toast';
    toast.textContent = message;
    
    document.body.appendChild(toast);
    
    // Remove toast after 3 seconds
    setTimeout(() => {
      toast.style.opacity = '0';
      setTimeout(() => {
        if (toast.parentNode) {
          toast.parentNode.removeChild(toast);
        }
      }, 300);
    }, 3000);
  }
</script>

</body>
</html>