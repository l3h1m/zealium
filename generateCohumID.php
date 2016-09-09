<?php

       /**
	 *  Project Cohum(Emergency Services for People).
	 *
	 *  Generates CohumID for the client.
	 *
	 *  @l3h1m Developed on 09-September-2016.
	 *
	 *  
         */


       /**
	 *  After registering any user for cohum services.
	 *
	 *  Generates CohumID for the client.
	 *
	 *  @l3h1m Developed on 09-September-2016.
	 *
	 *  @return CohumID
         */

		$str = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);

		

		$memberid = 7009999; // 7009999 max
		$slot = 1;
		$series_slot = 1;

       /**
	 *  check memberid for slots of 10,000.
	 *
	 *  if true assign memberid else increase slot
	 *
	 *  @l3h1m Developed on 09-September-2016.
	 *
         */

		
		

		while (!($memberid >= 0 && $memberid < 10000)) { 	
			$memberid = $memberid - 10000;
			$slot++;
		}
       /**
	 *  check  slots of [A-Z].
	 *
	 *  if true assign slot else increase series_slot
	 *
	 *  @l3h1m Developed on 09-September-2016.
	 *
         */

		while (!($slot > 0 && $slot <= 26)) {
			$slot = $slot - 27;
			$series_slot++;
		}

		print_r($chars[$series_slot - 1] . $chars[$slot - 1] . $memberid);

       /**
	 *  Code For Unit Test.
	 *
	 *  @l3h1m Developed on 09-September-2016.
	 *
         */

		// 1. print_r($chars); Unit Test
		// 2. $result = implode(', ', $chars); Unit Test
		// 3. print_r($result.$memberid);

?>
