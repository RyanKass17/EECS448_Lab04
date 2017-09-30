<?php
function mult($x, $y)
{
    $z = $x * $y;
    return $z;
}
echo '<table border="1">';
for($i=0;$i<=100;$i++)
{
  echo '<tr>';
  if($i==0)
  {
    echo '<td>' . " " . '</td>';
  }
  else
  {
    echo '<td>' . $i . '</td>';
  }
  for($j=0;$j<=100;$j++)
  {
    if($i == 0)
    {
      echo '<td>' . mult(1,$j) . '</td>';
    }
    else
    {
      echo '<td>' . mult($i,$j) . '</td>';
    }
  }
  echo '</tr>';
}
echo '</table>';
?>
