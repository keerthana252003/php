<!DOCTYPE html>
<html>
<head>
  <title>PHP Arithmetic Operators</title>
  <style>
    body {
      background: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 40px;
    }
    .container {
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 400px;
      margin: auto;
    }
    h2 {
      color: #333;
      text-align: center;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 10px;
      text-align: center;
    }
    th {
      background: #007BFF;
      color: white;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>PHP Arithmetic Operators</h2>
  <?php
    $a = 10;
    $b = 5;
  ?>

  <table>
    <tr>
      <th>Operation</th>
      <th>Expression</th>
      <th>Result</th>
    </tr>
    <tr><td>Addition</td><td><?php echo "$a + $b"; ?></td><td><?php echo $a + $b; ?></td></tr>
    <tr><td>Subtraction</td><td><?php echo "$a - $b"; ?></td><td><?php echo $a - $b; ?></td></tr>
    <tr><td>Multiplication</td><td><?php echo "$a * $b"; ?></td><td><?php echo $a * $b; ?></td></tr>
    <tr><td>Division</td><td><?php echo "$a / $b"; ?></td><td><?php echo $a / $b; ?></td></tr>
    <tr><td>Modulus</td><td><?php echo "$a % $b"; ?></td><td><?php echo $a % $b; ?></td></tr>
    <tr><td>Exponentiation</td><td><?php echo "$a ** $b"; ?></td><td><?php echo $a ** $b; ?></td></tr>
  </table>
</div>

</body>
</html>
