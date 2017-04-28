/**
 * Created by rifat on 4/26/17.
 */

$(window).load(function() {

    $.post("../db-app/basic-get.php", {

        data: "null"

    }, function (data) {
        console.log(data);
        var ara= JSON.parse(data);
        console.log(ara[0]);

        document.getElementById("basic_name").value = ara[0][6];
        document.getElementById("basic_email").value = ara[0][3];
        document.getElementById("basic_contact").value = ara[0][4];
        document.getElementById("basic_objective").value = ara[0][7];
        document.getElementById("basic_country").value = ara[0][8];

    });

/*
    $.post("../db-app/image-display.php", {

        data: "null"

    }, function (data) {
      //  console.log(data);

        $('#featured_img').attr('src', data);

    });
    */
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        var data = new FormData();
        data.append('imageToUpload', input.files[0]);

        /*$.ajax({
            url: "../db-app/upload-img.php",
            type: "POST",
            data: data,
            processData: false,
            contentType: 'application/x-www-form-url-encoded',
            success: function (res) {
               // document.getElementById("response").innerHTML = res;
                console.log(res);
            }
        });*/

        reader.onload = function (e) {
            var img = $('#featured_img');
            img.attr('src', e.target.result);
            img.css('opacity', '50');

        };

        reader.readAsDataURL(input.files[0]);
    }
}

function form_submitted() {
    NProgress.start();

    var name = $("#basic_name").val();
    var email = $("#basic_email").val();
    var contact = $("#basic_contact").val();
    var obj= $("#basic_objective").val();
    var con= $("#basic_country").val();

    $.post("../db-app/basic-update.php", {

        name: name,
        email: email,
        phone: contact,
        objective: obj,
        country: con

    }, function (data) {

        NProgress.done();
        NProgress.remove();

        if (data.includes("success")) {

            new PNotify({
                title: 'Updated successfully',
                type: 'success',
                styling: 'bootstrap3'
            });

            console.log(data);
        }
        else {
            new PNotify({
                title: 'Error :(',
                text: "Something went wrong",
                type: 'error',
                styling: 'bootstrap3'
            });

            console.log(data);
        }


    });
}