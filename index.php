<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" class="meta-charset" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" class="meta-viewport" />
  <title class="title">ChefHive | Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" class="bootstrap-link" />
  <link rel="stylesheet" href="extra-style.css" class="extra-style-link" />
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
      padding: 100px 0;
      margin-bottom: 20px;
    }

    .hero-title {
      font-size: 36px;
      margin-bottom: 10px;
    }

    .hero-desc {
      font-size: 20px;
      margin-bottom: 10px;
    }

    @media only screen and (max-width: 768px) {
      .hero-title {
        font-size: 28px;
      }

      .hero-desc {
        font-size: 15px;
      }
    }

    .ch-search-box {
      max-width: 550px;
      margin: 50px auto 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .ch-search-box input {
      width: 70%;
      padding: 10px 15px;
      border: 0;
      border-radius: 30px 0 0 30px;
      font-size: 1rem;
      outline: none;
    }

    .ch-search-box button {
      padding: 10px 20px;
      border: 0;
      border-radius: 0 30px 30px 0;
      font-size: 1rem;
      background: #ff0000; 
      color: #fff;
      cursor: pointer;
      outline: none;
      transition: background 0.3s;
    }

    .ch-search-box button:hover {
      background: #cc0000; 
    }
    
    .ch-recipes h1 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 36px;
      font-weight: bold;
    }

  </style>
</head>
<body class="chef-app">

  <?php include './components/navbar.php'; ?>

  <main class="main">
    <section class="ch-hero">
      <div class="ch-hero-section">
        <h2 class="hero-title">Welcome To ChefHive</h2>
        <p class="hero-desc">Discover delicious recipes crafted with love!</p>
        <form action="#" class="ch-search-box">
          <input class="ch-search-inp" type="text" placeholder="Search recipe" />
          <button class="ch-search-btn" type="submit">Search</button>
        </form>
      </div>
    </section>

    <section class="ch-recipes">
      <h1>Popular Recipes</h1>
      <div class="ch-recipe-section">
        <?php include './components/recipe-cards.php'; ?>
      </div>
    </section>

   <?php include './components/carousel.php'; ?>


  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php include './components/footer.php'; ?>
</body>
</html>