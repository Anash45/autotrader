





function myFunction() {
 var x = document.getElementById("myTopnav");
 var mobileNavButton = document.querySelector(".btn-mobile-nav");
  
 if (x.className === "topnav") {
    x.className += " responsive";
    mobileNavButton.querySelector('[name="menu-outline"]').style.display = "block";
    mobileNavButton.querySelector('[name="close-outline"]').style.display = "none";
	x.classList.toggle("hide");
 } else {
    x.className = "topnav";
    mobileNavButton.querySelector('[name="menu-outline"]').style.display = "none";
    mobileNavButton.querySelector('[name="close-outline"]').style.display = "block";
 }
}


