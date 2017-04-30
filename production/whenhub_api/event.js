/**
 * Created by rifat on 4/26/17.
 */

var accessToken="i7LM4k7JcSKs4ucCpxpgNPcs3i1kRbNKyUE8aPGKZzZWASagz9uZiuLgmgDgBJzY";
var userid="58fa07bbc7ddaa3b7464e0aa";

function create_event(scheduleId, type) {

    NProgress.start();

    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var event_create_url= "https://api.whenhub.com/api/schedules/"+scheduleId+"/events?access_token="+accessToken;


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

    var obj = {};

    obj.when = {};
    obj.when.period = "month";

    var sm =$("#startMonth").val();
    if(sm==="00") sm="01";
    var sy = $("#startYear").val();
    if(sy==="0000") sy=new Date().getFullYear();

    obj.when.startDate = sy+ "-" +sm;

    var em =$("#endMonth").val();
    var ey = $("#endYear").val();

    if(em==="00" && ey==="0000")
        obj.when.endDate = null;
    else {
        if(em==="00") em="01";
        if(ey==="0000") ey=new Date().getFullYear();
        obj.when.endDate = ey+"-"+em;
    }

    obj.name = $("#name").val();

    var des = $("#description").val();
    if(des.length>0)
        obj.description  = des;

    var tagArr = [];
    tagArr.push("EVENT###"+type);

    var skill = $("#skill").val();
    var skillz =[];
    if(skill.length>0)
        skillz = skill.split(/[ ,]+/);

    var role = $("#role").val();
    var rolez = [];
    if(role.length>0)
        rolez = role.split(/[ ,]+/);

    var sub = $("#subject").val();
    var subz = [];
    if(sub.length>0)
        subz = sub.split(/[ ,]+/);

    var sts = $("#status").val();
    var stsz = [];
    if(sts.length>0)
        stsz = sts.split(/[ ,]+/);

    var misc = $("#misc").val();
    var miscz = [];
    if(misc.length>0)
        miscz = misc.split(/[ ,]+/);

    var TAGS = ["SKILL###", "ROLE###", "SUB###", "STS###", "MISC###"];

    var idx = 0;

    console.log(skill);
    console.log(skillz);

    for(idx=0; idx<skillz.length; idx++)
        tagArr.push(TAGS[0]+skillz[idx]);

    for(idx=0; idx<rolez.length; idx++)
        tagArr.push(TAGS[1]+rolez[idx]);

    for(idx=0; idx<subz.length; idx++)
        tagArr.push(TAGS[2]+subz[idx]);

    for(idx=0; idx<stsz.length; idx++)
        tagArr.push(TAGS[3]+stsz[idx]);

    for(idx=0; idx<miscz.length; idx++)
        tagArr.push(TAGS[4]+miscz[idx]);

    //if(tagArr.length>0)
    obj.tags = tagArr;


    if(type==="EDU") {
        var degree = $("#subtitle1").val();
        var area = $("#subtitle2").val();

        obj.customFieldData = {};
        obj.customFieldData.degree = degree;
        obj.customFieldData.area = area;
    }



    var primaryAction ={};
    primaryAction.label = $("#btn_label").val();
    primaryAction.url = $("#btn_url").val();

    if(primaryAction.label.length>0 && primaryAction.url.length>0)
        obj.primaryAction = primaryAction;

    console.log(obj);

    var jsonString= JSON.stringify(obj);

    console.log(jsonString);

    $.ajax({
        type: "POST",
        url: event_create_url,
        data: jsonString,
        contentType: "application/json",

        complete: function(xhr, statusText){
            NProgress.done();
            NProgress.remove();
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            console.log(data['id']);
            new PNotify({
                title: 'Added successfully',
                text: 'Redirecting',
                type: 'success',
                styling: 'bootstrap3'
            });
            var redir= "basic.php";
            if(type==="EDU")
                redir = "education.php";
            window.location.href = redir;
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

function get_events(scheduleId, type) {

    NProgress.start();

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

        complete: function(xhr, statusText){
            NProgress.done();
            NProgress.remove();
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            var cnt = 0;
            var body = $("#table_body");

            body.html('');

            console.log(data.length);
            for(var idx =0; idx<data.length; idx++) {
                var obj = data[idx];
                var tag = obj["tags"];
                if (!("undefined" === typeof tag)) {
                    if(tag[0]==="EVENT###"+type) {

                        cnt++;

                        var endFound = obj["when"]["endDate"];

                        var editFunc = "education_input.php?eventId="+obj["id"];
                        var delFunc = "delete_event('"+ scheduleId +"', '"+obj["id"]+"', '"+type+"')";
                        console.log(delFunc);

                        if (endFound===null)
                            endFound = "Present";

                        var row = ""+
                         "<tr>"+
                         "<td>"+cnt+"</td>"+
                         "<td><a>"+obj['name']+"</a><br /></td>"+
                         "<td><a>"+obj['when']['startDate']+" to "+endFound+"</a></td>"+
                         "<td>"+
                         "<a href='"+editFunc+"' class='btn btn-info btn-xs'><i class='fa fa-pencil'></i> Edit </a>"+
                         "<button onclick=\""+ delFunc +"\" class='btn btn-danger btn-xs'><i class='fa fa-trash-o'></i> Delete </button>"+
                         "</td>"+
                         "</tr>";

                        body.append(row);
                    }
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

    NProgress.start();

    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var getUrl = "https://api.whenhub.com/api/schedules/"+scheduleId+"/events/"+eventId+"?access_token="+accessToken;
    console.log(getUrl);

    $.ajax({
        type: "GET",
        url: getUrl,

        complete: function(xhr, statusText){
            NProgress.done();
            NProgress.remove();
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
                        if(old==="") skillBox.val(strippedTags[1]);
                        else skillBox.val(old +", "+ strippedTags[1]);
                    }
                    if(strippedTags[0]===TAGS[1]) {
                        old = roleBox.val();
                        if(old==="") roleBox.val(strippedTags[1]);
                        else roleBox.val(old +", "+ strippedTags[1]);
                    }
                    if(strippedTags[0]===TAGS[2]) {
                        old = subBox.val();
                        if(old==="") subBox.val(strippedTags[1]);
                        else subBox.val(old +", "+ strippedTags[1]);
                    }
                    if(strippedTags[0]===TAGS[3]) {
                        old = stsBox.val();
                        if(old==="") stsBox.val(strippedTags[1]);
                        else stsBox.val(old +", "+ strippedTags[1]);
                    }
                    if(strippedTags[0]===TAGS[4]) {
                        old = miscBox.val();
                        if(old==="") miscBox.val(strippedTags[1]);
                        else miscBox.val(old +", "+ strippedTags[1]);
                    }
                }
            }


            if(type==="EDU") {
                $("#subtitle1").val(obj.customFieldData.degree);
                $("#subtitle2").val(obj.customFieldData.area);
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

function update_event(scheduleId, eventId, type) {
    NProgress.start();

    //var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
    var updateUrl = "https://api.whenhub.com/api/schedules/"+scheduleId+"/events/"+eventId+"?access_token="+accessToken;

    console.log(updateUrl);

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

    var obj = {};

    obj.when = {};
    obj.when.period = "month";

    var sm =$("#startMonth").val();
    if(sm==="00") sm="01";
    var sy = $("#startYear").val();
    if(sy==="0000") sy=new Date().getFullYear();

    obj.when.startDate = sy+ "-" +sm;

    var em =$("#endMonth").val();
    var ey = $("#endYear").val();

    if(em==="00" && ey==="0000")
        obj.when.endDate = null;
    else {
        if(em==="00") em="01";
        if(ey==="0000") ey=new Date().getFullYear();
        obj.when.endDate = ey+"-"+em;
    }

    obj.name = $("#name").val();

    var des = $("#description").val();
    if(des.length>0)
        obj.description  = des;

    var tagArr = [];
    tagArr.push("EVENT###"+type);

    var skill = $("#skill").val();
    var skillz =[];
    if(skill.length>0)
        skillz = skill.split(/[ ,]+/);

    var role = $("#role").val();
    var rolez = [];
    if(role.length>0)
        rolez = role.split(/[ ,]+/);

    var sub = $("#subject").val();
    var subz = [];
    if(sub.length>0)
        subz = sub.split(/[ ,]+/);

    var sts = $("#status").val();
    var stsz = [];
    if(sts.length>0)
        stsz = sts.split(/[ ,]+/);

    var misc = $("#misc").val();
    var miscz = [];
    if(misc.length>0)
        miscz = misc.split(/[ ,]+/);

    var TAGS = ["SKILL###", "ROLE###", "SUB###", "STS###", "MISC###"];

    var idx = 0;

    console.log(skill);
    console.log(skillz);

    for(idx=0; idx<skillz.length; idx++)
        tagArr.push(TAGS[0]+skillz[idx]);

    for(idx=0; idx<rolez.length; idx++)
        tagArr.push(TAGS[1]+rolez[idx]);

    for(idx=0; idx<subz.length; idx++)
        tagArr.push(TAGS[2]+subz[idx]);

    for(idx=0; idx<stsz.length; idx++)
        tagArr.push(TAGS[3]+stsz[idx]);

    for(idx=0; idx<miscz.length; idx++)
        tagArr.push(TAGS[4]+miscz[idx]);

    //if(tagArr.length>0)
    obj.tags = tagArr;


    if(type==="EDU") {
        var degree = $("#subtitle1").val();
        var area = $("#subtitle2").val();

        obj.customFieldData = {};
        obj.customFieldData.degree = degree;
        obj.customFieldData.area = area;
    }



    var primaryAction ={};
    primaryAction.label = $("#btn_label").val();
    primaryAction.url = $("#btn_url").val();

    if(primaryAction.label.length>0 && primaryAction.url.length>0)
        obj.primaryAction = primaryAction;

    console.log(obj);

    var jsonString= JSON.stringify(obj);

    console.log(jsonString);

    $.ajax({
        type: "PUT",
        url: updateUrl,
        data: jsonString,
        contentType: "application/json",

        complete: function(xhr, statusText){
            NProgress.done();
            NProgress.remove();
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            console.log(data['id']);
            new PNotify({
                title: 'Updated successfully',
                text: 'Redirecting',
                type: 'success',
                styling: 'bootstrap3'
            });
            var redir= "basic.php";
            if(type==="EDU")
                redir = "education.php";
            window.location.href = redir;
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

function delete_event(scheduleId, eventId, type) {
    NProgress.start();
    console.log(scheduleId+" "+eventId);
    var delUrl = "https://api.whenhub.com/api/schedules/"+scheduleId+"/events/"+eventId+"?access_token="+accessToken;
    $.ajax({
        type: "DELETE",
        url: delUrl,
        complete: function(xhr, statusText){
            NProgress.done();
            NProgress.remove();
            console.log(xhr.status+" "+statusText);
        },
        success: function (data) {
            new PNotify({
                title: 'Success',
                text: 'Removed from your resume',
                type: 'success',
                styling: 'bootstrap3'
            });
            get_events(scheduleId, type);
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