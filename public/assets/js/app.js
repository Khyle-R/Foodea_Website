$(document).ready(function () {
    $('#example').DataTable({

        responsive: true,
        "order": [],
    });

});
$(document).ready(function () {
    $('#example0').DataTable({
        responsive: true,

    });

});
$(document).ready(function () {
    $('#example1').DataTable({
        responsive: true,
        "order": [],
    });

});
$(document).ready(function () {
    $('#example2').DataTable({

        responsive: true,
        "order": [],
    });

});

// Loader
$(window).on('load', function () {
    $('#loader').delay(100).fadeOut('slow');
    $('#loader-wrapper').delay(500).fadeOut('slow');
});
