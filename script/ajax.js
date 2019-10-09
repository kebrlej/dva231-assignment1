function createListNode(articleArray) {
    var listNode = document.createElement("div"); // Create a <li> node

    articleArray.forEach(function (article) {
        var listItemNode = document.createElement("a");
        listItemNode.href="http://localhost//assignment2/html/article_page.php/?articleId="+article["idnews_article"];
        listItemNode.innerText = article['title'].substring(0,38);
        listNode.appendChild(listItemNode);    // Append the text to <li>
    });

    return listNode;
}


function createArticleNodes(articleArray, div) {
    let listNode = createListNode(articleArray);

    div.appendChild(listNode);
}

function clearLastSearchResultsIfNecessary(div) {
    if (div.lastElementChild !== null) {
        div.removeChild(div.lastElementChild);
    }
}

function onSearchResultsLoad() {
    let searchHint = document.getElementById("search-hint");
    clearLastSearchResultsIfNecessary(searchHint);

    let articles = JSON.parse(this.responseText);
    if (articles === undefined || articles.length == 0) {
        searchHint.style.display="none";
        return;
    } else {
        searchHint.style.display="inline-block";
        createArticleNodes(articles, searchHint);
    }
}

function sendAjaxRequest(searchphrase) {
    let xhttp = new XMLHttpRequest();
    xhttp.onload = onSearchResultsLoad;

    xhttp
        .open("GET"
            , "http://localhost//assignment2/php/search_articles.php/?searchphrase=" + searchphrase
            , true);
    xhttp.send();
}