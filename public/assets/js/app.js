$(document).ready(function () {
    $('#example').DataTable({
        responsive: true
    });

});
$(document).ready(function () {
    $('#example0').DataTable({
        "dom": 'rti',
        responsive: true
    });

});
$(document).ready(function () {
    $('#example1').DataTable({
        "dom": 'rti',
        responsive: true
    });

});
$(document).ready(function () {
    $('#example2').DataTable({
        "dom": 'rti',
        responsive: true
    });

});

// Loader
$(window).on('load', function () {
    $('#loader').delay(100).fadeOut('slow');
    $('#loader-wrapper').delay(500).fadeOut('slow');
});
