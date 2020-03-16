<?php
  $author_sql = "SELECT author_name FROM Author where author_id = {$row["author"]}";
  $author_result = mysqli_query($conn,$author_sql);
  $author_row = mysqli_fetch_array($author_result);
  echo $author_row["author_name"]
?>
