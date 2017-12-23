<?php
  require_once("./phpQuery-onefile.php");
  $html = file_get_contents("https://tabelog.com/rvwr/004394186/rvwlst/0/0/?bookmark_type=1");
  echo phpQuery::newDocument($html)->find("h3")->text();
?>
