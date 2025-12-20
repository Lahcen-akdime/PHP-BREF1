<?php
session_start() ;
if($_SERVER['REQUEST_METHOD']=='POST'){
    require '\laragon\www\PHP-BREF\config.php';
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
   if( !empty($name) || !empty($email) || !empty($password)){
        $search = "SELECT id FROM client WHERE email = '$email' AND password = $password" ;
        $user = $connection -> query($search)   ;
        if($user->num_rows==1){
            $array = $user -> fetch_row() ;
            $_SESSION['id'] = $array[0] ;
            header('location: ../index.php') ;
        }
        else{
          echo "<script>alert('les information sont incorrect')</script>" ;
        }
        // foreach ($userId as $user){
            // header('location: ../index.php?userId='.$user['id']) ;
        // }
    }
    else{
        echo "<script>alert('tous les champs sont obligatoire !')</script>";
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
<form class="register-box course-card" action="login.php" method="POST">
  <h2>LOGIN TO ENTER</h2>

  <label>Email</label>
  <input type="email" name="email" placeholder="Enter your email">

  <label>Password</label>
  <input type="password" name="password" placeholder="Enter your password">

  <button type="submit">Login</button>

  <p> If you dont have account click <a href="register.php"> Register</a></p>
</form>
</div>

    </section> 
</body>
</html>