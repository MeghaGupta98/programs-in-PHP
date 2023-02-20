<!-- WAP to skip a number 

1
2
3
4
7
8
9
10

-->

<?php
for($i=1; $i<=10; $i++){
if($i==5 ||$i==6){
continue;
}
echo "<br>".$i;
}
?>



<!-- break program 
1
2
3
4
-->

<?php
for($i=1; $i<=10; $i++){
if($i==5){
break;
}
echo "<br>".$i;
}
?>