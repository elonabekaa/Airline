<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Schedule</title>
  <link rel="stylesheet" href="css/vacations.css">
  <link rel="stylesheet" href="css/tabledetails.css">
</head>
<body>
  <!-- Header Part-->
  <header id="header">
        <nav class="container" style="width: 90%;margin: 0 auto;">
        <center>
          <ul id="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="signin.php">Log Out</a></li>
          </ul>
        </center>
      </nav>
  </header>

  <!-- Vacations Section-->
  <?php include 'inc2/vacation.php'; ?>

  <!-- Options Box Part-->
  <?php include 'inc2/opsione.php'; ?>
  
  <!-- Profile Section-->
  <?php include 'inc2/profile.php'; ?>

  <!-- Profile Section-->
  <?php include 'inc2/booking.php'; ?>
  
</body>
</html>