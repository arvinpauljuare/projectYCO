$(function(){
	var baseURL = document.getElementById('constant_url').value;
	$('#residentialYDProjContainer').hide();
	$('#retailYDProjContainer').hide();
	$('#officeYDProjContainer').hide();

	//INITIAL LOAD
	$('#officeYDProjContainer').hide();
		$('#retailYDProjContainer').hide();
		$('#residentialYDProjContainer').show();
		$('#residentialYDProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_design', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'residential'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubResYD" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/residential/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	//END OF INTIAL LOAD
	
	$('#residentialProjYD').click(function(){
		$('#officeYDProjContainer').hide();
		$('#retailYDProjContainer').hide();
		$('#residentialYDProjContainer').show();
		$('#residentialYDProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_design', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'residential'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubResYD" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/residential/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubResYD', function(event) {
		$('#officeYDProjContainer').hide();
		$('#retailYDProjContainer').hide();
		$('#residentialYDProjContainer').show();
		$('#residentialYDProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_design', 
	        	   'column': 'group',
	        	   'identifier': 'ycodesign',
	        	   'column2': 'subgroup',
	        	   'identifier2': 'residential',
	        	   'column3': 'projectName',
	        	   'identifier3': $(this).attr('value')},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/residential/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});

	//OFFICES
	$('#officeProjYD').click(function(){
		$('#residentialYDProjContainer').hide();
		$('#retailYDProjContainer').hide();
		$('#officeYDProjContainer').show();
		$('#officeYDProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_design', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'offices'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubOffYD" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/offices/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#officeYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubOffYD', function(event) {
		$('#residentialYDProjContainer').hide();
		$('#retailYDProjContainer').hide();
		$('#officeYDProjContainer').show();
		$('#officeYDProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_design', 
	        	   'column': 'group',
	        	   'identifier': 'ycodesign',
	        	   'column2': 'subgroup',
	        	   'identifier2': 'offices',
	        	   'column3': 'projectName',
	        	   'identifier3': $(this).attr('value')},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/offices/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#officeYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});

	//RETAIL
	$('#retailProjYD').click(function(){
		$('#residentialYDProjContainer').hide();
		$('#officeYDProjContainer').hide();
		$('#retailYDProjContainer').show();
		$('#retailYDProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_design', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'retail'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubRetYD" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						if(response[i]['projectName'] == 'M+Y STORE ROBINSONS FORUM' || response[i]['projectName'] == 'M+Y ROBINSONS OTIS')
						{
							var specialName = 'MY '+response[i]['projectName'].substring(4, response[i]['projectName'].length);
							content += '<img class="" src="'+baseURL+'img/ycodesign/retail/'+specialName+' 1.png" height="100%" width="100%">';
						} else {
							content += '<img class="" src="'+baseURL+'img/ycodesign/retail/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						}
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#retailYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubRetYD', function(event) {
		$('#residentialYDProjContainer').hide();
		$('#officeYDProjContainer').hide();
		$('#retailYDProjContainer').show();
		$('#retailYDProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_design', 
	        	   'column': 'group',
	        	   'identifier': 'ycodesign',
	        	   'column2': 'subgroup',
	        	   'identifier2': 'retail',
	        	   'column3': 'projectName',
	        	   'identifier3': $(this).attr('value')},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px">';
						content += '<img class="" src="'+baseURL+'img/ycodesign/retail/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#retailYDProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});
});