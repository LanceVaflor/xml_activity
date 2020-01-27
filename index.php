<?php
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820680");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_articles";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){
        $title = $r['article_title'];
        $description = $r['description'];
        $author = $r['author'];
        $created = $r['date_created'];


        echo "<articles>
        <title>$title</title>
        <description>$type</description>
        <author>$author</author>
        <created>$created</created>
        </articles>";
    }
    echo "</channel></rss>";
?>




