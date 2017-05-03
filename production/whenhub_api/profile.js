/**
 * Created by rifat on 5/1/17.
 */

var schid;
var accessToken="i7LM4k7JcSKs4ucCpxpgNPcs3i1kRbNKyUE8aPGKZzZWASagz9uZiuLgmgDgBJzY";

var all= [];
all['EDU']=[];
all['EXP']=[];
all['PRO']=[];
all['ACT']=[];
all['PUB']=[];
all['HON']=[];

var monthName=['dummy','January','February','March','April','May','June','July','August','September','October','November','December'];


$(window).load(function() {

    $.post("./db-app/profile-get.php", {

        data: "null"

    }, function (data) {

        if(data.includes("error")){
            new PNotify({
                title: 'Error :(',
                text: "No user found",
                type: 'error',
                styling: 'bootstrap3'
            });
        }else{
            console.log(data);
            var ara= JSON.parse(data);
            console.log(ara[0]);

            schid=ara[0][5];
            var image;

            if(ara[0][9].length>0)
                image="./"+ara[0][9];
            else
                image= 'images/avatar.png';

            document.getElementById("basic-normal").innerHTML='<img src="'+image+'" name="aboutme" width="100" height="100" border="0" class="img-circle"></a>'+
                '<h3 class="media-heading" style="margin-top: 10px">'+ara[0][6] +'<small>'+ara[0][8]+'</small></h3>'+
            '<span class="">'+ara[0][3]+' | '+ara[0][4]+'</span>';


            document.getElementById("basic-mob").innerHTML='<img src="'+image+'" name="aboutme" width="100" height="100" border="0" class="img-circle"></a>'+
                '<h3 class="media-heading" style="margin-top: 10px">'+ara[0][6] +'<small>'+ara[0][8]+'</small></h3>'+
                '<span class="">'+ara[0][3]+' | '+ara[0][4]+'</span>';

            if(ara[0][7].length>0) {
                document.getElementById("objective").innerHTML = '<h3><i class="fa fa-tasks"></i> Objective</h3>'
                    + ' <ul style="padding-bottom:5px;">'
                    + ara[0][7]
                    + '</ul>';
            }
            else{
                document.getElementById("objective").style.display="none";
            }


            get_events(schid);

            console.log(all);



            make_social();
            make_education();
            make_experience();
            make_project();
            make_publication();
            make_honors();
            make_activity();

        }
    });




});



function make_education() {
    var education= document.getElementById("education");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['EDU'].length;i++){

        var endFound = all['EDU'][i]["when"]["endDate"];

        if (endFound===null)
            endFound = "Present";
        else{

            var year=endFound.substring(0,4);
            var month= monthName[parseInt(endFound.substring(5,7))];
            endFound= month+" "+year;
        }

        var start= all['EDU'][i]['when']['startDate'];

        year=start.substring(0,4);
        month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;
        //if(type==="PUB" || type==="HON")
        //  timePeriodStr = obj['when']['startDate'];
        //else
        timePeriodStr = start+" to "+endFound;


        var x= all.EDU[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['EDU'][i].name+'</strong></a>, '+all['EDU'][i].customFieldData.degree+' '+ all['EDU'][i].customFieldData.area+', '+timePeriodStr+'<br>';

        temp+=get_label(all['EDU'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    education.innerHTML=temp;
}



function make_experience() {
    var experience= document.getElementById("experience");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['EXP'].length;i++){

        var endFound = all['EXP'][i]["when"]["endDate"];

        if (endFound===null)
            endFound = "Present";
        else{

            var year=endFound.substring(0,4);
            var month= monthName[parseInt(endFound.substring(5,7))];
            endFound= month+" "+year;
        }

        var start= all['EXP'][i]['when']['startDate'];

        year=start.substring(0,4);
        month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;
        //if(type==="PUB" || type==="HON")
        //  timePeriodStr = obj['when']['startDate'];
        //else
        timePeriodStr = start+" to "+endFound;


        var x= all.EXP[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['EXP'][i].name+'</strong></a>, '+all['EXP'][i].customFieldData.role+' , '+timePeriodStr+'<br>';

        temp+=get_label(all['EXP'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    experience.innerHTML=temp;
}


function make_project() {
    var project= document.getElementById("project");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['PRO'].length;i++){

        var endFound = all['PRO'][i]["when"]["endDate"];

        if (endFound===null)
            endFound = "Present";
        else{

            var year=endFound.substring(0,4);
            var month= monthName[parseInt(endFound.substring(5,7))];
            endFound= month+" "+year;
        }

        var start= all['PRO'][i]['when']['startDate'];

        year=start.substring(0,4);
        month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;
        //if(type==="PUB" || type==="HON")
        //  timePeriodStr = obj['when']['startDate'];
        //else
        timePeriodStr = start+" to "+endFound;


        var x= all.PRO[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['PRO'][i].name+'</strong></a>, '+all['PRO'][i].customFieldData.role+' , '+timePeriodStr+'<br>';

        temp+=get_label(all['PRO'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    project.innerHTML=temp;
}



function make_publication() {
    var publication= document.getElementById("publication");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['PUB'].length;i++){


        var start= all['PUB'][i]['when']['startDate'];

        var year=start.substring(0,4);
        var month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;

        timePeriodStr = start;

        var x= all.PUB[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        var custom= all.PUB[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=custom.coauthor;
        }
        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['PUB'][i].name+'</strong></a>,'+customf +' , '+timePeriodStr+'<br>';

        temp+=get_label(all['PUB'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    publication.innerHTML=temp;
}


function make_honors() {
    var honors= document.getElementById("honors");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['HON'].length;i++){


        var start= all['HON'][i]['when']['startDate'];

        var year=start.substring(0,4);
        var month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;

        timePeriodStr = start;

        var x= all.HON[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        var custom= all.HON[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=custom.issuer;
        }
        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['HON'][i].name+'</strong></a>,'+customf +' , '+timePeriodStr+'<br>';

        temp+=get_label(all['HON'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    honors.innerHTML=temp;
}


function make_activity() {
    var activity= document.getElementById("activity");

    var temp='<ul style="padding-bottom:5px;">';

    for(var i=0;i<all['ACT'].length;i++){

        var endFound = all['ACT'][i]["when"]["endDate"];

        if (endFound===null)
            endFound = "Present";
        else{

            var year=endFound.substring(0,4);
            var month= monthName[parseInt(endFound.substring(5,7))];
            endFound= month+" "+year;
        }

        var start= all['ACT'][i]['when']['startDate'];

        year=start.substring(0,4);
        month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;

        timePeriodStr = start+" to "+endFound;

        var x= all.ACT[i].primaryAction;
        var label, url;

        if(x==null){
            label=url="";
        }else{
            url=x.url;
            label=x.label;
        }

        var custom= all.ACT[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=custom.role;
        }
        temp+='<li>';
        temp+='<a href="'+url+'" data-toggle="tooltip" title="'+label+'"><strong>'+all['ACT'][i].name+'</strong></a>,'+customf +' , '+timePeriodStr+'<br>';

        temp+=get_label(all['ACT'][i]);
        temp+='</li><br>';

    }
    temp+='</ul>';

    activity.innerHTML=temp;
}


function get_label(obj) {
    var tagArr = obj.tags;

    var ret='';

    if(tagArr.length>1) {

        var TAGS = {"SKILL":"info", "ROLE":"success", "SUB":"primary", "STS":"warning", "MISC":"default"};


        for(var itr = 1; itr< obj.tags.length; itr++) {
            var foundTag = obj.tags[itr];
            var strippedTags = foundTag.split("###");

            ret+= '<span class="label label-';
            ret+= TAGS[strippedTags[0]];
            ret+= '">'+strippedTags[1]+'</span> ' ;


            /*
            var old;
            if(strippedTags[0]===TAGS[0]) {
                old = skillBox.val();
                if(old==="") skillBox.val("#"+strippedTags[1]);
                else skillBox.val(old +" "+ "#"+strippedTags[1]);
            }
            else if(strippedTags[0]===TAGS[1]) {
                old = roleBox.val();
                if(old==="") roleBox.val("#"+strippedTags[1]);
                else roleBox.val(old +" "+ "#"+strippedTags[1]);
            }
            else if(strippedTags[0]===TAGS[2]) {
                old = subBox.val();
                if(old==="") subBox.val("#"+strippedTags[1]);
                else subBox.val(old +" "+ "#"+strippedTags[1]);
            }
            else if(strippedTags[0]===TAGS[3]) {
                old = stsBox.val();
                if(old==="") stsBox.val("#"+strippedTags[1]);
                else stsBox.val(old +" "+ "#"+strippedTags[1]);
            }
            else if(strippedTags[0]===TAGS[4]) {
                old = miscBox.val();
                if(old==="") miscBox.val("#"+strippedTags[1]);
                else miscBox.val(old +" "+ "#"+strippedTags[1]);
            }
            */
        }
    }
    return ret;
}



function get_events(scheduleId) {


    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var event_create_url= "https://api.whenhub.com/api/schedules/"+scheduleId+"/events?access_token="+accessToken;
    console.log(event_create_url);

    /*
     {
     "when": {
     "period": "month",
     "startDate": "2017-03",        --> Start Date
     "endDate": null --> End Date
     },
     "name": "Test Event api test",  ---> Event Name
     "description": "string",       ---> Description
     "tags": [
     "string"                    --> Type###String
     ],

     "customFieldData": {           --> Event Sub Titles
     "type": "education",
     "cg": "4.0"

     },
     "primaryAction": {
     "name/label": "string",    --> Action Button Title
     "url": "string"            --> Action Url
     },
     }
     */

    $.ajax({
        type: "GET",
        url: event_create_url,
        async: false,
        complete: function(xhr, statusText){

            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            var cnt = 0;
            //var body = $("#table_body");

            //body.html('');

            console.log(data.length);
            for(var idx =0; idx<data.length; idx++) {
                var obj = data[idx];
                var tag = obj["tags"];
                console.log(obj);


                if (!("undefined" === typeof tag)) {

                    all[tag[0].substring(8)].push(obj);

                }
            }
        },
        error: function(xhr, statusText, err){
            console.log("Error: " + xhr.status);
            new PNotify({
                title: 'Error :(',
                text: statusText,
                type: 'error',
                styling: 'bootstrap3'
            });
        }
    });
}


function get_details(scheduleId, eventId, type) {
    console.log(scheduleId+" "+eventId+" "+type);


    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var getUrl = "https://api.whenhub.com/api/schedules/"+scheduleId+"/events/"+eventId+"?access_token="+accessToken;
    console.log(getUrl);

    $.ajax({
        type: "GET",
        url: getUrl,
        async: false,
        complete: function(xhr, statusText){

            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            console.log(data);

            var obj = data;

            var s_found = obj.when.startDate;
            console.log(s_found);

            $("#startYear").val(s_found.substring(0, 4));
            $("#startMonth").val(s_found.substring(5, 7));

            var e_found = obj.when.endDate;
            console.log(e_found);
            if (!(e_found===null)) {
                $("#endYear").val(e_found.substring(0, 4));
                $("#endMonth").val(e_found.substring(5, 7));
            }

            $("#name").val(obj.name);


            if (!("undefined" === typeof obj.description)) {
                $("#description").val(obj.description);
            }


            var tagArr = obj.tags;

            if(tagArr.length>1) {

                var TAGS = ["SKILL", "ROLE", "SUB", "STS", "MISC"];

                var skillBox = $("#skill");
                var roleBox = $("#role");
                var subBox = $("#subject");
                var stsBox = $("#status");
                var miscBox = $("#misc");

                for(var itr = 1; itr< obj.tags.length; itr++) {
                    var foundTag = obj.tags[itr];
                    var strippedTags = foundTag.split("###");

                    console.log(strippedTags[0]);
                    console.log(strippedTags[1]);

                    var old;
                    if(strippedTags[0]===TAGS[0]) {
                        old = skillBox.val();
                        if(old==="") skillBox.val("#"+strippedTags[1]);
                        else skillBox.val(old +" "+ "#"+strippedTags[1]);
                    }
                    else if(strippedTags[0]===TAGS[1]) {
                        old = roleBox.val();
                        if(old==="") roleBox.val("#"+strippedTags[1]);
                        else roleBox.val(old +" "+ "#"+strippedTags[1]);
                    }
                    else if(strippedTags[0]===TAGS[2]) {
                        old = subBox.val();
                        if(old==="") subBox.val("#"+strippedTags[1]);
                        else subBox.val(old +" "+ "#"+strippedTags[1]);
                    }
                    else if(strippedTags[0]===TAGS[3]) {
                        old = stsBox.val();
                        if(old==="") stsBox.val("#"+strippedTags[1]);
                        else stsBox.val(old +" "+ "#"+strippedTags[1]);
                    }
                    else if(strippedTags[0]===TAGS[4]) {
                        old = miscBox.val();
                        if(old==="") miscBox.val("#"+strippedTags[1]);
                        else miscBox.val(old +" "+ "#"+strippedTags[1]);
                    }
                }
            }


            if(type==="EDU") {
                $("#subtitle1").val(obj.customFieldData.degree);
                $("#subtitle2").val(obj.customFieldData.area);
            }

            if(type==="EXP" || type==="PRO"|| type==="ACT") {
                $("#subtitle1").val(obj.customFieldData.role);
            }

            if(type==="PUB" && !("undefined" === typeof obj.customFieldData)) {
                $("#subtitle1").val(obj.customFieldData.coauthor);
            }

            if(type==="HON" && !("undefined" === typeof obj.customFieldData)) {
                $("#subtitle1").val(obj.customFieldData.issuer);
            }

            if (!("undefined" === typeof obj.primaryAction)) {
                $("#btn_label").val(obj.primaryAction.label);
                $("#btn_url").val(obj.primaryAction.url);
            }


        },
        error: function(xhr, statusText, err){
            console.log("Error: " + xhr.status);
            new PNotify({
                title: 'Error fetching data',
                text: statusText,
                type: 'error',
                styling: 'bootstrap3'
            });
        }
    });

}



function make_social() {

    //  SELECT `username`, `linkedin`, `twitter`, `github`, `facebook`, `googleplus`, `skype`, `flickr`, `instagram`, `tumblr`, `youtube` FROM `social` WHERE 1

    var title = ["LinkedIn", "Twitter", "GitHub", "Facebook", "Google+", "Skype", "Flickr", "Instagram", "Tumblr", "YouTube"];
    var fa = ['linkedin', 'twitter', 'github', 'facebook', 'google-plus', 'skype', 'flickr', 'instagram', 'tumblr', 'youtube'];


    $.post("./db-app/social-from-profile.php", {

        data: "null"

    }, function (data) {

        if (data.includes("error")) {
            new PNotify({
                title: 'Error :(',
                text: "No user found",
                type: 'error',
                styling: 'bootstrap3'
            });
        } else {

            console.log(data);
            var ara= JSON.parse(data);
            console.log(ara[0]);

            var temp='';

            for(var i=0;i<title.length;i++){

            temp+='<h2><a style="text-decoration: none" data-toggle="tooltip" class="tip2" href="'+
                ara[0][i+1]+'" title="'+title[i]+'"><i class="fa fa-'+fa[i] +'"></i></a></h2>';

            }

            document.getElementById("social-normal").innerHTML=temp;


            temp='';

            for(i=0;i<title.length;i++){

                temp+='<a style="text-decoration: none" data-toggle="tooltip" class="tip2" href="'+
                    ara[0][i+1]+'" title="'+title[i]+'"><i class="fa fa-'+fa[i] +'"></i></a>';

            }

            document.getElementById("social-mob").innerHTML=temp;
        }
    });
}