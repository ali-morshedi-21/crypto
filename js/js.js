var langCounter = 0;
var dark_mode = false;
//---------------------------
var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        type: "fraction",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

const selected = document.querySelector(".selected");
const optionsContainer = document.querySelector(".options-container");
const searchBox = document.querySelector(".search-box input");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {

searchBox.value = "";
filterList("");

if (optionsContainer.classList.contains("active")) {
    searchBox.focus();
}
});

optionsList.forEach(o => {
    o.addEventListener("click", () => {
    selected.innerHTML = o.querySelector("label").innerHTML;
optionsContainer.classList.remove("active");
});
});

searchBox.addEventListener("keyup", function(e) {
    filterList(e.target.value);
});

const filterList = searchTerm => {
    searchTerm = searchTerm.toLowerCase();
    optionsList.forEach(option => {
        let label = option.firstElementChild.nextElementSibling.innerText.toLowerCase();
    if (label.indexOf(searchTerm) != -1) {
        option.style.display = "block";
    } else {
        option.style.display = "none";
    }
});
};

$("#lang-search-close-btn").click(function ()
{
    langCounter++;
    $(".select-box").css("display","none");
});

$("#lang-select").click(function () {
    langCounter++;
    if(langCounter%2==1){
        $(".select-box").css("display","flex");
    }
    else
        $(".select-box").css("display","none");
});

$(".search").click(function () {
    $(".search-crypto").css("display" , "block");
});

$("#close-search-crypto").click(function () {
    $("#search-crypto-id").fadeOut();
});

$("#dark-mode").click(function ()
{
    dark_mode=!dark_mode;

    if(dark_mode){
        $("#dark-mode").removeClass("fa-sun");
        $("#dark-mode").addClass("fa-moon");
        $("p , body , .header-1 , .header-2 , .header-3 , .main , .modal").addClass("dark-mode");
        $(".header-1 .btn-outline-dark").removeClass("btn-outline-dark");
        $(".header-1 .btn").addClass("btn-outline-primary");
    }
    else{
        $("#dark-mode").removeClass("fa-moon");
        $("#dark-mode").addClass("fa-sun");
        $("p , body , .header-1 , .header-2 , .header-3 , .main , .modal").removeClass("dark-mode");
        $(".header-1 .btn-outline-dark").removeClass("btn-outline-primary");
        $(".header-1 .btn").addClass("btn-outline-dark");
    }
});
$(document).ready(function () {

    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","https://localhost/resume/cryptocurrency/ajax.php",false);
    xmlhttp.send(null);
    var response=xmlhttp.responseText;
    var json = JSON.parse(response);

    var btc = json.rates.BTC.toFixed(2);
    var eth = json.rates.ETH.toFixed(2);
    var bnb = json.rates.BNB.toFixed(2);
    var xcp = json.rates.XCP.toFixed(2);
    var veri = json.rates.VERI.toFixed(2);
    var bar = json.rates.BAR.toFixed(2);

    $("#btc_price").text("$ " + btc);
    $("#eth_price").text("$ " + eth);
    $("#bnb_price").text("$ " + bnb);
    $("#xcp_price").text("$ " + xcp);
    $("#veri_price").text("$ " + veri);
    $("#bar_price").text("$ " + bar);

    const interval = setInterval(function() {
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","https://localhost/resume/cryptocurrency/ajax.php",false);
        xmlhttp.send(null);
        var response=xmlhttp.responseText;
        var json = JSON.parse(response);

        var btc = json.rates.BTC.toFixed(2);
        var eth = json.rates.ETH.toFixed(2);
        var bnb = json.rates.BNB.toFixed(2);
        var xcp = json.rates.XCP.toFixed(2);
        var veri = json.rates.VERI.toFixed(2);
        var bar = json.rates.BAR.toFixed(2);

        $("#btc_price").text("$ " + btc);
        $("#eth_price").text("$ " + eth);
        $("#bnb_price").text("$ " + bnb);
        $("#xcp_price").text("$ " + xcp);
        $("#veri_price").text("$ " + veri);
        $("#bar_price").text("$ " + bar);

        console.log(json.rates.ETH);
    }, 5000);


    clearInterval(interval)


    /*var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","https://localhost/resume/cryptocurrency/ajax.php",false);
    xmlhttp.send(null);
    var response=xmlhttp.responseText;

    console.log(response);*/

});