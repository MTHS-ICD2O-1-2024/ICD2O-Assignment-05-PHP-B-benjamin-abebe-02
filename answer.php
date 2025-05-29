<!DOCTYPE html>
<!-- Soccer Jersey Store -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Calculate sum of a square" />
  <meta name="keywords" content="Calculate square, icd2o" />
  <meta name="author" content="Benjamin Abebe" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link rel="stylesheet" href="./style.css">
  <title>Calculate sum of a square</title>
</head>

<body>
  <script src="./js/script.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Calculate sum of a square</span>
      </div>
    </header>
    <form action="./answer.php" method="get">
      <img src="./download.png" alt="square" />
      <main class="mdl-layout__content">
        <div class="right-image">

        </div>
        <div class="center-content">
          <div class="page-content">Results</div>
          <br />
          <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
            type="submit">
            Return
          </a>
          <br /><br />
          <?php
          $n = intval($_GET["n"]); // get input and convert to integer
          $sum = 0;

          for ($i = 1; $i <= $n; $i++) {
            $sum += $i * $i;
          }

          // display the answer
          echo "<p>The sum of squares of the first $n number is: $sum .</p>"
          ?>
        </div>
    </form>
    </main>
  </div>
</body>

</html>