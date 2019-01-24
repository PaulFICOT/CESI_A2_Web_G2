<?php
$link = mysql_connect('localhost','root','');
if (!link) {
    die('Connection to BDD failed : '.mysql_error());
}

$db_selected=mysql_select_db('dbbde',$link);
if (!db_selected) {
    die('Base inaccessible: '.mysql_error());
}

?>