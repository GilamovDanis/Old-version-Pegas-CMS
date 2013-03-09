<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Blog_Posts extends ORM {

	 protected $_table_name = 'blog_posts';

	 protected $_has_many = array(
		'category' => array(
			'model' => 'Blog_Categories',
			'through' => 'blog_posts_categories',
			'foreign_key' => 'post_id',
			'far_key' => 'category_id'
		),
	);
} 