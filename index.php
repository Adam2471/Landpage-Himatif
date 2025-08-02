<?php
// Uncomment jika ingin debug: die('debug....');

define('ENVIRONMENT', isset($_SERVER['CI_ENV']) ? $_SERVER['CI_ENV'] : 'development');

switch (ENVIRONMENT)
{
	case 'development':
		error_reporting(E_ALL & ~E_DEPRECATED  & ~E_USER_DEPRECATED);
		ini_set('display_errors', 1);
	break;

	case 'testing':
	case 'production':
		ini_set('display_errors', 0);
		if (version_compare(PHP_VERSION, '5.3', '>='))
		{
			// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
		}
		else
		{
			// error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT & ~E_USER_NOTICE);
			error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
		}
	break;

	default:
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'The application environment is not set correctly.';
		exit(1); // EXIT_ERROR
}

// ---------------------------------------------------------------
// SYSTEM DIRECTORY
// ---------------------------------------------------------------
$system_path = 'system';
$application_folder = 'application';
$view_folder = '';

// Normalize system path
if (defined('STDIN')) chdir(dirname(__FILE__));

if (($temp = realpath($system_path)) !== FALSE)
{
	$system_path = $temp . DIRECTORY_SEPARATOR;
}
else
{
	$system_path = rtrim($system_path, '/\\') . DIRECTORY_SEPARATOR;
}

if ( ! is_dir($system_path))
{
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your system folder path does not appear to be set correctly. Please check: '.pathinfo(__FILE__, PATHINFO_BASENAME);
	exit(3); // EXIT_CONFIG
}

// Set main path constants
define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));
define('BASEPATH', $system_path);
define('FCPATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('SYSDIR', basename(BASEPATH));

// ---------------------------------------------------------------
// APPLICATION FOLDER
// ---------------------------------------------------------------
if (is_dir($application_folder))
{
	if (($temp = realpath($application_folder)) !== FALSE)
	{
		$application_folder = $temp;
	}
	else
	{
		$application_folder = rtrim($application_folder, '/\\');
	}
}
elseif (is_dir(BASEPATH . $application_folder . DIRECTORY_SEPARATOR))
{
	$application_folder = BASEPATH . rtrim($application_folder, '/\\');
}
else
{
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your application folder path does not appear to be set correctly. Please check: '.SELF;
	exit(3); // EXIT_CONFIG
}

define('APPPATH', $application_folder . DIRECTORY_SEPARATOR);

// ---------------------------------------------------------------
// VIEW FOLDER
// ---------------------------------------------------------------
if (!isset($view_folder[0]) && is_dir(APPPATH . 'views'))
{
	$view_folder = APPPATH . 'views';
}
elseif (is_dir($view_folder))
{
	if (($temp = realpath($view_folder)) !== FALSE)
	{
		$view_folder = $temp;
	}
	else
	{
		$view_folder = rtrim($view_folder, '/\\');
	}
}
elseif (is_dir(APPPATH . $view_folder))
{
	$view_folder = APPPATH . rtrim($view_folder, '/\\');
}
else
{
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your view folder path does not appear to be set correctly. Please check: '.SELF;
	exit(3); // EXIT_CONFIG
}

define('VIEWPATH', $view_folder . DIRECTORY_SEPARATOR);

// ---------------------------------------------------------------
// LOAD THE BOOTSTRAP FILE AND RUN CODEIGNITER
// ---------------------------------------------------------------
require_once BASEPATH . 'core/CodeIgniter.php';
