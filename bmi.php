<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="css/bmi1.css">
  <script src="js/bmi.js"></script>
  <title>BMI Calculator</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand logo text-uppercase" href="index1.php">Hana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="online portfolio.php">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="education.php">Education</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="passion.php">Passion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="image.php">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="comment.php">Comment</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-5 pt-5">
  <div class="calculator">
    <h2>BMI Calculator</h2>
    <label for="weight">Weight (kg):</label>
    <input id="weight" required="" type="number" />

    <label for="height">Height (cm):</label>
    <input id="height" required="" type="number" />

    <button onclick="calculateBMI()">Calculate BMI</button>

    <div id="result"></div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+kMlW5KGeBbL7D4bo3Rar5N24d93cFQeNJcpgRm+sbShF9V8liH3QyZ1A50IUp" crossorigin="anonymous"></script>
</body>
</html>
