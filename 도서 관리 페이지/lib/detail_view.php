<?php
  //mysqli_connect()함수로 커넥션 객체 생성
  require_once("./db_info.php");

  $sql = "SELECT title, genre, author, note, state FROM Current_book where title_id= ".$_GET['title_id']." order by title_id ";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
?>
