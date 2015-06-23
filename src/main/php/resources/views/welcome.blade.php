<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>OpenFDA</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <style>
    	body {
  			padding-top: 80px;
			}
    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">OpenFDA Beta</a>
		    </div>
		  </div>
		</div>

		<div class="container">
		  <div class="row">
		  	<div class="col-sm-4 col-sm-offset-8">
			  	<form class="form-inline pull-right">
					  <div class="form-group">
					    <label for="drug">Drug</label>
					    <input type="text" name="drug" class="form-control" id="drug" >
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
		  </div>
		  <div class="row">
		  	<br>
		  	<table class="table table-bordered">
		      <thead>
		        <tr>
		          <th>Occurances</th>
		          <th>Reaction</th>
		        </tr>
		      </thead>
		      <tbody>
		      	@forelse($reactions AS $reaction)
		      		<tr>
			          <td>{{ $reaction->count }}</td>
			          <td>{{ $reaction->term }}</td>
			        </tr>
		      	@empty
		      		<tr>
			          <td class="text-center" colspan="2">No Results Found</td>
			        </tr>
		      	@endforelse
		      </tbody>
		    </table>
		  </div>
		</div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>