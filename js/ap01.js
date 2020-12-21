$(document).ready(function(){
	$("#div01").show();
	$("#div001").hide();
	$("#div02").hide();
	$("#div03").hide();
	$("#divOpis").hide();
	$("#divExitOpis").hide();
	
	$("#bt01").click(function(){
		  $("#div01").show();
		  $("#div02").hide();
		  $("#div03").hide();
		  $("#div001").hide();
		  $("#divOpis").hide();
	      $("#divExitOpis").hide();
		});
	$("#bt02").click(function(){
		  $("#div001").show();
		  $("#div02").show();
		  $("#div01").hide();
		  $("#div03").hide();
			$("#divOpis").hide();
			$("#divExitOpis").hide();
	});
	$("#bt03").click(function(){
		  $("#div001").show();
		  $("#div03").show();
		  $("#div01").hide();
		  $("#div02").hide();
			$("#divOpis").hide();
			$("#divExitOpis").hide();
			
	});
	$("#btnExitOpis").click(function(){
		  $("#divOpis").hide();
		  $("#divExitOpis").hide();
		  $("#div00").show();
		  $("#div001").show();
		  $("#div02").show();
	});
	
})



/*$(document).ready(function(){
	$divShow01=false;
	$divShow02=false;
	$divShow03=false;
	$("#div01").hide();
	$("#div02").hide();
	$("#div03").hide();
	
	
	$("#bt01").click(function(){
		if ($divShow01==true){
			$divShow01=false;
			$("#div01").hide();
		}else{
			$divShow01=true;
			$("#div01").show();
		}	
		});
	
	$("#bt02").click(function(){
		if ($divShow02==true){
			$divShow02=false;
			$("#div02").hide();
		}else{
			$divShow02=true;
			$("#div02").show();
		}	
		});
	
	$("#bt03").click(function(){
		if ($divShow03==true){
			$divShow03=false;
			$("#div03").hide();
		}else{
			$divShow03=true;
			$("#div03").show();
		}	
		});

})
*/


