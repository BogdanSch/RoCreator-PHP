//Not available games
const allLinks = $("button.unfinished");

allLinks.each(function() {
    $(this).click(function() {
        console.log(this);
        $(this).html('Not available');
        $(this).css({
            'background-color': 'rgb(255, 0, 0)',
            'border-radius': '10px'
        });
    });
});
