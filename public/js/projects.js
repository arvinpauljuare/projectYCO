$(function(){
	var baseURL = document.getElementById('constant_url').value;
	$('#residentialProjContainer').hide();
	$('#retailProjContainer').hide();
	$('#officeProjContainer').hide();

	//INTIAL LOAD
		$('#officeProjContainer').hide();
		$('#retailProjContainer').hide();
		$('#residentialProjContainer').show();
		$('#residentialProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_optimum', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'residential'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubRes" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/optimum/residential/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	//END OF INTIAL LOAD
	
	$('#residentialProjOpt').click(function(){
		$('#officeProjContainer').hide();
		$('#retailProjContainer').hide();
		$('#residentialProjContainer').show();
		$('#residentialProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_optimum', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'residential'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubRes" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/optimum/residential/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubRes', function(event) {
		$('#officeProjContainer').hide();
		$('#retailProjContainer').hide();
		$('#residentialProjContainer').show();
		$('#residentialProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_optimum', 
	        	   'column': 'group',
	        	   'identifier': 'optimum',
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
						content += '<img class="" src="'+baseURL+'img/optimum/residential/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#residentialProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});

	//OFFICES
	$('#officeProjOpt').click(function(){
		$('#residentialProjContainer').hide();
		$('#retailProjContainer').hide();
		$('#officeProjContainer').show();
		$('#officeProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_optimum', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'offices'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubOff" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						content += '<img class="" src="'+baseURL+'img/optimum/offices/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#officeProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubOff', function(event) {
		$('#residentialProjContainer').hide();
		$('#retailProjContainer').hide();
		$('#officeProjContainer').show();
		$('#officeProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_optimum', 
	        	   'column': 'group',
	        	   'identifier': 'optimum',
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
						content += '<img class="" src="'+baseURL+'img/optimum/offices/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#officeProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});

	//RETAIL
	$('#retailProjOpt').click(function(){
		$('#residentialProjContainer').hide();
		$('#officeProjContainer').hide();
		$('#retailProjContainer').show();
		$('#retailProjContainer').empty();
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/groups",
	        data: {'tableName': 'yco_optimum', 
	        	   'groupBy': 'projectName',
	        	   'column': 'subgroup',
	        	   'identifier': 'retail'},
	        success: function(response) {
	        	console.log(response);
	        	var content = '';
	        		content += '<div class="row text-center">';
					
					for (var i=0; i<response.length; i++) {
						content += '<div class="col-md-4" style="margin-top: 50px; height: 250px;">';
						content += '<a href="#" class="linkToSubRet" style="text-decoration: none; color: black;" value="'+response[i]['projectName']+'">';
						if(response[i]['projectName'] == 'M+Y STORE ROBINSONS FORUM' || response[i]['projectName'] == 'M+Y ROBINSONS OTIS')
						{
							var specialName = 'MY '+response[i]['projectName'].substring(4, response[i]['projectName'].length);
							content += '<img class="" src="'+baseURL+'img/optimum/retail/'+specialName+' 1.png" height="100%" width="100%">';
						} else {
							content += '<img class="" src="'+baseURL+'img/optimum/retail/'+response[i]['projectName']+' 1.png" height="100%" width="100%">';
						}
						content += response[i]['projectName'];
						content += '</a>';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#retailProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
	    });
	});

	$(document).on('click', '.linkToSubRet', function(event) {
		$('#residentialProjContainer').hide();
		$('#officeProjContainer').hide();
		$('#retailProjContainer').show();
		$('#retailProjContainer').empty();
		
		$.ajaxSetup({
	        headers: {
	        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });

	    $.ajax({
	        method: 'GET',
	        url: baseURL+"get/images",
	        data: {'tableName': 'yco_optimum', 
	        	   'column': 'group',
	        	   'identifier': 'optimum',
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
						content += '<img class="" src="'+baseURL+'img/optimum/retail/'+response[i]['image']+'" height="100%" width="100%">';
						content += '</div>';
					}
					
					
					content += '</div>';
				$('#retailProjContainer').append(content);
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	        	console.log(JSON.stringify(jqXHR));
	        	console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
	        }
		});
	});
});