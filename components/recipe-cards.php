<!-- components/recipe-cards.php -->
<style>
  .ch-recipe-section {
    width: 90%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    column-gap: 10px;
    row-gap: 30px;
  }

  .ch-recipe-card {
    background: #fff;
    margin: 30px 10px;
    border-radius: 10px;
    border: 1px solid #ccc;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    cursor: pointer;
    height: 100%;
  }


  .ch-recipe-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
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
    margin: 0;
  }

  .ch-recipe-card p {
    font-size: 16px;
    padding: 5px 20px;
    margin: 0;
    flex-grow: 1;
  }

  .ch-recipe-card a {
    display: block;
    text-align: center;
    background: #ff0000;
    color: #fff;
    padding: 15px 0;
    cursor: pointer;
    text-decoration: none;
    border-radius: 0 0 10px 10px;
    margin-top: auto;
  }

  .ch-recipe-card a:hover {
    background-color: #cc0000;
  }
</style>

<?php
include './DB.php';

$sql = "SELECT * FROM popular_recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($recipe = $result->fetch_assoc()) {
    echo '<div class="ch-recipe-card">';
    echo '<img src="' . $recipe['image'] . '" alt="' . $recipe['title'] . '">';
    echo '<h2>' . $recipe['title'] . '</h2>';
    echo '<p>' . $recipe['description'] . '</p>';
    echo '<a href="#">View Recipe</a>';
    echo '</div>';
  }
} else {
  echo '<p>No recipes found.</p>';
}
?>
