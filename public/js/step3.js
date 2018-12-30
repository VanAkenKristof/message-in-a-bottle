$('document').ready(function() {
    Webcam.attach( '#camera' );

    $('#snapshot').click(function () {
        // takeSnapshot();

        savePhoto();
        uploadPhoto();
    });
});

function savePhoto() {
    $.ajaxSetup({ cache: false });
    $("#capture").click(function(){
        $.ajax({
            method: "GET",
            url: "http://192.168.0.250:5513/?CMD=Capture"
        });
        setTimeout(changePage, 7000);
    });
}

function uploadPhoto(data_uri) {
    $.ajax({
        type: 'POST',
        url: '/upload-photo',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function (data) {
            console.log(data['number']);
        }
    });
}


