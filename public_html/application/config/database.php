<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7.
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

switch (ENVIRONMENT) {
    case 'development':
        $active_group = 'development';
        break;
    case 'staging':
        $active_group = 'staging';
        break;
    default:
        $active_group = 'production';
        break;
}


$active_record = TRUE;

$db['development']['hostname'] = 'localhost';
$db['development']['username'] = 'development';
$db['development']['password'] = 'development';
$db['development']['database'] = 'development';
$db['development']['dbdriver'] = 'mysql';
$db['development']['dbprefix'] = '';
$db['development']['pconnect'] = FALSE;
$db['development']['db_debug'] = TRUE;
$db['development']['cache_on'] = FALSE;
$db['development']['cachedir'] = '';
$db['development']['char_set'] = 'utf8';
$db['development']['dbcollat'] = 'utf8_general_ci';
$db['development']['swap_pre'] = '';
$db['development']['autoinit'] = TRUE;
$db['development']['stricton'] = TRUE;

$db['staging']['hostname'] = 'localhost';
$db['staging']['username'] = 'staging';
$db['staging']['password'] = 'staging';
$db['staging']['database'] = 'staging';
$db['staging']['dbdriver'] = 'mysql';
$db['staging']['dbprefix'] = '';
$db['staging']['pconnect'] = FALSE;
$db['staging']['db_debug'] = FALSE;
$db['staging']['cache_on'] = FALSE;
$db['staging']['cachedir'] = '';
$db['staging']['char_set'] = 'utf8';
$db['staging']['dbcollat'] = 'utf8_general_ci';
$db['staging']['swap_pre'] = '';
$db['staging']['autoinit'] = TRUE;
$db['staging']['stricton'] = FALSE;

$db['production']['hostname'] = 'localhost';
$db['production']['username'] = 'production';
$db['production']['password'] = 'production';
$db['production']['database'] = 'production';
$db['production']['dbdriver'] = 'mysql';
$db['production']['dbprefix'] = '';
$db['production']['pconnect'] = FALSE;
$db['production']['db_debug'] = FALSE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = '';
$db['production']['char_set'] = 'utf8';
$db['production']['dbcollat'] = 'utf8_general_ci';
$db['production']['swap_pre'] = '';
$db['production']['autoinit'] = TRUE;
$db['production']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */