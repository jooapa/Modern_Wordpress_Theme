//--><![CDATA[//><!--
sfHover = function() {
var sfEls = document.getElementById("hj_NavId").getElementsByTagName("LI");
for (var i=0; i<sfEls.length; i++) {
sfEls[i].onmouseover=function() {
this.className+=" sfhover";
}
sfEls[i].onmouseout=function() {
this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
}
}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

window.onscroll = function() {myFunction()};

function myFunction() {
  if (document.documentElement.scrollTop > 50) {
    document.getElementById("myP").className = "test";
    console.log("test");

  } else {
    document.getElementById("myP").className = "";
  }
}


//--><!]]>
