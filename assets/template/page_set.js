 

window.addEventListener('load', function(){
 if(localStorage.getItem("dyke") !== null) {
   $('#ShowPage').load(localStorage.getItem("dyke"));
    }else{ 
     localStorage.setItem("dyke", "home.php");
     $('#ShowPage').load(localStorage.getItem("dyke"));
    }
});


$(".bulletinLink").click(function() {
    var clickedId = $(this).attr("id");
    localStorage.setItem("dyke", clickedId);
    $('#ShowPage').load(clickedId);
    //console.log(clickedId);
});


window.history.pushState({page: 5}, "", "");
window.onpopstate = function(event) {
  if(event){
  	localStorage.setItem("dyke", "home.php");
    $('#ShowPage').load(localStorage.getItem("dyke"));
  }
  else{
    //alert('click 22')
  }
}


///////ACCOUNT PAGE//////////
$(".invoiceLink").click(function() {
var elementId = $(this).attr("id");
localStorage.setItem("dyke", elementId);
$('#ShowPage').load(elementId);
//console.log(elementId)
});
