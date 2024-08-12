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
    <h4>Our Pilots</h4>
    <table id="members" style="margin-left: 2%;">
      <tr>
      <th>Pilot</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Email</th>
      <th>Password</th>
      <th>Telephone</th>
      <th>Personal ID</th>
    </tr>
  </center>
      
<?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: "  . mysqli_connect_error());
  }
  
  $sql = "SELECT pilotiid, emri, mbiemri, email, password, telefoni, nrpersonal FROM pilotet;"; 
  $pilotet = mysqli_query($dbConnect, $sql);
  if ($pilotet) {
    while ($piloti = mysqli_fetch_assoc($pilotet)) {
      //Përdoret mysqli_fetch_assoc() për të marrë çdo rresht të rezultateve si një array asociativ. 
      echo "<tr>";
      echo "<td>" .$piloti['pilotiid'] . "</td>";
      echo "<td>" .$piloti['emri'] . "</td>";
      echo "<td>" .$piloti['mbiemri'] . "</td>";
      echo "<td>" .$piloti['email'] . "</td>";
      echo "<td>" .$piloti['password'] . "</td>";
      echo "<td>" .$piloti['telefoni'] . "</td>";
      echo "<td>" .$piloti['nrpersonal'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='10'>No data found</td></tr>";
  }
?>
