<html>
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Airline Project</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
  .covid {
  height: 310px;
  background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
    url("<?php echo 'images/covid.jpg'; ?>");
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  text-align: center;
}
  </style>

 </head>
<body>
  <!-- Header Part-->
  <?php include 'inc/header.php'; ?>

  <!-- Vacation Box Part-->
  <?php include 'inc/vacation.php'; ?>
  
  <!-- Agjendet Box Part-->
  <?php include 'inc/agjendet.php'; ?>
  
  <!--Covid Part-->
  <?php include 'inc/covid.php'; ?>
  
  <!-- Footer Part-->
    <footer id="footer">
    <center><p>
        <em>Copyright &copy; 2024 Share Your Travels</em>
        <em>You Can Travel Everywhere. Copyright &copy; 2024</em>
      </p></center>
    </footer>
  </body>
</html>