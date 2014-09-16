<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Andmetüübid II</title>
</head>
<body>
	 <h2>Arvutamine murd- ja täisarvudega</h2>

	 <?php echo $float = 3.14; ?><br>
	 <?php echo $float + 7; ?><br>
	 <?php echo 4/3; ?><br>
	 <h2>Murdarvude ümardamine</h2>

	 <?php
	 $float = 3.14;
	 echo round($float,1);
	 echo "<br>";
	 echo ceil($float);
	 echo "<br>";
	 echo floor($float); ?>
	 <h2>Andmetüübi funktsioonid</h2>

	 <?php
	 $integer = 3;
	 echo "Kas {$integer} on integer? " . is_int($integer);
	 echo "<br>";
	 echo "Kas {$float} on integer? " . is_int($float);
	 echo "<br>";
	 echo "Kas {$integer} on murdarv? " . is_float($integer);
	 echo "<br>";
	 echo "Kas {$float} on murdarv? " . is_float($float);
	 echo "<br>";
	 echo "Kas {$integer} on numbriline väärtus? " . is_numeric($integer);
	 echo "<br>";
	 echo "Kas {$float} on numbriline väärtus? " . is_numeric($float);
	 ?>
	 <h2>Jadad (array)</h2>

	 <?php
     $numbers = array(4,8,15,16,23,42);
     echo $numbers[0];
     echo "<br>";
     echo $numbers[1];
     echo "<br>";
     echo $numbers[2];
     echo "<br>";
     echo $numbers[3];
     echo "<br>";
     echo $numbers[4];
     echo "<br>";
     echo $numbers[5];
     echo "<br>";
     $mixed = array(6, "rebane", "koer", 5.5, array("x", "y", "z"));
     echo $mixed[2];
     echo "<br>";
     echo $mixed[4][2];
	 ?>
	 <?php $mixed[2] = "kass"; ?>
	 <?php $mixed[5] = "kass"; ?>
	 <?php $mixed[] = "hobune"; ?>
	 <pre><?php echo print_r($mixed); ?></pre> 
	 <h2>Associative arrays</h2>	

	 <?php 
	 $assoc = array("first_name" => "Merili", "last_name" => " Asu"); 
	 echo $assoc["first_name"];
	 echo "<br>";
	 echo $assoc["last_name"];
	 echo "<br>";	
	 $numbers = array(0 => 4, 5 => 8, 6 => 15, 9 => 16, 10 => 23, 15 => 42); 
	 $assoc["age"] = 21; 
	 $assoc["first_name"] = "Johanna";
	 echo $assoc["first_name"];
	 echo "<br>";
	 $assoc["e_mail"] = "merili.asu@khk.ee";
	 echo "Minu nimi on {$assoc["first_name"]} {$assoc["last_name"]}. Minu e-post on {$assoc["e_mail"]}. ";
	 ?>	
	 <h2>Array functions</h2>		
	 <?php 
	 $numbers_2 = array(8,23,15,42,16,4); 
	 echo count($numbers_2);
	 echo "<br>";
	 echo max($numbers_2);
	 echo "<br>";
	 echo min($numbers_2);
	 echo "<br>";
	 ?>
	 <pre>
		<?php
			sort($numbers_2);
			print_r($numbers_2);
			echo "<br>";
		?>
	 </pre>
			<br>
	 <pre>
		<?php
			rsort($numbers_2);
			print_r($numbers_2);
			echo "<br>";
		?>
	 </pre>
			<br>
		<?php 
			$num_string = implode(" ja ", $numbers_2);
		?>
		<?php 
			print_r($num_string); 
		?>
	 <pre>	
		<?php 
			print_r(explode(" ja ", $num_string)); 
		?>
	 </pre>	
</body>
</html>
	