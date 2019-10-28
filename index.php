<!DOCTYPE html>
<html>
  <head>
    <title>PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <form method="post" action="bd.php" class="postcard">
	    <div class="form-row">
				<div class="form-group label-floating">
	      	<label class="control-label">First name</label>
	        <input type="text" class="form-control" name="first_name" required>
	      </div>
	     	<div class="form-group label-floating">
	      	<label class="control-label">Last name</label>
	        <input type="text" class="form-control" name="last_name" required>
	      </div>
	      <div class="form-group label-floating">
	      	<label class="control-label">Email</label>
	      	<input type="text" class="form-control" name="email" required>
	      </div>
	      <div class="form-row1">
	      	<button id="bsub" type="submit" name="submit">Отправить</button>
	    	</div>
	   	</div>
		</form>
  </body>
</html>
