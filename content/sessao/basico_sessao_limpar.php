<?php
session_start();
session_destroy(); // só funciona com o session_start(), não pode destruir uma seção que não é chamada.

header('Location: basico.php'); // rediciona para o arquivo basico.php

