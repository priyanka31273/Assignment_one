
<?php
$m1=80;
$m2=90;
$m3=85;
$m4=90;
$m5=88;

if(($m1>=0 && $m1<=100) && ($m2>=0 && $m2<=100) && ($m3>=0 && $m3<=100) && ($m4>=0 && $m4<=100) && ($m5>=0 && $m5<=100))
{    
    
     
  if(($m1>33) && ($m2>33) &&($m3>33) &&($m4>33) && ($m5>33)){

     $sum= ($m1+$m2+$m3+$m4+$m5);
      echo"Total marks:".$sum ."\n";
      $avg= ($m1+$m2+$m3+$m4+$m5)/5;
      echo"Average Marks:".$avg ."\n";

  $grade=' ';
    switch($avg)
    {
       case($avg>=80 && $avg<=100):
         $grade='A+';
         break;
       case($avg>=70 && $avg<=79): 
        $grade='A'; 
        break;
       case($avg>=60 && $avg<=69): 
        $grade='A-'; 
        break;
       case($avg>=50 && $avg<=59): 
        $grade='B'; 
        break;
       case($avg>=40 && $avg<=49): 
        $grade='C'; 
        break;
     
       default: 
       $grade='D';


  };
  echo "Grade is:".$grade;
        
  }
    else
    echo"Grade is: F";
    
}
      else
        echo " Invalid Marks \n \n All Subject Marks should be 0 to 100";   
?>