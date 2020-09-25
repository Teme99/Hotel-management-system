<html>
<body>
<h1>About Us</h1>
<body>
<p id="content">
<h2>Project Design and Layout</h2>
<ul>
Temesgen Techane       A/UR14517/10<br><br>
Robel Teklehaymanot    A/UR13844/10<br><br>
Abdurahman Batu        A/UR14247/10<br><br>
Mikiyas Asnake         A/UR14663/10<br><br>
Madan Bashir           A/UR14765/10<br><br>
Hailemichael Tessega   A/UR15054/10<br><br>
</ul>
<h2>Perpose</h2>
<p>This Software Is Designed project On third year of Fundamentals of Software Programming Assignment </p>
<h2>Address</h2>
<p>Adama Science And Technology University</p>
<style>
*{
background-color: silver;
margin: 10px 100px 10px 100px;
border: 3px double brown;
}
h1,h2{
text-align:center;
background-color: brown;
color: white;

}
footer{
text-align: center;
background-color: green;
font-style: bold;
font-size: 150%;
}
ul{
font-size: 150%;
font-style: italic bold;
text-align: center;
}
p{
text-align: center;
font-size: 150%;
font-style: bold;
}
</style>
</body>
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
setInterval("scrollwindow()",80)
}
window.onload=initialize
</script>
<footer>
<p>
copyright &copy; G6PLC
</p>
</footer>


</html>