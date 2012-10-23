<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Date extends Kohana_Date {
   
   public static function timef($time=NULL) {
   $labelTime = date('d.m.Y', $time); 

		  $arrM = array( 
		  '01'=>'янв', '02'=>'фев', '03'=>'мар', '04'=>'апр',  
		  '05'=>'май', '06'=>'июн', '07'=>'июл', '08'=>'авг',  
		  '09'=>'сен', '10'=>'окт', '11'=>'ноя', '12'=>'дек' 
		  ); 

		  if ($labelTime == date('d.m.Y')) { 
			 return 'Сегодня в '.date('H:i', $time); 
		  } elseif ($labelTime == (date('d') - 1).'.'.date('m.Y')) { 
			 return 'Вчера в '.date('H:i', $time); 
		  } else { 
			 return date('d', $time).' '.$arrM[date('m', $time)].' '.date('Y', $time).' в '.date('H:i', $time); 
		  } 
   } 
}
?>