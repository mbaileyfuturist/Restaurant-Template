function myFunction(x) {
    if (x.matches) { 
        //Grab the logo header.
        var logo = document.getElementById("logo-header-container");

        //Give it a class of navbar-brand.
        logo.className = "navbar-brand ";

        //Grab the navbar container. 
        var navContainer = document.getElementById("navbar");

        //Append it into the nav container.
        navContainer.appendChild(logo);

        //grab meal-time-titles.
        var mealTitle = document.getElementsByClassName("meal-time-title");

        //Change the font size.
        for(var index=0; index < 6; index++){
            mealTitle[index].className = "meal-time-title h1";
            mealTitle[index].style.color = "white"; 
            mealTitle[index].style.fontWeight = "100";
            mealTitle[index].style.textDecoration = "none";    
        }
    }
}


var x = window.matchMedia("(max-width: 600px)")

myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes

