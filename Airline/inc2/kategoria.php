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
    <h3>Our Category Of Airline</h3>
    <table id="members" style="margin-left: 2%;">
      <tr>
      <th>Category</th>
      <th>Economy</th>
      <th>Business</th>
      <th>Firstclass</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Telephone</th>
      <th>Country</th>
      <th>Personal ID</th>
    </tr>
</center>
<?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: "  . mysqli_connect_error());
  }
  /*Këtu, mysqli_query përdoret për të ekzekutuar një query SQL që merr informacion për kategoritë e pasagjerëve nga tabela kategoria*/
  $sql = "SELECT kategoriaid, economy, business, firstclass, emri, mbiemri, telefoni, shteti, nrpersonal FROM kategoria"; 
  $kategoria = mysqli_query($dbConnect, $sql);
  if ($kategoria) {
    while ($kategori = mysqli_fetch_assoc($kategoria)) {
       //Përdoret mysqli_fetch_assoc() për të marrë çdo rresht të rezultateve si një array asociativ.
      echo "<tr>";
      echo "<td>" .$kategori['kategoriaid'] . "</td>";
      echo "<td>" .$kategori['economy'] . "</td>";
      echo "<td>" .$kategori['business'] . "</td>";
      echo "<td>" .$kategori['firstclass'] . "</td>";
      echo "<td>" .$kategori['emri'] . "</td>";
      echo "<td>" .$kategori['mbiemri'] . "</td>";
      echo "<td>" .$kategori['telefoni'] . "</td>";
      echo "<td>" . $kategori['shteti'] . "</td>";
      echo "<td>" . $kategori['nrpersonal'] . "</td>";
      echo "</tr>";
    }
  } else {
    die("kategoria nuk u shfaq me sukses: " . mysqli_error($dbConnect));
  }
  ?>


