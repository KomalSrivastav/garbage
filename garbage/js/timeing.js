console.log("Timing.js is working");

var date = new Date();

var dateUpdate = date.getHours();
console.log("date: ", dateUpdate);

var openTime = document.getElementById("openTime");
if (dateUpdate < 05) {
    openTime.innerHTML = "Now: We are Close";
}
if (dateUpdate > 18) {
    openTime.innerHTML = "Now: We are Close";
}
else{
    openTime.innerHTML = "Now: We are Open";
}