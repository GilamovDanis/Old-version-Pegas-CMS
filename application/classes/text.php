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
	
	public static function translit($str) 
    {
         $tr = array(
             "А"=>"a",
             "Б"=>"b",
             "В"=>"v",
             "Г"=>"g",
             "Д"=>"d",
             "Е"=>"e",
             "Ё"=>"e",
             "Ж"=>"j",
             "З"=>"z",
             "И"=>"i",
             "Й"=>"y",
             "К"=>"k",
             "Л"=>"l",
             "М"=>"m",
             "Н"=>"n",
             "О"=>"o",
             "П"=>"p",
             "Р"=>"r",
             "С"=>"s",
             "Т"=>"t",
             "У"=>"u",
             "Ф"=>"f",
             "Х"=>"h",
             "Ц"=>"ts",
             "Ч"=>"ch",
             "Ш"=>"sh",
             "Щ"=>"sch",
             "Ъ"=>"",
             "Ы"=>"i",
             "Ь"=>"j",
             "Э"=>"e",
             "Ю"=>"yu",
             "Я"=>"ya",
             "а"=>"a",
             "б"=>"b",
             "в"=>"v",
             "г"=>"g",
             "д"=>"d",
             "е"=>"e",
             "ё"=>"e",
             "ж"=>"j",
             "з"=>"z",
             "и"=>"i",
             "й"=>"y",
             "к"=>"k",
             "л"=>"l",
             "м"=>"m",
             "н"=>"n",
             "о"=>"o",
             "п"=>"p",
             "р"=>"r",
             "с"=>"s",
             "т"=>"t",
             "у"=>"u",
             "ф"=>"f",
             "х"=>"h",
             "ц"=>"ts",
             "ч"=>"ch",
             "ш"=>"sh",
             "щ"=>"sch",
             "ъ"=>"y",
             "ы"=>"i",
             "ь"=>"j",
             "э"=>"e",
             "ю"=>"yu",
             "я"=>"ya", 
             " "=>"_",
             "/"=>"_",
             ","=>"_",
             "-"=>"_",
             "("=>"_",
             ")"=>"_",
             "["=>"_",
             "]"=>"_",
             "="=>"_",
             "+"=>"_",
             "*"=>"_",
             "?"=>"_",
             "\""=>"_",
             "'"=>"_",
             "&"=>"_",
             "%"=>"_",
             "#"=>"_",
             "@"=>"_",
             "!"=>"_",
             ";"=>"_",
             "№"=>"_",
             "^"=>"_",
             ":"=>"_",
             "~"=>"_",
             "\\"=>"_",
			 "."=>"_"
         );
         return strtr($str,$tr);
     }
}
