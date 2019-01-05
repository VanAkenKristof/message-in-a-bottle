$('document').ready(function() {
    Webcam.attach( '#camera' );

    let counter = 9;
    let interval = setInterval(function() {
        counter--;

        $('#countdown').text(counter);
        if (counter === 0) {
            savePhoto();
            uploadPhoto();
        }
    }, 1000);

});

function savePhoto() {
    $.ajaxSetup({ cache: false });
        $.ajax({
            method: "GET",
            url: "http://192.168.56.1:5513/?CMD=Capture"
        //setTimeout(changePage, 7000);
    });
}

function uploadPhoto() {
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
            window.location.href = '/step4';
        }
    });
}
