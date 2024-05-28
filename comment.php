<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/4c729db828.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" type="text/css" href="css/comment1.css">
    <title>Your Feedback</title>
</head>

<body>

<nav class="navbar navbar-expand-lg">
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
                    <a class="nav-link" href="image.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="comment.php">Comment</a>
                    </li>
					<li class="nav-item">
                    <a class="nav-link" href="BMI.php">BMI</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
    <h1>Feedback Form</h1>
    <form action="Comment.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" placeholder="Enter your name"><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter your email"><br>

        <label for="comment">Comment:</label><br>
        <textarea id="comment" name="comment" rows="4" placeholder="Enter your comment here"></textarea><br>

        <input type="submit" value="Send">
    </form>
</body>
</html>
