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
        $title .= '<article_title>' . $article_title . '</article_title>';
        $description .= '<description>' . $description . '</description>';
        $author .= '<author>' . $author . '</author>';
        $created .= '<created>' . $date_created . '</created>';
        $rss .= '</articles>';
    }
    $rss .= '</channel>';
    $rss .= '</rss>';
?>

<ul>
   <li><?php echo $title ?></li>
   <li><?php echo $description ?></li>
   <li><?php echo $author ?></li>
   <li><?php echo $date_created ?></li>
</ul>




