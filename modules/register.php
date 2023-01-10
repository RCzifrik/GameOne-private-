<?php
$_SESSION['message'] = "";
function makeRegistration():string {
    global $pdo;
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    if (!empty($password) && !empty($firstName) && !empty($lastName) && !empty($username)) {
        $sql = 'SELECT * FROM `user` WHERE `username` = :e';
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':e', $username);
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User');
        $sth->execute();
        $user = $sth->fetch();

        if ($user !== false) {
            return "EXIST";
        } else {
            $sth = $pdo->prepare('INSERT INTO user (first_name, last_name, username, password, role) VALUES (?, ?, ?, ?, "Member")');
            $sth->bindParam(1, $firstName);
            $sth->bindParam(2, $lastName);
            $sth->bindParam(3, $username);
            $sth->bindParam(4, $password);
            $sth->execute();
            return "SUCCESS";
        }
    }
    return "INCOMPLETE";
}


?>
