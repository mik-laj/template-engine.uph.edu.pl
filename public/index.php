<?php
define('ABS_PATH', __DIR__.'/../');

include ABS_PATH . '/autoloader.php';

$filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
if (php_sapi_name() === 'cli-server' && is_file($filename)) {
    return false;
}

$engine = new \Uph\Miklaj\TemplateEngine\TemplateEngine();
$engine->render(ABS_PATH.'/template/child.php');
?>
