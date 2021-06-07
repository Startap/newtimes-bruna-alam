<?php

use Components\Router;
use Components\Application;

/** Call methods inside PageController when hits some path mapped on argument 1 */
Router::route('/', '\Components\Controllers\PageController@getHomepage');
Router::route('/obrigado', '\Components\Controllers\PageController@getThankYou');

Router::route('/mentoria', '\Components\Controllers\PageController@getSalePage');

Router::route('/advogado-ceo', '\Components\Controllers\PageController@getSalePage');
