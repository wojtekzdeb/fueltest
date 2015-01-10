<?php

/**
 * Use this file to override global defaults.
 *
 * See the individual environment DB configs for specific config information.
 */
return array(
	'doctrine2' => array(
		'proxy_dir' => APPPATH . 'classes' . DS . 'proxy',
		'proxy_namespace' => 'Proxy',
		'metadata_path' => APPPATH . 'classes' . DS . 'entity'
	)
);
