// onclick=likeTweet('".$row['tweeter_name']."','".$row['id']."','".$row['tweet_likes']."')

function likeTweet(tweetId, url) {
    xmlhttp = new XMLHttpRequest();
    var url = "" + url;
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // alert(xmlhttp.responseText);
            document.getElementById("num_like" + tweetId).innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("GET", url + "?id=" + tweetId, true);
    xmlhttp.send();
}
