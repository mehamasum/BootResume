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

        if(ara[0][9].length>0)
            $("#avatar").attr('src', "../"+ara[0][9]);
        else
            $("#avatar").attr('src', 'images/avatar.png');

    });

});

function readURL(input, user) {
    if (input.files && input.files[0]) {

        $("#avatar").attr('src', 'images/loading_spinner.gif');

        var data = new FormData();
        data.append('imageToUpload', input.files[0]);
        data.append('user', user);

        console.log("before ajax "+data);

        $.ajax({
            url: "../db-app/upload-img.php",
            type: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function (res) {
               // document.getElementById("response").innerHTML = res;
                console.log(res);

                if(res.indexOf("ERR")==-1) {
                    new PNotify({
                        title: 'Success',
                        text: "Avatar updated!",
                        type: 'success',
                        styling: 'bootstrap3'
                    });

                    var splits = res.split("###");
                    console.log(splits);
                    res = splits[1];

                    if(res.length>0)
                        $("#avatar").attr('src', "../"+res);
                    else
                        $("#avatar").attr('src', 'images/avatar.png');

                }
                else {
                    new PNotify({
                        title: 'Error :(',
                        text: "Something went wrong",
                        type: 'error',
                        styling: 'bootstrap3'
                    });
                }
            }
        });

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