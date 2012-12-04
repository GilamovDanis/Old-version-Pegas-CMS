<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Guestbook extends ORM {

	public static function unique_key($value)
	{
		return !(bool) DB::select(array(DB::expr('COUNT(*)'), 'total_users'))
			->from('users')
			->where('username', '=', $value)
			->execute()
			->get('total_users');
	}
} 