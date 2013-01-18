<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Blog_Categories extends ORM {
     protected $_table_name = 'blog_categories';
	 
	 protected $_has_many = array(
		'post' => array(
			'model' => 'blog_posts',
			'through' => 'blog_posts_categories',
			'foreign_key' => 'category_id',
			'far_key' => 'post_id'
		),
	);
} 