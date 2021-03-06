<?php

/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
Router::connect('/', array('controller' => 'carmodels', 'action' => 'index'));

// Hide original Users plugin routes
Router::connect('/users/users', array('plugin'=>false,'controller' => 'app_users'));
Router::connect('/users/users/:action/*', array('plugin'=>false,'controller' => 'app_users'));
Router::connect('/:language/users/users/:action/*', array('plugin'=>false,'controller' => 'app_users'), array('language' => '[a-z]{3}'));

// Route to the extended Users plugin controller
Router::connect('/users', array('plugin'=>false,'controller' => 'app_users'));
Router::connect('/users/:action/*', array('plugin'=>false,'controller' => 'app_users'));
Router::connect('/:language/users/:action/*', array('plugin'=>false,'controller' => 'app_users'), array('language' => '[a-z]{3}'));

// Connects urls with language prefix
Router::connect('/:language/:controller/:action/*', array(), array('language' => '[a-z]{3}'));
Router::connect('/:language/:controller/*', array(), array('language' => '[a-z]{3}'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
CakePlugin::routes();

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';
