<?php
include ('Article.php');
$Articles = new Article();
$articleByid = $Articles->getArticle(1);
$allArticles = $Articles->getAllArticles();





?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <!-- TODO : 
        utiliser ici la classe Article avec toutes ses méthodes, 
        créer des div différents pour chaque méthode
    -->
    <div>
        <h3>function getArticle</h3>
        <?= 'Nom : '.$articleByid['nom'].'<br>' .
        'Pu: '. $articleByid['pu']. $articleByid['devise'].'<br>'.
        'Stocks: '.$articleByid['stock'] ;?>
    </div>


    <div>
        <h3>function getAllArticles</h3>
        <?php foreach($allArticles as $article){
            echo 'nom :'.$article['nom'].'<br>';
            echo 'Pu : '.$article['pu'].$article['devise'].'<br>';
            echo 'stock :'.$article['stock'];
            echo '<hr>';
            
        } ?>
    </div>
    <div>
        <h3>afficher article</h3>
        <?php $Articles->afficherArticle($articleByid) ;?>
    </div>


    <div>
        <h3>function afficherAllArticle</h3>
        <?php $Articles->afficherAllArticle() ?>
    </div>
    
</body>

</html>