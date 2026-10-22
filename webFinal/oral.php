
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form method ="post"> 

    <label name = "username" > 
    <input type = "text">

    <label name = "Email"> 
    <input type = "text">

    <button>Send</button>

</form>
    
</body>
</html>


<?php

    session_start();

    if(isset($_POST['Send'])) { 


        $user = $_POST['username'];
        $email = $_POST['Email'];

        $sql = "INSERT * INTO feedback";

        $query = mysqli_query($conn, );

        $show = mysqli_fetch_assoc()
    }
