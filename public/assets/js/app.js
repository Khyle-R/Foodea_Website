$(document).ready(function () {
    $('#example').DataTable({
        responsive: true,

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
$(document).ready(function () {
    $('#sortStart').DataTable({

        responsive: true,
        order: [[0, 'desc']],
    });

});
$(document).ready(function () {
    $('#topSellingMerchant').DataTable({
        responsive: true,
        order: [[4, 'desc']],
    });

});

// Loader
$(window).on('load', function () {
    $('#loader').delay(100).fadeOut('slow');
    $('#loader-wrapper').delay(500).fadeOut('slow');
});
