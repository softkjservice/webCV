<html>
	<head>
		<title>Webslesson Demo - PHP PDO Ajax CRUD with Data Tables and Bootstrap Modals</title>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
		<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<!-- <script src="js/table.js"></script> -->
		<script src='js/table.js'></script>
		<script src='js/ap01.js'></script>
	
		<!-- <script src='js/ap01.js'></script>  -->
		<!-- <link rel="stylesheet" href="css/jquery.dataTables.min.css"/>	 -->
		<link rel="stylesheet" href="css/fontello.css" type="text/css" />
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
		<link rel="stylesheet" href="css/mobil.css"/>	
		<link rel="stylesheet" href="css/pom.css"/>	
		<link rel="stylesheet" href="css/main.css"/>	
		<link rel="stylesheet" href="css/kj.css">
<style>

</style>

</head>

<body>


	<div class="container-fluid">
	
		<div class="row">
		
			<div id="div00" class="menu">
				<div class="div_black col-sm-6 col-md-12" id="divBack">
					<br>
				</div>
				<button id="bt01" class="btn01">&nbsp Home &nbsp </button>
				<button id="bt02" class="btn01">&nbsp Projekty &nbsp </button>
				<button id="bt03" class="btn01">&nbsp Zainteresowania &nbsp </button>
				<div class="col-sm-6 col-md-12 div_black">
					<br>
			    </div>
			</div>
			
			
		</div>
	 
		
		
		<div class="row" id="div001">
			
		
			<div class=" fotka col-sm-4 col-md-4 lewa">
				
				<img src="img/krzysztof_jaworski.PNG" alt="Krzysztof Jaworski" width="100%" >
				<br>
				
			</div>
			<div class="col-sm-6 col-md-8 tytul">
				
				<h1>webCV<br>mgr inż.&nbsp&nbsp
				<span class="tytul"><b>Krzysztof Jaworski</b></span><br>
				Software Developer</h1>
				<hr>
				<h2>Tel. 604 219 784</h2>
				
				
			</div>
		</div>
		
		<div class="opis" id="divOpis">
			
		</div>
		
		<div class="row" id="divExitOpis">
			<button id="btnExitOpis" class="btn01"> &nbsp&nbsp<< Back </button>
		</div>
		
		<div class="row"  id="div01">
			<div class=" fotka col-sm-4 col-md-4 lewa">
				
				<img src="img/krzysztof_jaworski.PNG" alt="Krzysztof Jaworski" width="100%" >
				<br><br>
				Programowanie:<br>
				
				&nbsp&nbsp<i class="icon-ok"></i> PHP<br>
				&nbsp&nbsp<i class="icon-ok"></i> SQL<br>
				&nbsp&nbsp<i class="icon-ok"></i> Javascript<br>
				 &nbsp &nbsp&nbsp&nbsp<i class="icon-ok-circle"></i> jQuery<br>
				 &nbsp &nbsp&nbsp&nbsp<i class="icon-ok-circle"></i> Bootstrap<br>
				 &nbsp &nbsp&nbsp&nbsp<i class="icon-ok-circle"></i> ajax<br>
				&nbsp&nbsp<i class="icon-ok"></i> HTML<br>
				&nbsp&nbsp<i class="icon-ok"></i> css<br>
				&nbsp&nbsp<i class="icon-ok"></i> c#<br>
				&nbsp&nbsp<i class="icon-ok"></i> Gosu<br>
				&nbsp&nbsp<i class="icon-ok"></i> Kotlin<br>
				&nbsp&nbsp<i class="icon-ok"></i> Clipper<br>
				<br><br>
				Znajomość języka:<br>
				&nbsp&nbsp<i class="icon-ok"></i> Angielski: podstawowy<br>
				&nbsp&nbsp<i class="icon-ok"></i> Rosyjski:  podstawowy<br>
				<br><br>
				Referencje:<br>
				&nbsp&nbsp<i class="icon-ok"></i> IT Solutions<br>
				<br><br>
				
			</div>
			  <div class="col-sm-6 col-md-8 tytul">
				
				<h1>webCV<br>mgr inż.&nbsp&nbsp
				<span class="tytul"><b>Krzysztof Jaworski</b></span><br>
				Software Developer</h1>
				<hr>
				
				<div class="left">
					
					<h1><b>KONTAKT</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
				<div class="left">
					
					<h1><b>O mnie</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
				<div class="left">
					
					<h1><b>Umiejętności</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
				<div class="left">
					
					<h1><b>Doświadczenie</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
				<div class="left">
					
					<h1><b>Wykształcenie</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
				<div class="left">
					
					<h1><b>ADRES</b></h1>
					<h2><i class="icon-phone"></i>&nbsp +48 604 219 784</h2>
					<h2><i class="icon-mail"></i>&nbsp krzysztof.jaworski@softcenter.eu</h2>
					<hr>
				</div>
				
			</div>
		</div>
		
		
		
		
		<div clacc="row" id="div02">
			
				<table id="example" class="display "  style="width:100%">
					<!-- <table id="example" class="display nowrap " style="width:100%">  -->
			        <thead>
			            <tr>
			                <th>Nr</th>
			                <th>Produkt</th>
			                <th>Edit</th>
			            </tr>
			        </thead>
		       
		    	</table>
	    	
	    </div>
	    
	    <div id="div03">
	    	<h1>Stopka</h1><br><br><br>
	    </div>

	</div>
</body>
	
</html>

<!--<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
		<script src="https://www.ihbc.org.uk/consultationsdb_new/media/js/jquery.dataTables.js"></script>  -->
