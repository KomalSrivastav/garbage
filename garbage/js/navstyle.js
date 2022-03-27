const hamburger = document.querySelector('.hamburger');
var navBtn = document.getElementById("navbtn");

hamburger.addEventListener('click', function () {
    this.classList.toggle('is_active');
    
})
function openNav() {
    document.getElementById("myNav").style.width = "100%";
    // navBtn.style.color = "#fff";
    navBtn.setAttribute('onclick',"closeNav()");
    
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    // navbtn.style.color = "#000";
    navbtn.setAttribute('onclick',"openNav()");
  
  }

var  menuA = document.querySelector(".menu").querySelectorAll("a");
// console.log(menuA);
 menuA.forEach(element => {
  element.addEventListener("click", function(){
        menuA.forEach(nav=>nav.classList.remove("menu_active"));
        this.classList.add("menu_active");
        
})
 })

 var  menuMobile = document.querySelectorAll(".menua")

 menuMobile.forEach(e => {
  e.addEventListener("click", function(){
    document.getElementById("myNav").style.width = "0%";
    hamburger.classList.remove("is_active");
    navbtn.setAttribute('onclick',"openNav()");

})
 });




//  menu

let menu = document.querySelector('.menu');
let menua = document.querySelectorAll('.menua');
// console.log("Menu", menua);

menua.forEach(el=>{
  el.addEventListener('click', function () {
    menu.querySelector('.menu_active').classList.remove('.menu_active');
    el.classList.add('.menu_active')
  })
})