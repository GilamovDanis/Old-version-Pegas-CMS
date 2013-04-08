<?php defined('SYSPATH') or die('No direct script access.');

class File extends Kohana_File {

	public static function translit($st)
	{
    $st = mb_strtolower($st, "utf-8");
    $st = str_replace(array(
    '?','!',',',':',';','*','(',')','{','}','[',']','%','#','�','@','$','^','-','+','/','\\','=','|','"','\'','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�','�',' ','�','�','�','�','�','�','�','�'), array('_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','_','a','b','v','g','d','e','e','z','i','y','k','l','m','n','o','p','r','s','t','u','f','h','j','i','e','_','zh','ts','ch','sh','shch','','yu','ya'), $st);
    $st = preg_replace("/[^a-z0-9_.]/", "", $st);
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