$(document).ready(function() {
   var table = $('#example').DataTable( {
    	
    	//"scrollY":        "900px", //przewijanie w pionie
    	//"scrollX": true,  //przewijanie w poziomie
	    //"scrollCollapse": true,
	       // "paging":   true,
	       // "ordering": true,
	       // "info":     false,
        //"order": [[ 3, "desc" ]] odwrotna kolejność
        	//"order": [[ 0, "asc" ]],  //alfabetycznie
        
        //"processing": true,
        //"serverSide": true,
        "ajax": 'arrays.txt', // dane pobierane z pliku tekstowego
        //"ajax": "towFetch.php",
        
        "columnDefs": [{   /* changed this */
            "data": "Nr"
          }, {
            "data": "Produkt"
          },{
        	  "targets": -1, "data": null, "defaultContent": "<button class='btnTable'> Więcej >> </button>"
          },
          {
              targets: [ 0 ],
              visible: false  //nie wyświetma ale wyszukuje 
          }
          ]
   
      
      /*  "columns": [
            { "data": "nazwa" },
            { "data": "indeks" },
            { "data": "ilosc" },
            { "data": "jm" },
            { "data": "cena" },
            { "data": "kod" },
            { "targets": -1, "data": null, "defaultContent": "<button class='btnTable'> Click! </button>"
        }
        ],*/
        
       /* columnDefs: [ {
            targets: [ 0 ],
            orderData: [ 0, 1 ]  //sortuje w pierwszej kolejności po kol.0 potem kol.1
        },
        {
            targets: [ 2 ],
            searchable: false //nie wyszukuje po tej kolumnie
        },
        {
            targets: [ 3 ],
            //visible: false  //nie wyświetma ale wyszukuje 
        }
        ]*/
        
        
	    	    
    } );
    
    //$('#example tbody').css("background-color", "red");
    
   $('#example tbody').on( 'click', 'button', function () {
	   	$("#div00").hide();
	   	$("#div001").hide();
		$("#div01").hide();
		$("#div02").hide();
		$("#div03").hide();
		$("#prod01").hide();
		$("#prod02").hide();
		$("#prod03").hide();
		
			
		
	   var opis="";	
	   var opis1="";
       var data = table.row( $(this).parents('tr') ).data();
       //if(data[0]=='1'){$("#prod01").show()}
       if(data[0]=='1'){opis="opis/oprogramowanieDlaFirm.php"}
       if(data[0]=='2'){opis="opis/ksiegaPiR.php"}
       if(data[0]=='3'){opis="opis/listaPlac.php"}
       if(data[0]=='4'){opis="opis/jpkVAT.php"}
       if(data[0]=='5'){opis="opis/ListaTowarow.php"}
       if(data[0]=='6'){opis="opis/iluobiznes_pl.php"}
       if(data[0]=='7'){opis="opis/webcv.php"}
       if(data[0]=='8'){opis="opis/ulubioneSklepy.php"}
       if(data[0]=='9'){opis="opis/iluoOpis.php"}
       if(data[0]=='10'){opis="opis/kolektorDanych.php"}
       if(data[0]=='11'){opis="opis/iluokonwerter.php"}
       if(data[0]=='12'){opis="opis/programHandlowy.php"}
       if(data[0]=='13'){opis="opis/magazyn.php"}
       if(data[0]=='14'){opis="opis/produkcja.php"}
       if(data[0]=='15'){opis="opis/analizaProdukcji.php"}
       if(data[0]=='16'){opis="opis/delegacja.php"}
       
       
       //if(data[0]=='3'){window.location.href = "opis/webCV.php"}
       //if(data[0]=='3'){window.open('opis/opis03.php', '_blank');}
       
       $.ajax({
		    method: "POST",
		    url: opis,
				success: function(response) 
				{
					$("#divOpis").html(response); 
					$("#divOpis").show();
					$("#divExitOpis").show();
				}
		});	
       //alert( data[0] +"'to "+ data[1] );
   } );
    
} );