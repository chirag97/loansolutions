<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route

        'home/insertit'=>'_root_/home/insertit',
    'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
