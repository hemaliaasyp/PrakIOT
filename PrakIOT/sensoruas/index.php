<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="assets/jquery.min.js"></script>
    <title>SENSOR</title>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#ceksensor").load('ceksensor.php');
            }, 1000);
        });
    </script>
</head>

<body>
    <div>

    </div>
    <div class="container" style="text-align: center; padding-top: 0%; width: 500px; padding-top: 190px;">
        <h1 style="text-align: center;">Nilai Sensor</h1>
        <div class="card">
            <div class="card-body">
				<h1><span id="ceksensor"></span></h1>
			</div>
        </div>
    </div>

    <body>