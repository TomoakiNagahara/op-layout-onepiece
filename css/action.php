<?php
/** op-layout-onepiece:/css/action.php
 *
 * @created    2017-09-07
 * @updated    2023-03-24 2.0: Automatically entry
 * @version    2.0
 * @package    op-layout-onepiece
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** Declare strict
 *
 */
declare(strict_types=1);

/** namespace
 *
 */
namespace OP;

//	...
$return = [];

//  ...
$file_extention = '.css';

//	...
foreach( glob(__DIR__."/*{$file_extention}") as $file ){
    //	...
    if( $file[0] === '.' or $file[0] === '_' ){
        continue;
    }

    //	...
    $name = substr($file, 0, -(strlen($file_extention)));

    //	...
    $return[] = $name;
}

//	...
return $return;
