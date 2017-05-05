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

var def_tags = ['EDU', 'EXP', 'PRO', 'ACT', 'PUB', 'HON'];

var monthName=['dummy','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];




function get_profile (username) {
    $.post("./db-app/profile-get.php", {

        profile: username

    }, function (data) {

        if(data.includes("error")){
            console.log("error ocurred");
            window.location.href="dashboard/page_404.html";
        }
        else{
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
                '<h3 class="media-heading" style="margin-top: 10px">'+ara[0][6]+" " +'<small>'+ara[0][8]+'</small></h3>'+
                '<span class="">'+ara[0][3]+' | '+ara[0][4]+'</span>';


            document.getElementById("basic-mob").innerHTML='<img src="'+image+'" name="aboutme" width="100" height="100" border="0" class="img-circle"></a>'+
                '<h3 class="media-heading" style="margin-top: 10px">'+ara[0][6] +" " +'<small>'+ara[0][8]+'</small></h3>'+
                '<span class="">'+ara[0][3]+' | '+ara[0][4]+'</span>';

            if(ara[0][7].length>0) {
                document.getElementById("objective").innerHTML = '<h3><i class="fa fa-check-square-o"></i> Objective</h3>'
                    + ' <ul style="padding-bottom:5px;">'
                    + ara[0][7]
                    + '</ul>';
            }
            else{
                document.getElementById("objective").style.display="none";
            }


            get_events(schid);

            console.log(all);



            make_social(username);
            make_education();
            make_experience();
            make_project();
            make_publication();
            make_honors();
            make_activity();

            NProgress.done();

            $(".tip").tooltip({placement:"top"});

            /*$('.tip2').each(function(i, obj) {
                console.log(obj.html());
            });*/
        }
    });

}



function make_education() {
    var education= document.getElementById("education");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['EDU'].length==0){
        document.getElementById("education-block").style.display='none';
    }

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
        timePeriodStr = start+" - "+endFound;


        var x= all.EDU[i].primaryAction;
        var label, url;
        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['EDU'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['EDU'][i].name+'</strong></a>';
        }

        temp+='<li>';
        temp+=a_or_span+', '+all['EDU'][i].customFieldData.degree+' - '+ all['EDU'][i].customFieldData.area+', '+timePeriodStr+'<br>';

        temp+=get_label(all['EDU'][i]);

        var desp= all['EDU'][i].description;

        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

        temp+='</li><br>';

    }
    temp+='</ul>';

    education.innerHTML=temp;
}



function make_experience() {
    var experience= document.getElementById("experience");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['EXP'].length==0){
        document.getElementById("experience-block").style.display='none';
    }

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
        timePeriodStr = start+" - "+endFound;


        var x= all.EXP[i].primaryAction;
        var label, url;

        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['EXP'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['EXP'][i].name+'</strong></a>';
        }

        temp+='<li>';
        temp+=a_or_span+', '+all['EXP'][i].customFieldData.role+', '+timePeriodStr+'<br>';

        temp+=get_label(all['EXP'][i]);

        var desp= all['EXP'][i].description;
        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

        temp+='</li><br>';

    }
    temp+='</ul>';

    experience.innerHTML=temp;
}


function make_project() {
    var project= document.getElementById("project");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['PRO'].length==0){
        document.getElementById("project-block").style.display='none';
    }

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
        timePeriodStr = start+" - "+endFound;


        var x= all.PRO[i].primaryAction;
        var label, url;

        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['PRO'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['PRO'][i].name+'</strong></a>';
        }


        temp+='<li>';
        temp+=a_or_span+', '+all['PRO'][i].customFieldData.role+', '+timePeriodStr+'<br>';

        temp+=get_label(all['PRO'][i]);

        var desp= all['PRO'][i].description;
        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

        temp+='</li><br>';

    }
    temp+='</ul>';

    project.innerHTML=temp;
}



function make_publication() {
    var publication= document.getElementById("publication");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['PUB'].length==0){
        document.getElementById("publication-block").style.display='none';
    }

    for(var i=0;i<all['PUB'].length;i++){


        var start= all['PUB'][i]['when']['startDate'];

        var year=start.substring(0,4);
        var month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;

        timePeriodStr = start;

        var x= all.PUB[i].primaryAction;
        var label, url;

        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['PUB'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['PUB'][i].name+'</strong></a>';
        }


        var custom= all.PUB[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=", With "+custom.coauthor;
        }
        temp+='<li>';
        temp+=a_or_span + customf +', '+timePeriodStr+'<br>';

        temp+=get_label(all['PUB'][i]);

        var desp= all['PUB'][i].description;
        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

        temp+='</li><br>';

    }
    temp+='</ul>';

    publication.innerHTML=temp;
}


function make_honors() {
    var honors= document.getElementById("honors");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['ACT'].length==0){
        document.getElementById("honors-block").style.display='none';
    }

    for(var i=0;i<all['HON'].length;i++){


        var start= all['HON'][i]['when']['startDate'];

        var year=start.substring(0,4);
        var month= monthName[parseInt(start.substring(5,7))];
        start= month+" "+year;

        var timePeriodStr;

        timePeriodStr = start;

        var x= all.HON[i].primaryAction;
        var label, url;

        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['HON'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['HON'][i].name+'</strong></a>';
        }


        var custom= all.HON[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=", "+custom.issuer;
        }
        temp+='<li>';
        temp+=a_or_span + customf +', '+timePeriodStr+'<br>';

        temp+=get_label(all['HON'][i]);

        var desp= all['HON'][i].description;
        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

        temp+='</li><br>';

    }
    temp+='</ul>';

    honors.innerHTML=temp;
}


function make_activity() {
    var activity= document.getElementById("activity");

    var temp='<ul style="padding-bottom:5px;">';

    if(all['ACT'].length==0){
        document.getElementById("activity-block").style.display='none';
    }


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

        timePeriodStr = start+" - "+endFound;

        var x= all.ACT[i].primaryAction;
        var label, url;

        var a_or_span;

        if(x==null){

            a_or_span= '<span><strong>'+all['ACT'][i].name+'</strong></span>';
        }else{
            url=x.url;
            label=x.label;

            a_or_span= '<a href="'+url+'" data-toggle="tooltip" class="tip" title="'+label+'"><strong>'+all['ACT'][i].name+'</strong></a>';
        }


        var custom= all.ACT[i].customFieldData;
        var customf;

        if(custom==null){
            customf="";
        }else{
            customf=", "+custom.role;
        }
        temp+='<li>';
        temp+=a_or_span + customf +', '+timePeriodStr+'<br>';

        temp+=get_label(all['ACT'][i]);

        var desp= all['ACT'][i].description;
        if(desp!=null){
            temp+='<br class="fat_br">'+desp;
        }

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



        }
    }
    return ret;
}



function get_events(scheduleId) {


    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var event_create_url= "https://api.whenhub.com/api/schedules/"+scheduleId+"/events?access_token="+accessToken;
    console.log(event_create_url);


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


            // meha added sort:
            
            for(var all_it =0; all_it<6; all_it++) {
                all[def_tags[all_it]].sort(function(a,b){
                    // Turn your strings into dates, and then subtract them
                    // to get a value that is either negative, positive, or zero.
                    console.log(new Date(b['when']['startDate']) - new Date(a['when']['startDate']));
                    return new Date(b['when']['startDate']) - new Date(a['when']['startDate']);
                });
            }
            console.log("after sort:");
            console.log(all);


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





function make_social(username) {

    //  SELECT `username`, `linkedin`, `twitter`, `github`, `facebook`, `googleplus`, `skype`, `flickr`, `instagram`, `tumblr`, `youtube` FROM `social` WHERE 1

    var title = ["LinkedIn", "Twitter", "GitHub", "Facebook", "Google+", "Skype", "Flickr", "Instagram", "Tumblr", "YouTube"];
    var fa = ['linkedin', 'twitter', 'github', 'facebook', 'google-plus', 'skype', 'flickr', 'instagram', 'tumblr', 'youtube'];


    $.post("./db-app/social-from-profile.php", {

        profile: username

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

                if(ara[0][i+1].length==0 || ara[0][i+1]==null){
                    //  console.log("here");
                    continue;
                }

            temp+='<h2><a style="text-decoration: none" data-toggle="tooltip" class="tip2" href="'+
                ara[0][i+1]+'" title="'+title[i]+'"><i class="fa fa-'+fa[i] +'"></i></a></h2>';

            }

            document.getElementById("social-normal").innerHTML=temp;


            temp='';

            for(i=0;i<title.length;i++){

                console.log("social length" + ara[0][i+1].length);

                if(ara[0][i+1].length==0 || ara[0][i+1]==null){
                  //  console.log("here");
                    continue;
                }


                temp+='<a style="text-decoration: none; margin-left: 5px;" href="'+
                    ara[0][i+1]+'" title="'+title[i]+'"><i class="fa fa-'+fa[i] +'"></i></a>';

            }

            document.getElementById("social-mob").innerHTML=temp;

            $(".tip2").tooltip({placement:"right"});

        }
    });
}