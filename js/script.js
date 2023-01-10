//Not available games
const allLinks = document.querySelectorAll("button.unfinished");

allLinks.forEach(
    (element, key) =>{
        element.addEventListener("click", (e) =>{
            console.log(element);
            element.innerHTML = 'Not available';
            element.style.cssText = 'background-color: rgb(255, 0, 0); border-radius: 10px;'
        });
    }
);

//Burger menu
$(document).ready(function(){
    $('.header__burger').click(function(event){
        $('.header__burger, .header__list').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

//Header links
$(document).ready(function(){
    let path = window.location.pathname;
    let page = path.split("/").pop();
    console.log(page);

    const allHeaderLinks = document.querySelectorAll(".header__list .header__item");

    allHeaderLinks.forEach(
        (element, key) =>{
            element.addEventListener("click", (e) =>{
                 $(".header__list .header__item").toggleClass('active');
            });
        }
    );
});