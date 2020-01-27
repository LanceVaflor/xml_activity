<?php
header("Content-Type: application/rss+xml; charset=ISO-8859-1");
  
  $rssfeed .= '<?xml version="1.0" encoding="ISO-8859-1"?>';
  $rssfeed .= '<rss version="2.0"?>';
  $rssfeed .= '<channel>';
  
  $sql = "SELECT * FROM tbl_articles";
  $connect = mysqli_connect("http://dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234","db_1820680") or die(mysqli_error($connect));
  $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
  while($row=mysqli_fetch_assoc($query)) {
    extract($row);
    
    $rssfeed .= '<articles>';
    $rssfeed .= '<title>' . $article_title . '</title>';
    $rssfeed .= '<description>' . $description . '</description>';
    $rssfeed .= '<author>' . $author . '</author>';
    $rssfeed .= '<date_created>' . $date_created . '</date_created';
    $rssfeed .= '</articles>';
  }
  
  $rssfeed .= '</channel>';
  $rssfeed .= '</rss>';

  echo $rssfeed .;
?>




