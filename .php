<?php
//    try{
//        $connection = new PDO("mysql:host = localhost; dbname=course", "root", "");
//        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    }catch(PDOException $error){
//        var_dump($error);
//        die;
//    }
//
//    $sql = 'SELECT * FROM `user` LIMIT 20';
//    $users = $connection
//        ->query($sql)
//        ->fetchAll(PDO::FETCH_ASSOC);
//    var_dump();
//
//    $users = [
//        ["id" => 1, "fullname" => "Pierre Dupond", "email" => "pierre.dupond@gmail.com"],
//        ["id" => 2, "fullname" => "Sophie Duhamel", "email" => "sophie.duhamel@gmail.com"],
//        ["id" => 3, "fullname" => "Marc Toto", "email" => "marc.toto@gmail.com"],
//    ];
//
//    $user = [
//        "id" => 1,
//        "fullname" => "Sophie Duhamel",
//        "firstname" => "Sophie",
//        "name" => "duhamel",
//    ]
//
//    $query = $connection->prepare("UPDATE `user` SET `fullname`=:ful_name WHERE id=:id");
//    $query->bindValue('full_name', $user["full_name"]);
//    $query->bindValue('id', $user["id"]);
//    $query->execute();
//?>
<!---->
<!--<!doctype html>-->
<!--<html>-->
<!--    <meta charset="utf8">-->
<!--    <title>Index</title>-->
<!--    <body>-->
<!--        <h3>Users</h3>-->
<!--        <table>-->
<!--            <thead>-->
<!--                <tr>-->
<!--                    <th>ID</th>-->
<!--                    <th>NAME</th>-->
<!--                    <th>EMAIL</th>-->
<!--                </tr>-->
<!--            </thead>-->
<!--            <tbody>-->
<!--            --><?php //foreach ($users as $user): ?>
<!--                <tr>-->
<!--                    <td>--><?//= $user['id'] ?><!--</td>-->
<!--                    <td>--><?//= $user['name'] ?><!--</td>-->
<!--                    <td>--><?//= $user['email'] ?><!--</td>-->
<!--                </tr>-->
<!--            --><?php //endforeach; ?>
<!--            </tbody>-->
<!--        </table>-->
<!--        <form method="post">-->
<!--            <input type="text" id="fullname" name="fullname" placeholder="name">-->
<!--            <input type="text" id="email" name="email" placeholder="email">-->
<!--            <button type="submit">Envoyer</button>-->
<!--        </form>-->
<!--    </body>-->
<!--</html>-->
