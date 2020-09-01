
  <div class="row">
    <div class="text-justify col-sm-4"> Click here to select this<strong> column.</strong> Always place your content within a column. Columns are indicated by a dashed blue line. </div>
    <div class="col-sm-4 text-justify"> You can <strong>resize a column</strong> using the handle on the right. Drag it to increase or reduce the number of columns.</div>
    <div class="col-sm-4 text-justify"> You can <strong>offset a column</strong> using the handle on the left. Drag it to increase or reduce the offset. </div>
  </div>
  <hr>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Login</title>
</head>
<body>
<?php echo form_open("login/login_process"); ?>
	
	<p>Username : <br>
	<input type="text" name="username" required>
	</p>
	<p>Password : <br>
	<input type="password" name="password" required></p>
	<p><button type="submit">Submit</button></p>
	<?php echo form_close(); ?>
</body>
</html>
