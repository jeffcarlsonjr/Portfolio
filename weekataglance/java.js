// JavaScript Document


function showonlyone(thechosenone) {
     $('div[name|="mid"]').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).show('fast');
          }
          else {
               $(this).hide('');
          }
     });
}


function showOnlyMidOne(theChosenOne) {
     $('div[name|="bottomw"]').each(function(index) {
          if ($(this).attr("id") == theChosenOne) {
               $(this).show('');
          }
          else {
               $(this).hide('');
          }
     });
}
function hide(theChosenOne) {
     $('div[name|="bottomw"]').each(function(index) {
          if ($(this).attr("id") == theChosenOne) {
               $(this).hide('');
			   location.reload();
          }
          
     });
}
function show(theChosenOne){
	$('div[name|="mid"]').each(function(index){
		if($(this).attr("id") == theChosenOne){
			$(this).show('');
			}
		})
	$('div[name|="bottom"]').each(function(index){
		$(this).hide('');
			
		})
	}
function RGBA(red,green,blue,alpha) {
	this.red = red;
	this.green = green;
	this.blue = blue;
	this.alpha = alpha;
	this.getCSS = function() {
		return "rgba("+this.red+","+this.green+","+this.blue+","+this.alpha+")";
	}
} 

function changeBG(id1,id2,id3,id4,id5,id6){
var bgColor = new RGBA(0,0,0,0.08);
	if(id1 == 'sunday'){
		document.getElementById(id1).style.backgroundColor = new RGBA(150,68,123,.20).getCSS();
		document.getElementById(id1).style.color = new RGBA(150,68,123,.40).getCSS();
		}
	if(id2 == 'monday'){
		document.getElementById(id2).style.backgroundColor = new RGBA(0,92,153,.20).getCSS();
		document.getElementById(id2).style.color = new RGBA(0,92,153,.40).getCSS();
		}
	if(id3 == 'tuesday'){
		document.getElementById(id3).style.backgroundColor = new RGBA(142,191,64,.20).getCSS();
		document.getElementById(id3).style.color = new RGBA(142,191,64,.40).getCSS();
		}
	if(id4 == 'wednesday'){
		document.getElementById(id4).style.backgroundColor = new RGBA(136,193,218,.20).getCSS();
		document.getElementById(id4).style.color = new RGBA(136,193,218,.40).getCSS();
		}
	if(id5 == 'thursday'){
		document.getElementById(id5).style.backgroundColor = new RGBA(142,133,122,.20).getCSS();
		document.getElementById(id5).style.color = new RGBA(142,133,122,.40).getCSS();
		}
	if(id6 == 'friday'){
		document.getElementById(id6).style.backgroundColor = new RGBA(238,150,27,.20).getCSS();
		document.getElementById(id6).style.color = new RGBA(238,150,27,.40).getCSS();
		}
} 