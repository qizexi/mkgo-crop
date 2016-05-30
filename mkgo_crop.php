<?php
	//图片数据
	$imgdata = preg_replace('/data\:(.*)\;base64\,/U', '', $_POST['imgdata']);
	//图片临时保存
	$time = time();
	$filename = './tmp/mkgo_'.$time.'.png';
	file_put_contents($filename, base64_decode(str_replace(' ', '+', $imgdata)));
	
	echo 'ok';
	