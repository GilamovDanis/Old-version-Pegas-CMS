<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Blog_Posts extends ORM {
     protected $_table_name = 'blog_posts';
	 
	 protected $_has_many = array(
		'category' => array(
			'model' => 'shop_category',
			'through' => 'shop_item_categories',
			'foreign_key' => 'item_id',
			'far_key' => 'category_id'
		),
	);
} 