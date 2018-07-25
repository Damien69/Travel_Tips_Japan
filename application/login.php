<?php

session_start();

if (!empty($_POST)) {
    include 'bdd_connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query =
     '
            SELECT * 
            FROM user
            WHERE Email = ?';
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$email]);
            $post = $resultSet->fetch();
         
    $hashedPwdCheck = password_verify($password, $post['Password']);
    if ($hashedPwdCheck == false) {
        die('Mot de passe incorrect');
        exit();
    }
    elseif($hashedPwdCheck == true) {
    //log in
    $_SESSION['Id'] = $post['Id'];
    $_SESSION['FirstName'] = $post['FirstName'];
    $_SESSION['LastName'] = $post['LastName'];
    $_SESSION['Email'] = $post['Email'];
    header("Location: ../index.php");
        exit();
    }
}

 else {
    header("Location: ../login.phtml");
    exit();
}