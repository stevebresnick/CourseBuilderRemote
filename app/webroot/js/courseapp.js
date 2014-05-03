$(document).ready(function() {
//Session Homepage
    //alert('jquery on');
    function sessionhomepagebuttons() {
        //alert('hello');
        $('#entersessionbutton').on('click', function() {
            $('#entersessionname').removeClass('collapse');
            $('#editsession').addClass('collapse');
            $('#previewsession').addClass('collapse');
        });
        $('#editsessionbutton').on('click', function() {
            $('#editsession').removeClass('collapse');
            $('#entersessionname').addClass('collapse');
            $('#previewsession').addClass('collapse');
        });
        $('#previewsessionbutton').on('click', function() {
            $('#previewsession').removeClass('collapse');
            $('#editsession').addClass('collapse');
            $('#entersessionname').addClass('collapse');
        });
        //$("#formnames").text($('#introform').serialize());
        //$("#goalsnames").text($('#goalsform').serialize());
    }

    $('#navbar').affix({
        offset: {
            top: 100
            , bottom: function() {
                return (this.bottom = $('.bs-footer').outerHeight(true))
            }
        }
    })
    //Edit.php and Build.php
    //Navigation Buttons
    function hideSessionFormsExcept(exception) {
        $("#introcontainer, #goalscontainer, #overviewcontainer, #activitiescontainer, #discussioncontainer, #resourcescontainer").hide();
        $(exception).show();
    }
    hideSessionFormsExcept('#introcontainer');
    $('#navbuttons li').on('click', function() {
        $('#navbuttons li').removeClass('active');
        $(this).addClass('active');
        hideSessionFormsExcept($(this).attr('target'));
    });

    //introdisplay(1);

    //OVERVIEW
    //ACTIVITY
    var activitystep = 2;
    var activitynumber = 1;
    /////Add Procedure Step
    $('#addastep').on('click', function() {
        $('#activityprocedure').append('<div id="activitystep" class="col-md-12" style="margin:10px 0 10px 0;"><label class="col-md-2" for="procedure[]">Step #' + activitystep + '</label><div class="col-md-10"><input type="text" name="procedure[]" class="col-md-12"/></div></div>');
        activitystep++;
    });
    sessionhomepagebuttons();
});

function returnSessionNumber(number) {
    return(number);
}

//INTRO
function introdisplay(sessionnum) {
    $.getJSON('course.json', function(json) {
        var sessiontitle = '';
        var sessionIndex = sessionnum - 1;
        sessiontitle = json.sessions[sessionIndex].title;
        $('#sessionheading').text("Session " + sessionnum + ": " + sessiontitle + "");
        $('#sessionintro').attr('placeholder', json.sessions[sessionIndex].intro.text);
        $('#sessionquote').attr('placeholder', json.sessions[sessionIndex].intro.quote.text);
        $('#quotespeaker').attr('placeholder', json.sessions[sessionIndex].intro.quote.speaker);
        $('#quoteyear').attr('placeholder', json.sessions[sessionIndex].intro.quote.year);
    });
}
;

//GOALS
function addgoals(sessionnum) {
    $.getJSON('course.json', function(json) {
        var sessionIndex = sessionnum - 1;
        var goals = [];
        var num = json.sessions[sessionIndex].intro.goals.length;
        $.each(json.sessions[sessionIndex].intro.goals, function(i, item){
            $('#listgoals').append('<div id="goal" class="col-md-12" style="margin:10px 0 10px 0;"><label class="col-md-2" for="goal[]">Goal #'+i+'</label><div class="col-md-10"><input type="text" name="goal[]" class="col-md-12" id="eachgoal" required="true"/></div></div>');
        });
        });
    };

function goalsdisplay(sessionnum) {
    $.getJSON('course.json', function(json) {
        var sessiontitle = '';
        var sessionIndex = sessionnum - 1;
        var goals = [];
        var num = json.sessions[sessionIndex].intro.goals.length;
        for (var i = 1; i <= num; i++) {
            var minone = i - 1;
            $('#listgoals').append('<div id="goal" class="col-md-12" style="margin:10px 0 10px 0;"><label class="col-md-2" for="goal[]">Goal #' + i + '</label><div class="col-md-10"><input type="text" name="goal[]" class="col-md-12" id="eachgoal" placeholder="' + json.sessions[sessionIndex].intro.goals[minone] + '"/></div></div>');
        }
        ;
    });
}
//
//$('.hero-unit').hide();
//$('#session').show();
//Navigation Bar
/*  $('ul.nav-list li').on('click', function(){
 $('ul.nav-list li').removeClass('active');
 $(this).addClass('active');
 $('.hero-unit').hide();
 var attr = $(this).find("a[href]").attr('href');
 $(attr).show();
 $('#staticnav').removeClass('affix-top').addClass('affix');
 //.css('margin-top','600px');//.is('#activities')){
 //alert('activites');//$(this).append('<ul><li>hello</li><li>hello</li><li>hello</li></ul>');
 });
 var number = 2;*/
//var newgoal = '';//'<p class="goal" id="goal1"><label for="goal"><span style="color:white">Goal #1:</span></label><input type="text" name="goal1" id="goal"/></p>';
//Goals
/*  var goalscount = 1;
 var overviewcounter=2;
 var newoverviewp='';
 $('#addagoal').on('click', function() {
 goals();
 });
 function goals(){
 goalscount=goalscount;
 $('#listgoals').append('<div id="goal" class="col-md-12" style="margin:10px 0 10px 0;"><label class="col-md-2" for="goal[]">Goal #'+goalscount+'</label><div class="col-md-10"><input type="text" name="goal[]" class="col-md-12"/></div></div>');
 goalscount++;
 }
 });
 
 /*
 function overview(){
 overviewcounter=overviewcounter;
 newoverviewp ='<div id="overviewparagraph"><label for="overview'+overviewcounter+'">Paragraph #'+overviewcounter+':</label><div><textarea name="overviewp'+overviewcounter+'" class="span12 input-control" rows="5"></textarea></div></div>';
 overviewcounter++;
 return overviewcounter;
 return newoverviewp;
 };
 
 $('#addaparagraph').on('click', function() {
 overview();
 $('#overviewparagraphs').append(newoverviewp);
 var pcount=overviewcounter-1;
 $('.overviewhidden').html('<input type="hidden" name="overviewcount" value="'+pcount+'"/>');
 });
 
 $('#testnumbers').on('click',function(){alert($('.overview').size());});
 
 function activity(){
 $('.activityplaceholder').append('<ul><li>New Activity</li></ul>');
 };
 
 $('#addactivity').on('click', function(){
 activity(); 
 });
 
 function activitysteps(){
 $('#steps').append('<li><input type="text" class="input-control input-xxlarge" name="activityprocedure"/></li>');
 };
 
 $('#addastep').on('click', function(){
 activitysteps();
 });
 });*/


