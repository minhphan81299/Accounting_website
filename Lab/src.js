function searchItems(text) {
    if (text.length == 0) {
        document.getElementById("search-result").innerHTML = "No suggestion!";
        return;
    }
    else {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("search-result").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "index.php?search_result=" + text, true);
        xmlhttp.send();
    }
}