<!DOCTYPE >
<html>
<head>
	<title></title>
</head>
<body>

<?php

$phrase = "to be or not ";
$age = 6;
$float =30.9;
$bollean = false;

echo $phrase[3];
echo substr($phrase, 8, 3);

echo 5+9;
$num =10;
$num +3;
echo pow(100);
echo ceil(3.7);

//user input
//form

<form action= "prac.php" method="get">
 Name: <input type="text" name="name">
 <input type="submit">
</form>

?>
<br/>
Your name is <?php
echo $_GET["name"]
?>
<?php
<form action= "prac.php" method="get">
  <input type="number" name="num1">
 <br/>
 <input type="number" name="num2">

 <input type="submit">
</form>
?>
Answer: <?php
echo $_GET["num1"] + $_Get["num2"]
?>

<!-- arrays-->
<?php
$friends =array("Bernardo", "John", "Bob");
echo $friends[1]; ="Dwiet";
echo $friends[1];
echo count($friends);
 ?>
 <form action= "prac.php" method="post">
  <input type="checkbox" name="fruits[]" value="apples"</br>
	<input type="checkbox" name="fruits[]" value="orange"</br>
	<input type="checkbox" name="fruits[]" value="pear"</br>
  <input type="submit">
 </form>
<?php
$fruits =$_POST["fruits"];
echo $fruits[];
?>
<!--associative arrays-->

<form action= "prac.php" method="post">
 <input type="text" name="student">
 <input type="submit">
</form>
<?php
//key, value
$grades = array("Jim"=>"A+", "Pam"=>"B+", "Jim"+>"C+");

echo $grades[$_POST["student"]];
?>
<!--functions with parameters-->
<?php function Hi($name, age) {
	echo "Hi $name, you are age </br>";
}
Hi("Dave", 40);
Hi("Bob", 50);
 ?>
 <!-- return statement-->
 <?php
 function cube(num){
	 // return breaks out of function, is last line, so hello isn't printed
	return  $num * $num * $num;
	echo "hello";
 }
 //pass value through function
 echo cube(4);

  ?>
	<!-- if statements-->
	<?php
	$isMale =true;
	$isTall =true;
	// && = and, || = or, != not
	if ($isMale  && $isTall){
		echo "Man";
	} elseif($isMale  && !$isTall){
		echo "small boy";
	}

	else{
		echo "girl";
	}
	?>
	<!--compare functions-->
<?php
function getMax($num1, $num2){
	if($num1 > $num2){
		return $num1;
	} else {
		return $num2;
	}
}
echo getMax(9,30);
?>
<!--make calculator uing if statements-->
<form action= "prac.php" method="post">
 First Num:<input type="number" step = "0.1" name="num1"</br>
 OP:<input type="textbox"name="op"</br>
 Second Num:<input type="number" name="num2" </br>
 <input type="submit">
</form>
<?php
$num1 =$_POST["num1"];
$num2 =$_POST["num2"];
$op = $_POST["op"];

if($op == "+ "){
	echo $num1 + $num2;
} elseif($op == "-"){
	echo $num1 - $num2;
} elseif($op == "/"){
	echo $num1 / $num2;
} elseif($op == "*"){
	echo $num1 * $num2;
} else {
	echo "invalid operator";
}
	 ?>
	 <!--switch statement-->
	 <form action ="prac.php" method="post">
		 <input type = "text" name="grade">
		 <input type ="submit">
	 </form>
	 <?php
	 $grade =$_POST["grade"];
	 switch ($grade){
		 case "A":
		 echo "Great";
		 break;
		 case "B";
		 echo "Good";
		 break;
		 case "C";
		 echo "You did well";
		 break;
		 //idefault for invalid input
		 default "invalid grade";
	 }
	 ?>
	 <!-- while and do while loops-->
	 </<?php
	 //start
	 $index =1;
	 //check condition
	 while($index <=5){
		 //print
		 echo " $index </br>";
		 //what start should do
		 $index ++;
	 }

	 //do while-check condition second
	 $index =6;
	 do{
	 echo " $index </br>";
		 $index ++;
	 }while($index <=5);
	  ?>
		<!--for loops-->
		<!--compare while and for loop-->
		<?php
		//the while
		$index =1;
	  while($index <=5){
	 	 echo " $index </br>";
	 	 $index ++;
	  }
		//the for
		for($i =1; $i <=5; $i++){
			echo "$i </br>";
		}
		//for loops
		$nums = array(4.8.14.22.40);
		for ($i =0; $i <= count ($nums); $i++){
			echo "$nums[$i] </br>";
		}
		 ?>
		 <!--comments-->
		 <?php
		 // either //, for multiple lines use /*, */
		  ?>
			<!--include HTML-->
			<?php
			//includes that page include "header.html"
			?>
			<!--include HP-->
			<?php
			$title ="mike";
			$author: "brown";
     // include article-header.php
			 ?>
			 <!--classes and objects-->
			 <!--custom data for things that are more complex than one variable/string-->
			 <?php

			 //the object- template
          class Book{
          var $title;
					var $author;
					var $pages;

						}
         //class of the book-book object
						$book1 =new Book();
						$book1 ->title ="harry Potter";
						$book1 ->author ="Rowling";
						$book1 ->pages =400;

						$book2 =new Book();
						$book2 ->title ="Lord Of the Rings";
						$book2 ->author ="Tolkien";
						$book2 ->pages =700;

						echo $book1 ->title;
						//constructors- easier to make multiple objects-compare to above
				 	 function _construct($aTitle, $aAuthor, $aPages){
						 $this->title = $aTitle;
						 $this ->authot =$aAuthor;
						 $this -> pages =$aPages;

				 	 }
					 $book1 =new Book ("Harry Potter", "Rowling", 400);
					 $book2 =new Book ("Lord Of The Rings", "Tolkin", 700);

					 echo $book1 ->title;
         ?>
				 <!-- object functions-->
				 <?php
				 //constructor of students
				 class Student {
					 var $name;
					 var $major;
					 var $gpa;
				 }
				  function _construct($name, $major, $gpa){
						$this->name =$name;
						$this->major =$major;
						$this->gpa =$gpa;
						   	}
					//function if inhonor roll for 3.5 or above
					//can use function for multiple objects
					function hasHonors(){
						if($this ->gpa >=3.5)
						return "true";
					}
					return false;
				}
					$student1 =new Student ("Jim", "Accounting", 3.0);
					$student2 =new Student ("Abe", "CIS", 4.0);

        echo $student1 ->hasHonors();//false
				echo $student2 ->hasHonors();//true
				 ?>
				 <!-- getters and setters-->
				 <?php
				 //construt
				 class Movie {
					 public $title;// var and publicis interchangable, usually use public
					 //limit ratings to valid rating, only code set in class (constructor)  can be accessed
					private $rating;
				 }
					function _construct($title, $rating){
						$this->title =$title;
						$this->rating =$rating;
						}
						//get rating even though its private
						function getRating(){
							return $this->rating;
						}



        $avengers =new Movie("Avengers, PG-13");

      echo $avengers ->rating;
								?>
								<!-- inheritance-->
								<?php
            class Chef {
	           function makeChicken(){
							 echo "Chef makes chicken </br>";
						 }
						 function makesSalad(){
							 echo "Chef makes salad </br>";
						 }
						 function makeBeef(){
							 echo "Chef makes beef </br> ";
						 }
            }
						class ItalianChef extends Chef{
							//do above plus more, inherit the normal chef functionality
							function makePasta();
							echo "made pasta";
						}
						//override inheritad class
						function makeBeef() {
							echo "chef makes different";
						}
						$Chef =new Chef();
						$Chef->makeChicken();

						$ItalianChef =new ItalianChef();
						$ItalianChef->makeChicken();
						$ItalianChef->makePasta();
								?>
</body>
</html>
