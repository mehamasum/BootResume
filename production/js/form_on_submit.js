/**
 * Created by rifat on 4/25/17.
 */


function login_submit() {
//    alert("Gotha");

    var name = $("#login_username").val();
    var pass = $("#login_password").val();

   // document.getElementById("error_msg").innerHTML = "hello";
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
            document.getElementById("error_msg_login").innerHTML = data;
        }


    });
}


function signup_submit() {
//    alert("Gotha");

    var username = $("#signup_username").val();
    var pass = $("#signup_password").val();
    var fullname = $("#signup_fullname").val();
    var email = $("#signup_email").val();

    // document.getElementById("error_msg").innerHTML = "hello";
    $.post("../db-app/signup.php", {

        username: username,
        password: pass,
        fullname: fullname,
        email: email

    }, function (data) {

        if (data.includes("success")) {
            //REDIRECT
            sessionStorage.setItem("name",username);

            window.location.href = "basic.php";
            //document.getElementById("error_message").innerHTML = data;
        }
        else {
            document.getElementById("error_msg_signup").innerHTML = data;
        }


    });
}
