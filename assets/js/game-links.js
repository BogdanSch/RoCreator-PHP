//Not available games
const allLinks = $("a.unfinished");

allLinks.each(function() {
    $(this).click(function() {
        $(this).html('Not available');
        $(this).css({
            'background-color': 'rgb(255, 0, 0)',
            'border-radius': '10px'
        });
    });
});
