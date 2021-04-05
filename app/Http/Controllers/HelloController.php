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
	public function index(){
		$data = ['msg' => 'これはコントローラーからのメッセージ'];
		return view('hello.index',$data);
	}
}
