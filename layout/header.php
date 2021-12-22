<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BLOG ROBERTO PAEZ RIOS 1ºD</title>
    <!--  FONTAWESOME -->
	<!-- BOOTSTRAP 4  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--  CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-light">
	
	<nav class="navbar navbar-info bg-info">
		<a href="../index.php" class="navbar-brand col-10 text-light text-center"><h1>BLOG ROBERTO GEOGRAFIA, HISTORIA, LENGUA, MATES, BIOLOGIA</h1></a>
		
		<form class="form-container" action="src/create_post.php" method="POST">
			<div class="form-group">
				<button class="btn btn-warning mt-3 pt-2 pd-20 text-light" name="btn-create-post">Crear Post</button>
			</div>
		</form>
	</nav>
