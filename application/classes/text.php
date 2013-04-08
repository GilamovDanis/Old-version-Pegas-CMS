<?php defined('SYSPATH') or die('No direct script access.');

class Text extends Kohana_Text {
	
	public static function pagebreak ($text , array $attributes = NULL) {
		
	if ($text_position_cut=UTF8::strpos($text, '<!-- pagebreak -->')) {
    
	$text=UTF8::substr($text,0,$text_position_cut);
	
		if (isset($attributes['link'])) {
			if (!isset($attributes['title'])) {
			  $attributes['title']='Читать дальше';
			}
		
		$text.='<br />'.HTML::anchor($attributes['link'], $attributes['title']);
		} 
	}
		return $text;
	}

	public static function auto_p($str, $br = TRUE)
	{
		// Trim whitespace
		if (($str = trim($str)) === '')
			return '';

		// Standardize newlines
		$str = str_replace(array("\r\n", "\r"), "\n", $str);

		// Trim whitespace on each line
		$str = preg_replace('~^[ \t]+~m', '', $str);
		$str = preg_replace('~[ \t]+$~m', '', $str);

		// The following regexes only need to be executed if the string contains html
		if ($html_found = (strpos($str, '<') !== FALSE))
		{
			// Elements that should not be surrounded by p tags
			$no_p = '(?:p|div|h[1-6r]|ul|ol|li|blockquote|d[dlt]|pre|t[dhr]|t(?:able|body|foot|head)|c(?:aption|olgroup)|form|s(?:elect|tyle)|a(?:ddress|rea)|ma(?:p|th))';

			// Put at least two linebreaks before and after $no_p elements
			$str = preg_replace('~^<'.$no_p.'[^>]*+>~im', "\n$0", $str);
			$str = preg_replace('~</'.$no_p.'\s*+>$~im', "$0\n", $str);
		}

		// Do the <p> magic!
		$str = trim($str);
		$str = preg_replace('~\n{2,}~', "</p>\n\n<p>", $str);

		// The following regexes only need to be executed if the string contains html
		if ($html_found !== FALSE)
		{
			// Remove p tags around $no_p elements
			$str = preg_replace('~<p>(?=</?'.$no_p.'[^>]*+>)~i', '', $str);
			$str = preg_replace('~(</?'.$no_p.'[^>]*+>)</p>~i', '$1', $str);
		}

		// Convert single linebreaks to <br />
		if ($br === TRUE)
		{
			$str = preg_replace('~(?<!\n)\n(?!\n)~', "<br />\n", $str);
		}

		return $str;
	}
	
	public static function translit($st)
	{
    $st = mb_strtolower($st, "utf-8");
    $st = str_replace(array(
    '?','!','.',',',':',';','*','(',')','{','}','[',']','%','#','№','@','$','^','-','+','/','\\','=','|','"','\'','а','б','в','г','д','е','ё','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ъ','ы','э',' ','ж','ц','ч','ш','щ','ь','ю','я'), array('_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','a','b','v','g','d','e','e','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','j','i','e','_','zh','ts','ch','sh','shch','','yu','ya'), $st);
    $st = preg_replace("/[^a-z0-9_]/", "", $st);
    $st = trim($st, '_');

    $prev_st = '';
    do
    {
        $prev_st = $st;
        $st = preg_replace("/_[a-z0-9]_/", "_", $st);
    }
    while($st != $prev_st);

    $st = preg_replace("/_{2,}/", "_", $st);
    return $st;
	}
}
