let navImages = document.querySelectorAll(".nav-image");

for (let navimage of navImages ) {
    navimage.onmouseover = function() {
        navimage.style.transform = "scale(1.3)";
        navimage.style.transition = "transform 0.25s";
}

navimage.onmouseout = function() {
    navimage.style.transform = "scale(1)";
    navimage.style.transition = "1s";
}
};