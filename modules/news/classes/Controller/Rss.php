<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Rss extends Controller {

	public function action_index()
	{   
	/**
	* Вывод RSS потока
	**/
	$config=Kohana::$config->load('main');
	
	$info = array(
            'title' => 'Новости',
            'language' => 'ru',
            'description' => 'Новости от '.$config->get('title'),
            'link' => '/news/rss',
            'pubDate' => time());
			
	$news=ORM::factory('News')->find_all();
	
	$items=array();
	
	foreach ($news as $newss)
    {
                $items[] = array(
                    'title' => $newss->title,
                    'link' => '/news/view/'.$newss->id,
                    'description' => $newss->content,
                    'pubDate' => $newss->created
                );
    }


    header('Content-Type: text/xml');

    $this->response->body(Feed::create($info, $items));
	}
	
	
} // End Rss News
