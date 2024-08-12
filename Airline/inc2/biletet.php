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
    <h4>Your perfect ticket</h4>
    <table id="members" style="margin-left: 2%;">
      <tr>
      <th>Tickets</th>
      <th>Name</th>
      <th>Surname</th>
      <th>Seats</th>
      <th>Departure Date</th>
      <th>Return Date </th>
      <th>Return Ticket</th>
      <th>Arrival Ticket</th>
      <th>Price</th>
    </tr>
  </center>
      
  <?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: "  . mysqli_connect_error());
  }
  
  $sql = "SELECT biletaid, emri, mbiemri, uleset, datanisjes, datakthimit, biletavajtje, biletaardhje,cmimi FROM bileta"; 
  $bileta = mysqli_query($dbConnect, $sql);
  if ($bileta) {
    while ($bilet = mysqli_fetch_assoc($bileta)) {
      //array asociativ. 
      echo "<tr>";
      echo "<td>" .$bilet['biletaid'] . "</td>";
      echo "<td>" .$bilet['emri'] . "</td>";
      echo "<td>" .$bilet['mbiemri'] . "</td>";
      echo "<td>" .$bilet['uleset'] . "</td>";
      echo "<td>" .$bilet['datanisjes'] . "</td>";
      echo "<td>" .$bilet['datakthimit'] . "</td>";
      echo "<td>" .$bilet['biletavajtje'] . "</td>";
      echo "<td>" .$bilet['biletaardhje'] . "</td>";
      echo "<td>" .$bilet['cmimi'] . "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='10'>No data found</td></tr>";
  }
  ?>
