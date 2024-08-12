<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="..//css/agjenet.css">
<!-- Header Part-->
<header id="header">
  <nav class="container" style="width: 90%;margin: 0 auto;">
  <center>
    <ul id="navbar">
      <li><a href="../index.php">Home</a></li>
    </ul>
  </center>
  </nav>
</header>
<center><h1 style="color: black">Delete Agent</h1></center>
    <?php 
    $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
    if (!$dbConnect){
      die("Lidhja me DB deshtoi: " . mysqli_connect_error());
    }//Url
    if(isset($_GET['aid'])){
      $aid = $_GET['aid'];
      $sql = "SELECT agjendiid, emrimbiemri, telefoni, email, fjalekalimi FROM agjendet WHERE agjendiid=$aid"; 
      $agjenti = mysqli_query($dbConnect, $sql);
      //array asociativ. 
      if($agjenti){
        $agjenti = mysqli_fetch_assoc($agjenti);
        if (isset($_POST['emri']) && isset($_POST['mbiemri'])) {
          $emrimbiemri = $_POST['emri'] . ' ' . $_POST['mbiemri'];
        } else {
          $emrimbiemri = $agjenti['emrimbiemri']; 
        }
        $telefoni = $agjenti['telefoni'];
        $email = $agjenti['email'];
        $fjalekalimi = $agjenti['fjalekalimi'];
      }      
      //kontrollon ID nga kërkese GET. 
    }
    if(isset($_POST['delete'])){
      $agjendiid = $_POST['agjendiid'];
      $sql = "DELETE FROM agjendet WHERE agjendiid=$agjendiid"; 
      $agjenti = mysqli_query($dbConnect, $sql);
      if ($agjenti){
        echo "Agjendi u fshije me sukses";
      } else {
        die("Agjendi nuk u fshije: " . mysqli_error($dbConnect));
      }
    }
    ?>
    
    <form id="login" class="box" action="" method="post">
      <center><legend>Delete form</legend><br></center>
      <input type="hidden" id="agjendiid" name="agjendiid" 
        value="<?php if (!empty($agjenti['agjendiid'])) echo $agjenti['agjendiid']; ?>">

      <label>Name:</label>
      <input type="text" id="emrimbiemri" name="emri"  disabled
        value="<?php if (!empty($emrimbiemri)) echo $emrimbiemri; ?>"><br>
        
     <input type="submit" name="delete" id="delete" value="Delete">
    </form>

