var nextImageNumber = 1;
var newsPanels = {};

window.onload = function () {
    for (var i = 0; i < 3; i++) {
        var newsId = "main-news" + i;
        var newsPanel = document.getElementById(newsId);
        newsPanels[i] = newsPanel;
    }
    var panel = newsPanel.get;
    newsPanels[0].style.display = "none";
    newsPanels[1].style.display = "";
    newsPanels[2].style.display = "none";
    window.setInterval(changeImage, 4000);


};

function onMouseOver() {
    var x = 10;
    document.getElementById("image-panel-hover-description")
        .style.display="";
}

function onMouseLeave(){
    document.getElementById("image-panel-hover-description")
        .style.display="none";
}

var changeImage = function changeImage() {
    for (var i = 0; i < 3; i++) {
        if (nextImageNumber % 3 === i) {
            newsPanels[i].style.display = "";
        } else {
            newsPanels[i].style.display = "none";
        }
    }
    nextImageNumber++;
};




