<?php
session_unset();
session_destroy();
header('Location: loginForm.html');
exit;
?>
