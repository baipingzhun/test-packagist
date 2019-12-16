<?php
$dir = dirname(__FILE__).'\funs';

// 打开目录，然后读取其内容
$res = [];
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false ){

            var_dump($file);
            if ($file != '.' && $file != '..'){
                $file_path = dirname(__FILE__).'\funs\\'.$file;
                $res[] = $file_path;
            }
        }
        closedir($dh);
    }
}

foreach ($res as $v){
    include $v;
}
echo getV();

var_dump(jixuan());


