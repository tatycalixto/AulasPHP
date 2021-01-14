<?php
session_start();

//destruir a variável de sessão
session_destroy();
header('Location:index.php');
