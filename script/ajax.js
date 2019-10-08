function createListNode(articleArray) {
    var listNode = document.createElement("UL"); // Create a <li> node

    articleArray.forEach(function (article) {
        var listItemNode = document.createElement("LI")
        listItemNode.innerText = article['title'];
        listNode.appendChild(listItemNode);    // Append the text to <li>
    });

    return listNode;
}


function sendAjaxRequest(searchphrase) {

    var xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        let div = document.getElementById("ajaxResponse");
        let articleArray = JSON.parse(this.responseText);
        let listNode = createListNode(articleArray);
        div.appendChild(listNode);

    };
    xhttp
        .open("GET"
            , "http://localhost//assignment2/php/test_file.php/?user_searchphrase=" + searchphrase
            , true);
    xhttp.send();
}