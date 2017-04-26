/**
 * Created by rifat on 4/26/17.
 */

var accessToken="i7LM4k7JcSKs4ucCpxpgNPcs3i1kRbNKyUE8aPGKZzZWASagz9uZiuLgmgDgBJzY";
var userid="58fa07bbc7ddaa3b7464e0aa";

function create_event() {

    NProgress.start();

    var scheduleId = "58fa07bbc7ddaa3b7464e0ac";
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
    else
        obj.when.endDate = ey+"-"+em;

    obj.name = $("#name").val();

    var des = $("#description").val();
    if(des.length>0)
        obj.description  = des;

    var tagArr = [];

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

    if(tagArr.length>0)
        obj.tags = tagArr;

    //obj.customFieldData = {};
    //obj.customFieldData.type = "EDU";
    //obj.customFieldData.cg = "4.0";

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
                title: 'Event added successfully',
                text: 'Redirecting',
                type: 'success',
                styling: 'bootstrap3'
            });
            window.location.href = "event_list.php";
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