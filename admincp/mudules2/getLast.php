<?php

// setting up the time Zone
// It Depends on your location or your P.c settings
date_default_timezone_set('Asia/Ho_Chi_Minh');

function last_time($date_time){

   $timestamp = strtotime($date_time);	
   
   $strTime = array("second", "Phút", "Giờ", "Ngày", "Tháng", "Năm");
   $length = array("60","60","24","30","12","10");

   $currentTime = time();
   if($currentTime >= $timestamp) {
		$diff     = time()- $timestamp;
		for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
		$diff = $diff / $length[$i];
		}

		$diff = round($diff);
		if ($diff < 59 && $strTime[$i] == "second") {
			return 'Vừa Xong';
		}else {
			return $diff . " " . $strTime[$i] . " Trước ";
		}
		
   }
}