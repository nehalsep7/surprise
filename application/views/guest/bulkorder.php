<!DOCTYPE html>
<html>
<head>
<title>Bulk Order form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Teemate</title>
    <!-- Bootstrap core CSS "favicon?" -->
     <link rel='shortcut icon' href='assets/img/favicon.png' type='image/x-icon'/ >
	<link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="assets/css/style.css" rel="stylesheet" />
	<script src="assets/js/jquery-1.10.2.js"></script> 
	<script>
    $(function(){
      $("#includeHeader").load("header.html"); 
    });	
	 $(function(){
      $("#includeFooter").load("footer.html"); 
    });
    </script> 
</head>
<body>
	<div id="includeHeader"></div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main box-border">
				
					<header><h1><center>Bulk Order</center></h1></header>
					
					<form>
						<div class="row">
							<div class="col-md-1 col-sm-1">
							</div>
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="pdct">Product type</label>		
									<select id="pdct" class="form-control" onchange="getmyprice()">
										<option  class="tees" value="1" id="1">Round Neck T-Shirt</option>
										<option  class="tees" value="2" id="2">V Neck T-Shirt</option>
										<option  class="tees" value="3" id="3" selected>Collar T-Shirt</option>
										<option class="hood" id="4"  value="4">Hoodie</option>
										<option class="zip" id="5" value="5">Zipper</option>
									</select>
								</div>
							</div>
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="name">Name</label><!-- <span style="color:red;">*</span></label> -->
									<input id="name" type="text" class="form-control" required="required" pattern="{A-Z a-z}" minlength="3" placeholder="First Last name">
								</div>
							</div>
							<div class="col-md-1 col-sm-1">   
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-1 col-sm-1">
							</div>
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="print">No. Of Print Colors</label>
									<input id="print" class="form-control" min="1" value="1" type ="number" onchange="getmyprice()" required="true">
								</div>
							</div>
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="email">e-mail ID</label><span style="color:red;">*</span></label>
									<input id="email" type="email" class="form-control" required placeholder="your@email.com">
								</div>
							</div>
							<div class="col-md-1 col-sm-1">   
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="quality">Quality (thickness in GSM) </label>
									<input id="quality" class="form-control" min="160" max="220" step="10" value="160" type ="number" onchange="getmyprice()" required="required">
								</div>
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="contact">Mobile No.(+91)</label><span style="color:red;">*</span></label>
									<input id="contact" type="number" class="form-control" required="required" maxlength="10" pattern="" placeholder="Mobile No.">
								</div>
							</div>
							<div class="col-md-1 col-sm-1">   
							</div>
						</div>
						
						<div class="row">
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
								<div id="unisex" class="col-md-4 col-sm-4">
									<label for="SelectQuantity">Unisex</label><span style="color:red;">*</span></label>
									<input id="selectQuantity" value="0" class="form-control" min="0" type ="number" onchange="getmyprice()" required="required">
								</div>
								<div id="male" class="col-md-4 col-sm-4">
									<label for="male">Male</label><span style="color:red;">*</span></label>
									<input class="form-control"  value="0" id="male"  min="0" type ="number" onchange="getmyprice()" required>
								</div>
								<div id="female" class="col-md-4 col-sm-4">
									<label for="female">Female</label><span style="color:red;">*</span></label>
									<input id="female"  class="form-control"  value="0" min="0" type ="number" onchange="getmyprice()" required>
								</div>
							</div>
		
							<div class="col-md-5 col-sm-5">
								<div class="form-group">
									<label for="address">Message</label><em>(optional)</em>
									<textarea id="address" class="form-control" rows="2" cols="34" required="required" name="Message" maxlength="100" placeholder="Max limit 100 characters"></textarea>
								</div>
							</div>
							
							<div class="col-md-1 col-sm-1">   
							</div>
							
						</div>
						
						<div class="row">
						
							<div class="col-md-1 col-sm-1">
							</div>
							
							<div class="col-md-5 col-sm-5">
						
								<div id="frontdiv" class="col-md-6 col-sm-6">
								<label for="front">Front design size</label>
									<select id="front" class="form-control" name="slide_type" onchange="getmyprice()">
										<option  value="none" selected></option>
										<option class="A3" value="A3">A3</option>
										<option class="A4" value="A4">A4</option>
										<option class="pock" value="Pocket">Pocket size</option>
									</select>
								</div>
		
								<div class="col-md-6 col-sm-6">
									<label for="frontimg">Upload Front design<input type="file" name="filename" accept="image/gif, image/jpeg, image/png" style="padding-top: 9px"></label><p>
								</div>
								
							</div>
							
							<div class="col-md-1 col-sm-1">   
							</div>
							
						</div>
					<!-- </form>
					
					<form id="contactform"> 
					-->
						<div class="row">
						
								<div class="col-md-1 col-sm-1">
								</div>
								
								<div class="col-md-5 col-sm-5">
									
									<div id="backdiv" class="col-md-6 col-sm-6">
										<label for="back">Rear design size</label>
										<select id="back" class="form-control" name="slide_type" onchange="getmyprice()">
											<option  value="none" selected></option>
											<option class="A3" value="A3">A3</option>
											<option class="A4" value="A4">A4</option>
											<option class="pock" value="pocket">Pocket size</option>
										</select>
									</div>
									
									<div class="col-md-6 col-sm-6">
										<label for="backimg">Upload Rear design<input type="file" name="filename" accept="image/gif, image/jpeg, image/png" style="padding-top: 9px"></label>
									</div>	
									
								</div>
								
								
								<div class="col-md-1 col-sm-1">
								</div>
								
						</div>
					
						<div class="row">
							<div id="quotation" class="col-md-12 col-sm-12">
								<input class="btn btn-primary" name="submit" id="submit" tabindex="5" value="Get price quotation" type="submit">
							</div>
						</div>
				</form>
			</div>
          </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
	
	<div id="includeFooter"></div>
	
</body>
</html>
