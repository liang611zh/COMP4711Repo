<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>COMP4711 LAB1 Liang Zhao</title>
		<style>
		body {
				text-align: center;
				background-color: powderblue;
				color: black;
				font-family: courier;
				font-size: 20px;
		}
		</style>
	<body>
		<?php
		include('Student.php');
		
		//student 1
		$students = array();
		$first = new Student();
		$first->surname = "Doe";
		$first->first_name = "John";
		$first->add_email('home','john@doe.com');
		$first->add_email('work','jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;
		
		//student 2
		$second = new Student();
		$second->surname = "Einstein";
		$second->first_name = "Albert";
		$second->add_email('home','albert@braniacs.com');
		$second->add_email('work1','a_einstein@bcit.ca');
		$second->add_email('work2','albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;
		//student 3
		$third = new Student();
		$third->surname = "Zhao";
		$third->first_name = "Liang";
		$third->add_email('home','liang@braniacs.com');
		$third->add_email('work1','lzhao51@bcit.ca');
		$third->add_email('work2','zhaoliang@physics.mit.edu');
		$third->add_grade(96);
		$third->add_grade(98);
		$third->add_grade(100);
		$students['z789'] = $third;
		
		//sort student 
		ksort($students);
		
		//print student information
		foreach($students as $student)
			echo $student->toString();

		?>
	</body>
</html>