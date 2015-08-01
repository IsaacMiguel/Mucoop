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
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
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

$active_group = 'casacentral';
$active_record = TRUE;

$db['casacentral']['hostname'] = '';
$db['casacentral']['username'] = '';
$db['casacentral']['password'] = '';
$db['casacentral']['database'] = '';
$db['casacentral']['dbdriver'] = 'mssql';
$db['casacentral']['dbprefix'] = '';
$db['casacentral']['pconnect'] = FALSE;
$db['casacentral']['db_debug'] = TRUE;
$db['casacentral']['cache_on'] = FALSE;
$db['casacentral']['cachedir'] = '';
$db['casacentral']['char_set'] = 'utf8';
$db['casacentral']['dbcollat'] = 'utf8_general_ci';
$db['casacentral']['swap_pre'] = '';
$db['casacentral']['autoinit'] = TRUE;
$db['casacentral']['stricton'] = FALSE;


/* End of file database.php */
/* Location: ./application/config/database.php */

//EXPRESS
$active_group = 'express';
$active_record = TRUE;

$db['express']['hostname'] = '';
$db['express']['username'] = '';
$db['express']['password'] = '';
$db['express']['database'] = '';
$db['express']['dbdriver'] = 'mssql';
$db['express']['dbprefix'] = '';
$db['express']['pconnect'] = FALSE;
$db['express']['db_debug'] = TRUE;
$db['express']['cache_on'] = FALSE;
$db['express']['cachedir'] = '';
$db['express']['char_set'] = 'utf8';
$db['express']['dbcollat'] = 'utf8_general_ci';
$db['express']['swap_pre'] = '';
$db['express']['autoinit'] = TRUE;
$db['express']['stricton'] = FALSE;

//OCAMPO
$active_group = 'ocampo';
$active_record = TRUE;

$db['ocampo']['hostname'] = '';
$db['ocampo']['username'] = '';
$db['ocampo']['password'] = '';
$db['ocampo']['database'] = '';
$db['ocampo']['dbdriver'] = 'mssql';
$db['ocampo']['dbprefix'] = '';
$db['ocampo']['pconnect'] = FALSE;
$db['ocampo']['db_debug'] = TRUE;
$db['ocampo']['cache_on'] = FALSE;
$db['ocampo']['cachedir'] = '';
$db['ocampo']['char_set'] = 'utf8';
$db['ocampo']['dbcollat'] = 'utf8_general_ci';
$db['ocampo']['swap_pre'] = '';
$db['ocampo']['autoinit'] = TRUE;
$db['ocampo']['stricton'] = FALSE;

//PARAISO
$active_group = 'paraiso';
$active_record = TRUE;

$db['paraiso']['hostname'] = '';
$db['paraiso']['username'] = '';
$db['paraiso']['password'] = '';
$db['paraiso']['database'] = '';
$db['paraiso']['dbdriver'] = 'mssql';
$db['paraiso']['dbprefix'] = '';
$db['paraiso']['pconnect'] = FALSE;
$db['paraiso']['db_debug'] = TRUE;
$db['paraiso']['cache_on'] = FALSE;
$db['paraiso']['cachedir'] = '';
$db['paraiso']['char_set'] = 'utf8';
$db['paraiso']['dbcollat'] = 'utf8_general_ci';
$db['paraiso']['swap_pre'] = '';
$db['paraiso']['autoinit'] = TRUE;
$db['paraiso']['stricton'] = FALSE;

//RAMALLO
$active_group = 'ramallo';
$active_record = TRUE;

$db['ramallo']['hostname'] = '';
$db['ramallo']['username'] = '';
$db['ramallo']['password'] = '';
$db['ramallo']['database'] = '';
$db['ramallo']['dbdriver'] = 'mssql';
$db['ramallo']['dbprefix'] = '';
$db['ramallo']['pconnect'] = FALSE;
$db['ramallo']['db_debug'] = TRUE;
$db['ramallo']['cache_on'] = FALSE;
$db['ramallo']['cachedir'] = '';
$db['ramallo']['char_set'] = 'utf8';
$db['ramallo']['dbcollat'] = 'utf8_general_ci';
$db['ramallo']['swap_pre'] = '';
$db['ramallo']['autoinit'] = TRUE;
$db['ramallo']['stricton'] = FALSE;

//SALTO
$active_group = 'salto';
$active_record = TRUE;

$db['salto']['hostname'] = '';
$db['salto']['username'] = '';
$db['salto']['password'] = '';
$db['salto']['database'] = '';
$db['salto']['dbdriver'] = 'mssql';
$db['salto']['dbprefix'] = '';
$db['salto']['pconnect'] = FALSE;
$db['salto']['db_debug'] = TRUE;
$db['salto']['cache_on'] = FALSE;
$db['salto']['cachedir'] = '';
$db['salto']['char_set'] = 'utf8';
$db['salto']['dbcollat'] = 'utf8_general_ci';
$db['salto']['swap_pre'] = '';
$db['salto']['autoinit'] = TRUE;
$db['salto']['stricton'] = FALSE;

//LUCIA
$active_group = 'lucia';
$active_record = TRUE;

$db['lucia']['hostname'] = '';
$db['lucia']['username'] = '';
$db['lucia']['password'] = '';
$db['lucia']['database'] = '';
$db['lucia']['dbdriver'] = 'mssql';
$db['lucia']['dbprefix'] = '';
$db['lucia']['pconnect'] = FALSE;
$db['lucia']['db_debug'] = TRUE;
$db['lucia']['cache_on'] = FALSE;
$db['lucia']['cachedir'] = '';
$db['lucia']['char_set'] = 'utf8';
$db['lucia']['dbcollat'] = 'utf8_general_ci';
$db['lucia']['swap_pre'] = '';
$db['lucia']['autoinit'] = TRUE;
$db['lucia']['stricton'] = FALSE;
