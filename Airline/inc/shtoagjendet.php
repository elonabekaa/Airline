<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="..//css/agjenet.css">
<!-- Header Part-->
<header id="header">
  <nav class="container" style="width: 90%;margin: 0 auto;">
  <center>
    <ul id="navbar">
      <li><a href="../index.php">Home</a></li></ul>
    </center>
  </nav>
</header>
<div class="form-wrapper">
  <h1>Register for Agents</h1>
<a href="index.html" id="logo"></a>

<?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: " . mysqli_connect_error());
  }
  
  if (isset($_POST['regjistrohu'])) {
    //POST dërgon të dhënat në një mënyrë të fshehtë. 
    
    //variabël                                                                                       p
    $stmt = $dbConnect->prepare("INSERT INTO `agjendet` (`emrimbiemri`, `email`, `telefoni`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $emrimbiemri, $email, $telefoni);
    /*$dbConnect->prepare perdorim me shtuar të dhëna në tabelën agjendet. 
    Metoda bind_param lidh vlerat sss-tringje.*/

    $emrimbiemri = $_POST['emri'] . ' ' . $_POST['mbiemri'];
    $email = $_POST['email'];
    $telefoni = $_POST['telefoni'];
    $stmt->execute();
    if ($stmt->affected_rows > 0) {
        echo "Agjendi u regjistrus me sukses";
    } else {
        echo "Agjendi nuk u regjistrus: " . $stmt->error;
    }
    /*execute() ekzekuton deklaratën prepare()*/
  }
  ?>
  <form id="login" class="box" action="" method="post">
  <legend>Form for register</legend><br>
  <label>Name:</label>
  <input type="text" id="emri" name="emri"><br>
  <label>Surname:</label>
  <input type="text" id="mbiemri" name="mbiemri"><br>
  <label>Telephone:</label>
  <input type="text" id="telefoni" name="telefoni"><br>
  <label>Email:</label>
  <input type="email" id="email" name="email"><br>
  <label>Password:</label>
  <input type="password" id="fjalekalimi" name="fjalekalimi"><br>
  <input type="submit" name="regjistrohu" id="regjistrohu" value="Register">

