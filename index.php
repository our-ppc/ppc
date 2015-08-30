<?

define('test',true);
require_once('/system/loader.php');

$uri = getRequestUri();


$uri =str_replace(baseUrl() . '/', '/', $uri);


global $config;
$route = $config['route'];

$uri = urldecode($uri);
foreach ($route as $alias=>$target){
  $alias = '^' . $alias;
  $alias = str_replace('/', '\/', $alias);
  $alias = str_replace('*', '(.*)', $alias);

  if (preg_match('/'.$alias.'/', $uri)) {
    $uri = preg_replace('/'.$alias.'/', $target, $uri);
  }
}


$parts=explode('/',$uri);
$controller =$parts[1];
$method=$parts[2];

$params=array();
for($i=3;$i<count($parts);$i++)
{

  $params[]=$parts[$i];
}

$controllerClassname = ucfirst($controller) . "Controller";
$controllerInstance = new $controllerClassname();
call_user_func_array(array($controllerInstance, $method), $params);
