<?php defined('SYSPATH') or die('No direct script access.');
 
abstract class Session extends Kohana_Session {
   public function update($key, $value)
   {
     return $this->_data[$key] = $value;
   }
}
?>