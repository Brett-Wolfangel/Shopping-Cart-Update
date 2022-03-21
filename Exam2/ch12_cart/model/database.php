<?php
    $username = "mgs_user";
    $password = "pa55word";
    $database = "my_guitar_shop2";
    $db = mysqli_connect("localhost", $username, $password, $database) or die("nope");

    $sql = "SELECT * FROM categories ORDER BY categoryID";
    $qry = mysqli_query($db, $sql);
    $rs = mysqli_fetch_all($qry);
    print_r($rs);

?>