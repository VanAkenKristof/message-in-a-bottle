$('document').ready(function() {
    Webcam.attach( '#camera' );

    $('#snapshot').click(function () {
        // takeSnapshot();

        savePhoto();
        uploadPhoto();
    });
});

// function takeSnapshot() {
//     Webcam.snap( function(data_uri) {
//         uploadPhoto(data_uri);
//     } );
// }

// function fillPicture(data, data2) {
//     console.log('done');
//     document.getElementById('thingy').innerHTML = '<img src="'+data+'"/>';
//     document.getElementById('image').innerHTML = '<img src="'+data2+'"/>';
// }

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


