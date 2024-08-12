<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/singup.css">
  </head>
  <body>
    <!-- Header Part-->
    <header id="header">
      <nav class="container" style="width: 90%; margin: 0 auto">
      <center>
        <ul id="navbar">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#maininfo">Covid-19</a></li>
          <li><a href="index.php#Safety">Covid-19</a></li>
          <li><a href="signin.php">Sign-in</a></li>
          <li><a href="signup.php">Sign up</a></li>
        </ul>
      </center>
      </nav>
    </header>
    <!-- Sign Up Part-->
    <center>
        <h1 style="color: black;">Create an account</h1>
        <form name="signupForm" action="tableboard.php" method="post" onsubmit="return validateForm()">
            <hr/>
            <div class="box">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="name" required />
                <label for="surname"><b>Surname</b></label>
                <input type="text" placeholder="Enter Surname" name="surname" required />
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" required />
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required />
                <label for="psw-repeat"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="psw-repeat" required />
                <button type="submit">Register</button>
                <br><br>
            </div>
            <a href="signin.php">Already have an account!</a>
        </form>
    </center>
    <script>
        function validateForm() {
          var name = document.forms["signupForm"]["name"].value;
            var surname = document.forms["signupForm"]["surname"].value;
            var email = document.forms["signupForm"]["email"].value;
            var password = document.forms["signupForm"]["psw"].value;
            var confirmPassword = document.forms["signupForm"]["psw-repeat"].value;
            
            if (name === "" || surname === "" || email === "" || password === "" || confirmPassword === "") {
                alert("All fields must be filled out");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>