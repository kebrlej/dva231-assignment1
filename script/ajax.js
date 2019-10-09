function createListNode(articleArray) {
    var listNode = document.createElement("UL"); // Create a <li> node

    articleArray.forEach(function (article) {
        var listItemNode = document.createElement("LI")
        listItemNode.innerText = article['title'];
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
    let div = document.getElementById("ajaxResponse");
    clearLastSearchResultsIfNecessary(div);

    let articles = JSON.parse(this.responseText);
    if (articles === undefined || articles.length == 0) {
        return;
    } else {
        createArticleNodes(articles, div);
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