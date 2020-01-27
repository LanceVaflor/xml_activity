<?php
  $domOBJ = new DOMDocument();
  $domOBJ->load("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com/xml_activity/rss.php");//XML page URL
  
  $content = $domOBJ->getElementsByTagName("articles");
?>

<h1> ARTICLES </h1>
<table>
  <tr>
      <td> Article Title </td>
      <td> Content </td>
      <td> Author </td>
      <td> Date Created </td>
  </tr>
<?php
  foreach( $content as $data )
  {
     $title = $data->getElementsByTagName("article_title")->item(0)->nodeValue;
     $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
     $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
     $created = $data->getElementsByTagName("created")->item(0)->nodeValue;
?>
  <tr>
      <td> <?php echo $title ?> </td>
      <td> <?php echo $description ?> </td>
      <td> <?php echo $author ?> </td>
      <td> <?php echo $created ?> </td>
  </tr>
<?php
  }
?>
</table>
  
