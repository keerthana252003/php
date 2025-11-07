<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Variables & Datatypes</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #f0f3f9;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
    }

    header {
      width: 100%;
      background: #0078ff;
      color: #fff;
      text-align: center;
      padding: 30px 0;
      font-size: 1.8rem;
      letter-spacing: 1px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 30px;
      padding: 40px 20px;
      width: 100%;
      max-width: 1100px;
    }

    .card {
      background: #fff;
      border-radius: 16px;
      padding: 25px;
      width: 340px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      border: 1px solid #eaeaea;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    }

    h2 {
      font-size: 22px;
      color: #0078ff;
      margin-bottom: 15px;
    }

    h3 {
      color: #444;
      margin-top: 20px;
      font-size: 18px;
      border-bottom: 2px solid #0078ff;
      display: inline-block;
      padding-bottom: 3px;
    }

    .result {
      background: #f7f9fc;
      border: 1px solid #e4e8ef;
      border-radius: 10px;
      padding: 15px;
      margin-top: 10px;
      font-size: 15px;
      color: #333;
      line-height: 1.7;
    }

    .result strong {
      color: #0078ff;
    }

    footer {
      margin-top: auto;
      width: 100%;
      background: #0078ff;
      color: #fff;
      text-align: center;
      padding: 15px 0;
      font-size: 14px;
      letter-spacing: 0.5px;
      box-shadow: 0 -3px 10px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
      .card {
        width: 90%;
      }
      header {
        font-size: 1.4rem;
      }
    }
  </style>
</head>
<body>

  <header>💡 PHP Variables & Datatypes</header>

  <div class="container">

    <!-- Variables and Operations -->
    <div class="card">
      <?php
        // Integer variables
        $num1 = 10;
        $num2 = 25;

        // Float variables
        $price = 250.75;
        $discount = 25.50;

        // String variables
        $brand = "GarborStay Grand";
        $type = "Luxury Cottage";

        echo "<h2>🏠 $brand Info</h2>";
        echo "<div class='result'>";
        echo "<strong>Type:</strong> $type<br><br>";

        echo "<strong>Integer Operation:</strong> $num1 + $num2 = " . ($num1 + $num2) . "<br>";
        echo "<strong>Float Operation:</strong> $price - $discount = " . ($price - $discount) . "<br>";
        echo "<strong>Mixed Operation:</strong> $num1 + $price = " . ($num1 + $price) . "<br>";
        echo "<strong>String Example:</strong> Welcome to $brand — Enjoy your stay!<br>";
        echo "</div>";
      ?>
    </div>

    <!-- Datatype Info -->
    <div class="card">
      <?php
        echo "<h3>📘 Datatype Details</h3>";
        echo "<div class='result'>";
        echo "<strong>\$num1:</strong> "; var_dump($num1);
        echo "<br><strong>\$price:</strong> "; var_dump($price);
        echo "<br><strong>\$brand:</strong> "; var_dump($brand);
        echo "</div>";
      ?>
    </div>

  </div>

  <footer>© 2025 PHP Basics — Variables & Datatypes Example</footer>

</body>
</html>
