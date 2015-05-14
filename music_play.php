<?php
    if(isset($_POST['name']) === true){
        $array = array();        
     $query=mysql_real_escape_string(trim($_POST['name']));  
    $con=mysql_connect("localhost","user1","9583801275");
    $db=mysql_select_db("songs",$con);
    $query=mysql_query("SELECT filename FROM audio WHERE title = '$query' ");
    while($row=mysql_fetch_assoc($query))
    {
      $array[] = $row['filename'];
    }
    echo json_encode($array);
}
?>
