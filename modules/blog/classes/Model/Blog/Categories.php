<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Blog_Categories extends ORM {

     protected $_table_name = 'blog_categories';

	 protected $_has_many = array(
		'post' => array(
			'model' => 'Blog_Posts',
			'through' => 'blog_posts_categories',
			'foreign_key' => 'category_id',
			'far_key' => 'post_id'
		),
	);
	
	public static function unique_key($value)
	{
		return !(bool) DB::select(array(DB::expr('COUNT(*)'), 'total_blog'))
			->from('blog_categories')
			->where('category_url', '=', Text::translit($value))
			->execute()
			->get('total_blog');
	}
} 