
function sendAjaxRequest() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        // if (this.readyState == 4 && this.status == 200) {
        //     document.getElementById("demo").innerHTML =
        //         this.responseText;
        // }
        document.getElementById("ajaxResponse").innerText=this.responseText;
    };
    xhttp.open("GET", "https://api.chucknorris.io/jokes/random", true);
    xhttp.send();
}