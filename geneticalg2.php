<?php
//CLRS representation of chromosome "C for Course" "L for Lecturer" "R for Room" "S for total slots in a week"



class course
 {
	 public $course_id;
	 public $course_credits;
 }
 

 $room=array("0","1");
 // if there are two slot per day ,and total working days are 5 the total slots in a week =2*5=10
 $slot=array("0","1","2","3","4","5","6","7","8","9");
 
 $courses= new course();
$courses->course_id[0]=0;   $courses->course_credits[0]=3;
$courses->course_id[1]=1;   $courses->course_credits[1]=4;
$courses->course_id[2]=2;   $courses->course_credits[2]=3;
/*echo $courses->course_id[0];
echo $courses->course_id[1];
echo $courses->course_credits[1];*/

//for calculating the length of Chromosome we use SKS(sum of Credits hours of courses)

$sks=$courses->course_credits[0]+$courses->course_credits[1]+$courses->course_credits[2];
$len_chromosome=3*$sks;
//echo  $len_chromosome;

class genes
{
	public $course_id;
	public $room;
	public $slots;
}
$chromosome_arr=new genes();
$len=$sks;
for($i=0;$i<$len;$i++)
{
	$chromosome_arr->course_id[$i]=rand(0,2);
	
	$chromosome_arr->room[$i]=rand(0,1);
	$chromosome_arr->slots[$i]=rand(0,9);
	
}


$chromosome_arr1=new genes();
$len=$sks;
for($i=0;$i<$len;$i++)
{
	$chromosome_arr1->course_id[$i]=rand(0,2);
	$chromosome_arr1->room[$i]=rand(0,1);
	$chromosome_arr1->slots[$i]=rand(0,9);
	
}


crossover($chromosome_arr,$chromosome_arr1,$len);
Mutation($chromosome_arr,$len);


//var_dump($chromosome_arr);

//Here we are taking a population of two chromosomes 
//select both of these without applying selection method for now
//Now Code for Crossover

function crossover($chromosome_arr,$chromosome_arr1,$c)
{
	echo "<center>";
	echo "<br/><b>Crossover Function Answer is : </b>"."<br/>"."before splitting  :<br/> chromosome array 1 : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr->course_id[$i];
		echo $chromosome_arr->room[$i];
		echo $chromosome_arr->slots[$i];
	    echo " ";
	}
	echo "<br/>"."chromosome array 2 : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr1->course_id[$i];
		echo $chromosome_arr1->room[$i];
		echo $chromosome_arr1->slots[$i];
		echo " ";
	}
	$q=rand(0,$c-1);
	$split=$q;
	for($i=$split;$i<$c;$i++)
	{
		$temp1= $chromosome_arr->course_id[$i];
		$chromosome_arr->course_id[$i]=$chromosome_arr1->course_id[$i];
		$chromosome_arr1->course_id[$i]=$temp1;
	
		
						$temp3= $chromosome_arr->room[$i];
						$chromosome_arr->room[$i]=$chromosome_arr1->room[$i];
						$chromosome_arr1->room[$i]=$temp3;
		
								$temp4= $chromosome_arr->slots[$i];
								$chromosome_arr->slots[$i]=$chromosome_arr1->slots[$i];
								$chromosome_arr1->slots[$i]=$temp4;
	}
	echo "<br/>"."after splitting  :<br/> chromosome array 1 : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr->course_id[$i];
		echo $chromosome_arr->room[$i];
		echo $chromosome_arr->slots[$i];
	    echo " ";
		
	}
	echo "<br/>"."chromosome array 2 : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr1->course_id[$i];
		echo $chromosome_arr1->room[$i];
		echo $chromosome_arr1->slots[$i];
		echo " ";
	}


}



//Now code for Mutation

function Mutation($chromosome_arr,$c)
{
	echo "<center>";
	echo "<br/><b>Mutation Function Answer is : </b>"."<br/>"."before Mutation : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr->course_id[$i];
		echo $chromosome_arr->room[$i];
		echo $chromosome_arr->slots[$i];
	    echo " ";
	}
	
	//Select index randomly from the chromosome and replace its value from its domain .
	$len_chromo=$c;
	$index= rand(0,$len_chromo-1);
	$index1=rand(0,$len_chromo-2);
					//	echo "</br>"."index choosing". $index."<br/>";		
				
				$chromosome_arr->course_id[$index]=rand(0,2);
				$chromosome_arr->room[$index]=rand(0,1);
				$chromosome_arr->slots[$index]=rand(0,9);
				
				
				//echo "</br>"."index choosing". $index1."<br/>";		
				
				$chromosome_arr->course_id[$index1]=rand(0,2);
				$chromosome_arr->room[$index1]=rand(0,1);
				$chromosome_arr->slots[$index1]=rand(0,9);
						/*if($index%3==0)
						{
							$exchange=rand(0,2);
							$chromosome_arr->course_id[$index]=$exchange;
						}
						else 
						{		 	
							if($index-1%3==0)
							{$exchange=rand(0,1);
							$chromosome_arr->room[$index]=$exchange;
							}
							
							else
							{
								$exchange=rand(0,9);
								$chromosome_arr->slots[$index]=$exchange;
							}
						}
					
					echo "</br>"."====change value=============".$exchange;
	*/
	
	echo "<br/>"."<br/>"."after Mutation : ";
	for($i=0;$i<$c;$i++)
	{
		echo $chromosome_arr->course_id[$i];
		echo $chromosome_arr->room[$i];
		echo $chromosome_arr->slots[$i];
	    echo " ";
	}
	echo "</center>";
	
}




?>