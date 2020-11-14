<?php
require('models/model.php');

function categories()
{
    $categories = affichercategories();

    require('views/categories.php');
}

function article()
{
    $article = afficherArticle();

    require('views/article.php');
}

function detail()
{
    $detail = detailArticle();

    require('views/detail.php');
}

function btncate()
{   
    require('views/btncate.php');
}