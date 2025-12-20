<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    require '\laragon\www\PHP-BREF\config.php';
    $insertion = $connection -> prepare("INSERT INTO client (email,name,password) VALUES(?,?,?)");
    $insertion-> bind_param("sss", $email , $name , $password );
    $name = htmlspecialchars($_POST['name']) ;
    $email = htmlspecialchars($_POST['email']) ;
    $password = htmlspecialchars($_POST['password']);
     $search = "SELECT * FROM client WHERE email = '$email'" ;
        $user = $connection -> query($search);
        if($user->num_rows > 1 || $user->num_rows == 1 ){
            echo "<script>alert('Ce gmail existe déja !')</script>";
        }
        else{
    if( !empty($name) || !empty($email) || !empty($password)){
        $insertion -> execute() ;
        // $search = "SELECT id FROM client WHERE email = '$email'" ;
        // $userId = $connection -> query($search);
        header("location: /PHP-BREF/register_login/login.php");
        // foreach ($userId as $user){
            // header('location: ../index.php?userId='.$user['id']) ;
        // }
    }
    else{
        echo "<script>alert('tous les champs sont obligatoire !')</script>";
    }
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="output.css">
</head>
<body>
    <section class="content">
<div class="my-20 form-container">
<form class="register-box course-card" action="register.php" method="POST">
  <h2>Create Account</h2>

  <label>Full Name</label>
  <input type="text" name="name" placeholder="Enter your name">

  <label>Email</label>
  <input type="email" name="email" placeholder="Enter your email">

  <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password">

  <button type="submit">Register</button>

  <p>Already have an account? <a href="login.php">Login</a></p>
</form>
</div>

    </section>
</body>
</html>


