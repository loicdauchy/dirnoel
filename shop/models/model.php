<?php
function affichercategories(){
    include 'connect.php';
    $sql = 'SELECT * FROM `categories` WHERE age_categories = '.$_GET['idcate'];
    $query = $db->prepare($sql);
    $query->execute();
    $categories = $query->fetchALL(PDO::FETCH_ASSOC);
    return $categories;
}

function afficherArticle(){
    include 'connect.php';
    $sql = 'SELECT * FROM `article` WHERE categories_article = '.$_GET['ida'];
    $query = $db->prepare($sql);
    $query->execute();
    $article = $query->fetchALL(PDO::FETCH_ASSOC);
    return $article;
}

function detailArticle(){
    include 'connect.php';
    $sql = 'SELECT * FROM `article` WHERE id_article = '.$_GET['id'];
    $query = $db->prepare($sql);
    $query->execute();
    $detail = $query->fetch(PDO::FETCH_ASSOC);
    return $detail;
}