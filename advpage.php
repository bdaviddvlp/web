<?php require_once('conndb.php');?>
<?php include "header.php"; ?>
	
	<div class="container">
	<h1>Advertisement and user list</h1>
<?php
	
	
        if($result = $db->query("SELECT * FROM advertisements")){	// Kijelölök mindent az advertisements táblából, és ha a result true értéket ad, akkor
		if($result->num_rows){									//Ha a táblázatban a sorok száma nem nulla, akkor
			$table = $result->fetch_all(MYSQLI_NUM);			// Array-be fecthelem az értékeket (számok szerint)
			echo '<table class="table">';
                echo '<thead class="thead-dark">';
				echo '<tr>';
				echo '<th>ID</th><th>UserID</th><th>Advertisement</th>';
				echo '</tr>';
			foreach($table as $row){
				foreach($row as $record){
					echo '<td>'.$record.'</td>';
				}
				echo '</tr>';
			}
				
		}else{
			echo '<div class="d-flex justify-content-center"><h2>No data to show!</h2></div>';
		}
            echo '</table>';						// Egybeágyazott foreach ciklussal járom be az arrayt és írom bele az értékeket
	}
 
	echo '
    <ul class="nav container">
            <li class="nav-item mx-auto"><a href="userpage.php" class="btn btn-success">Add new</a></li>
		    <li class="nav-item mx-auto"><a href="index.php" class="btn btn-primary">Back</a></li>
    </ul>
    ';
	
?>
	
	</div>
<?php include "footer.php"; ?>