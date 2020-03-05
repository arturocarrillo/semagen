<?php
session_start();
session_destroy();
echo '<META HTTP-EQUIV=Refresh CONTENT="; URL=./login.php">';
?>