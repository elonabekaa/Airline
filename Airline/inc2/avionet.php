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
  <h3>Our Airlines</h3>
    <table id="members" style="margin-left: 2%;">
      <tr>
      <th>Category</th>
      <th>Economy</th>
      <th>Business</th>
      <th>Firstclass</th>
    </tr>
  </center>
  <?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: "  . mysqli_connect_error());
  }
  
  $sql = "SELECT avioniid, modeli, kapaciteti, kompaniaajrore FROM avionet"; 
  $avionet = mysqli_query($dbConnect, $sql);
  //array asociativ. 
  if ($avionet) {
    while ($avioni = mysqli_fetch_assoc($avionet)) {
      echo "<tr>";
      echo "<td>" .$avioni['avioniid'] . "</td>";
      echo "<td>" .$avioni['modeli'] . "</td>";
      echo "<td>" .$avioni['kapaciteti'] . "</td>";
      echo "<td>" .$avioni['kompaniaajrore'] . "</td>";
      echo "</tr>";
    }
  } else {
    die("kategoria nuk u shfaq me sukses: " . mysqli_error($dbConnect));
  }
  ?>