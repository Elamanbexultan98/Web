<?php

class Comment
{
	private $data = array();
	
	public function __construct($row)
	{
		
		$this->data = $row;
	}
	
	public function markup()
	{
		
		$d = &$this->data;
		
		$link_open = '';
		$link_close = '';
		
		if($d['url']){
			
			
			$link_open = '<a href="'.$d['url'].'">';
			$link_close =  '</a>';
		}
		
		
		$d['dt'] = strtotime($d['dt']);
		
		
		$url = 'http://'.dirname($_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]).'/img/default_avatar.gif';
		
		return '
		
			<div class="comment">
				<div class="avatar">
					'.$link_open.'
					
					'.$link_close.'
				</div>
				
				<div class="name">'.$link_open.$d['name'].$link_close.'</div>
				<div class="date" title="Added at '.date('H:i \o\n d M Y',$d['dt']).'">'.date('d M Y',$d['dt']).'</div>
				<p>'.$d['body'].'</p>
			</div>
		';
	}
	
	public static function validate(&$arr)
	{
		
		
		$errors = array();
		$data	= array();
		
		
		
		if(!($data['email'] = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)))
		{
			$errors['email'] = 'Өтінем, Email-ді дұрыс жазыңыз.';
		}
		
		if(!($data['url'] = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)))
		{
			
			$url = '';
		}
		
		
		
		if(!($data['body'] = filter_input(INPUT_POST,'body',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['body'] = 'Өтінем, пікіріңізді жазыңыз.';
		}
		
		if(!($data['name'] = filter_input(INPUT_POST,'name',FILTER_CALLBACK,array('options'=>'Comment::validate_text'))))
		{
			$errors['name'] = 'Өтінем, атыңызды жазыңыз.';
		}
		
		if(!empty($errors)){
			
		
			
			$arr = $errors;
			return false;
		}
		
		
		foreach($data as $k=>$v){
			$arr[$k] = mysql_real_escape_string($v);
		}
		
		
		
		$arr['email'] = strtolower(trim($arr['email']));
		
		return true;
		
	}

	private static function validate_text($str)
	{
		
		if(mb_strlen($str,'utf8')<1)
			return false;
		
		
		$str = nl2br(htmlspecialchars($str));
		
			$str = str_replace(array(chr(10),chr(13)),'',$str);
		
		return $str;
	}

}

?>