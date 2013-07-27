var x=document.getElementById("loc");
$(window).load(function () {
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
		//$("#result").html("<p> "+city+", "+state+" </p>");
		
		document.myform.state.value=state;
		document.myform.city.value=city;
		
		$.post('php/test_basic.php', {state: state, city: city}, function(data){
			$('#write').append(data);
			});
	       }
     }
   });
 });
});


