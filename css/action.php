<?php
/**
 * onepiece-framework.com:/app/layout/white/css/action.php
 *
 * @creation  2017-09-07
 * @version   1.0
 * @package   op-skeleton
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
//	...
$extension = 'css';

//	...
$files = [
	'reset',
	'body',
	'header',
	'footer',
];

//	...
Webpack::Run(__DIR__, $files, $extension);
