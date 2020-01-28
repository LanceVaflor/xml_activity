<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://xmlactivity.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("shoes");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("article_title")->item(0)->nodeValue;
   $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
   $created = $data->getElementsByTagName("created")->item(0)->nodeValue;
   
  
   echo "<li>$title
            <ul>
                <li>Content: $description</li>
		<li>Author: $author</li>
		<li>Date Created: $created</li>
            </ul>
        </li>";
 }
?>
</ul>
  
