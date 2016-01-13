<html>
<head>
  <title>Crop and Filter</title>
  <meta charset="utf-8">
  <!--    
  Author = Sedat Göç
  Description : Crop and Filter Image use PHP and JQuery
  Author Mail : sedatgoc34@gmail.com
  Version : 1.0    

  -->


  <meta name=viewport content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/site.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <script type="text/javascript" src="js/jquery.imgareaselect.min.js"></script>
  <link rel="stylesheet" href="css/imgareaselect-default.css" type="text/css" />
</head>
<body>
        <div class="container">
		      <nav class="navbar navbar-default">
            <div class="container-fluid">
	            <div class="navbar-header">
	              <a class="navbar-brand" href="">Crop and Filter</a>
	            </div>
	          </div>
	        </nav>
  	       <div id="image" class="row" style="margin-top:60px;">
              <div class="col-sm-7 col-sm-offset-2">
                <div class="panel panel-default">
                  <div class="panel-heading ">
                    <h3 class="panel-title">Crop Image</h3>
                  </div>
                <div class="panel-body">
                	<center>
                    <img id="imageS" src="img/image.png"  class="img-responsive">
                    <img id="imageF" src=""  class="img-responsive">
                  	<img id="imageT" src="" class="img-responsive">
                    <div id="completed"><div class="alert alert-success" role="alert">Congratulations. Created an image.</div>
                      <img id="imageC" src="" class="img-responsive">
                          <div class="form-group">
                              <label for="text">Your Image Link</label>
                              <input type="text" class="form-control" id="imageLinks" placeholder="yourlink">
                          </div>
                    </div>
                  </center>

          	      <br><br>

          	      <button type="submit" id="crop" class="btn btn-default" style="border-radius:0px;">Crop</button>
                  	<div id="filters">
                    <!--    Get Filter List           -->
                  	<?php 
                      require("tool/config.php");
                  		$dirs    = $imageFiltersPath;
          				    $filters = scandir($dirs);
          				    $i = 2;

                      // $i = 2 because i don't want "..." and no filter image.

                  		for ($i;$i<count($filters)-1;$i++) {
                      			echo  '<div class="col-xs-6 col-md-2">
              						          <a class="thumbnail">
              						            <img  class="img-rounded"  src="img/filters/'.$filters[$i].'" data="'.$i.'">
              						          </a>
              					          </div>';
                      		      }
                  	?>
                    <button type="submit" id="save" class="btn btn-default" style="border-radius:0px;">Save Image</button>
                  	</div>
          	    </div>
                </div>  
              </div>
              <div class="col-sm-6 col-sm-offset-3">
              	
              </div>
          </div> 
        </div>
</body>
</html>