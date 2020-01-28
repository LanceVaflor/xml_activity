<?php
  $domOBJ = new DOMDocument();
  $domOBJ->load("https://xmlactivity.herokuapp.com/rss.php");//XML page URL
  
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
    
  echo "<tr>
            <td> $title </td>
            <td> $description  </td>
            <td> $author </td>
            <td> $created </td>
        </tr> "
  }
?>
</table>
  
