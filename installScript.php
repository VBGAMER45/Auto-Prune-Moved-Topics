<?php
/**
 * Auto Prune Moved Topics (apmt)
 *
 * @package apmt
 * @author emanuele
 * @copyright 2011 emanuele, Simple Machines
 * @license http://www.simplemachines.org/about/smf/license.php BSD
 *
 * @version 0.1.0
 */

if (!defined('SFM') && file_exists(dirname(__FILE__ . '/SSI.php')))
	require_once(dirname(__FILE__ . '/SSI.php'));
elseif (file_exists('./SSI.php'))
	require_once('./SSI.php');
else
	die('No SMF, no SSI, where do you want to go?');

db_extend('Packages');

$smcFunc['db_add_column'](
	'{db_prefix}boards',
	array(
		'name' => 'last_pruned',
		'type' => 'int',
		'default' => 0
));

$smcFunc['db_add_column'](
	'{db_prefix}boards',
	array(
		'name' => 'prune_frequency',
		'type' => 'int',
		'default' => 0
));

?>