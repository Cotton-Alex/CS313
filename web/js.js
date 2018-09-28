function checkLocalStorage() {
    if (typeof (localStorage) !== "undefined") { //checking for browser compatibility with local storage
        if (localStorage.backgroundColor !== null) {
            var bgColor = localStorage.getItem('backgroundColor');
            document.body.style.background = bgColor;
        } else {
            return;
        }
    } else {
        alert("Some features on this site are incompatible with your browser. For the best experience please update this browser or use a different one.");
    }
}

function backgroundColor(bgColor) {
    localStorage.setItem("backgroundColor", bgColor);
    document.body.style.background = bgColor;
}

function clearBackgroundColor(name) {
    localStorage.removeItem(name);
    location.reload();
}

function clickAlert() {
    alert('Clicked!!!');
}

function setColor() {
    var Red = document.querySelector('#Red').value;
    var Green = document.querySelector('#Green').value;
    var Blue = document.querySelector('#Blue').value;
    localStorage.setItem("backgroundColor", "rgb(" + Red + ", " + Green + ", " + Blue + ")");
}

function resetColor() {
    localStorage.removeItem("Red");
    localStorage.removeItem("Green");
    localStorage.removeItem("Blue");
    document.getElementById("Red").value = 255;
    document.getElementById("Green").value = 255;
    document.getElementById("Blue").value = 255;
    colorChange();
}

function colorChange() {
    var Red = document.querySelector('#Red').value;
    document.querySelector('#Red_out').value = Red;
    var Green = document.querySelector('#Green').value;
    document.querySelector('#Green_out').value = Green;
    var Blue = document.querySelector('#Blue').value;
    document.querySelector('#Blue_out').value = Blue;
    document.querySelector('body').style.backgroundColor = "rgb(" + Red + ", " + Green + ", " + Blue + ")";
}