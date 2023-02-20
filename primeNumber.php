<!--find the prime number upto 15 -->

<?php
$number=1;
while($number<15)
{
$count=0;
for($i=1; $i<=$number; $i++)
{
if($number%$i==0)
{
$count++;
}
}
if($count<3){
echo "<br>".$number;
}
$number = $number+1;
}
?>
