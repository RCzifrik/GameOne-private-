+
<?php

function checkLogin():string
{
    global $pdo;
    $username = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');

    if (!empty($username) && !empty($password)) {
        $sql = 'SELECT * FROM `user` WHERE `username` = :e AND `password` = :p';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e', $email);
        $sth->bindParam(':p', $password);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $sth->execute();
        $user = $sth->fetch();

        //$user = false  verkeerd wachtwoord/username, anders $user is object
        if ($user !== false) {
            $_SESSION['user'] = $user;
            if ($_SESSION['user']->role == "admin") {
                return 'ADMIN';
            } else {
                return 'MEMBER';
            }
        }
        return 'FAILURE';
    }
    return 'INCOMPLETE';
}