<!-- print pattern like this
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5  -->

<?php
for($i=1; $i<=5; $i++){
for($j=1; $j<=$i; $j++){
echo $j;
}
echo "<br>";
}
?>



<!-- print pattern in reverse order 
5 4 3 2 1
4 3 2 1
3 2 1
2 1  
1    -->

<?php  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo $j;  
}  
echo "<br>";  
}  
?>  



<!-- print pattern  
1
2 2
3 3 3
4 4 4 4
5 5 5 5 5  -->

<?php
for($i=1; $i<=5; $i++){
for($j=1; $j<=$i; $j++){
echo $i;
}
echo "<br>";
}
?>

<!-- print pattern
5 5 5 5 5 
4 4 4 4
3 3 3
2 2
1      -->

<?php
for($i=5; $i>=1; $i--){
for($j=$i; $j>=1; $j--){
echo $i;
}
echo "<br>";
}
?>


<!-- print pattern 
* * * * *
* * * *
* * *
* *
*     -->
<?php  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "* ";  
}  
echo "<br>";  
}  
?>  


<!-- 
*
* *
* * *
* * * *
* * * * *
 -->

 <?php  
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "* ";  
}  
echo "<br>";  
}  
?> 


<!--  pattern
1
1 1
1 1 1
1 1 1 1
1 1 1 1 1   -->
  <?php  
for($i=0;$i<=5;$i++){  
for($j=1;$j<=$i;$j++){  
echo "1 ";  
}  
echo "<br>";  
}  
?> 


<!-- pattern
1 1 1 1 1
1 1 1 1
1 1 1
1 1
1    -->
<?php  
for($i=0;$i<=5;$i++){  
for($j=5-$i;$j>=1;$j--){  
echo "1 ";  
}  
echo "<br>";  
}  
?> 