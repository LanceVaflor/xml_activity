<?php
  $mysqli = new mysqli("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820680");

  if ($mysqli->connect_errno) {
    echo "Connect Failed ".$mysqli->connect_error;
    exit();
  }
  
  $query_database = "SELECT article_id, article_title, description, author, date_created FROM tbl_articles";
  $articlesArray = array();
  if ($result = $mysqli->query($query_database)) {
  
      while ($row = $result->fetch_assoc()) {
         array_push($articlesArray, $row);
      }

      if(count($articlesArray)){
           createXMLfile($articlesArray);
       }
       
      $result->free();
  }
  
  $mysqli->close();
  
  function createXMLfile($articlesArray){
    $filePath = 'article.xml';
    $dom = newDOMDocument('1.0', 'utf-8');
    $root = $dom->createElement('articles');
    
    for($i=0; $i<count($articlesArray); $i++){
      $articleId = $articlesArray[$i]['article_id'];
      $articleTitle = $articlesArray[$i]['article_title'];
      $articleDescription = $articlesArray[$i]['description'];
      $articleAuthor = $articlesArray[$i]['author'];
      $articleDateCreated = $articlesArray[$i]['date_created'];
      
      $article = $dom->createElement('article');
      $article->setAttribute('article_id', $articleId);
     
      $title = $dom->createElement('article_title', $articleTitle);
      $article->appendChild($title);
      
      $description = $dom->createElement('description', $articleDescription);
      $article->appendChild($description);
      
      $author = $dom->createElement('author', $articleAuthor);
      $article->appendChild($author);
      
      $dateCreated = $dom->createElement('date_created', $articleDateCreated);
      $article->appendChild($dateCreated);  
    }
    $dom->appendChild($root);
    $dom->save($filePath);
  }
?>

 
<!DOCTYPE html>
<html>
<body onload="loadXMLDoc()">

<h2>Using the XMLHttpRequest Object</h2>

<div id="article">
</div>

<script>
function loadXMLDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("article").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "article.xml", true);
  xhttp.send();
}
</script>
</body>
</html>

