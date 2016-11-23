(function ($) {
    $(function () {

        $('.button-collapse').sideNav({
            edge: 'right', // Choose the horizontal origin
            menuWidth: 150, // Default is 240
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor

        });
        $('.button-collapse-1').sideNav({
            edge: 'left', // Choose the horizontal origin
            menuWidth: 250, // Default is 240
            closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor

        });
       
        $(document).ready(function() {
            $('select').material_select();
           
        });


    }); // end of document ready
})(jQuery); // end of jQuery name space