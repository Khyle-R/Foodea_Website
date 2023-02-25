$('.popup').show(function () {
    $('.success').addClass("show");
    $('.success').removeClass("hide");
    $('.success').addClass("showAlert");
    setTimeout(function () {
        $('.success').removeClass("show");
        $('.success').addClass("hide");
    }, 5000);
});
$('.close-btn').click(function () {
    $('.success').removeClass("show");
    $('.success').addClass("hide");
});


$(".failed").show(function () {
    $(".alert").addClass("show");
    $(".alert").removeClass("hide");
    $(".alert").addClass("showAlert");
    setTimeout(function () {
        $(".alert").removeClass("show");
        $(".alert").addClass("hide");
    }, 5000);
});
$(".close-btn").click(function () {
    $(".alert").removeClass("show");
    $(".alert").addClass("hide");
});
