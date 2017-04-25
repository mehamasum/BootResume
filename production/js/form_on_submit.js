/**
 * Created by rifat on 4/25/17.
 */


function login_submit() {
//    alert("Gotha");

    var name = $("#login_username").val();
    var pass = $("#login_password").val();


    $.post("../db-app/login.php", {

        username: name,
        password: pass

    }, function (data) {

        if (data.includes("success")) {
            //REDIRECT
            sessionStorage.setItem("name",name);
            window.location.href = "basic.php";
            //document.getElementById("error_message").innerHTML = data;
        }
        else {
            document.getElementById("error_message").innerHTML = data;
        }


    });
}
