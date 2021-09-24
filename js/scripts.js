$(function(){

	var map;
	
	function initialize() {

		//-23.157080983132012, -47.05709674435257

	  var mapProp = {
	    center:new google.maps.LatLng(-23.157080983132012,-47.05709674435257),
	    zoom:13,
	   	scrollwheel: false,
	     styles: [{
	    stylers: [{
	      saturation: -100
	    }]
	     }],
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	  };
	  
	  map=new google.maps.Map(document.getElementById("map"),mapProp);
	}

	function addMarker(lat,long,icon,content,showInfoWindow,openInfoWindow){
		  var myLatLng = {lat:lat,lng:long};

		  if(icon === ''){
			   var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon:icon
			  });
		  }else{
			  var marker = new google.maps.Marker({
			    position: myLatLng,
			    map: map,
			    icon:icon
			  });
		}

		  var infoWindow = new google.maps.InfoWindow({
	                content: content,
	                maxWidth:200
	        });

		  google.maps.event.addListener(infoWindow, 'domready', function() {

		   // Reference to the DIV which receives the contents of the infowindow using jQuery
		   var iwOuter = $('.gm-style-iw');

		   /* The DIV we want to change is above the .gm-style-iw DIV.
		    * So, we use jQuery and create a iwBackground variable,
		    * and took advantage of the existing reference to .gm-style-iw for the previous DIV with .prev().
		    */
		   var iwBackground = iwOuter.prev();

		   // Remove the background shadow DIV
		   iwBackground.children(':nth-child(2)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

		   // Remove the white background DIV
		   iwBackground.children(':nth-child(4)').css({'background' : 'rgb(255,255,255)'}).css({'border-radius':'0px'});

		   // Moves the shadow of the arrow 76px to the left margin 
			iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'display:none;'});

			// Moves the arrow 76px to the left margin 
			iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'display:none;'});

		});
		  	if(showInfoWindow == undefined){
		        google.maps.event.addListener(marker, 'click', function () {
		              infoWindow.open(map, marker);
		         });
	    	}else if(openInfoWindow == true){
	    		infoWindow.open(map, marker);
	    	}
	}

	setTimeout(function(){
		initialize();
		addMarker(-23.157080983132012,-47.05709674435257,'',"<font color='#12A0C9' size='3'><b>Best Fit Gym Centro</b></font> <br> Seg a Sex 6h às 22h | Sab das 7h às 12h",undefined,true);
		addMarker(-23.159937,-47.058831,'',"<font color='#12A0C9' size='3'><b>Academia Acqua Marine</b></font> <br> Seg a Sex 6h às 22h | Sab das 7h às 12h",undefined,true);
		addMarker(-23.136042,-47.078712,'',"<font color='#12A0C9' size='3'><b>Best Fit Gym Nova Monte Serrat</b></font> <br> Seg a Sex 7h às 9h / 15h às 21h | Sab das 8h às 10h",undefined,true);
	},1000);

});