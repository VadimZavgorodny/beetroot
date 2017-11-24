<?php

header('Content-Type: text/html; charset=utf-8');

/*
http://php.net/manual/ru/ref.strings.php
http://php.net/manual/ru/ref.mbstring.php

array explode ( string $delimiter , string $string [, int $limit ] )
string implode ( string $glue , array $pieces ) || join()
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
string rtrim ( string $str [, string $character_mask ] )
string ltrim ( string $str [, string $character_mask ] )
string md5 ( string $str [, bool $raw_output = false ] )
string sha1 ( string $str [, bool $raw_output = false ] )
string nl2br ( string $string [, bool $is_xhtml = true ] )

mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
string strip_tags ( string $str [, string $allowable_tags ] )
int strlen ( string $string )
mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )

int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )
*/

/*$str = 'Иванов Иван Иванович';
$data = explode(' ', $str);
print_r($data);*/

/*$data = ['Иванов', 'Иван', 'Иванович'];
echo $str = implode(' ', $data);*/

/*$str = "\t<p>Hello</p>\n";
$str .= "\n<p>world!</p>\t";
// echo $str;
echo trim($str, "\t");*/

/*$str = '..... test,';
echo rtrim($str, ',');*/

/*$str = 'password';
echo md5(md5($str));*/

/*$str = "Hello\nworld\n";
echo nl2br($str);*/

//$str = '[i]Привет[/i]! Меня зовут [B]Вася[/b]!';
//// $str = str_replace('[b]', '<b>', $str);
//// $str = str_replace('[/b]', '</b>', $str);
//$search = ['[b]', '[/b]', '[i]', '[/i]'];
//$replace = ['<b>', '</b>', '<i>', '</i>'];
//// $str = str_replace($search, $replace, $str);
//$str = str_ireplace($search, $replace, $str);
//echo $str;

/*$str = '<i>Привет</i>! Меня зовут <b>Вася</b>! <script>alert("XSS")</script>';
echo strip_tags($str, '<b><i>');*/

/*// $str = 'hello';
$str = 'привет';
echo mb_strlen($str, 'utf-8');

$str = 'Привет, мир!';
 echo mb_strpos($str, 'и', 3, 'utf-8');

if( 0 !== false ) echo 'OK';
else echo 'NO';*/

/*$str = 'привет, мир!';
$str2 = 'ПРИВЕТ, МИР!';
// echo mb_strtoupper($str, 'utf-8');
// echo mb_strtolower($str, 'utf-8');*/

//$str = 'Привет, мир!';
//echo mb_substr($str, 0, 6, 'utf-8');
// echo mb_substr($str, 8, 3, 'utf-8');
//echo mb_substr($str, -4, 3, 'utf-8');

/*$str = '&amp;<h1><i>Привет</i>! Меня зовут <b>Вася</b>!</h1><iframe src="http://webformyself.com" height="100%" width="100%"></iframe><script>alert(\'XSS\')</script>';
echo htmlspecialchars($str, ENT_QUOTES, 'utf-8', false);*/

/*$str = '&amp;&lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;! Меня зовут &lt;b&gt;Вася&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot;http://webformyself.com&quot; height=&quot;100%&quot; width=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo htmlspecialchars_decode($str);*/