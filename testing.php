<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <style>
        table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th{
    padding:5px;
}
td{
    padding: 2px 5px;
}
    </style>
</head>
<body>
	<table>
		<tr>
			<th rowspan="2">DAY</th>
			<th rowspan="2">ROOMS</th>
			<th colspan="5">TIME</th>
		</tr>
        <tr>
            <th>8:00 - 9:00</th>
            <th>9:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 1:00</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>R2</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
            <td>Class<br>Subject<br>Teacher</td>
        </tr>
	</table>
</body>
</html> -->

<?php 
$a = ['yes','no','yes','no','no'];
$b = ['no','no','no','no','no'];

for ($i=0; $i < 5; $i++) { 
    if($GLOBALS['a'][$i] != $GLOBALS['b'][$i]){
        echo "<br>{$i} Not Equal.";
    }
}

?>