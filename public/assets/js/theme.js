// script for dark and light theme button

const body = document.querySelector("body"),
modeToggle = body.querySelector(".toggle-icon");

let getMode = localStorage.getItem("mode");
if(getMode && getMode === "dark"){
    body.classList.toggle("dark");
    $(".toggle-icon i").toggleClass("uil uil-brightness");
    $(".switch-toggle-btn").toggleClass("move-switch");
} 


// modeToggle.addEventListener("click", () => {
    
$(".toggle-icon").on("click", function () {
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
        $(".toggle-icon i").toggleClass("uil uil-brightness");
        $(".switch-toggle-btn").toggleClass("move-switch");
    }else{
        localStorage.setItem("mode", "light");
        $(".toggle-icon i").toggleClass("uil uil-brightness");
        $(".switch-toggle-btn").toggleClass("move-switch");
    }
});