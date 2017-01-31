<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>NYT | Article Finder</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<meta charset="UTF-8">
	<title>New York Times Search</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Bootswatch Styling for Improving the Aesthetics -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/flatly/bootstrap.min.css">

	<!-- Font Awesome CSS Icons (For cool glyphicons) -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Style to fix the issue of text extending past panel length -->
	<style>
		.panel-body a
		.panel-body a
		{
		    word-break:break-all;
		}

	</style>
</head>
<body>

<!-- Main Bootstrap Search -->
<div class="container">

	<!-- Jumbotron for Title -->
	<div class="jumbotron" style="background-color: #FFFFFF; color: white; border-bottom:medium solid #000000;">
		<h1 class="text-center"><strong><i class=""><img src="assets\img\The_New_York_Times_Logo.png" /></i>  <br /> <span style="color:#000000;font-size:52px;">Article Finder</span></strong></h1>
	<div class="jumbotron" style="background-color: #20315A ; color: white;">
		<h1 class="text-center"><strong><i class="fa fa-newspaper-o"></i> New York Times Search</strong></h1>
	</div>

	<!-- Row for Searching New York Times -->
	<div class="row">
		<div class="col-sm-12">
		<br>
			<!-- First panel is for handling the search parameters -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"><strong>Refine Search</strong></h3>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title"><strong><i class="fa  fa-list-alt"></i>   Search Parameters</strong></h3>
				</div>
				<div class="panel-body">

					<!-- Here we create an HTML Form for handling the inputs-->
					<form role="form">

				  	  <!-- Here we create the text box for capturing the search term-->
					  <div class="form-group">
					    <label for="search">Search Term:</label>
					    <input type="text" class="form-control" id="searchTerm">
					  </div>

					  <!-- Here we capture the number of records that the user wants to retrieve  -->
					  <div class="form-group">
					    <label for="pwd">Number of Records to Retrieve:</label>
						<select class="form-control" id="numRecordsSelect">
							<option value=1>1</option>
							<!-- Setting the option for 5 as default -->
							<option value=5 selected>5</option>
							<option value=10>10</option>
						</select>
						</select>
					  </div>

				  	  <!-- Here we capture the Start Year Parameter-->
					  <div class="form-group">
					    <label for="startYear">Start Year (Optional):</label>
					    <input type="text" class="form-control" id="startYear">
					  </div>

				  	  <!-- Here we capture the End Year Parameter -->
					  <div class="form-group">
					    <label for="endYear">End Year (Optional):</label>
					    <input type="text" class="form-control" id="endYear">
					  </div>

					  <!-- Here we have our final submit button -->
					  <button type="submit" class="btn btn-primary" id="runSearch"><i class="fa fa-search"></i> Search</button>
  					  <button type="button" class="btn btn-danger" id="clearAll"><i class="fa fa-trash"></i> Clear</button>
					  <button type="submit" class="btn btn-default" id="runSearch"><i class="fa fa-search"></i> Search</button>
  					  <button type="button" class="btn btn-default" id="clearAll"><i class="fa fa-trash"></i> Clear Results</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- This row will handle all of the retrieved articles -->
	<div class="row">
		<div class="col-sm-12">
		<br>

			<!-- This panel will initially be made up of a panel and wells for each of the articles retrieved -->
<<<<<<< HEAD
			<div class="panel panel-default">
				<!-- Panel Heading for the retrieved articles box -->
				<div class="panel-heading">
					<h3 class="panel-title"><strong>Top Articles</strong></h3>
=======
			<div class="panel panel-primary">

				<!-- Panel Heading for the retrieved articles box -->
				<div class="panel-heading">
					<h3 class="panel-title"><strong><i class="fa fa-table"></i>   Top Articles</strong></h3>
>>>>>>> c696bea748ac6435b19c746cc5fd6b9fd0c813dc
				</div>

				<!-- This main panel will hold each of the resulting articles -->
				<div class="panel-body" id="wellSection">
				</div>
			</div>
		</div>
	</div>

	<!-- Footer Region -->
	<div class="row">
		<div class="col-sm-12">
<<<<<<< HEAD
			<a href="http://davidguben-portfolio2016.herokuapp.com">Portfolio - David Guben</a>
=======

			<!-- Line Break followed by closing -->
			<hr>
			<h5 class="text-center"><small>Made by Ahmed with lots and lots of <i class="fa fa-heart"></i></small></h5>
>>>>>>> c696bea748ac6435b19c746cc5fd6b9fd0c813dc

		</div>
	</div>

</div>
<<<<<<< HEAD

=======

>>>>>>> c696bea748ac6435b19c746cc5fd6b9fd0c813dc
<!-- jQuery JS -->
<script src="https://code.jquery.com/jquery.js"></script>

<!-- Code to the Javascript File -->
<script src="NYTCode.js"></script>

</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> c696bea748ac6435b19c746cc5fd6b9fd0c813dc
