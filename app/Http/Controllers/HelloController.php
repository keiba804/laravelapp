<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head, $style, $body, $end;

$head ='<html><head>';
$style = <<<EOF
<style>
body{fontsize:16px; color:#999; }
h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0;}
</style>
EOF;
$body = '</head><body>';
$end = '</body></html>';

function tag($tag, $txt){
	return "<{$tag}>".$txt."</{$tag}>";
}

class HelloController extends Controller{
	public function index(Request $request, Response $response){
		// global $head, $style, $body, $end;
		// $html = $head . tag('title','Hello/Index'). $style .$body
		// 	.tag('h1','Index') . tag('p','this is Index Page')
		// 	. '<a href="/hello/other"> go to other page</a>'
		// 	. $end;
		// return $html;

		$html = <<<EOF
		<html>
		<head>
		<title>Hello</title>
		<style>
		body{fontsize:16px; color:#999; }
		h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0;}
		</style>
		</head>
		<body>
		<h1>Hello</h1>
		<h3>Request</h3>
		<pre>{$request}</pre>
		<h3>Response</h3>
		<pre>{$response}</pre>
		</body>
		</html>
		EOF;

		$response->setContent($html);
		return $response;

	// public function other(){
	// 	global $head, $style, $body, $end;
	// 	$html = $head . tag('title','Hello/Other'). $style .$body
	// 		.tag('h1','Other') . tag('p','this is other Page')
	// 		. '<a href="/hello"> go to index page</a>'
	// 		. $end;
	// 	return $html;
	// }

  //   public function __invoke(){
  //   	return <<<EOF
			// <html>
			// <head>
			// <title>Hello</title>
			// <style>
			// body{fontsize:16px; color:#999; }
			// h1{font-size:100pt; text-align:right; color:#eee; margin:-40px 0 -50px 0;}
			// </style>
			// </head>
			// <body>
			// <h1>Single Action</h1>
			// <p>これはシングルアクションです<p>
			// </body>
			// </html>
		// EOF;
	}
}
