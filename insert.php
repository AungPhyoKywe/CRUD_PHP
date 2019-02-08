


<?php  

include('header.php');
include ('db_connect.php');


?>



<!DOCTYPE html>
<html>
<head>
	<title></title>


	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



</head>
<body>

	






<div class="container">

<h2>New Add</h2><br>
<div class="row">

  <div class="col-md-8">
<form action="db_connect.php"method="post">

  <input type="hidden" name="id"value="<?php echo $id; ?>">
  <div class="form-group">
    <label for="text">Title:</label>
    <input type="text" value="<?php echo $tit;  ?>"name="title"class="form-control" id="text"style="border-color: green;width: 400px;"required="Title">
  </div>
  <div class="form-group">
  <label for="comment">Description:</label>
  <input type="textarea"class="form-control" value="<?php echo $d;  ?>"name="des"rows="5" id="comment"style="border-color: green;width: 400px;"required="Description"></input>
</div>
  <?php if($update==true): ?>

<button type="submit" name="update"class="btn btn-info">update</button>

<?php  else: ?>

<button type="submit" name="insert"class="btn btn-primary">confirm</button>
  <?php  endif ?>
  
</form>

</div>

<div class="col-md-4">
  
<img src="dance.gif" class="img-fluid" alt="Responsive image">

</div>

</div>


</div>

</body>
</html>


<?php  

include('footer.php');



?>