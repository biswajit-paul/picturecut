
<!DOCTYPE html>
<html>
<head>
	<title>Profile Picture</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">	
</head>
<body>

	<div class="container">
		<div id="container_image"></div>
	</div>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script type="text/javascript" src="src/jquery.picture.cut.js"></script>
	<script type="text/javascript">
		$("#container_image").PictureCut({
          	InputOfImageDirectory       : "image",
          	PluginFolderOnServer        : "/<?php echo basename( dirname(__FILE__) ); ?>/",
          	FolderOnServer              : "/<?php echo basename( dirname(__FILE__) ); ?>/uploads/",
          	EnableCrop                  : true,
          	CropWindowStyle             : "Bootstrap"
      	});
	</script>
</body>
</html>