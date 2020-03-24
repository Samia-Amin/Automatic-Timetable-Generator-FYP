<?php
require('config/config.php');
require('config/db.php');

// Create Query
$query = 'SELECT * FROM faculty';
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$faculty_list = mysqli_fetch_all($result);
// Free Result
mysqli_free_result($result);

// Create Query
$query = 'SELECT * FROM room';
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$room_list = mysqli_fetch_all($result);
// Free Result
mysqli_free_result($result);

// Create Query
$query = 'SELECT * FROM semester';
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$semester_list = mysqli_fetch_all($result);
// Free Result
mysqli_free_result($result);

// Create Query
$query = 'SELECT * FROM subject';
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$subject_list = mysqli_fetch_all($result);
// Free Result
mysqli_free_result($result);

// Create Query
$query = 'SELECT * FROM time';
// Get Result
$result = mysqli_query($conn, $query);
// Fetch Data
$time_list = mysqli_fetch_all($result);
// Free Result
mysqli_free_result($result);
	
//Data from Database
$course = ["0","1","2","3","4"];
$course_credits = ["2","3","2","3","3"];
$course_required_lab = ['yes','no','no','no','no'];
$course_classes = ['BSCS A','BSCS B','BSCS A','BSCS B','BSCS A'];
$rooms = ["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
$rooms_lab = ['yes','no','yes','no','yes','no','yes','no','yes','no','yes','no','yes','no','yes','no'];
$slots = ["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
/* $course = [];
$course_credits = []; 
$rooms = [];
$slots = [];

foreach($subject_list as $subject){
	array_push($course,$subject[0]);
	array_push($course_credits,$subject[2]);
}
foreach($room_list as $room){
	array_push($rooms,$room[0]);
}
foreach($time_list as $time){
	array_push($slots,$time[0]);
} */
print_r($course);
echo '<br>';
print_r($course_credits);
echo '<br>';
print_r($rooms);
echo '<br>';
print_r($slots);
echo '<br>';

//Count for Data
$courses_count = count($course)-1;
$rooms_count = count($rooms)-1;
$slots_count = count($slots)-1;

//calculate length of single chromosome
$sks = 0;
for($i=0; $i<count($course_credits);$i++) {
	$sks = $sks + $course_credits[$i];
}
$chromosome_length = 3*$sks;
$chromosome_number = 12;

//Call create chromosome function to generate chromosome set
$Chromosomes = [];
create_chromosome($sks,$courses_count,$rooms_count,$slots_count,$chromosome_number);

//Call Calculate Fitness Function
for ($i=0; $i<count($Chromosomes); $i++) {
	calculate_fitness($i);
}

//Sort Chromosomes based on highest fitness value
sort_chromosomes();

// Calculate highest Fintess
$Highest_fitness = count($Chromosomes[0]);
$Highest_fitness = $Chromosomes[0][$Highest_fitness-1];

while($Highest_fitness < 6){
// Select chunk for Crossover and further mutation.
$chunk_value = 6;
// Perform Crossover on selected chunk of chromosomes
for ($i=$chunk_value; $i < count($Chromosomes); $i++) { 
	crossover($i,$i+1,$sks,$chromosome_length);
	$i+=1;
}
//Call Calculate Fitness Function
for ($i=0; $i<count($Chromosomes); $i++) {
	calculate_fitness($i);
}
sort_chromosomes();
// Calculate highest Fintess
$Highest_fitness = count($Chromosomes[0]);
$Highest_fitness = $Chromosomes[0][$Highest_fitness-1];
}


display_chromosome();
$Fitest_Timetable = [];
for ($i=0; $i < count($GLOBALS['Chromosomes'][0])-1; $i++) {
	array_push($Fitest_Timetable,$Chromosomes[0][$i]);
	// $i += 2;
}
/* $Fitest_Timetable = array_count_values($Fitest_Timetable);
// sort($Fitest_Timetable);
foreach ($Fitest_Timetable as $key => $value) {
	echo $key.' occurs '.$value.' times. <br>';
} */
$Monday = [];
$Tuesday = [];
$Wednesday = [];
$Thursday = [];
$Friday = [];
// print_r($Fitest_Timetable);
SBD();
function SBD(){
	for ($i=0; $i < count($GLOBALS['Fitest_Timetable']); $i++) {
		if($GLOBALS['Fitest_Timetable'][$i+2] < 5){
			array_push($GLOBALS['Monday'],$GLOBALS['Fitest_Timetable'][$i]);
			array_push($GLOBALS['Monday'],$GLOBALS['Fitest_Timetable'][$i+1]);
			array_push($GLOBALS['Monday'],$GLOBALS['Fitest_Timetable'][$i+2]);
		}
		else if($GLOBALS['Fitest_Timetable'][$i+2] > 5 AND $GLOBALS['Fitest_Timetable'][$i+2] < 10){
			array_push($GLOBALS['Tuesday'],$GLOBALS['Fitest_Timetable'][$i]);
			array_push($GLOBALS['Tuesday'],$GLOBALS['Fitest_Timetable'][$i+1]);
			array_push($GLOBALS['Tuesday'],$GLOBALS['Fitest_Timetable'][$i+2]);
		}
		else if($GLOBALS['Fitest_Timetable'][$i+2] > 9 AND $GLOBALS['Fitest_Timetable'][$i+2] < 15){
			array_push($GLOBALS['Wednesday'],$GLOBALS['Fitest_Timetable'][$i]);
			array_push($GLOBALS['Wednesday'],$GLOBALS['Fitest_Timetable'][$i+1]);
			array_push($GLOBALS['Wednesday'],$GLOBALS['Fitest_Timetable'][$i+2]);
		}
		else if($GLOBALS['Fitest_Timetable'][$i+2] > 14 AND $GLOBALS['Fitest_Timetable'][$i+2] < 20){
			array_push($GLOBALS['Thursday'],$GLOBALS['Fitest_Timetable'][$i]);
			array_push($GLOBALS['Thursday'],$GLOBALS['Fitest_Timetable'][$i+1]);
			array_push($GLOBALS['Thursday'],$GLOBALS['Fitest_Timetable'][$i+2]);
		}
		else if($GLOBALS['Fitest_Timetable'][$i+2] > 19 AND $GLOBALS['Fitest_Timetable'][$i+2] < 24){
			array_push($GLOBALS['Friday'],$GLOBALS['Fitest_Timetable'][$i]);
			array_push($GLOBALS['Friday'],$GLOBALS['Fitest_Timetable'][$i+1]);
			array_push($GLOBALS['Friday'],$GLOBALS['Fitest_Timetable'][$i+2]);
		}
		$i += 2;
	}
}
print_r($Monday);
echo '<br>';
print_r($Tuesday);
echo '<br>';
print_r($Wednesday);
echo '<br>';
print_r($Thursday);
echo '<br>';
print_r($Friday);
echo '<br>';


// ================ All Methods ===============

//Chromosome Function
function create_chromosome($sks,$courses_count,$rooms_count,$slots_count,$length){
	for($i=0;$i<$length;$i++){
		$temp_chromo = [];
		for($j=0;$j<$sks;$j++){
			$temp_course_id= rand(0,$courses_count);
			$temp_room= rand(0,$rooms_count);
			$temp_slot= rand(0,$slots_count);
			array_push($temp_chromo,$temp_course_id,$temp_room,$temp_slot);
		}
		array_push($temp_chromo,0);
		array_push($GLOBALS['Chromosomes'],$temp_chromo);
	}
}

//Display Chromosomes
function display_chromosome(){
	for ($i=0; $i<count($GLOBALS['Chromosomes']); $i++) {
		echo "Chromosome ".$i.": ";
		for ($j=0; $j<count($GLOBALS['Chromosomes'][$i]); $j++) {
				echo $GLOBALS['Chromosomes'][$i][$j];
				echo ",";
		}
		echo "<br>";
	}
	echo "-------------------------<br>";
}

// Calculate Fitness
function calculate_fitness($num){
	$fitness_value = 0;
	$fitness_value += f1($num);
	$fitness_value += f2($num);
	$fitness_value += f3($num);
	$fitness_value += f4($num);
	$fitness_value += f5($num);
	$fitness_value += f6($num);

	//add fitness to chormosome
	$temp_fit_loction = count($GLOBALS['Chromosomes'][$num]);
	$GLOBALS['Chromosomes'][$num][$temp_fit_loction-1] = $fitness_value;
}

// Sort Chromosomes
function sort_chromosomes(){
	$fitness_list = [];
	for($i=0; $i < count($GLOBALS['Chromosomes']); $i++) {
		$pos = count($GLOBALS['Chromosomes'][$i]);
		$fitness_list["$i"] = $GLOBALS['Chromosomes'][$i][$pos-1];
	}
	arsort($fitness_list);
	$temp_chromosomes = [];
	$fitness_list = array_keys($fitness_list);
	for ($i=0; $i < count($GLOBALS['Chromosomes']); $i++) { 
		array_push($temp_chromosomes,$GLOBALS['Chromosomes'][$fitness_list[$i]]);
	}
	$GLOBALS['Chromosomes'] = $temp_chromosomes;
}

//Crossover Function
function crossover($j,$k,$sks,$chromosome_length){
	$spliter = rand(0,$sks-1);
	for($i=$spliter;$i<$chromosome_length;$i++){
		$temp = $GLOBALS['Chromosomes'][$j][$i];
		$GLOBALS['Chromosomes'][$j][$i] = $GLOBALS['Chromosomes'][$k][$i];
		$GLOBALS['Chromosomes'][$k][$i] = $temp;
	}
	mutation($j,$chromosome_length,$GLOBALS['courses_count'],$GLOBALS['rooms_count'],$GLOBALS['slots_count']);
	mutation($k,$chromosome_length,$GLOBALS['courses_count'],$GLOBALS['rooms_count'],$GLOBALS['slots_count']);
}

// Mutation Function
function mutation($chromo,$chromosome_length,$courses_count,$rooms_count,$slots_count){
	$index1 = rand(0,$chromosome_length-1);
	$index2 = rand(0,$chromosome_length-2);
	if($index1 % 3 == 0){
		$GLOBALS['Chromosomes'][$chromo][$index1] = rand(0,$courses_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+1] = rand(0,$rooms_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+2] = rand(0,$slots_count);
	}
	else if($index1 % 3 == 0){
		$GLOBALS['Chromosomes'][$chromo][$index1] = rand(0,$rooms_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+1] = rand(0,$slots_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+2] = rand(0,$courses_count);
	}
	else if($index1 % 3 == 0){
		$GLOBALS['Chromosomes'][$chromo][$index1] = rand(0,$slots_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+1] = rand(0,$courses_count);
		$GLOBALS['Chromosomes'][$chromo][$index1+2] = rand(0,$rooms_count);
	}

}

//Fitness Conditions
//This function will check if same ROOM is assigned to Different Subjects at the Same SLOT.
function f1($num){
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) {
		$course = $GLOBALS['Chromosomes'][$num][$i];
		$room = $GLOBALS['Chromosomes'][$num][$i+1];
		$slot = $GLOBALS['Chromosomes'][$num][$i+2];
		for($j=0; $j < count($GLOBALS['Chromosomes'][$num])-1; $j++){
			if($i != $j){
				if($room == $GLOBALS['Chromosomes'][$num][$j+1]){
					if($slot == $GLOBALS['Chromosomes'][$num][$j+2]){
						return 0;
					}
				}
			}
			$j+= 2;
		}
		$i+= 2;
	}
	return 1;
}
//This function will check if Data contains Duplicate Values.
function f2($num){
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) {
		$course = $GLOBALS['Chromosomes'][$num][$i];
		$room = $GLOBALS['Chromosomes'][$num][$i+1];
		$slot = $GLOBALS['Chromosomes'][$num][$i+2];
		for($j=0; $j < count($GLOBALS['Chromosomes'][$num])-1; $j++){
			if($i != $j){
				if($course == $GLOBALS['Chromosomes'][$num][$j]){
					if($room == $GLOBALS['Chromosomes'][$num][$j+1]){
						if($slot == $GLOBALS['Chromosomes'][$num][$j+2]){
							return 0;
						}
					}
				}
			}
			$j+= 2;
		}
		$i+= 2;
	}
	return 1;
}
//This function will check if any COURSE is assigned to Different Rooms at the Same SLOT.
function f3($num){
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) {
		$course = $GLOBALS['Chromosomes'][$num][$i];
		$room = $GLOBALS['Chromosomes'][$num][$i+1];
		$slot = $GLOBALS['Chromosomes'][$num][$i+2];
		for($j=0; $j < count($GLOBALS['Chromosomes'][$num])-1; $j++){
			if($i != $j){
				if($course == $GLOBALS['Chromosomes'][$num][$j]){
					if($slot == $GLOBALS['Chromosomes'][$num][$j+2]){
						return 0;
					}
				}
			}
			$j+= 2;
		}
		$i+= 2;
	}
	return 1;
}
//This function will check if each subject is getting required credit hours or not.
function f4($num){
	$temp_array = [];
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) { 
		array_push($temp_array,$GLOBALS['Chromosomes'][$num][$i]);
		$i += 2;
	}
	$temp_array = array_count_values($temp_array);
	if(count($temp_array) == count($GLOBALS['course_credits'])){
		for ($i=0; $i < count($GLOBALS['course_credits']); $i++) { 
			if($GLOBALS['course_credits'][$i] > $temp_array[$i]){
				return 0;
			}
		}
		return 1;
	}
	return 0;
}
//This function will check if two class of one semester is occuring at the same time.
function f5($num){
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) {
		$course = $GLOBALS['Chromosomes'][$num][$i];
		$room = $GLOBALS['Chromosomes'][$num][$i+1];
		$slot = $GLOBALS['Chromosomes'][$num][$i+2];
		for($j=0; $j < count($GLOBALS['Chromosomes'][$num])-1; $j++){
			if($i != $j){
				if($slot == $GLOBALS['Chromosomes'][$num][$j+2]){
					$c_course = $GLOBALS['Chromosomes'][$num][$j];
					if($GLOBALS['course_classes'][$course] == $GLOBALS['course_classes'][$c_course]){
						return 0;
					}
				}
			}
			$j+= 2;
		}
		$i+= 2;
	}
	return 1;
}

function f6($num){
	for ($i=0; $i < count($GLOBALS['Chromosomes'][$num])-1; $i++) {
		$cc = $GLOBALS['Chromosomes'][$num][$i]; // 2
		$rr = $GLOBALS['Chromosomes'][$num][$i+1]; // 5
		if($GLOBALS['course_required_lab'][$cc] == 'yes'){
			if($GLOBALS['course_required_lab'][$cc] != $GLOBALS['rooms_lab'][$rr]){
				return 0;
			}
		}
		$i+= 2;
	}
	return 1;
}
?>


<!DOCTYPE html>
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
			<th colspan="6">MONDAY</th>
		</tr>
		<tr>
			<th>ROOMS</th>
            <th>8:00 - 9:00</th>
            <th>9:00 - 10:00</th>
            <th>10:00 - 11:00</th>
            <th>11:00 - 12:00</th>
            <th>12:00 - 1:00</th>
        </tr>
		<?php for ($i=0; $i < count($Monday); $i++) {?>
        <tr>
            <td><?php echo $Monday[$i+2];?></td>
        </tr>
		<?php $i +=2;}?>
	</table>

</body>
</html>