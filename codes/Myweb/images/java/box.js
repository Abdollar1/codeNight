
    
var start = new Date().getTime();
function getRandomColor(){
var letters = '012356789ABCDEF'.split('');
var color = '#';
for(var i = 0; i < 6; i++){
color += letters[Math.floor(Math.random() * 16)];
}
return color;


}

function makeShapeAppear(){
  var top = (Math.random() * 500);
  var left = (Math.random()* 500);
  var width= (Math.random()* 200)+100;


  if(Math.random() > 0.60){

    document.getElementById("shape").style.borderRadius = "50%";
  }
  else {
    document.getElementById("shape").style.borderRadius = "0%";
  }
    document.getElementById("shape").style.backgroundColor = getRandomColor();
    document.getElementById("shape").style.top = top + "px";
    document.getElementById("shape").style.left = left + "px";
    document.getElementById("shape").style.width = width + "px";
    document.getElementById("shape").style.height = width + "px";

  start = new Date().getTime();
  document.getElementById("shape").style.display = "block";
  
  

}


 function appearafterdelay(){
  setTimeout(makeShapeAppear, Math.random() * 2000);


 }

 appearafterdelay();
document.getElementById("shape").onclick = function(){

document.getElementById("shape").style.display = "none";
var end = new Date().getTime();
var timetaken = ((end-start)/10000);
document.getElementById("timetaken").innerHTML = timetaken +"s";

if(timetaken < 0.1){

  document.getElementById("messages").innerHTML = "well done";
}
else{
  document.getElementById("messages").innerHTML = "speed up";
}

appearafterdelay();
}

