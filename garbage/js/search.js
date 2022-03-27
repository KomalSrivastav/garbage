function searchAny() {
var link = "https://city.kushinagar.info/jobs/?search_keywords=";
var search = document.getElementById("searchPlace").value;
// console.log("You search for ", search);
var result = link+search;
var searchIcon = document.getElementById("searchIcon");
    // console.log("You Search For");
   
     if (search == "") {
        console.warn("You are searching an empty string its not valid");

         alert("Please fill the input box");
     } else {
        searchIcon.setAttribute("href",result);
        
     }
}



//
// 