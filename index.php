<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <?php
    $adminUser = 'Admin';
    $adminPass = 'Password123';

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username === $adminUser && $password === $adminPass) {
            echo "<div class='login-message' style='background-color: green;'>Successful Log-in attempt!</div>";
        } else{
            echo "<div class='login-message' style='background-color: red;'>Unsuccessful Log-in attempt!</div>";
        }
    }
    ?>
    <title>Login Form</title>
</head>
<body>
    <form action="" method="post">
        <div class="login-container">
            <h1 class="header">Login Form</h1>
            <div class="content-wrapper">
                <h2>Username:</h2>
                <input class="text-input" type="text" name="username" id="username" placeholder="Enter Username">
                <h2>Password:</h2>
                <input class="text-input" type="text" name="password" id="password" placeholder="Enter Password">
                <input class="submit-btn" type="submit" name="submit" value="Submit">
            </div>
        </div>
    </form>
</body>
</html>