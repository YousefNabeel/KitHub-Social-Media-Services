<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Page</title>
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
        <div class="sign-container">
            <div class="sign-box">
                <h2>Let's Get Started</h2>
                <h3>Sign in your Account</h3>

                <form class="sign-form" method = "POST">
                    <label for="Email">
                        <i class="fa-solid fa-envelope"></i> Enter Your Email</label>
                    <input type="text" name="Email" id="Email" required>
                    <br>

                    <label for="Password">
                        <i class="fa-solid fa-lock"></i> Enter Your Password</label>
                    <input type="text" name="Password" id="Password" required>
                    <br>

                    <label for="Confirme">
                        <i class="fa-solid fa-circle-check"></i> Confirme Your Password</label>
                    <input type="text" name="Confirme" id="Confirme">
                    <button class="login-btn" type="submit" name="signIn">sign in</button>
                </form>
                <br>

                <h5>By continuing you agree to our</h5>
                <h5><b>Terms & Conditions and Privacy Policy</b></h5>

                <h4>Already have an Account? <a href="Login.php">Log in</a></h4>
            </div>
        </div>
    </main>

</body>

</html>

<?php
include 'connect.php';

if (isset($_POST['signIn'])) {
    $email     = $_POST['Email'];
    $password  = $_POST['Password'];

    $pass = md5($password);

    // فحص إذا الايميل موجود مسبقًا
    $result = mysqli_query($conn, $checkEmail);

    if (mysqli_num_rows($result) > 0) {
        echo "Email Address Already Exists!";
    } 
    
    else {
        $insertQuery = "INSERT INTO user (email, password) 
                        VALUES ('$email', '$pass')";

        if (mysqli_query($conn, $insertQuery)) {
            header("Location: Login.php");
            exit();
        } 
        else {
            echo "Error:" . mysqli_error($conn);
        }
    }
}

?>