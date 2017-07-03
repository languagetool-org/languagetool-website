<?php

$text = substr($_REQUEST['msg'], 0, 1000);
error_log("log.php: " . $text);

?>
