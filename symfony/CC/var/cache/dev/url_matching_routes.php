<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/activity/showI' => [[['_route' => 'activity_showI', '_controller' => 'App\\Controller\\ActivityController::showInscriptions'], null, null, null, false, false, null]],
        '/activity' => [[['_route' => 'activity_index', '_controller' => 'App\\Controller\\ActivityController::index'], null, ['GET' => 0], null, true, false, null]],
        '/activity/animator/new' => [[['_route' => 'activity_new', '_controller' => 'App\\Controller\\ActivityController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/animateur/animator' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/a(?'
                    .'|ctivity/(?'
                        .'|([^/]++)(*:192)'
                        .'|animator/([^/]++)(?'
                            .'|/edit(*:225)'
                            .'|(*:233)'
                        .')'
                        .'|([^/]++)/(?'
                            .'|inscription(*:265)'
                            .'|desinscription(*:287)'
                        .')'
                        .'|animator/([^/]++)/showP(*:319)'
                    .')'
                    .'|nimateur/animator/([^/]++)(?'
                        .'|(*:357)'
                        .'|/(?'
                            .'|a(?'
                                .'|nim(*:376)'
                                .'|dmin(*:388)'
                            .')'
                            .'|downgrade(*:406)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        192 => [[['_route' => 'activity_show', '_controller' => 'App\\Controller\\ActivityController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        225 => [[['_route' => 'activity_edit', '_controller' => 'App\\Controller\\ActivityController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        233 => [[['_route' => 'activity_delete', '_controller' => 'App\\Controller\\ActivityController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        265 => [[['_route' => 'activity_inscription', '_controller' => 'App\\Controller\\ActivityController::inscription'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        287 => [[['_route' => 'activity_desinscription', '_controller' => 'App\\Controller\\ActivityController::desinscription'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [[['_route' => 'activity_showP', '_controller' => 'App\\Controller\\ActivityController::showParticipants'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        357 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        376 => [[['_route' => 'user_anim', '_controller' => 'App\\Controller\\UserController::setAnimator'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        388 => [[['_route' => 'user_admin', '_controller' => 'App\\Controller\\UserController::setAdmin'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        406 => [
            [['_route' => 'user_downgrade', '_controller' => 'App\\Controller\\UserController::downgrade'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
