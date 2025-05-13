<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>

    header {
      height: 60px;
      width: 100%;
      background: #e84517;
      color: #fff;
      display: flex;
      align-items: center;
    }

    .ch-header-container {
      width: 90%;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav {
      display: flex;
      align-items: center;
    }

    .ch-nav-list {
      display: none;
    }

    nav ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    nav ul li {
      display: inline;
      margin-right: 20px;
      font-weight: 550;
    }

    nav ul li a {
      color: #fff;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 50px;
      cursor: pointer;
    }

    nav ul li a:hover {
      color: #e84517;
      background: #fff;
      transition: ease 0.3s;
    }

    .ch-logo {
      font-size: 24px;
      cursor: pointer;
    }

    @media only screen and (min-width: 768px) {
      .ch-menu-icon {
        display: none;
      }

      .ch-nav-list {
        display: block;
      }
    }

  </style>
</head>
<body>

  <header>
    <div class="ch-header-container">
      <h1 class="ch-logo">
        <a style="text-decoration: none; color: #fff;" href="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : '../'); ?>index.php">ChefHive</a>
      </h1>
      <nav>
        <div class="ch-menu-icon">&#9776</div>
        <ul class="ch-nav-list">
          <li><a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : '../'); ?>index.php">Home</a></li>
          <li><a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : '../'); ?>components/about.php">About</a></li>
          <li><a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : '../'); ?>components/recipes.php">Recipes</a></li>
          <li><a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'index.php' ? '' : '../'); ?>components/cuisines.php">Cuisines</a></li>
        </ul>
      </nav>
    </div>
  </header>

</body>
</html>
