<link rel="stylesheet" href="../css/signin.css">
<link rel="stylesheet" href="../css/pasagjer.css">
<!-- Header Part-->
<header id="header">
    <nav class="container" style="width: 90%; margin: 0 auto;">
      <center>
        <ul id="navbar">
          <li><a href="../tableboard.php">Back</a></li>
          <li><a href="signin.php">Log Out</a></li>
        </ul>
      </center>
    </nav>
  </header>
  <center>
    <h4>Our Passagers</h4>
    <table id="members" style="margin-left: 2%;">
      <tr>
      <th>Passager</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Telephone</th>
      <th>Country</th>
      <th>Personal ID</th>
      <th>Status</th>
    </tr>
  </center>
      
<?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: "  . mysqli_connect_error());
  }
  
  $sql = "SELECT pasagjeriid, emri, mbiemri, email, telefoni, shteti, nrpersonal, statusi FROM pasagjeret"; 
  $pasagjeret = mysqli_query($dbConnect, $sql);
  if ($pasagjeret) {
    while ($pasagjeri = mysqli_fetch_assoc($pasagjeret)) {
       //Përdoret mysqli_fetch_assoc() për të marrë çdo rresht të rezultateve si një array asociativ.
      echo "<tr>";
      echo "<td>" .$pasagjeri['pasagjeriid'] . "</td>";
      echo "<td>" .$pasagjeri['emri'] . "</td>";
      echo "<td>" .$pasagjeri['mbiemri'] . "</td>";
      echo "<td>" .$pasagjeri['email'] . "</td>";
      echo "<td>" .$pasagjeri['telefoni'] . "</td>";
      echo "<td>" .$pasagjeri['shteti'] . "</td>";
      echo "<td>" .$pasagjeri['nrpersonal'] . "</td>";
      echo "<td>" . $pasagjeri['statusi'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='10'>No data found</td></tr>";
  }
?>
