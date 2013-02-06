<?php
  #$conn = @mysql_connect("localhost","root","");
  if (!$conn){
      die("connect database error " . mysql_error());
  }
  mysql_select_db("bus1233801482154", $conn);
  mysql_query("set character set 'gbk'");  
  mysql_query("set character set 'utf8'");
?>
