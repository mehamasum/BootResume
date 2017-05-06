var accessToken="i7LM4k7JcSKs4ucCpxpgNPcs3i1kRbNKyUE8aPGKZzZWASagz9uZiuLgmgDgBJzY";

$(window).load(function() {

    $('#pseudo_submit').click(function() {

        NProgress.start();

        $.ajax({
            type: "POST",
            url: "../db-app/signdown.php",
            dataType: 'text',
            data: {
              password: $("#basic_pass").val()
            },
            complete: function(xhr, statusText){
                NProgress.done();
            },
            success: function (res) {
                console.log(res);

                if(res.indexOf("ERR")==-1) {
                    delete_schedule(res);
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

    });
});


function delete_schedule(id) {
    NProgress.start();

    var del_url = "https://api.whenhub.com/api/schedules/"+id+"?access_token="+accessToken;

    $.ajax({
        type: "DELETE",
        url: del_url,
        complete: function(xhr, statusText){
            NProgress.done();
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            console.log(data);
            window.location.href = "account_deleted.php";
        },
        error: function(xhr, statusText, err){
            console.log(xhr);
            console.log(statusText);
            console.log(err);
        }
    });
}