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
<center><h1 style="color: black">Modify your Agent</h1></center>

<?php
  $dbConnect = mysqli_connect('localhost', 'root', '', 'airline');
  if (!$dbConnect) {
    die("Lidhja me DB deshtoi: " . mysqli_connect_error());
  }

    if(isset($_GET['aid'])){
      $aid = $_GET['aid'];
      $sql = "SELECT agjendiid, emrimbiemri, telefoni, email, fjalekalimi FROM agjendet WHERE agjendiid=$aid"; 
      $agjenti = mysqli_query($dbConnect, $sql);
      if($agjenti){
        $agjenti = mysqli_fetch_assoc($agjenti);
        //array asociativ. 
        if (isset($_POST['emri']) && isset($_POST['mbiemri'])) {
          $emrimbiemri = $_POST['emri'] . ' ' . $_POST['mbiemri'];
        } else {
          $emrimbiemri = $agjenti['emrimbiemri'];  
        }
        $telefoni = $agjenti['telefoni'];
        $email = $agjenti['email'];
        $fjalekalimi = $agjenti['fjalekalimi'];
      }      
    }
    /*ID e agjentit- URL-së .db*/

    if(isset($_POST['modifiko'])){
      $agjendiid = $_POST['agjendiid'];
      $emri = isset($_POST['emri']) ? $_POST['emri'] : '';
      $mbiemri = isset($_POST['mbiemri']) ? $_POST['mbiemri'] : '';
      $emrimbiemri = $emri . ' ' . $mbiemri;
      $telefoni = $_POST['telefoni'];
      $email = $_POST['email'];
      $fjalekalimi = $_POST['fjalekalimi'];
      
      $sql = "UPDATE agjendet SET emrimbiemri='$emrimbiemri', telefoni='$telefoni', email='$email' WHERE agjendiid=$agjendiid"; 
      $agjenti = mysqli_query($dbConnect, $sql);
      if ($agjenti){
        echo "Agjendi u modifikua me sukses";
      } else {
        die("Agjendi nuk u modifikua: " . mysqli_error($dbConnect));
      }
    }
    ?>
    <form id="login" class="box" action="" method="post">
      <legend>Modification form</legend><br>
      <input type="hidden" id="agjendiid" name="agjendiid" 
        value="<?php if (!empty($agjenti['agjendiid'])) echo $agjenti['agjendiid']; ?>">

      <label>Name:</label>
      <input type="text" id="emrimbiemri" name="emri"  
        value="<?php if (!empty($emrimbiemri)) echo $emrimbiemri; ?>"><br>

      <label>Surname:</label>
      <input type="text" id="mbiemri" name="mbiemri" 
        value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>"><br>

      <label>Telephone:</label>
     <input type="text" id="telefoni" name="telefoni"   
        value="<?php if (!empty($telefoni)) echo $telefoni; ?>"><br>
        
     <label>Email:</label>
     <input type="email" id="email" name="email" 
        value="<?php if (!empty($email)) echo $email; ?>"><br>

     <label>Password:</label>
     <input type="password" id="fjalekalimi" name="fjalekalimi" 
       value="<?php if (!empty($fjalekalimi)) echo $fjalekalimi; ?>"><br>
       
     <input type="submit" name="modifiko" id="modifiko" value="Modify">
    </form>


    