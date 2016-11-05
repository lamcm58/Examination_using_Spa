(function ($) {
    $(function () {

        $('.button-collapse').sideNav({
            edge: 'right', // Choose the horizontal origin
            menuWidth: 150, // Default is 240
        });
        $('.button-collapse-1').sideNav({
            edge: 'left', // Choose the horizontal origin
            menuWidth: 250, // Default is 240
        });
        $('input.autocomplete').autocomplete({
            data: {
                "Apple": null,
                "Microsoft": null,
                "Google": 'http://placehold.it/250x250'
            }
        });

        $(document).ready(function() {
            $('select').material_select();
        });

        //$('.collapsible').collapsible();
    }); // end of document ready
})(jQuery); // end of jQuery name space