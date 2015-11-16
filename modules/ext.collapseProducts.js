mw.loader.using( 'jquery.makeCollapsible', function () {

    $(document).ready(function () {
        var elements = $('#Product_Links').parent().nextUntil('div', 'p').wrapAll("<div class='mw-collapsible' />");

        elements.parent().makeCollapsible();
        elements.parent().prev().find('a').click();
    });

});
