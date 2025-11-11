<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP String Methods Example</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: linear-gradient(135deg, #ec047bff, #e0f40cff);
      color: #fff;
      margin: 0;
      padding: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
    .container {
      background: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      max-width: 800px;
      width: 100%;
    }
    h1 {
      text-align: center;
      color: #ffea00;
      margin-bottom: 25px;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
    }
    .card {
      background: rgba(255, 255, 255, 0.15);
      border-radius: 12px;
      padding: 15px 20px;
      margin: 12px 0;
      box-shadow: inset 0 0 5px rgba(255, 255, 255, 0.2);
      transition: transform 0.2s, background 0.3s;
    }
    .card:hover {
      transform: scale(1.02);
      background: rgba(255, 255, 255, 0.25);
    }
    .highlight {
      color: #ffe082;
      font-weight: bold;
    }
    pre {
      background: rgba(0, 0, 0, 0.3);
      padding: 8px;
      border-radius: 8px;
      overflow-x: auto;
      color: #aeeaff;
      font-size: 14px;
    }
    footer {
      text-align: center;
      margin-top: 20px;
      font-size: 14px;
      color: #eee;
      opacity: 0.8;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1> PHP String Methods Example </h1>

    <?php
      $text = "Hello World! PHP is Amazing.";

      echo "<div class='card'><span class='highlight'>Original String:</span> $text</div>";

      
      echo "<div class='card'><b> strlen:</b> " . strlen($text) . " (Length of string)</div>"; //(strlen)

     
      echo "<div class='card'><b> str_word_count:</b> " . str_word_count($text) . " (Number of words)</div>";  // (str_word_count)

      
      echo "<div class='card'><b> strpos:</b> Position of 'PHP' is " . strpos($text, 'PHP') . "</div>"; // (strpos)

      
      echo "<div class='card'><b> strtoupper:</b> " . strtoupper($text) . "</div>";// (strtoupper)

     
      echo "<div class='card'><b> strtolower:</b> " . strtolower($text) . "</div>"; // strtolower

  
      echo "<div class='card'><b> strrev:</b> " . strrev($text) . " (Reversed)</div>";    // (strrev)

      
      echo "<div class='card'><b> str_replace:</b> " . str_replace('Amazing', 'Powerful', $text) . "</div>";// str_replace

      
      $extraSpaces = "   Hello PHP!   ";
      echo "<div class='card'><b> trim:</b> Original: '<span class=\"highlight\">$extraSpaces</span>' → After trim: '<span class=\"highlight\">" . trim($extraSpaces) . "</span>'</div>";  // (trim)


      
      $words = explode(" ", $text);
      echo "<div class='card'><b> explode:</b> Convert string into array → <pre>";
      print_r($words);
      echo "</pre></div>"; // (explode)

      
      $name = "Keerthana";
      $msg = "Welcome to PHP!";
      echo "<div class='card'><b> Concatenation:</b> " . $name . " - " . $msg . "</div>";// (concatenation)
    ?>

    <footer>© 2025 PHP String Methods| Designed by Keerthana </footer>
  </div>

</body>
</html>
