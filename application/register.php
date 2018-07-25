<?php

if (!empty($_POST)) {
    include_once 'bdd_connection.php';
    $email = $_POST['email'];
         $query =
        '
            SELECT Id 
            FROM user
            WHERE Email = ?';
            $resultSet = $pdo->prepare($query);
            $resultSet->execute([$email]);
            $post = $resultSet->fetch();
    if($post != false) {
            die("Cette adresse mail est déjà utilisée.");
        }
    else {
    include_once 'bdd_connection.php';

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); 

            $query =
        '
            INSERT INTO
                user
                (FirstName, LastName, Email, Password)
            VALUES
                (?, ?, ?, ?)
        ';
              
        $resultSet = $pdo->prepare($query);
        $resultSet->execute([$firstName, $lastName, $email, $hashedPassword]);
            header("Location: ../index.php");
            exit();
    }
    }

 else {
    header("Location: ../register.phtml");
    exit();
}