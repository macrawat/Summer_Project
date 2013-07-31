var stateCode = {
		"ANDAMAN AND NICOBAR" : "IN-AN",
		"BIHAR" : "IN-BR",
		"MIZORAM" : "IN-MZ",
		"DAMAN AND DIU" : "IN-DD",
		"DADRA AND NAGAR HAVELI" : "IN-DN",
		"DELHI" : "IN-DL",
		"NAGALAND" : "IN-NL",
		"WEST BENGAL" : "IN-WB",
		"HARYANA" : "IN-HR",
		"HIMACHAL PRADESH" : "IN-HP",
		"ASSAM" : "IN-AS",
		"UTTARAKHAND" : "IN-UK",
		"JHARKHAND" : "IN-JH",
		"JAMMU AND KASHMIR" : "IN-JK",
		"MADHYA PRADESH" : "IN-MP",
		"UTTAR PRADESH" : "IN-UP",
		"SIKKIM" : "IN-SK",
		"CHHATTISGARH" : "IN-CT",
		"CHANDIGARH" : "IN-CH",
		"GOA" : "IN-GA",
		"GUJARAT" : "IN-GJ",
		"RAJASTHAN" : "IN-RJ",
		"MAHARASHTRA" : "IN-MH",
		"TAMIL NADU" : "IN-TN",
		"PUDUCHERRY" : "IN-PY",
		"ANDHRA PRADESH" : "IN-AP",
		"TRIPURA" : "IN-TR",
		"ARUNACHAL PRADESH" : "IN-AR",
		"KARNATAKA" : "IN-KA",
		"PUNJAB" : "IN-PB",
		"MEGHALAYA" : "IN-ML",
		"MANIPUR" : "IN-MN",
		"ODISHA" : "IN-OD",
		"ORISSA" : "IN-OD",
		"KERALA" : "IN-KL"		
};

var stateData = {};

var csv_file = 'data/datafile1.csv';
function setFocus(code) {
	 $('#india-map').vectorMap('set', 'focus', code);
}
function plotData(position) {
if(!position) position = 1;
	$('#india-map').html('');
	$.get(csv_file, function(data) {
    	var stateData = {};
        var csvcontent = $(data);
		var label ='';
		var column = '';
        var result = $.csv.toArrays(data);
        $.each( result, function( key, value ) {
			if(key == 0) {
				label = value[0];
				$(".legend").text(label);
				column = value[position];
				$("span.sliderdata").text(column);
			}
			else{
				var state_code = stateCode[value[0]];
				stateData[state_code] = parseInt(value[position]);
			}
        });
        console.log(stateData);
        $('#india-map').vectorMap({
			map : 'in_nic_en',
	        series: {
	            regions: [{
	              values: stateData,
	              scale: ['#FFFFFF', '#C8EEFF', '#C8EEEE','#0071A4'],
	              normalizeFunction: 'polynomial'
	            }]
	          },
            onRegionLabelShow: function(e, el, code){
              el.html(el.html()+'(' + label + ':' + stateData[code]+')');
            },
            onRegionClick: function(e, code){
                setFocus(code);
            }
		});
    });
}
$(document).ready(function() {
	$(".noUiSlider").noUiSlider({
        range: [1, 5]
       ,start: 1
       ,handles: 1
       ,step: 1
       ,connect: "lower"
	   ,slide: function(){
		var value = $(this).val();
		plotData(value);
		}
    }); 
    plotData(1);
});