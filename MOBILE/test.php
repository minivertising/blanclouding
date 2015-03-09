<body onLoad=CalcRemaining(document.clock) onLoad="timerONE=window.setTimeout('scrollit_r21(50)',100);">

<SCRIPT LANGUAGE="JavaScript">
<!--- hide 
var millenium = new Date("March 18, 2015 22:00:00") //이곳을 수정하면 됩니다
function CalcRemaining(theForm)
{
var now = new Date();

var difference = parseInt(((millenium.getTime() - now.getTime()) / 1000) + 0.999)
var secs = difference % 60

difference = parseInt(difference / 60)
var minutes  = difference % 60

difference = parseInt(difference / 60)
var hours  = difference % 1000000

difference = parseInt(difference / 24)
var days  = difference

theForm.txtHours.value = hours;
theForm.txtMins.value = minutes;
theForm.txtSecs.value = secs;

setTimeout("CalcRemaining(document.clock)", 250);
}
// end hiding  -->

</SCRIPT>
</HEAD>
<h4><B><font color="maroon">이벤트 참여 남은시간</B></h4></font>
<TABLE WIDTH="250" >
<FORM NAME=clock>
<TD COLSPAN=4>
<TD>
<INPUT TYPE=TEXT NAME=txtHours SIZE=4 onFocus="blur()"><BR>Hours
<TD>
<INPUT TYPE=TEXT NAME=txtMins SIZE=4 onFocus="blur()"><BR>Minutes 
<TD>
<INPUT TYPE=TEXT NAME=txtSecs SIZE=4 onFocus="blur()"><BR>Seconds
<tr align=center>

</FORM>
</TABLE>