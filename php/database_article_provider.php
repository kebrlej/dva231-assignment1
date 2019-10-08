<?php

function get_three_newest_articles()
{
    $db = new mysqli("localhost", "root", "", "assignment3");
    $query = "SELECT * FROM news_article ORDER BY idnews_article DESC LIMIT 3";
    $result = $db->query($query);

    $articles = [];
    while($row = $result->fetch_assoc()) {
//        echo $row['title'];
        array_push($articles,$row);
    }

    return $articles;
}

function search_article_by_title($searchedPhrase){
    $db = new mysqli("localhost", "root", "", "assignment3");
    $query = "SELECT * FROM news_article WHERE 'title' LIKE '%{$searchedPhrase}%' LIMIT 5";
    $result = $db->query($query);
    $articles = [];
    while($row = $result->fetch_assoc()) {
        array_push($articles,$row);
    }

    return $articles;
}



//get_three_newest_articles();