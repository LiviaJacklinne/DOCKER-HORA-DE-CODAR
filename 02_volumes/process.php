<?php

  $message = $_POST["message"];

  $files = scandir("/var/www/html/messages");
  $num_files = count($files) - 2; // cria o arquivo . e .. por isso -2

  $fileName = "msg-{$num_files}.txt";
  $file = fopen("./messages/{$fileName}", "x");

  fwrite($file, $message);

  fclose($file);

  // redirect para voltar pro formulário
  header("Location: index.php");
