<?php
  
function cobuBubbleSort($nums)
{
  for($i=0;$i<count($nums);$i++)
  {
    for($j=$i;$j<count($nums);$j++)
    {
      if($nums[$i] > $nums[$j])
      {
        $akg = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $akg;
      }
    }
  }
  return $nums;
}

$num = [1,2,43,5,21,42,3,9,6,10,22,31,32412,123,54];
print_r(cobuBubbleSort($num));

?>
