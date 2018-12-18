$('document').ready(function() {
    Webcam.attach( '#camera' );

    $('#snapshot').click(function () {
        takeSnapshot();
        ajaxCall();
    });
});

function takeSnapshot() {
    Webcam.snap( function(data_uri) {
        ajaxCall(data_uri);
    } );
}

function ajaxCall(data_uri) {
    $.ajax({
        type: 'POST',
        url: '/upload-photo',
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        },
        data: 'image=' + data_uri,
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function (data) {
            console.log("1: " + data['image'].length);
            console.log("2: "+ data_uri.length);

            fillPicture(data['image'], data_uri);
        }
    });
}

function fillPicture(data, data2) {
    console.log('done');
    document.getElementById('thingy').innerHTML = '<img src="'+data+'"/>';
    document.getElementById('image').innerHTML = '<img src="'+data2+'"/>';
}
