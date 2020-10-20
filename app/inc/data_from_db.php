<?php

// #PDO

// * I * Connect to database

$dsn = 'mysql:dbname=;host=';
$username = '';
$password = '';
$options =  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
];

$pdo = new PDO($dsn,$username,$password,$options);


// * II * Reconstruct arrays of datas with requests to database

// For each set of data :
// 1- Write the sql query 
// 2- Execute sql query 
// 3- Collect results
// 4- Construct an array with these results

// CATEGORIES LIST

$dataCategoriesList = [];
$sql = 'SELECT * FROM category ORDER BY position ASC;';
$statement = $pdo->query($sql);
$categories = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($categories as $category) {
    $objCategory = new Category ($category["name"]);
    $dataCategoriesList[$category['id']] = $objCategory;
}

// AUTHORS LIST

$dataAuthorsList = [];
$sql = 'SELECT * FROM author;';
$statement = $pdo->query($sql);
$authors = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($authors as $author) {
    $objAuthor = new Author ($author["name"]);
    $dataAuthorsList[$author['id']] = $objAuthor;
}

// ARTICLES LIST

$dataArticlesList = [];
$sql = 'SELECT * FROM post;';
$statement = $pdo->query($sql);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);
foreach ($articles as $article) {
    $articleCategoryObj = $dataCategoriesList[$article['category_id']];
    $articleAuthorObj = $dataAuthorsList[$article["author_id"]]; 
    $objArticle = new Article (
        $article["title"], 
        $article["content"], 
        $article["author_id"],
        $articleAuthorObj->name, 
        $article["published_date"],
        $article["category_id"],
        $articleCategoryObj->name
    );
    $dataArticlesList[$article['id']] = $objArticle;
}
