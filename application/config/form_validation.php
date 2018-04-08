<?php

$config = [

	'add_article_rules'=> [
								[
								'field' => 'title',
								'lable' =>'Article title',
								'rules' => 'required'
								],
								[
								'field' => 'body',
								'lable' => 'Article body',
								'rules' => 'required'
								]

						],

	'admin_login'=> [

								[
								'field' => 'username',
								'lable' => 'User Name',
								'rules' => 'required|alpha'
								],
								[
								'field' => 'password',
								'lable' => 'Password',
								'rules' => 'required'
								]


				 ]

];

?>