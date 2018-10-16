<?php
/*
Ysub: Is A Simple PHP Script
Job : Youtube Subscribe Live Count
By  : Oseid Aldary
*/
// Started //

// Msg Usage //
if ( $argc < 2 ){
  print "
db    db .d8888. db    db d8888b. 
`8b  d8' 88'  YP 88    88 88  `8D 
 `8bd8'  `8bo.   88    88 88oooY' 
   88      `Y8b. 88    88 88~~~b. 
   88    db   8D 88b  d88 88   8D 
   YP    `8888Y' ~Y8888P' Y8888P' 
                                  
";
  exit( "[#] Youtube Subscribes Checker [#]\n[>]   Coded By: Oseid Aldary   [<]\n----------------------------------\nUsage: ysub.php <YouToube Channel Url>\n\n\n" );
}
// Config //
  print "
db    db .d8888. db    db d8888b. 
`8b  d8' 88'  YP 88    88 88  `8D 
 `8bd8'  `8bo.   88    88 88oooY' 
   88      `Y8b. 88    88 88~~~b. 
   88    db   8D 88b  d88 88   8D 
   YP    `8888Y' ~Y8888P' Y8888P' 
   
";
echo "\033[1;37m[\033[1;32m+\033[1;37m] Channel: \033[1;32m ".$argv[1]."\n";
echo "\033[1;37m[\033[1;32m*\033[1;37m] Ysub Script:\033[1;32m Started\n";
echo "\033[1;32m[\033[1;37m~\033[1;32m] Start At: \033[1;33m".date("Y/m/d H:i:s")."\n";
echo "\033[1;32m[\033[1;37m@\033[1;32m] Refresh After Every[\033[1;37m5\033[1;32m]\033[1;37m Seconds\n\n";
while (1){
  $channel = $argv[1];
  $t = file_get_contents($channel);
  $pattern = '/yt-uix-tooltip" title="(.*)" tabindex/';
  preg_match($pattern, $t, $matches, PREG_OFFSET_CAPTURE);
  echo "\033[1;32m[\033[1;37m+\033[1;32m]\033[1;37m Have >>>\033[1;32m ".$matches[1][0]." \033[1;37m<<< \033[1;32mSubscribers\n";
  for($s=5; $s >=0; $s--){
  echo "After [ ${s}s ] \r";
  sleep(1);
  }
  echo "";
}
?>

/*
###############################################################
##################### 		      #########################
#####################  END OF SCRIPT  #########################
#####################                 #########################
###############################################################
#This Script by Oseid Aldary
#Thanks For Usage :)
#Have a nice day :)
#GoodBye
*/
