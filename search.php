<?php
 header("Access-Control-Allow-Origin: *");
    $key=$_GET['key'];
    $array = array();
    $con=mysql_connect("localhost","user1","9583801275");
    $db=mysql_select_db("songs",$con);
    $query=mysql_query("select title from audio where title LIKE '{$key}%'");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['title'];
    }
    echo json_encode($array);
?>



