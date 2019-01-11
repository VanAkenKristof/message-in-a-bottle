$('document').ready(function () {
    Webcam.attach('#camera');

    let counter = 5;
    let interval = setInterval(function () {
      let number = counter;
        if (counter === 5 || counter === 4) {
          number = 3;
        }
        counter--;
        //$('#countd').src("/assets/" + toString(counter) + " Countdown.svg");
        document.getElementById('countd').src="/assets/" + number + " Countdown.svg";
        if (counter === (-1)) {
            clearInterval(interval);
            //savePhoto();
            uploadPhoto();
        }
    }, 1000);
});

function savePhoto() {
    $.ajaxSetup({cache: false});
    $.ajax({
        method: "GET",
        url: "http://192.168.56.1:5513/?CMD=Capture"
    });
}

function uploadPhoto() {
    $.ajax({
        //type: 'POST',
        //url: '/upload-photo',
        //headers: {
            //'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        //},
        beforeSend: function () {

        },
        complete: function () {

        },
        success: function (data) {
            window.location.href = '/step4';
        }
    });
}
