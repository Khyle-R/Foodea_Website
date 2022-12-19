$("#file-fr").fileinput({
    theme: "fa5",
    language: "fr",
    uploadUrl: "#",
    allowedFileExtensions: ["jpg", "png", "gif"],
});
$("#file-es").fileinput({
    theme: "fa5",
    language: "es",
    uploadUrl: "#",
    allowedFileExtensions: ["jpg", "png", "gif"],
});
$("#file-0")
    .fileinput({
        theme: "fa5",
        uploadUrl: "#",
    })
    .on("filepreupload", function (event, data, previewId, index) {
        alert(
            "The description entered is:\n\n" +
            ($("#description").val() || " NULL")
        );
    });
$("#file-1").fileinput({
    theme: "fa5",
    uploadUrl: "s", // you must set a valid URL here else you will get an error
    allowedFileExtensions: ["jpg", "png", "gif"],
    overwriteInitial: false,
    maxFileSize: 1000,
    maxFilesNum: 1,
    //allowedFileTypes: ['image', 'video', 'flash'],
    slugCallback: function (filename) {
        return filename.replace("(", "_").replace("]", "_");
    },
});
/*
 $(".file").on('fileselect', function(event, n, l) {
 alert('File Selected. Name: ' + l + ', Num: ' + n);
 });
 */
$("#file-3").fileinput({
    theme: "fa5",
    showUpload: false,
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any",
    previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
    overwriteInitial: false,
    initialPreviewAsData: true,
    initialPreview: [
        "http://lorempixel.com/1920/1080/transport/1",
        "http://lorempixel.com/1920/1080/transport/2",
        "http://lorempixel.com/1920/1080/transport/3",
    ],
    initialPreviewConfig: [{
            caption: "transport-1.jpg",
            size: 329892,
            width: "120px",
            url: "{$url}",
            key: 1,
        },
        {
            caption: "transport-2.jpg",
            size: 872378,
            width: "120px",
            url: "{$url}",
            key: 2,
        },
        {
            caption: "transport-3.jpg",
            size: 632762,
            width: "120px",
            url: "{$url}",
            key: 3,
        },
    ],
});
$("#file-4").fileinput({
    theme: "fa5",
    uploadExtraData: {
        kvId: "10"
    },
});
$(".btn-warning").on("click", function () {
    var $el = $("#file-4");
    if ($el.attr("disabled")) {
        $el.fileinput("enable");
    } else {
        $el.fileinput("disable");
    }
});
$(".btn-info").on("click", function () {
    $("#file-4").fileinput("refresh", {
        previewClass: "bg-info"
    });
});
/*
 $('#file-4').on('fileselectnone', function() {
 alert('Huh! You selected no files.');
 });
 $('#file-4').on('filebrowse', function() {
 alert('File browse clicked for #file-4');
 });
 */
$(document).ready(function () {
    $("#test-upload").fileinput({
        theme: "fa5",
        showPreview: false,
        allowedFileExtensions: ["jpg", "png", "gif"],
        elErrorContainer: "#errorBlock",
    });
    $("#kv-explorer").fileinput({
        theme: "explorer-fa5",
        uploadUrl: "#",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [
            "http://lorempixel.com/1920/1080/nature/1",
            "http://lorempixel.com/1920/1080/nature/2",
            "http://lorempixel.com/1920/1080/nature/3",
        ],
        initialPreviewConfig: [{
                caption: "nature-1.jpg",
                size: 329892,
                width: "120px",
                url: "{$url}",
                key: 1,
            },
            {
                caption: "nature-2.jpg",
                size: 872378,
                width: "120px",
                url: "{$url}",
                key: 2,
            },
            {
                caption: "nature-3.jpg",
                size: 632762,
                width: "120px",
                url: "{$url}",
                key: 3,
            },
        ],
    });
    /*
       $("#test-upload").on('fileloaded', function(event, file, previewId, index) {
       alert('i = ' + index + ', id = ' + previewId + ', file = ' + file.name);
       });
       */
    $("#inp-add-1").on("change", function () {
        var $plugin = $("#inp-add-2").data("fileinput");
        $plugin.addToStack($(this)[0].files[0]);
    });
    $("#inp-add-2").fileinput({
        uploadUrl: "#",
        //uploadUrl: 'http://localhost/plugins/test-upload',
        initialPreviewAsData: true,
        initialPreview: [
            "https://dummyimage.com/640x360/a0f.png&text=Transport+1",
            "https://dummyimage.com/640x360/3a8.png&text=Transport+2",
            "https://dummyimage.com/640x360/6ff.png&text=Transport+3",
        ],
        initialPreviewConfig: [{
                caption: "transport-1.jpg",
                size: 329892,
                width: "120px",
                url: "{$url}",
                key: 1,
                zoomData: "https://dummyimage.com/1920x1080/a0f.png&text=Transport+1",
                description: "<h5>NUMBER 1</h5> The first choice for transport. This is the future.",
            },
            {
                caption: "transport-2.jpg",
                size: 872378,
                width: "120px",
                url: "{$url}",
                key: 2,
                zoomData: "https://dummyimage.com/1920x1080/3a8.png&text=Transport+2",
                description: "<h5>NUMBER 2</h5> The second choice for transport. This is the future.",
            },
            {
                caption: "transport-3.jpg",
                size: 632762,
                width: "120px",
                url: "{$url}",
                key: 3,
                zoomData: "https://dummyimage.com/1920x1080/6ff.png&text=Transport+3",
                description: "<h5>NUMBER 3</h5> The third choice for transport. This is the future.",
            },
        ],
    });
});