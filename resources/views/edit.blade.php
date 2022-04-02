<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My todo App</title>
	<!-- Bootstrap files -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body><br>
	<div class="row">
		<div class="col-md-3 m-auto" style="margin-left: 500px;">
			<h3>My Todo App</h3>
			<form action="/update">
				<input type="hidden" name="sno" value={{$items['sno']}}>
				<div class="form-group">
					<input type="text" class="form-control" name="item" value="{{$items['item']}}">
				</div>
				<input type="submit" class="btn btn-primary" name="update" value="Update">
			</form><hr>
		</div>
	</div>
</body>
</html>