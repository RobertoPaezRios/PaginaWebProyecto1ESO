<?php include("../database/db.php") ?>

<?php if (isset($_POST['btn-create-post'])) { ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <nav class="navbar navbar-info bg-info">
		<a href="../index.php" class="navbar-brand col-12 text-light text-center"><h1>BLOG ROBERTO GEOGRAFIA, HISTORIA, LENGUA, MATES, BIOLOGIA</h1></a>
	</nav>
    <div class="jumbotron">
        <form method="post">
            <div class="form-group">
                <label for="title-post">Title</label>
                <input type="text" class="form-control" id="title-post" name="title-post" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="post-description">Description</label>
                <input type="textarea" class="form-control" id="post-description" name="description-post" placeholder="Description">
            </div>
            <br>
            <button type="button" class="btn btn-success col-12" name="btn-create-post">Post</button>
        </form>
    </div>
<?php } ?>

<?php 

if (isset($_POST['btn-create-post'])) {
    $query = "";
}

?>


<?php include("../layout/footer.php");?>