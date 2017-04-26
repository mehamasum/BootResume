/**
 * Created by rifat on 4/26/17.
 */

var accessToken="i7LM4k7JcSKs4ucCpxpgNPcs3i1kRbNKyUE8aPGKZzZWASagz9uZiuLgmgDgBJzY";
var userid="58fa07bbc7ddaa3b7464e0aa";
var user_create_url= "https://api.whenhub.com/api/users/"+userid+"/schedules?access_token="+accessToken;

function create_schedule(username, fullname) {


    /*
     {
     "calendar": {
     "calendarType": "absolute"
     },
     "name": "Haha",
     "description": "vihgkhvh",
     "curator": "Mehedi Hasan Masum (Meha Masum)",
     "scope": "private",
     "sync": false,
     "viewCode": "1l0aMp",
     "id": "590041b6c5cc3e2f1c6d70ad",
     "userId": "58fa07bbc7ddaa3b7464e0aa",
     "createdAt": "2017-04-26T06:44:06.000Z",
     "updatedAt": "2017-04-26T06:44:06.000Z",
     "updatedBy": "58fa07bbc7ddaa3b7464e0aa"
     }
     */
    var obj = new Object();
    //obj.calendar = new Object();
    //obj.calendar.calendarType="absolute";
    obj.name = username;
    obj.description  = fullname;
    obj.scope="private";
    obj.sync=false;

    var jsonString= JSON.stringify(obj);
    var id= 'none';

    $.ajax({
        type: "POST",
        url: user_create_url,
        data: jsonString,
        async: false,
        contentType: "application/json",
        complete: function(xhr, statusText){
            //alert(xhr.status);
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {

            console.log(data['id']);
            id=data['id'];
          //  add_id_to_db(username,id);
        },
        error: function(xhr, statusText, err){
            console.log("Error:" + xhr.status);
        }
    });

    return id;
}


//create_schedule("tanvirs27","Tanvir Shahriar");