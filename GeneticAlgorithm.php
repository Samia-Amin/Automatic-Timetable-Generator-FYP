<?php

Class Course{
	public $course_id;
	public $course_credits;
}

$courses = [];

for($i=0;$i<3;$i++){
	$temp_course = new Course();
	$temp_course->course_id= $i;
	$temp_course->course_credits= $i+1;
	array_push($courses,$temp_course);
}
$rooms = ["0","1"];
$slots = ["0","1","2","3","4","5","6","7","8","9"];

$courses_count = count($courses);
$rooms_count = count($rooms);
$slots_count = count($slots);

//for calculating the length of Chromosome we use SKS(sum of Credits hours of courses)
$sks = 0;
foreach ($courses as $course) {
	$sks = $sks + $course->course_credits;
}
$chromosome_length = 3*$sks;

//Gene Object Modal
Class Genes{
	public $course_id;
	public $room;
	public $slot;
}

//Create chromosomes as much as you want.
$chromosomes = create_chromosomes($sks,$courses_count,$rooms_count,$slots_count,2);

//funtion to create chromosomes
function create_chromosomes($sks,$courses_count,$rooms_count,$slots_count,$len){
	$temp_chromosomes = [];
	for($i=0;$i<$len;$i++){
		$temp_chromo = [];
		for($j=0;$j<$sks;$j++){
			$temp_course_id= rand(0,$courses_count-1);
			$temp_room= rand(0,$rooms_count-1);
			$temp_slot= rand(0,$slots_count-1);
			array_push($temp_chromo,$temp_course_id,$temp_room,$temp_slot);
		}
		array_push($temp_chromosomes,$temp_chromo);
	}
	return $temp_chromosomes;
}

//display all chromosomes
for ($i=0; $i<count($chromosomes); $i++) { 
	echo "Chromosome ".$i.": ";
	for ($j=0; $j<count($chromosomes[$i]); $j++) { 
		echo $chromosomes[$i][$j];
	}
	echo "<br>";
}

$chromosomes = crossover($chromosomes,0,1,$sks,$chromosome_length);

function crossover($chromosomes,$chormo1,$chormo2,$sks,$chromosome_length){
	$spliter = rand(0,$sks-1);
	for($i=$spliter;$i<$chromosome_length;$i++){
		$temp = $chromosomes[$chormo1][$i];
		$chromosomes[$chormo1][$i] = $chromosomes[$chormo2][$i];
		$chromosomes[$chormo2][$i] = $temp;
	}
	return $chromosomes;
}
echo "<br>";
//display all chromosomes
for ($i=0; $i<count($chromosomes); $i++) { 
	echo "Chromosome ".$i.": ";
	for ($j=0; $j<count($chromosomes[$i]); $j++) { 
		echo $chromosomes[$i][$j];
	}
	echo "<br>";
}

$chromosomes = Mutation($chromosomes,0,$chromosome_length,$courses_count,$rooms_count,$slots_count);

function Mutation($chromosomes,$chromo1,$chromosome_length,$courses_count,$rooms_count,$slots_count){
	$index1 = rand(0,$chromosome_length-1);
	$index2 = rand(0,$chromosome_length-2);
	return mute($index1,$chromosomes,$chromo1,$chromosome_length,$courses_count,$rooms_count,$slots_count);
}

function mute($index1,$chromosomes,$chormo1,$chromosome_length,$courses_count,$rooms_count,$slots_count){
	if($index1 % 3 == 0){
		$chromosomes[$chormo1][$index1] = rand(0,$courses_count);
		$chromosomes[$chormo1][$index1+1] = rand(0,$rooms_count);
		$chromosomes[$chormo1][$index1+2] = rand(0,$slots_count);
	}
	else if($index1 % 3 == 1){
		$chromosomes[$chormo1][$index1] = rand(0,$slots_count);
		$chromosomes[$chormo1][$index1+1] = rand(0,$courses_count);
		$chromosomes[$chormo1][$index1+2] = rand(0,$rooms_count);
	}
	else if($index1 % 3 == 2){
		$chromosomes[$chormo1][$index1] = rand(0,$rooms_count);
		$chromosomes[$chormo1][$index1+1] = rand(0,$slots_count);
		$chromosomes[$chormo1][$index1+2] = rand(0,$courses_count);
	}
	return $chromosomes;
}


echo "<br>";
//display all chromosomes
for ($i=0; $i<count($chromosomes); $i++) { 
	echo "Chromosome ".$i.": ";
	for ($j=0; $j<count($chromosomes[$i]); $j++) { 
		echo $chromosomes[$i][$j];
	}
	echo "<br>";
}




?>