<?php

	// Router::connectNamed(array('lang'));
	Router::redirect('/index.php', '/', array('status' => 301));

	Router::redirect('/nur-sultan', '/', array('status' => 301));
	Router::connect('/almaty',array('controller' => 'pages', 'action' => 'index', 'almaty'));
	Router::connect('/aktau',array('controller' => 'pages', 'action' => 'index', 'aktau'));
	Router::connect('/karaganda',array('controller' => 'pages', 'action' => 'index', 'karaganda'));
	Router::connect('/pavlodar',array('controller' => 'pages', 'action' => 'index', 'pavlodar'));
	// Router::connect('/almaty',array('controller' => 'pages', 'action' => 'almaty'));
	// Router::connect('/pavlodar',array('controller' => 'pages', 'action' => 'pavlodar'));
	//Router::redirect('/almaty', '/?city=almaty', array('status' => 301));
	// Router::redirect('/aktau', '/?city=aktau', array('status' => 301));
	// Router::redirect('/karaganda', '/?city=karaganda', array('status' => 301));
	//Router::redirect('/pavlodar', '/?city=pavlodar', array('status' => 301));
	
	Router::connect('/admin', array('controller' => 'news', 'action' => 'index', 'admin' => true));

	// Router::connect('/admin/courses', array('controller' => 'news', 'action' => 'index', 'admin' => true));
	// Router::connect('/almaty', array('controller' => 'pages', 'action' => 'test'));

	Router::connect('/test/:action', array('controller' => 'tests'));
	Router::connect('/test', array('controller' => 'pages', 'action' => 'test'));

	// Router::connect('/about', array('controller' => 'pages', 'action' => 'about'));
	Router::connect('/contacts', array('controller' => 'contacts', 'action' => 'index'));
	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/index/*', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/courses', array('controller' => 'courses', 'action' => 'index'));
	Router::connect('/course/*', array('controller' => 'courses', 'action' => 'view'));
	Router::connect('/higher_educations/*', array('controller' => 'higher_educations', 'action' => 'index'));
	Router::connect('/abroad-program/*', array('controller' => 'abroad_programs', 'action' => 'index'));
	Router::connect('/language-school/*', array('controller' => 'language_schools', 'action' => 'index'));
	Router::connect('/language-programs/*', array('controller' => 'language_programs', 'action' => 'index'));
	Router::connect('/language-program/*', array('controller' => 'language_programs', 'action' => 'view'));
	Router::connect('/country/*', array('controller' => 'countries', 'action' => 'index'));
	Router::connect('/news/*', array('controller' => 'news', 'action' => 'view'));
	Router::connect('/article/*', array('controller' => 'articles', 'action' => 'view'));
	Router::connect('/category/*', array('controller' => 'categories', 'action' => 'view'));
	Router::connect('/university/*', array('controller' => 'universities', 'action' => 'view'));

	Router::connect('/glion_lesroches', array('controller' => 'glion_lesroches', 'action' => 'index'));
	Router::connect('/glion_lesroche/*', array('controller' => 'glion_lesroches', 'action' => 'view'));

	Router::connect('/secondary_educations', array('controller' => 'secondary_educations', 'action' => 'index'));

	// Router::connect('/product/*', array('controller' => 'products', 'action' => 'view'));
	// Router::connect('/project/*', array('controller' => 'projects', 'action' => 'view'));
	// Router::connect('/service/*', array('controller' => 'services', 'action' => 'view'));
	// Router::connect('/category-projects', array('controller' => 'category_projects', 'action' => 'index'));
	// Router::connect('/category-projects/*', array('controller' => 'category_projects', 'action' => 'view'));
	
	Router::connect('/static/*', array('controller' => 'static_pages', 'action' => 'index'));
	Router::connect('/admin/users/:action', array('controller' => 'users'));
	Router::connect('/', array('controller' => 'pages', 'action' => 'index', 'nur-sultan'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

	Router::connect('/page/*', array('controller' => 'pages', 'action' => 'page'));

	Router::connect('/:language', 
		array('controller' => 'pages', 'action' => 'index', 'nur-sultan'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/almaty', 
		array('controller' => 'pages', 'action' => 'index', 'almaty'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/aktau', 
		array('controller' => 'pages', 'action' => 'index', 'aktau'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/karaganda', 
		array('controller' => 'pages', 'action' => 'index', 'karaganda'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/pavlodar', 
		array('controller' => 'pages', 'action' => 'index', 'pavlodar'),
		array('language' => '[a-z]{2}')
	);

	Router::connect('/:language/test/:action', 
		array('controller' => 'tests'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/test', 
		array('controller' => 'pages', 'action' => 'test'),
		array('language' => '[a-z]{2}')
	);

	Router::connect('/:language/contacts', 
		array('controller' => 'contacts', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news', 
		array('controller' => 'news', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news/index/*', 
		array('controller' => 'news', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/news/*', 
		array('controller' => 'news', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/courses', 
		array('controller' => 'courses', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/course/*', 
		array('controller' => 'courses', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/higher_educations/*', 
		array('controller' => 'higher_educations', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/abroad-program/*', 
		array('controller' => 'abroad_programs', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/language-school/*', 
		array('controller' => 'language_schools', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/language-programs/*', 
		array('controller' => 'language_programs', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/language-program/*', 
		array('controller' => 'language_programs', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/country/*', 
		array('controller' => 'countries', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/article/*', 
		array('controller' => 'articles', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/category/*', 
		array('controller' => 'categories', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/university/*', 
		array('controller' => 'universities', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);


	Router::connect('/:language/glion_lesroches', 
		array('controller' => 'glion_lesroches', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);
	Router::connect('/:language/glion_lesroche/*', 
		array('controller' => 'glion_lesroches', 'action' => 'view'),
		array('language' => '[a-z]{2}')
	);

	Router::connect('/:language/secondary_educations', 
		array('controller' => 'secondary_educations', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);


	Router::connect('/:language/static/*', 
		array('controller' => 'static_pages', 'action' => 'index'),
		array('language' => '[a-z]{2}')
	);

	Router::connect('/:language/page/*', 
		array('controller' => 'pages', 'action' => 'page'),
		array('language' => '[a-z]{2}')
	);




/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
