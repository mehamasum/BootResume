/**
 * Created by rifat on 4/26/17.
 */


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();


        var data = new FormData();
        data.append('imageToUpload', input.files[0]);

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
            }
        });

        reader.onload = function (e) {
            $('#featured_img').attr('src', e.target.result);


        };

        reader.readAsDataURL(input.files[0]);





        //document.getElementById("img-form").submit();
    }
}
