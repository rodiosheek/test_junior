<?php


class News
{

    public function getAllNews() {
        $mysqli = new DB_Connection();
        $result = $mysqli->getConnect()->query('SELECT * FROM news');

        $news = array();
        while($row = $result->fetch_assoc()) {
            if(mb_strlen($row['text']) > 100) {
                $row['text'] = mb_substr(strip_tags($row['text']), 0, 97) . '...';
            }
            $news[] = $row;
        }

        include ROOT. '/pages/list.php';
    }

    public function getOneNew($action) {
        $mysqli = new DB_Connection();
        $result = $mysqli->getConnect()->query('SELECT news.*, authors.name, authors.id
                                                AS authors FROM news, authors
                                                WHERE
                                                 news.author_id = authors.id
                                                AND news.id = ' .$action . ' LIMIT 1');

        $news = array();
        while($row = $result->fetch_assoc()) {

            $news[] = $row;

        }

        include ROOT. '/pages/list_news.php';
    }

    public function getNewsOneAuthor($action) {
        $mysqli = new DB_Connection();
        $result = $mysqli->getConnect()->query('SELECT news.*, authors.name FROM news, authors
                                                WHERE news.author_id = authors.id
                                                AND authors.id = ' . $action);

        $news = array();
        while($row = $result->fetch_assoc()) {
            if(mb_strlen($row['text']) > 100) {
                $row['text'] = mb_substr(strip_tags($row['text']), 0, 97) . '...';
            }
            $news[] = $row;
            $name = $row['name'];

        }


        include ROOT. '/pages/list_one_author.php';
    }
}