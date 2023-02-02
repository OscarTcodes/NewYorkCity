// What this line of code does is checking the input value not being empty so if it is empty for both slots don't submit.
function validate() {
    if (document.getElementById("fname").value == "" || document.getElementById("textarea").value == "") {
        console.log("No data could be found");
        return false;
    }
}
function init() {
    start();
    function start() {
        var imgLen = document.getElementById('imgheader');
        var images = imgLen.getElementsByTagName('img');
        var counter = 1;
        if (counter <= images.length) {
            setInterval(function () {
                images[0].src = images[counter].src;
                console.log(images[counter].src);
                counter++;
                if (counter === images.length) {
                    counter = 1;
                }
            }, 4000);
        }
    }
}