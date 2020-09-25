<script language="JavaScript1.2">

/*
Advanced window scroller script-
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScripts here!
*/

var currentpos=0,alt=1,curpos1=0,curpos2=-1
function initialize(){
startit()
}
function scrollwindow(){
if (document.all)
temp=document.body.scrollTop
else
temp=window.pageYOffset
if (alt==0)
alt=1
else
alt=0
if (alt==0)
curpos1=temp
else
curpos2=temp
if (curpos1!=curpos2){
if (document.all)
currentpos=document.body.scrollTop+1
else
currentpos=window.pageYOffset+1
window.scroll(0,currentpos)
}
else{
currentpos=0
window.scroll(0,currentpos)
}
}
function startit(){
setInterval("scrollwindow()",10)
}
window.onload=initialize
</script>