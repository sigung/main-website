<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 foreach(scandir('../View/Pages') as $path){
   if(pathinfo($path, PATHINFO_EXTENSION) == "ctp"){
     $name = pathinfo($path, PATHINFO_FILENAME);
     Router::connect('/'.$name, array('controller' => 'pages', 'action' => 'display', $name));
   }
 }
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

	Router::connect('/sandy/*', array('controller' => 'sandy', 'action' => 'display'));
	Router::connect('/taylorsville/*', array('controller' => 'taylorsville', 'action' => 'display'));
	Router::connect('/peoria/*', array('controller' => 'peoria', 'action' => 'display'));

	Router::connect('/locations/sandy', array('controller' => 'pages', 'action' => 'display', 'home_sandy'));
	Router::connect('/locations/taylorsville', array('controller' => 'pages', 'action' => 'display', 'home_taylorsville'));
	Router::connect('/locations/phoenix', array('controller' => 'pages', 'action' => 'display', 'home_peoria'));
	Router::connect('/locations/glendale', array('controller' => 'pages', 'action' => 'display', 'home_peoria'));
	Router::connect('/locations/peoria', array('controller' => 'pages', 'action' => 'display', 'home_peoria'));



/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();
	CakePlugin::routes('Blog'); // Load Blog plugin routes



/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';

