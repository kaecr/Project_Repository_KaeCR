<?php

$config = array(
		"db" => array(
				"db1" => array(
						"dbName" => "database1",
						"userName" => "dbUser",
						"password" => "pass",
						"host" => "localhost"						
				),
				"db2" => array(
						"dbName" => "database2",
						"userName" => "dbUser",
						"password" => "pass",
						"host" => "locallhost"						
				)
		),
		"urls" => array(
				"baseUrl" => "http://example.com"
		),
		"paths" => array(
				"resources" => "/path/to/resources",
				"images" => array(
						"content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
						"layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
				)
		)
);

defined ( “LIBRARY_PATH” ) or define ( “LIBRARY_PATH”, realpath ( dirname ( __FILE__ ) . ‘ / library’ ) );

defined ( “TEMPLATES_PATH” ) or define ( “TEMPLATES_PATH”, realpath ( dirname ( __FILE__ ) . ‘ / templates’ ) );

/*
 * Error reporting.
 */
ini_set ( “error_reporting”, “true” );
error_reporting ( E_ALL | E_STRCT );

?>