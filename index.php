<?php

define('ROOT', dirname(__FILE__));
require_once(ROOT. '/includes/DB_Connection.php');
require_once(ROOT. '/includes/News.php');



include "./pages/header.php";



if(isset($_GET['news_id'])) {

     $action = $_GET['news_id'];
    $news = new News();
        $news->getOneNew($action);

} elseif (isset($_GET['author_id'])) {

    $action = $_GET['author_id'];
    $news = new News();
        $news->getNewsOneAuthor($action);

} else {
    $news = new News();
         $news->getAllNews();
}


include "./pages/footer.php";



