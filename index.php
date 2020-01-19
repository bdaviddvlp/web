<?php  
	require_once('conndb.php');
?>
<?php include "header.php"; ?>
	<div class="container">
	<h1>Todo List</h1>
	<form action='usersender.php' method='post'>
	    
	    <ul class="nav">
	        <li class="nav-item mx-auto"><a href="userpage.php" class="badge badge-pill badge-primary text-uppercase"><h3>Add new</h3></a></li>
	        <li class="nav-item mx-auto"><a href="advpage.php" class="badge badge-pill badge-secondary text-uppercase"><h3>Advertisements</h3></a></li>
	    </ul>

	</form>
	</div>
	
<?php include "footer.php"; ?>

