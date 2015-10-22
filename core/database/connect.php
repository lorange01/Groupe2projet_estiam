<?php
$connect_error='sorry, we\'re experiencing connection problems';
mysql_connect('group2.estiam.com','zeineb','estiam')or die($connect_error);
mysql_select_db('zeineb')or die($connect_error);
?>