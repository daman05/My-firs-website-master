let menuImageList = document.querySelectorAll(".menu-image-list");
let boxImage = document.querySelector(".box1-image1");

for (let menuImage of menuImageList) {
    menuImage.onclick = function() {
        boxImage.innerHTML = `<img src="${menuImage.src}" class="box1-image">`;
    }
};

let menuImageList2 = document.querySelectorAll(".menu-image-list2");
let boxImage2 = document.querySelector(".box2-image2");

for (let menuImage2 of menuImageList2) {
    menuImage2.onclick = function() {
        boxImage2.innerHTML = `<img src="${menuImage2.src}">`;
    }
};

let menuImageList3 = document.querySelectorAll(".menu-image-list3");
let boxImage3 = document.querySelector(".box3-image3");

for (let menuImage3 of menuImageList3) {
    menuImage3.onclick = function() {
        boxImage3.innerHTML = `<img src="${menuImage3.src}">`;
    }
};

let menuImageList4 = document.querySelectorAll(".menu-image-list4");
let boxImage4 = document.querySelector(".box4-image4");

for (let menuImage4 of menuImageList4) {
    menuImage4.onclick = function() {
        boxImage4.innerHTML = `<img src="${menuImage4.src}">`;
    }
};


let button = document.querySelector("#button");
let ul = document.querySelector(".head-list1");

button.onclick = function () {
    ul.classList.toggle("open");
}
