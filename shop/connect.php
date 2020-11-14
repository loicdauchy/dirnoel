<?php
  try {
    $db = new PDO('mysql:host=localhost;dbname=dirnoel;charset=utf8;port=3306', 'root', '');
    }
    catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}