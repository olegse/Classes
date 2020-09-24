<?php

require("_date.php");
# Time string formats
#

# Date formats
#
# https://www.php.net/manual/en/datetime.formats.date.php
#
#  Localized notations:
#     
#     American month and day:
#       (0?[0-9]|1[0-2])/([0-2]?[0-9]|3[0-1](st|nd|rd|th)?)
#
var_dump(date('j F Y ga',strtotime("09/11"))); // 11 September (2020 12am default?)
var_dump(date('jS F',strtotime("12/5th"))); // 5th December
//                                  ^ suffix allowed

var_dump(date('j F Y ga',strtotime("9/11",strtotime("2011")))); // 11 September 2020 12am 
                                                                //                ^^
var_dump(date('j F Y ga',strtotime("9/11/2011"))); // 11 September 2011 12am 

# Time formats 
#
# https://www.php.net/manual/en/datetime.formats.time.php
#
#  12-hour notation
#
#     Hour only with meridian     
#       0?[1-9]|1[0-2]
#
var_dump(date('j F Y ga', strtotime("8am")));


# date() formats:
# g     12-hour format (1-12)
# a     am or pm
# S     English ordinal suffix for the day of the month (2ch)
