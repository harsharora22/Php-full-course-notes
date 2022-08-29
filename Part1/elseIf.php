<?php  
$per=91;
if ($per>=90 && $per<=100) {
  echo "You are in Merit!";
}elseif($per>80 && $per<90){
echo "Your grade is 'A'";
}elseif($per>70 && $per<80){
echo "Your grade is 'B+'";
}elseif($per>60 && $per<70){
echo "Your grade is 'B'";
}elseif($per>50 && $per<60){
echo "Your grade is 'C+'";
}elseif($per>40 && $per<50){
echo "Your grade is 'C'";
}elseif($per>32 && $per<4){
echo "Your grade is 'D'";
}elseif($per<33){
echo "Fail :( Paper davara de hun!";
}else{
  echo "Please enter valid Percentage";
}
?>