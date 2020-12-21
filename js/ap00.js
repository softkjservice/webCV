$(document).ready(function(){
	$("#div01").hide();
	$("#div02").hide();
	$("#div03").hide();
	$("#bt01").click(function(){
		  $("#div01").show();
		  $("#div02").hide();
		  $("#div03").hide();
		});
	$("#bt02").click(function(){
		  $("#div02").show();
		  $("#div01").hide();
		  $("#div03").hide();
	});
	$("#bt03").click(function(){
		  $("#div03").show();
		  $("#div01").hide();
		  $("#div02").hide();
	});
})


/*
$(document).ready(function(){
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