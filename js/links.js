//Header links
function clearAllLinks(links) {
    links.forEach((el) => {
        el.removeAttribute("class");
    });
}
$(document).ready(function(){
    let path = window.location.pathname;
    let currentPage = path.split("/").pop();
    console.log(currentPage);

    const allHeaderLinks = document.querySelectorAll("li.header__item a");
    console.log(allHeaderLinks)
    allHeaderLinks.forEach(
        (element) =>{
            let element_href = element.getAttribute("href");
            if(currentPage.includes("games")){
                let gamesButton = document.querySelector("li.sub-games .opener");
                if(gamesButton){
                    gamesButton.setAttribute("class", "active");
                }
                return;
            }
            if(currentPage == element_href){
                element.setAttribute("class", "active");
                return;
            }
        }
    );
});