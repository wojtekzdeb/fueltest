<?php
return array(
	'_root_'  => 'example/index',  // The default route
	'_404_'   => 'example/404',    // The main 404 route
	
	'hello(/:name)?' => array('example/hello', 'name' => 'hello'),
);