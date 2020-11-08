<?php

$i=0;
while ($i < 10) 
{
  if($i++ < 5) {
    echo "'$i' is still less than five</br>";
    continue;
  }
  echo "$i is more or equals to five</br>";
}
