<?php require_once('conndb.php');?>
<?php
	
	if(isset($_POST['submit'])){
	if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['advtitle']) && !empty($_POST['advtitle'])){ // Ha létezik a name változó és nem üres az értéke és hasonlóan az advtitle változóval, akkor
		$name = $_POST['name'];						// Létre hoz egy name és egy advtitle változót, post metódussal küldi
		$advtitle = $_POST['advtitle'];
		$db->query("INSERT INTO users (id,name) VALUES (null,'$name')"); // Elküldi az adatbázisnak az id és name oszlopába az értékeket
		$db->query("INSERT INTO advertisements (id,userid,title) VALUES (null,'$name','$advtitle')"); // Elküldi az adatbázisnak az id és userid és title oszlopába az értékeket
		header("Location: userpage.php"); // Átirányít a userpage.php oldalra, ahol a felhasználók listája stb. látható
	}else{
        
		$nameError = 'Empty name!';
		$advtitleError = 'Empty title!';
		if(empty($_POST['name'])){echo $nameError.'<br />';}
		if(empty($_POST['advtitle'])){echo $advtitleError.'<br />';}  // Hibaüzenetek, ha valami nem teljesülne
        echo "Back to User list: <a href='userpage.php'>Click here</a>";
		
	}
    }
	
?>