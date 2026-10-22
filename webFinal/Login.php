<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Style.css">

</head>

<body>

    <header>
        <div>
            <nav>
                <img src="img/Logo no background.png" alt="logo">
            </nav>
        </div>
    </header>

    <main>
        <div class="login-container">
            <div class="login-box">
                <h2>Welcome Back</h2>
                <h3>Log in to your Account</h3>

                <form class="login-form" action="" method="POST">
                    <label for="Email">
                        <i class="fa-solid fa-envelope"></i> Enter Your Email </label>
                    <input type="text" name="Email" id="Email" required>
                    <br>
                    <label for="Password">
                        <i class="fa-solid fa-lock"></i> Enter Your Password </label>
                    <input type="password" name="Password" id="Password" required>
                    <button class="login-btn" type="submit" name="Login">Login</button>
                </form>

        <div class="login-options">
           <label>
                <input type="checkbox" id="remember"> Remember me
           </label>

                <h4><i>Don't Have an Account?</i> <i><a href="Sign.php">Sign In</a></i></h4>
            </div>
        </div>
    </main>

</body>

</html>

<?php 

include 'connect.php';
session_start();
if (isset($_POST['Login'])) {
    $email    = $_POST['Email'];
    $password = $_POST['Password'];

    $pass = md5($password);
    $sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Email'] = $row['email'];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Not Found, Incorrect Email or Password. Please try again.');</script>";
    }
}
?>