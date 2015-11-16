mw.loader.using( 'jquery.makeCollapsible', function () {

    $(document).ready(function () {
        var sectionsToGrab = mw.config.get( 'wgCollapseProductsSections' );
        var elements = $('#' + sectionsToGrab[0]).parent().nextUntil('div', 'p').wrapAll("<div class='mw-collapsible' />");

        elements.parent().makeCollapsible();
        elements.parent().prev().find('a').click();

        console.log(sectionsToGrab[0]);
    });

});
