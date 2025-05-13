<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChefHive | Categories</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <style>
    ul, li, h1, h2, h3, h4, h5, h6, p, a {
      all: unset;
      display: revert;
    }

    ul {
      padding-left: 0;
      margin: 0;
    }

    li {
      list-style: none;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: sans-serif !important;
    }

    body {
      min-height: 100vh;
      width: 100%;
      background-color: #f8f8f8;
    }

    .ch-hero {
      width: 100%;
      background-image: url(images/title-BG2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      color: #ffffff;
      text-align: center;
      padding: 140px 0;
      margin-bottom: 20px;
    }

    .ch-hero h2 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .ch-hero p {
      font-size: 20px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 768px) {
      .ch-hero h2 {
        font-size: 28px;
      }

      .ch-hero p {
        font-size: 15px;
      }
    }

    .ch-recipes {
      padding: 50px 0;
    }

    .ch-recipes h1 {
      text-align: center;
      margin-bottom: 30px;
      font-size: 35px;
    }

    .ch-recipe-section {
      width: 90%;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      column-gap: 10px;
    }

    .ch-recipe-card {
      background: #fff;
      margin: 30px 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .ch-recipe-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
    }

    .ch-recipe-card h2 {
      font-size: 22px;
      padding: 15px 10px 5px;
    }

    .ch-recipe-card p {
      font-size: 16px;
      padding: 5px 20px;
    }

    .ch-recipe-card a {
      display: block;
      text-align: center;
      text-decoration: none;
      background: #ff0000;
      color: #fff;
      padding: 15px 0;
      cursor: pointer;
    }

    .ch-recipe-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    }

    #categories {
      background-color: #f8f9fa;
    }

    #categories h2 {
      font-weight: bold;
      font-size: 2.5rem;
    }

    .card img {
      height: 200px;
      object-fit: cover;
    }

    .card-title {
      font-size: 1.5rem;
      margin-bottom: 1rem;
    }

    .scrolling-wrapper {
      overflow-x: auto;
      scrollbar-width: none;
      -ms-overflow-style: none;
    }

    .scrolling-wrapper::-webkit-scrollbar {
      display: none;
    }
  </style>
</head>

<body class="chef-app">
  <?php include './navbar.php'; ?>

<section class="ch-hero">
  <div class="ch-hero-section">
    <h2>Recipe Categories</h2>
    <p>Find recipes by category: Breakfast, Lunch, Dinner, and more!</p>
  </div>
</section>

<section class="ch-recipes">
  <h1>Cuisines</h1>
  <div class="ch-recipe-section">
    <div class="ch-recipe-card">
      <img src="./images/breakfast.jpg" />
      <h2>Breakfast</h2>
      <p>Start your day with energy!</p>
      <a href="#">Explore</a>
    </div>

    <div class="ch-recipe-card">
      <img src="./images/lunch.jpg" />
      <h2>Lunch</h2>
      <p>Delicious meals to enjoy at noon.</p>
      <a href="#">Explore</a>
    </div>

    <div class="ch-recipe-card">
      <img src="./images/dinner.jpg" />
      <h2>Dinner</h2>
      <p>Perfect dishes to end your day.</p>
      <a href="#">Explore</a>
    </div>

    <div class="ch-recipe-card">
      <img src="./images/desserts.jpg" />
      <h2>Desserts</h2>
      <p>Sweet treats for every mood.</p>
      <a href="#">Explore</a>
    </div>
  </div>
</section>

  <?php include './footer.php'; ?>
</body>
</html>