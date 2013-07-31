google.maps.event.addDomListener(window, 'load', function () {
	if(!navigator.geolocation) return;
	navigator.geolocation.getCurrentPosition(function(pos) {
		geocoder = new google.maps.Geocoder();
		var latlng = new google.maps.LatLng(pos.coords.latitude,pos.coords.longitude);
		geocoder.geocode({'latLng': latlng}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
		var result = results[0];
		var city = "";
		var state = "";
		for(var i=0, len=result.address_components.length; i<len; i++) {
		var ac = result.address_components[i];
		if(ac.types.indexOf("administrative_area_level_2") >= 0) city = ac.long_name;
		if(ac.types.indexOf("administrative_area_level_1") >= 0) state = ac.long_name;
		}
		if(city != '' && state != '') {
		var status= confirm("Welcome! to Crop Information System \n\n"+"Your location has been recorded as "+city+" ("+state+")"+"\n\n\n\n\n\n\n\n\n\nNot at "+city+" ("+state+") ?"+"\n\nplease click on cancel and enter your location manually");
		if(status){
			alert("Thank You !\n"+" ")
		}
		else{
		//	pincode=prompt("Enter your pincode (optional)");
			state=prompt("Please enter Your State name");
			city=prompt("Please enter Your City name");
			alert("Thank You ! Your new location has been recorded as "+city+" ("+state+")");
		}
               
			
		$.post('php/test_basic.php', {state: state, city: city}, function(data){
		//	alert(data);
			$('#crop_image').append(data);
			});
		}
     }
   });
 });
});


