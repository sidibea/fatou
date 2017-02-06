<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/a34b95a')) {
            // _assetic_a34b95a
            if ($pathinfo === '/js/a34b95a.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_a34b95a',);
            }

            if (0 === strpos($pathinfo, '/js/a34b95a_')) {
                if (0 === strpos($pathinfo, '/js/a34b95a_jquery')) {
                    // _assetic_a34b95a_0
                    if ($pathinfo === '/js/a34b95a_jquery-1.11.1.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_a34b95a_0',);
                    }

                    // _assetic_a34b95a_1
                    if ($pathinfo === '/js/a34b95a_jquery.noconflict_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_a34b95a_1',);
                    }

                }

                // _assetic_a34b95a_2
                if ($pathinfo === '/js/a34b95a_modernizr.2.7.1.min_3.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_a34b95a_2',);
                }

                if (0 === strpos($pathinfo, '/js/a34b95a_jquery')) {
                    // _assetic_a34b95a_3
                    if ($pathinfo === '/js/a34b95a_jquery-migrate-1.2.1.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_a34b95a_3',);
                    }

                    // _assetic_a34b95a_4
                    if ($pathinfo === '/js/a34b95a_jquery.placeholder_5.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_a34b95a_4',);
                    }

                    // _assetic_a34b95a_5
                    if ($pathinfo === '/js/a34b95a_jquery-ui.1.10.4.min_6.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_a34b95a_5',);
                    }

                }

                // _assetic_a34b95a_6
                if ($pathinfo === '/js/a34b95a_bootstrap_7.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_a34b95a_6',);
                }

                if (0 === strpos($pathinfo, '/js/a34b95a_jquery.')) {
                    // _assetic_a34b95a_7
                    if ($pathinfo === '/js/a34b95a_jquery.themepunch.plugins.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_a34b95a_7',);
                    }

                    // _assetic_a34b95a_8
                    if ($pathinfo === '/js/a34b95a_jquery.flexslider-min_9.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_a34b95a_8',);
                    }

                    // _assetic_a34b95a_9
                    if ($pathinfo === '/js/a34b95a_jquery.bxslider.min_10.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_a34b95a_9',);
                    }

                    // _assetic_a34b95a_10
                    if ($pathinfo === '/js/a34b95a_jquery.stellar.min_11.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_a34b95a_10',);
                    }

                }

                // _assetic_a34b95a_11
                if ($pathinfo === '/js/a34b95a_waypoints.min_12.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_a34b95a_11',);
                }

                // _assetic_a34b95a_12
                if ($pathinfo === '/js/a34b95a_theme-scripts_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_a34b95a_12',);
                }

                // _assetic_a34b95a_13
                if ($pathinfo === '/js/a34b95a_scripts_14.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'a34b95a',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_a34b95a_13',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css')) {
            if (0 === strpos($pathinfo, '/css/0241b45')) {
                // _assetic_0241b45
                if ($pathinfo === '/css/0241b45.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0241b45',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_0241b45',);
                }

                if (0 === strpos($pathinfo, '/css/0241b45_')) {
                    // _assetic_0241b45_0
                    if ($pathinfo === '/css/0241b45_bootstrap.min_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0241b45',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_0241b45_0',);
                    }

                    // _assetic_0241b45_1
                    if ($pathinfo === '/css/0241b45_font-awesome.min_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0241b45',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_0241b45_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/dda70a3')) {
                // _assetic_dda70a3
                if ($pathinfo === '/css/dda70a3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'dda70a3',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_dda70a3',);
                }

                if (0 === strpos($pathinfo, '/css/dda70a3_')) {
                    if (0 === strpos($pathinfo, '/css/dda70a3_s')) {
                        // _assetic_dda70a3_0
                        if ($pathinfo === '/css/dda70a3_settings_1.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dda70a3',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_dda70a3_0',);
                        }

                        // _assetic_dda70a3_1
                        if ($pathinfo === '/css/dda70a3_style_2.css') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'dda70a3',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_dda70a3_1',);
                        }

                    }

                    // _assetic_dda70a3_2
                    if ($pathinfo === '/css/dda70a3_jquery.bxslider_3.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dda70a3',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_dda70a3_2',);
                    }

                    // _assetic_dda70a3_3
                    if ($pathinfo === '/css/dda70a3_flexslider_4.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'dda70a3',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_dda70a3_3',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/css/15878e7')) {
                // _assetic_15878e7
                if ($pathinfo === '/css/15878e7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '15878e7',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_15878e7',);
                }

                // _assetic_15878e7_0
                if ($pathinfo === '/css/15878e7_style_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '15878e7',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_15878e7_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/033effa')) {
                // _assetic_033effa
                if ($pathinfo === '/css/033effa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '033effa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_033effa',);
                }

                // _assetic_033effa_0
                if ($pathinfo === '/css/033effa_custom_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '033effa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_033effa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/825ebaa')) {
                // _assetic_825ebaa
                if ($pathinfo === '/css/825ebaa.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '825ebaa',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_825ebaa',);
                }

                // _assetic_825ebaa_0
                if ($pathinfo === '/css/825ebaa_updates_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '825ebaa',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_825ebaa_0',);
                }

            }

            if (0 === strpos($pathinfo, '/css/f3c09b8')) {
                // _assetic_f3c09b8
                if ($pathinfo === '/css/f3c09b8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f3c09b8',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_f3c09b8',);
                }

                // _assetic_f3c09b8_0
                if ($pathinfo === '/css/f3c09b8_responsive_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f3c09b8',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_f3c09b8_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // nb_main_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nb_main_homepage');
            }

            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::indexAction',  '_route' => 'nb_main_homepage',);
        }

        // nb_main_listing
        if ($pathinfo === '/listing') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::listingAction',  '_route' => 'nb_main_listing',);
        }

        // nb_main_travel_details
        if ($pathinfo === '/details-du-voyage') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::detailsAction',  '_route' => 'nb_main_travel_details',);
        }

        // nb_main_customer_info
        if ($pathinfo === '/information-client') {
            return array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::custInfoAction',  '_route' => 'nb_main_customer_info',);
        }

        // nb_main_vitepay_callback
        if (0 === strpos($pathinfo, '/vitepay/callback') && preg_match('#^/vitepay/callback/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nb_main_vitepay_callback')), array (  '_controller' => 'NB\\MainBundle\\Controller\\MainController::callbackAction',));
        }

        // nb_users_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'nb_users_homepage');
            }

            return array (  '_controller' => 'NB\\UsersBundle\\Controller\\DefaultController::indexAction',  '_route' => 'nb_users_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'NBUsersBundle:Security:login',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
