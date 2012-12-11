<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Shop_Category extends ORM {
     protected $_table_name = 'shop_categories';
	 
	 protected $_has_many = array(
		'item' => array(
			'model' => 'shop_item',
			'through' => 'shop_item_categories',
			'foreign_key' => 'category_id',
			'far_key' => 'item_id'
		),
	);
} 