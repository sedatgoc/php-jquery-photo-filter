/*
		Author = Sedat Göç
		Description : Crop and Filter Image use PHP and JQuery
		Author Mail : sedatgoc34@gmail.com
		Version : 1.0

		imgareaselect javascript plugin made by odyniec.net (contact : odyniec@odyniec.net)
*/


$(document).ready(function(){

  	/*################################
		!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

		gelencevap is Turkish sentence.
		gelencevap means is like returnData

		imageS is imageSource
		imageT is imageThumbnail
		imageF is imageFiltered

		!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  	#################################*/

	

	var fileName = "userName"+new Date().getTime(); // for new filter image name
	$("#filters").hide(); // hide filter list
	$("#imageT").hide();  // hide imageThumbnail image
	$("#completed").hide();  // hide completed box
	var x = 0; // for selected area start x
	var y = 0; //  for selected area start y
	var width = 0; // for selected area width
	var height = 0; // for selected area height 
	var img = $("#imageS").attr("src"); // get image from imageS div
	
	/*						
		
		http://odyniec.net/projects/imgareaselect/usage.html

	*/
	 $('#imageS').imgAreaSelect({

	 	aspectRatio: '1:1', 
	 	handles: true ,
        onSelectChange: function (img, selection) {
        	x = selection.x1;
        	y = selection.y1;
        	width = selection.width;
        	height = selection.height;      
        }
    });

	 /*
		check crop area width under 200
	 */

	 $("#crop").click(function(){
	 		if(width>=200){
	 			var sWidth = $("#imageS").width();
	 			var sHeight = $("#imageS").height();
        		$.ajax({
                  type: "POST",
                  url: "tool/crop.php",
                  data:{x:x,y:y,width:width,height:height,img:img,sWidth:sWidth,sHeight:sHeight},
                  success: function(gelencevap){ 
                  	 	$('#imageS').imgAreaSelect({
                  	 			remove:true
					    });
					    $(".panel-title").html("Select Filter");
					    $("#imageS").hide();// hide imageS div
					    $("#crop").hide();// hide crop button
						$('#imageT').show(); // show imageT div
						$("#filters").show(); // show filter list
                    	$("#imageT").attr("src",gelencevap);
                    }
                  });
	 		}
		 	else
		 	{
		 		alert("Please select.(min width 200px)");
		 	}
	 	});


	 	$("#imageF").hide(); // hide filtered image
	 	$("#filters img").click(function(){
	 		var filterId = $(this).attr("data"); // get filter number
	 		var imgF = $("#imageT").attr("src"); // get cropped image
	 		$("#imageT").hide(); // hide imageThumbnail image
	 		$("#imageF").show(); // show filtered image
	 		$.ajax({
                  type: "POST",
                  url: "tool/filter.php",
                  data:{filterId:filterId,imgF:imgF,fileName:fileName},
                  success: function(gelencevap){ 
                  	 	$("#imageF").attr("src",gelencevap+"?"+new Date().getTime());
                    }
                  });
	 	});


	 	 $("#save").click(function(){

	 			var cropImage = $("#imageT").attr("src");
	 			var hashImage = $("#imageF").attr("src");
        		$.ajax({
                  type: "POST",
                  url: "tool/save.php",
                  data:{cropImage:cropImage,hashImage:hashImage,fileName:fileName},
                  success: function(gelencevap){ 
                  		$(".panel-title").html("Image has been saved.");
					    $("#imageF").hide();// hide imageF div
					    $("#save").hide();// hide crop button
						$('#filters').hide();// hide filters
						$("#imageC").attr("src",gelencevap);
						$("#imageLinks").attr("value",gelencevap);
						$("#completed").show(); // completed box show
                    }
                  });
	 	});

});