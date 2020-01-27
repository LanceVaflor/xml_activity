<?php
    $rss= '<?xml version="1.0" encoding="UTF-8"?>';
    $rss .= '<rss version="2.0">';
    $rss .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820680") or die (mysqli_error($connect));
    $sql = "SELECT * FROM tbl_articles";
    $query = mysqli_query($connect, $sql) or die (mysqli_error($connect));

    while($result= mysqli_fetch_assoc($query)){
        extract($result);
        
        $rss .= '<articles>';
        $rss .= '<article_title>' . $article_title . '</article_title>';
        $rss .= '<description>' . $description . '</description>';
        $rss .= '<author>' . $author . '</author>';
        $rss .= '<created>' . $date_created . '</created>';
        $rss .= '</articles>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';

echo $rss;
?>





