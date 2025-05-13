<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Cuisines Carousel</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>

  <style>
    body {
      background-color: #f8f9fa;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 3%;
    }

    .cuisines-carousel {
      padding: 60px 0;
    }

    .cuisines-carousel h1 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 36px;
      font-weight: bold;
    }

    .carousel-inner {
      width: 100%;
      display: flex;
      align-items: center;
    }

    .cuisine-card {
      position: relative;
      background-size: cover;
      background-position: center;
      height: 300px;
      border-radius: 12px;
      overflow: hidden;
      color: #fff;
      display: flex;
      align-items: flex-end;
      transition: transform 0.3s;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }

    .cuisine-card:hover {
      transform: translateY(-5px);
    }

    .cuisine-card::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0, 0, 0, 0.4);
      z-index: 0;
    }

    .cuisine-card-body {
      position: relative;
      z-index: 1;
      padding: 20px;
      width: 100%;
    }

    .cuisine-card-body h5 {
      font-size: 22px;
      font-weight: 600;
      margin-bottom: 8px;
    }

    .cuisine-card-body p {
      font-size: 16px;
      margin: 0;
    }

    @media (max-width: 768px) {
      .cuisine-card {
        height: 250px;
      }
    }
  </style>
</head>
<body>

<section class="cuisines-carousel">
  <h1>Cuisines</h1>

  <div id="cuisinesCarousel" class="carousel slide" data-bs-ride="carousel">
   <div class="carousel-inner">
      <?php
        $chunks = array_chunk($cuisines, 2);
        foreach ($chunks as $index => $pair) {
          echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">';
          echo '<div class="d-flex justify-content-center w-100">';
          echo '<div class="row w-100" style="max-width: 1140px;">';
          foreach ($pair as $cuisine_carousel) {
            echo '
            <div class="col-md-6 mb-4">
              <div class="cuisine-card" style="background-image: url(\'' . $cuisine_carousel['image_url'] . '\');">
                <div class="cuisine-card-body">
                  <h5>' . htmlspecialchars($cuisine_carousel['title']) . '</h5>
                  <p>' . htmlspecialchars($cuisine_carousel['description']) . '</p>
                </div>
              </div>
            </div>';
          }
          echo '</div></div></div>';
        }
      ?>
  </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#cuisinesCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cuisinesCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>