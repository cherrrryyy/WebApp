<html>
	<head>
		<title></title>
	</head>
<body>
	<?php
 		
 		$sub = array( array('subject' => 'Trigonometry',
 							'catalog' => 'MATH',
 							'code' => '114',
 							'grade' => 'C'),
 				array('subject' => 'Philosophy',
 							'catalog' => 'HUMA',
 							'code' => '111',
 							'grade' => 'B+'),
 				array('subject' => 'Technical Writing',
 							'catalog' => 'ENGLO',
 							'code' => '101',
 							'grade' => 'B'),
 				array('subject' => 'Physics',
 							'catalog' => 'NCSI',
 							'code' => '111',
 							'grade' => 'B'),
 				array('subject' => 'Accounting',
 							'catalog' => 'ACTG',
 							'code' => '101',
 							'grade' => 'B'),
 				array('subject' => 'Database',
 							'catalog' => 'CS',
 							'code' => '351',
 							'grade' => 'C+'),
 				array('subject' => 'Psychology',
 							'catalog' => 'PSYC',
 							'code' => '101',
 							'grade' => 'C'),
 				array('subject' => 'Physical Education',
 							'catalog' => 'PHYED',
 							'code' => '101',
 							'grade' => 'A'),		
		  );

			$json = json_encode($sub);
		
	?>
	<script language = "javascript" type = "text/javascript">
		var arr = JSON.parse('<?php echo $json; ?>'); 

		arr.push({"subject" : "Data Comm", "catalog" : "IT", "code" : "211", "grade" : "B"});
		arr.push({"subject" : "Web App", "catalog" : "IT", "code" : "341", "grade" : "B-"});
		arr.push({"subject" : "Operating System", "catalog" : "CS", "code" : "342", "grade" : "A-"});

		document.writeln("<table border='1'");
	 	document.writeln("<tr><td>Subject</td><td>Subject Catalog</td><td>Subject Code</td></td><td>Grade</td></tr>")
	 	for(x = 0; arr.length > 0; x++){
	 		document.writeln("<tr>");
		 	document.writeln("<td>"+ arr[x].subject +"</td>");
		 	document.writeln("<td>"+ arr[x].catalog +"</td>");
		 	document.writeln("<td>"+ arr[x].code +"</td>");
		 	document.writeln("<td>"+ arr[x].grade +"</td>")
		 	document.writeln("</tr>")
		 }
		 document.writeln("</table>");

	</script>
</body>
</html>