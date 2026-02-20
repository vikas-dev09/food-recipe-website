<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Favorites | Foodies</title>
  <style>
    * { 
      box-sizing: border-box; 
      margin: 0; 
      padding: 0; 
      font-family: Arial, sans-serif; 
    }

    body {
      background-color: #fffaf3;
      color: #333;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      padding-bottom: 60px; /* to prevent content being hidden behind fixed footer */
    }

    /* HEADER WITH LOGO */
    .header {
      background-color: saddlebrown;
      color: white;
      width: 100%;
      padding: 15px 0;
      position: sticky;
      top: 0;
      z-index: 100;

      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      font-size: 26px;
      font-weight: bold;
    }

    .header-logo {
      height: 55px;      /* adjust size if you want bigger/smaller */
      width: 55px;
      border-radius: 50%;
      object-fit: cover;
    }

    .container {
      width: 90%;
      max-width: 600px;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      margin: 30px 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      height: 800px; /* fixed height */
    }

    h1 {
      text-align: center;
      color: saddlebrown;
      margin-bottom: 20px;
      flex-shrink: 0;
    }

    /* Scrollable recipes list */
    #favoritesContainer {
      flex: 1;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 15px;
      padding-right: 10px;
      scrollbar-width: thin;
    }

    #favoritesContainer::-webkit-scrollbar {
      width: 8px;
    }

    #favoritesContainer::-webkit-scrollbar-thumb {
      background-color: goldenrod;
      border-radius: 4px;
    }

    .fav-card {
      background: #fef6e4;
      border: 1px solid #e2c097;
      border-radius: 8px;
      padding: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: transform 0.2s;
    }

    .fav-card:hover {
      transform: scale(1.02);
    }

    .fav-card h3 {
      color: saddlebrown;
      font-size: 18px;
    }

    .card-actions {
      display: flex;
      gap: 10px;
    }

    .view-btn, .remove-btn {
      border: none;
      padding: 6px 10px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: bold;
      transition: 0.3s;
      font-size: 14px;
    }

    .view-btn {
      background-color: saddlebrown;
      color: white;
      text-decoration: none;
    }

    .view-btn:hover {
      background-color: goldenrod;
      color: white;
    }

    .remove-btn {
      background-color: crimson;
      color: white;
    }

    .remove-btn:hover {
      background-color: darkred;
    }

    .empty {
      text-align: center;
      font-size: 18px;
      color: gray;
      margin-top: 20px;
    }

    /* Fixed footer */
    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background-color: saddlebrown;
      color: white;
      text-align: center;
      padding: 15px 0;
      font-size: 16px;
      z-index: 100;
    }

    @media(max-width:600px){
      .fav-card h3 { font-size: 16px; }
      .view-btn, .remove-btn { padding: 5px 8px; font-size: 12px; }

      .header {
        font-size: 20px;
      }
      .header-logo {
        height: 45px;
        width: 45px;
      }
    }
  </style>
</head>
<body>

  <!-- HEADER WITH LOGO -->
  <div class="header">
    <img src="/food_recipe/logo.png" alt="Foodies Logo" class="header-logo">
    <span>Foodies ❤️ Favorites</span>
  </div>

  <div class="container">
    <h1>Your Favorite Recipes</h1>
    <div id="favoritesContainer"></div>
    <p id="emptyMsg" class="empty" style="display:none;">No favorite recipes yet 😢</p>
  </div>

  <div class="footer">© 2025 Foodies. All rights reserved.</div>

  <script>
    const favoritesContainer = document.getElementById("favoritesContainer");
    let favorites = JSON.parse(localStorage.getItem("favorites")) || [];

    function renderFavorites() {
      favoritesContainer.innerHTML = "";

      if (favorites.length === 0) {
        document.getElementById("emptyMsg").style.display = "block";
        return;
      } else {
        document.getElementById("emptyMsg").style.display = "none";
      }

      favorites.forEach((recipe, index) => {
        const card = document.createElement("div");
        card.className = "fav-card";

        card.innerHTML = `
          <h3>${recipe.name}</h3>
          <div class="card-actions">
            <a href="${recipe.link}" class="view-btn" target="_blank">View</a>
            <button class="remove-btn" data-index="${index}">Remove</button>
          </div>
        `;

        favoritesContainer.appendChild(card);
      });

      const removeBtns = document.querySelectorAll(".remove-btn");
      removeBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          const i = btn.getAttribute("data-index");
          favorites.splice(i, 1);
          localStorage.setItem("favorites", JSON.stringify(favorites));
          renderFavorites();
        });
      });
    }

    renderFavorites();
  </script>

</body>
</html>
