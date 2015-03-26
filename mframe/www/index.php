<?php
define('ROOT_PATH', dirname(dirname(__FILE__)));
define('BASE_PATH', str_replace(array('\\'), DIRECTORY_SEPARATOR, dirname(__FILE__)));

$start = microtime(true);
define('DEBUG', true);
$config = require ROOT_PATH.'/config.php';

require ROOT_PATH.'/core/BaseController.php';
require ROOT_PATH.'/core/BaseModel.php';
require ROOT_PATH.'/core/BaseView.php';

require ROOT_PATH.'/core/Route.php';
$route = new Route();
$return_status = $route->run();
if(DEBUG){
	echo "<br/>";
	echo $return_status; 
	echo "<br/>";
}
echo 'RUNTIME: '.(microtime(true)-$start).'<>'.number_format(microtime(true)-$start, 4). 's';
exit(0);
