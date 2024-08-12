<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/shtoagjendet.css">
<link rel="stylesheet" href="..//css/agjenet.css">
<br>
<main class="container page">
  <article id="maininfo">
    <h1 style="margin-top: 300px; font-size: 24px;"><abbr title="Wizz Air">About us</abbr></h1>
    <hr>                       
    <b>What we do</b>
    <p>We are a global travel search site comparing flights, hotels and car rental deals. One click and you’re 
        taken directly to your chosen site where the booking is completed. . We have been recommended by leading 
        media such as The Daily Telegraph, Forbes, Time and AOL, and have won industry accolades for Best Meta
        Search and Best Airfare Search Site.</p><br> 
        
    <b>Our vision</b>
    <p>We think everybody should be able to travel the world. Our vision is of a world where our differences are
      a source of inspiration and development, not intolerance and prejudice. Our purpose is to give courage
      and encourage each one of us to stay curious and be open-minded so we can all enjoy a better,
      more diversified world.</p><br>
       
    <b>Let’s Open Our World</b>
    <p>We were founded in 2006 and are based in Copenhagen, Denmark. We’re all passionate about our work, and we
      all take great pride in openingthe world, together with our fellow travelers.</p>
    </div>
  </article>
  </main>
  <a href="index.html" id="logo">
    <img src="images/logo.png" alt="Airline"></a>
    <p style="font-size: 22px;">You can contact one of your agents</p>
    <button><a href="inc/shtoagjendet.php">You can add Agents</a></button>
    <table id="members">
      <tr>
        <th>Agent </th>
        <th>Telephone </th>
        <th>Email</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
  <?php 
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: " . mysqli_connect_error());
  }
  //v
  $sql = "SELECT agjendiid, emrimbiemri, email, telefoni FROM agjendet"; 
  $agjendet = mysqli_query($dbConnect, $sql);
  if ($agjendet) {
    while ($agjenti = mysqli_fetch_assoc($agjendet)) {
      ////array asociativ.
      echo "<tr>";
      echo "<td>" . $agjenti['emrimbiemri'] . "</td>";
      echo "<td>" . $agjenti['telefoni'] . "</td>";
      echo "<td>" . $agjenti['email'] . "</td>";
      echo "<td><a href ='inc/modifikoagjendet.php?aid=" . $agjenti['agjendiid'] . "'>Edit</a></td>";
      echo "<td><a href ='inc/deleteagjendet.php?aid=" . $agjenti['agjendiid'] . "'>Delete</a></td>";
      echo "</tr>";
    }
  }
  ?>
  </table><br>
