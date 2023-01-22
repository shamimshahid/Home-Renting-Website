<?php
require_once '../model.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];

    autosearch($inpText);
    
  }
?>