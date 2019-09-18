var nextImageNumber = 0;

var changeImage = function changeImage() {
    var img = document.getElementById("main-image");

    switch (nextImageNumber % 3) {
        case 0:
            img.src = "img/flat-earth-society-banner.png";
            break;
        case 1:
            img.src = "img/flat-disk-earth.jpg";
            break;
        case 2:
            img.src = "img/flat-earth-disk.jpg";
            break;
    }
    nextImageNumber++;
};

window.setInterval(changeImage, 4000);


