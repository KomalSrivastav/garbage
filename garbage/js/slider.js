var sIndex = 0;

function controler(x) {
    sIndex = sIndex + x;
    slideShow(sIndex);
}

// setInterval(slideShow(0),2000);


slideShow(sIndex);
function slideShow(num) {
    var sliders = document.getElementsByClassName('slide');

    if (num == sliders.length){
        sIndex = 0;
        num = 0;
    }
    if (num < 0) {
        sIndex = sliders.length-1;
        num = sliders.length-1;
    }



     for (let y of sliders){
         y.style.display="none";
     }
   sliders[num].style.display="block";
}



