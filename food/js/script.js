// =========================
// Foodify JavaScript
// =========================

// Navbar Shadow on Scroll

//alert("JavaScript Loaded Successfully");
const navbar = document.querySelector(".navbar");

if (navbar) {
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("shadow");
        } else {
            navbar.classList.remove("shadow");
        }
    });
}
window.addEventListener("scroll", function () {

    const navbar = document.querySelector(".navbar");

    if (window.scrollY > 50) {

        navbar.classList.add("shadow");

    } else {

        navbar.classList.remove("shadow");

    }

});

// =========================
// Search Button
// =========================

const searchBtn = document.querySelector(".input-group button");

if (searchBtn) {

    searchBtn.addEventListener("click", function () {

        let search = document.querySelector(".input-group input").value;

        if (search == "") {

            alert("Please enter food or restaurant name.");

        } else {

            alert("Searching for: " + search);

        }

    });

}

// =========================
// Add To Cart
// =========================

const cartButtons = document.querySelectorAll(".btn-danger");

let cart = 0;

cartButtons.forEach(function(btn){

    if(btn.innerText=="Add to Cart"){

        btn.addEventListener("click",function(){

            cart++;

            alert("Item Added Successfully\nTotal Items : "+cart);

        });

    }

});

// =========================
// Smooth Scroll
// =========================

document.querySelectorAll('a[href^="#"]').forEach(anchor=>{

anchor.addEventListener("click",function(e){

e.preventDefault();

document.querySelector(this.getAttribute("href")).scrollIntoView({

behavior:"smooth"

});

});

});

// =========================
// Welcome Message
// =========================

window.onload=function(){

console.log("Welcome to Foodify");

}

const themeToggle = document.getElementById("themeToggle");

themeToggle.addEventListener("click", function () {

    document.body.classList.toggle("dark-mode");

    if(document.body.classList.contains("dark-mode")){
        themeToggle.innerHTML = "☀️";
    }else{
        themeToggle.innerHTML = "🌙";
    }

});