<?php require_once('conndb.php');?>
<?php include "header.php"; ?>
		
<div class="container">
    <h1>User list</h1>
	<?php
	
	if($result = $db->query('SELECT * FROM users')){
		if($result->num_rows){
			$table = $result->fetch_all(MYSQLI_NUM); // Itt array-be fecthelem az értékeket (számok szerint)
			
			echo '<table class="table table-striped">';
			echo '<thead class="thead-dark">';
            echo '<tr>';
			echo '<th>ID</th> <th>User</th>';
            echo '</tr>';
			echo '</thead>';
			foreach($table as $row){
				echo '<tr>';
					foreach($row as $record){
						echo '<td>'.$record.'</td>';
					}
				echo '</tr>';						// Egybeágyazott foreach ciklussal járom be az arrayt és írom bele az értékeket
			}
			echo '</table>';
			
			
		}else{
			echo '<div class="d-flex justify-content-center"><h2>No data to show!</h2></div>';
		}

	}
	?>
	<form action='usersender.php' method='post'>
		<div class="input-group">
			<input type="text" name="name" placeholder="Enter name here" class="form-control"/>
            <input type="text" name="advtitle" placeholder="Advertisement title" class="form-control"/>
        </div>
			<!--Létre hoztam két input mezőt, amikkel lehet írni a táblázatba, illetve az adatbázisba is.-->
			<!--Ennek segítségével lehet tesztelni a lekérdezést, az oldal bővítése esetén pedig így lehet majd írni az adatbázisba-->

		<ul class="nav container">
		    <li class="nav-item mx-auto"><input type="submit" value="Submit" name="submit" class="btn btn-success"/></li>
		    <li class="nav-item mx-auto"><a href="advpage.php" class="btn btn-primary">To ad list</a></li>
		    <li class="nav-item mx-auto"><a href="index.php" class="btn btn-primary">Back</a></li>
		    <li class="nav-item mx-auto"><a href="deletedb.php" class="btn btn-danger">Delete database</a></li>
		</ul>
	</form>
		
		
</div>
<?php include "footer.php"; ?>