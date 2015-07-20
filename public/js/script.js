// Jayesh javascript Document

$( document ).ready(function() {
    
    $('#showGame').click(function(){

		$('#backpanel').hide();
		$('#frontpanel').show();	

	
		for (var i = 1; i < 17; i++) {

			$('#f_Letter_'+i).html($('#Letter_'+i).val());
			$('#f_Points_'+i).html($('#Points_'+i).val());
			$('#f_Rewards_'+i).html($('#Rewards_'+i).val());	

			if($('#Rewards_'+i).val())
			{
				//alert($('#Rewards_'+i).val());
				$('#f_Rewards_'+i).removeAttr("style");
				$('#f_Rewards_'+i).attr( "class", "Special orange" );
				//$('#f_Rewards_'+i).removeAttr("style");
			}
			
		};


	});
	
	$('#showSetting').click(function(){
		
		$('#ouputpanel').show();
		$('#frontpanel').hide();	

	//console.log($(f_Letter_1).html());
	
		//var ruzzle = new Array();
		var letter = [];
		var points = [];
		var rewards = [];
	
		for (var i = 1; i < 17; i++) {
		
			letter[i] = $('#f_Letter_'+i).html();
			points[i] = $('#f_Points_'+i).html();
			rewards[i] = $('#f_Rewards_'+i).html();
			
		};

		 $('#ouputpanel').html("<div align='center' style='position:absolute; top : 50%; left:50%;'><img src='loader.gif'></div>");	
		$.ajax({
			  type: "POST",
			  data: {letter:letter, points:points, rewards:rewards},
			  url: "show.php",
			  success: function(msg){
			    //$('#ouputpanel').html("<div id='output'>"+msg+"</div><br /><div align='center'><div align='center' id='back' class='btn-danger'>Back</div><div id='download' class='btn-danger'>Download</div></div>");
			    $('#ouputpanel').html("<div id='output'>"+msg+"</div><br /><div align='center'><button  type='submit' id='back' class='btn btn-default' style='background:#bf360c; border:0px; color:#FFFFFF'><strong>Back</strong></button><button type='submit' class='btn btn-default' id='downloadText' style='background:#bf360c; border:0px; color:#FFFFFF'><strong>Download Text</strong></button><button type='submit' class='btn btn-default' id='downloadCsv' style='background:#bf360c; border:0px; color:#FFFFFF'><strong>Download CSV</strong></button></div>");
			  }

		});

		//console.log(ruzzle);
		//data1 = JSON.stringify(ruzzle);
		//console.log(data_to_send);
		/*
		$.ajax({
			url: "show.php",
			type: 'POST',
			contentType: "application/json",
			dataType: 'json',
			//data: "action=getDistrictsFromGeo&getdata="+ruzzle,
			data: {myJson:  data1},
			//data: {ruzzle:ruzzle},
			success: function(data2) {
				console.log(data2);
				alert(data2);
				
				
			},
			error: function(xhr, type, exception) { 
			   //alert("ajax error response type "+type);
			 }
			
			
		   });
*/
	});



	$("body").on('click','#back',function(argument) {
		$('#frontpanel').show();
		$('#ouputpanel').hide();
	});

	$("body").on('click','#downloadText',function(argument) {
		$.ajax({
			url:"download.php",
			data: "action=text",
			type:"post",
			success:function(msg){
				console.log(msg);
				alert('downloaded SuccessFully'+'                                                         File name is:  '+msg);
			}
		});
	});

	$("body").on('click','#downloadCsv',function(argument) {
		$.ajax({
			url:"download.php",
			data: "action=csv",
			type:"post",
			success:function(msg){
				console.log(msg);
				//alert('downloaded SuccessFully'+'                                                         File name is:  '+msg);
			}
		});
	});
});