$(document).ready(function () {
    let path = window.location.pathname;
    let currentPage = path.split("/").pop();

    const allHeaderLinks = $("li.header__item a");

    allHeaderLinks.each(function () {
        let element_href = $(this).attr("href").split("./").pop();

        if (currentPage.includes("games")) {
            let gamesButton = $("li.sub-games .opener");
            if (gamesButton.length) {
                gamesButton.addClass("active");
            }
            return;
        }
        if (currentPage === element_href) {
            $(this).addClass("active");
            return;
        }
    });
});
