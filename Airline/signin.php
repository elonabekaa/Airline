<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <!-- Header Part-->
    <header id="header">
        <nav class="container" style="width: 90%;margin: 0 auto;">
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
    <!-- Sign In Part-->
    <form action="tableboard.php" method="post" onsubmit="return validateForm()">
    <main class="container">
        <center>
            <h1 style="color: black;">Log in</h1><hr>
            <form method="post" action="tableboard.php">
                
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button><br><br>
                <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
            </form><br>
            <a href="signup.php">Do not have an account!</a>
        </center>
    </main>
    <script>
        function validateForm() {
            document.querySelector('form').onsubmit = function() {
        if (document.querySelector('[name="uname"]').value === '' || document.querySelector('[name="psw"]').value === '') {
            alert('Please fill out all fields.');
            return false; 
        }
        return true;
    };
        }
    </script>
    </body>
</html>

