<?php
//include ('dbconnect.php');
class Article
{
    /**
     * $articles est un tableau contenant des articles sous forme de tableau
     * voici la structure:
     * [
     *      id => [nom => nom_article, pu => prix_unitaire, devise => devise, stock => qte_en_stock],
     *      id => [nom => nom_article, pu => prix_unitaire, devise => devise, stock => qte_en_stock],
     *      id => [nom => nom_article, pu => prix_unitaire, devise => devise, stock => qte_en_stock],
     *      ...
     * ]
     */
    private $articles;

    public function __construct()
    {
        // TODO : Initiliser le tableau $articles ici
        
        $this->articles = [
            1 => ['nom' => 'chaussure', 'pu' => 10, 'devise' => '$', 'stock' => 25],
            2 => ['nom' => 'Tshirt', 'pu' => 20, 'devise' => '$', 'stock' => 15],
        ];
    }

    public function getArticle($id)
    {
        // TODO : renvoi un article en fonction de l'id
        return $this->articles[$id];
    }

    public function getAllArticles()
    {
        // TODO : renvoi tous les articles
        $articles = $this->articles;
        return $articles;
    }

    public function afficherArticle($article)
    {
        // TODO : affiche les details de l'article en paramètre
        echo $article['nom'].'<br>';
        echo $article['stock'].'<br>';
        echo $article['Pu'].': '.$article['devise'].'<br>';
        echo '<hr>';
    }

    public function afficherAllArticle()
    {
        // TODO : affiche les details de tous les articles dans un tableau html
        foreach ($this->articles as $article) {
            echo  '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>' . 'Nom' . '<th>';
            echo '<th>' . 'Stock' . '<th>';
            echo '<th>' . 'Pu' . '<th>';
            echo '<th>' . 'Devise' . '<th>';
            echo  '<tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<th>' . $article['nom'] . '<th>';
            echo '<th>' . $article['stock']  . '<th>';
            echo '<th>' .  $article['pu'] . '<th>';
            echo '<th>' . $article['devise'] . '<th>';
            echo  '<tr>';
            echo '</tbody>';
            
        }
    }
}
