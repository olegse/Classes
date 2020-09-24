<?php

/* Example of sourcing an ".sql" file.
 */

shell_exec("mysql -u $user --password=$pass $db < authors.sql");
