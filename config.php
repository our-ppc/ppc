<?
if (!defined('test')){
  echo "Forbidden Request";
exit;
}


global $config;
$config['db']['host'] = 'localhost';
$config['db']['user'] = 'root';
$config['db']['pass'] = '';
$config['db']['name'] = 'ppc';

$config['lang'] = 'fa';

$config['salt'] = 'kjsghj.?>l;lj.,/koi675534.,jjgd';

$config['base'] = '/ppc';

$config['route'] = array(
  '/login' => '/user/login',
  '/profile' => '/user/profile',
  '/ورود' => '/user/login'
);