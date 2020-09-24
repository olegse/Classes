<?php 

/* Exploring strtotime() function behavior via date() wrapper function.
 
    _date([$time = "now" [,$format = 'Y-m-d' [,$relative = "now"]]]);

  _date() will print out time specified by $time in format $format relatively
  to the $relative time. 

  Reference:

     · https://www.php.net/manual/en/function.date.php       output format
     · https://www.php.net/manual/en/datetime.formats.time.php     time string format
*/

function _date($time = "now", 
               $format = 'Y-m-d',
               $relative = "now") {

  /* DEBUG */
  print_r(func_get_args());

  /* Indent for the.. */
  $indent = 80;   

  if(is_int($time))
    $requested_time = "Requested time in '$time' seconds since epoch  ";
  else
  if($time == "now" || $time == time())
    $requested_time = "Requested current time/date ";
  else
    $requested_time = "Requested date '$time' "; 
    
  #JS tutorial on W3 to display result here
  #Construct report string
  #If relatively to is current time, display current time
  $requested_time .= "relatively to '".date('l jS F Y',strtotime($relative))."' in format of '".$format."'\n   => ";
  $date = date($format, strtotime($time,strtotime($relative)));
  $date = sprintf("%s 
                   %%
                  +%ds",
                             $requested_time,
                             $indent-strlen($requested_time)),
                             $date);

	return $date; 		
}
