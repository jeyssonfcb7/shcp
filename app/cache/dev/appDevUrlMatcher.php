<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // minsal_shcp_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'minsal_shcp_default_index')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/shcp')) {
            if (0 === strpos($pathinfo, '/shcpaboctlcie10')) {
                // shcpaboctlcie10
                if (rtrim($pathinfo, '/') === '/shcpaboctlcie10') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpaboctlcie10;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shcpaboctlcie10');
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::indexAction',  '_route' => 'shcpaboctlcie10',);
                }
                not_shcpaboctlcie10:

                // shcpaboctlcie10_create
                if ($pathinfo === '/shcpaboctlcie10/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shcpaboctlcie10_create;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::createAction',  '_route' => 'shcpaboctlcie10_create',);
                }
                not_shcpaboctlcie10_create:

                // shcpaboctlcie10_new
                if ($pathinfo === '/shcpaboctlcie10/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpaboctlcie10_new;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::newAction',  '_route' => 'shcpaboctlcie10_new',);
                }
                not_shcpaboctlcie10_new:

                // shcpaboctlcie10_show
                if (preg_match('#^/shcpaboctlcie10/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpaboctlcie10_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpaboctlcie10_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::showAction',));
                }
                not_shcpaboctlcie10_show:

                // shcpaboctlcie10_edit
                if (preg_match('#^/shcpaboctlcie10/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpaboctlcie10_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpaboctlcie10_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::editAction',));
                }
                not_shcpaboctlcie10_edit:

                // shcpaboctlcie10_update
                if (preg_match('#^/shcpaboctlcie10/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shcpaboctlcie10_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpaboctlcie10_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::updateAction',));
                }
                not_shcpaboctlcie10_update:

                // shcpaboctlcie10_delete
                if (preg_match('#^/shcpaboctlcie10/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shcpaboctlcie10_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpaboctlcie10_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpAboCtlCie10Controller::deleteAction',));
                }
                not_shcpaboctlcie10_delete:

            }

            if (0 === strpos($pathinfo, '/shcpconctlsignoalarma')) {
                // shcpconctlsignoalarma
                if (rtrim($pathinfo, '/') === '/shcpconctlsignoalarma') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpconctlsignoalarma;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shcpconctlsignoalarma');
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::indexAction',  '_route' => 'shcpconctlsignoalarma',);
                }
                not_shcpconctlsignoalarma:

                // shcpconctlsignoalarma_create
                if ($pathinfo === '/shcpconctlsignoalarma/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shcpconctlsignoalarma_create;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::createAction',  '_route' => 'shcpconctlsignoalarma_create',);
                }
                not_shcpconctlsignoalarma_create:

                // shcpconctlsignoalarma_new
                if ($pathinfo === '/shcpconctlsignoalarma/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpconctlsignoalarma_new;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::newAction',  '_route' => 'shcpconctlsignoalarma_new',);
                }
                not_shcpconctlsignoalarma_new:

                // shcpconctlsignoalarma_show
                if (preg_match('#^/shcpconctlsignoalarma/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpconctlsignoalarma_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpconctlsignoalarma_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::showAction',));
                }
                not_shcpconctlsignoalarma_show:

                // shcpconctlsignoalarma_edit
                if (preg_match('#^/shcpconctlsignoalarma/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpconctlsignoalarma_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpconctlsignoalarma_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::editAction',));
                }
                not_shcpconctlsignoalarma_edit:

                // shcpconctlsignoalarma_update
                if (preg_match('#^/shcpconctlsignoalarma/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shcpconctlsignoalarma_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpconctlsignoalarma_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::updateAction',));
                }
                not_shcpconctlsignoalarma_update:

                // shcpconctlsignoalarma_delete
                if (preg_match('#^/shcpconctlsignoalarma/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shcpconctlsignoalarma_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpconctlsignoalarma_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpConCtlSignoAlarmaController::deleteAction',));
                }
                not_shcpconctlsignoalarma_delete:

            }

            if (0 === strpos($pathinfo, '/shcpdocctlpregunta')) {
                // shcpdocctlpregunta
                if (rtrim($pathinfo, '/') === '/shcpdocctlpregunta') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpdocctlpregunta;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shcpdocctlpregunta');
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::indexAction',  '_route' => 'shcpdocctlpregunta',);
                }
                not_shcpdocctlpregunta:

                // shcpdocctlpregunta_create
                if ($pathinfo === '/shcpdocctlpregunta/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shcpdocctlpregunta_create;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::createAction',  '_route' => 'shcpdocctlpregunta_create',);
                }
                not_shcpdocctlpregunta_create:

                // shcpdocctlpregunta_new
                if ($pathinfo === '/shcpdocctlpregunta/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpdocctlpregunta_new;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::newAction',  '_route' => 'shcpdocctlpregunta_new',);
                }
                not_shcpdocctlpregunta_new:

                // shcpdocctlpregunta_show
                if (preg_match('#^/shcpdocctlpregunta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpdocctlpregunta_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpdocctlpregunta_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::showAction',));
                }
                not_shcpdocctlpregunta_show:

                // shcpdocctlpregunta_edit
                if (preg_match('#^/shcpdocctlpregunta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpdocctlpregunta_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpdocctlpregunta_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::editAction',));
                }
                not_shcpdocctlpregunta_edit:

                // shcpdocctlpregunta_update
                if (preg_match('#^/shcpdocctlpregunta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shcpdocctlpregunta_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpdocctlpregunta_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::updateAction',));
                }
                not_shcpdocctlpregunta_update:

                // shcpdocctlpregunta_delete
                if (preg_match('#^/shcpdocctlpregunta/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shcpdocctlpregunta_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpdocctlpregunta_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpDocCtlPreguntaController::deleteAction',));
                }
                not_shcpdocctlpregunta_delete:

            }

            if (0 === strpos($pathinfo, '/shcpinsctlenfermedad')) {
                // shcpinsctlenfermedad
                if (rtrim($pathinfo, '/') === '/shcpinsctlenfermedad') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpinsctlenfermedad;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'shcpinsctlenfermedad');
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::indexAction',  '_route' => 'shcpinsctlenfermedad',);
                }
                not_shcpinsctlenfermedad:

                // shcpinsctlenfermedad_create
                if ($pathinfo === '/shcpinsctlenfermedad/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_shcpinsctlenfermedad_create;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::createAction',  '_route' => 'shcpinsctlenfermedad_create',);
                }
                not_shcpinsctlenfermedad_create:

                // shcpinsctlenfermedad_new
                if ($pathinfo === '/shcpinsctlenfermedad/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpinsctlenfermedad_new;
                    }

                    return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::newAction',  '_route' => 'shcpinsctlenfermedad_new',);
                }
                not_shcpinsctlenfermedad_new:

                // shcpinsctlenfermedad_show
                if (preg_match('#^/shcpinsctlenfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpinsctlenfermedad_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpinsctlenfermedad_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::showAction',));
                }
                not_shcpinsctlenfermedad_show:

                // shcpinsctlenfermedad_edit
                if (preg_match('#^/shcpinsctlenfermedad/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_shcpinsctlenfermedad_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpinsctlenfermedad_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::editAction',));
                }
                not_shcpinsctlenfermedad_edit:

                // shcpinsctlenfermedad_update
                if (preg_match('#^/shcpinsctlenfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_shcpinsctlenfermedad_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpinsctlenfermedad_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::updateAction',));
                }
                not_shcpinsctlenfermedad_update:

                // shcpinsctlenfermedad_delete
                if (preg_match('#^/shcpinsctlenfermedad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_shcpinsctlenfermedad_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpinsctlenfermedad_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpInsCtlEnfermedadController::deleteAction',));
                }
                not_shcpinsctlenfermedad_delete:

            }

            if (0 === strpos($pathinfo, '/shcpparctl')) {
                if (0 === strpos($pathinfo, '/shcpparctlindicacion')) {
                    // shcpparctlindicacion
                    if (rtrim($pathinfo, '/') === '/shcpparctlindicacion') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlindicacion;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shcpparctlindicacion');
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::indexAction',  '_route' => 'shcpparctlindicacion',);
                    }
                    not_shcpparctlindicacion:

                    // shcpparctlindicacion_create
                    if ($pathinfo === '/shcpparctlindicacion/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_shcpparctlindicacion_create;
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::createAction',  '_route' => 'shcpparctlindicacion_create',);
                    }
                    not_shcpparctlindicacion_create:

                    // shcpparctlindicacion_new
                    if ($pathinfo === '/shcpparctlindicacion/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlindicacion_new;
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::newAction',  '_route' => 'shcpparctlindicacion_new',);
                    }
                    not_shcpparctlindicacion_new:

                    // shcpparctlindicacion_show
                    if (preg_match('#^/shcpparctlindicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlindicacion_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlindicacion_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::showAction',));
                    }
                    not_shcpparctlindicacion_show:

                    // shcpparctlindicacion_edit
                    if (preg_match('#^/shcpparctlindicacion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlindicacion_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlindicacion_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::editAction',));
                    }
                    not_shcpparctlindicacion_edit:

                    // shcpparctlindicacion_update
                    if (preg_match('#^/shcpparctlindicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_shcpparctlindicacion_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlindicacion_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::updateAction',));
                    }
                    not_shcpparctlindicacion_update:

                    // shcpparctlindicacion_delete
                    if (preg_match('#^/shcpparctlindicacion/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_shcpparctlindicacion_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlindicacion_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlIndicacionController::deleteAction',));
                    }
                    not_shcpparctlindicacion_delete:

                }

                if (0 === strpos($pathinfo, '/shcpparctlpatologia')) {
                    // shcpparctlpatologia
                    if (rtrim($pathinfo, '/') === '/shcpparctlpatologia') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlpatologia;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'shcpparctlpatologia');
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::indexAction',  '_route' => 'shcpparctlpatologia',);
                    }
                    not_shcpparctlpatologia:

                    // shcpparctlpatologia_create
                    if ($pathinfo === '/shcpparctlpatologia/') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_shcpparctlpatologia_create;
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::createAction',  '_route' => 'shcpparctlpatologia_create',);
                    }
                    not_shcpparctlpatologia_create:

                    // shcpparctlpatologia_new
                    if ($pathinfo === '/shcpparctlpatologia/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlpatologia_new;
                        }

                        return array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::newAction',  '_route' => 'shcpparctlpatologia_new',);
                    }
                    not_shcpparctlpatologia_new:

                    // shcpparctlpatologia_show
                    if (preg_match('#^/shcpparctlpatologia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlpatologia_show;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlpatologia_show')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::showAction',));
                    }
                    not_shcpparctlpatologia_show:

                    // shcpparctlpatologia_edit
                    if (preg_match('#^/shcpparctlpatologia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_shcpparctlpatologia_edit;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlpatologia_edit')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::editAction',));
                    }
                    not_shcpparctlpatologia_edit:

                    // shcpparctlpatologia_update
                    if (preg_match('#^/shcpparctlpatologia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_shcpparctlpatologia_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlpatologia_update')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::updateAction',));
                    }
                    not_shcpparctlpatologia_update:

                    // shcpparctlpatologia_delete
                    if (preg_match('#^/shcpparctlpatologia/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_shcpparctlpatologia_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'shcpparctlpatologia_delete')), array (  '_controller' => 'Minsal\\shcpBundle\\Controller\\ShcpParCtlPatologiaController::deleteAction',));
                    }
                    not_shcpparctlpatologia_delete:

                }

            }

        }

        // _inicio
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_inicio');
            }

            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => '_inicio',);
        }

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/admin/login',  'permanent' => true,  '_route' => 'root',);
        }

        // get_departamentos
        if ($pathinfo === '/departamentos/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_departamentos;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::getDepartamentosAction',  '_route' => 'get_departamentos',);
        }
        not_get_departamentos:

        // get_municipios
        if ($pathinfo === '/municipios/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_municipios;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::getMunicipiosAction',  '_route' => 'get_municipios',);
        }
        not_get_municipios:

        // get_cantones
        if ($pathinfo === '/cantones/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_cantones;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::getCantonesAction',  '_route' => 'get_cantones',);
        }
        not_get_cantones:

        if (0 === strpos($pathinfo, '/pais')) {
            // get_paises
            if ($pathinfo === '/paises/get') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::getPaisesHabilitadosAction',  '_route' => 'get_paises',);
            }

            // get_pais_depto
            if ($pathinfo === '/pais/depto/get') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::obtenerPaisPorDeptoAction',  '_route' => 'get_pais_depto',);
            }

        }

        // obtener_usuarios_archivo
        if ($pathinfo === '/usuarios/archivos/get') {
            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::getUsuariosArchivosAction',  '_route' => 'obtener_usuarios_archivo',);
        }

        if (0 === strpos($pathinfo, '/siaps')) {
            // verify_medic_service
            if ($pathinfo === '/siaps/verify/medicservice') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::verifyMedicServiceAction',  '_route' => 'verify_medic_service',);
            }

            // set_emp_especialidad_estab
            if ($pathinfo === '/siaps/set/empespecialidad/estab') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_set_emp_especialidad_estab;
                }

                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\GeneralesController::setEmpEspecialidadEstabAction',  '_route' => 'set_emp_especialidad_estab',);
            }
            not_set_emp_especialidad_estab:

        }

        // get_areas_modalidades
        if ($pathinfo === '/areas/modalidades/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_areas_modalidades;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAmbienteAreaEstablecimientoController::getAreaModalidadAction',  '_route' => 'get_areas_modalidades',);
        }
        not_get_areas_modalidades:

        // get_especialidades_hospitalizacion
        if ($pathinfo === '/especialidades/hospitalizacion/get') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_get_especialidades_hospitalizacion;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAmbienteAreaEstablecimientoController::getEspecialidadesHospitalizacionAction',  '_route' => 'get_especialidades_hospitalizacion',);
        }
        not_get_especialidades_hospitalizacion:

        if (0 === strpos($pathinfo, '/servicios')) {
            // get_servicios
            if ($pathinfo === '/servicios/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_get_servicios;
                }

                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAmbienteAreaEstablecimientoController::getServiciosHospitalariosAction',  '_route' => 'get_servicios',);
            }
            not_get_servicios:

            // generar_servicios_hospitalarios
            if ($pathinfo === '/servicios/hospitalarios/generar') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_generar_servicios_hospitalarios;
                }

                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAmbienteAreaEstablecimientoController::generarServiciosHospitalariosAction',  '_route' => 'generar_servicios_hospitalarios',);
            }
            not_generar_servicios_hospitalarios:

        }

        // guardar_hopitalizacion
        if (0 === strpos($pathinfo, '/guardar/hospitalizacion') && preg_match('#^/guardar/hospitalizacion/(?P<sexo>[^/]++)/(?P<numero_ambientes>[^/]++)/(?P<id_aten_area_mod_estab>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_guardar_hopitalizacion;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'guardar_hopitalizacion')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAmbienteAreaEstablecimientoController::guardarHospitalizacionAction',));
        }
        not_guardar_hopitalizacion:

        // get_atenciones
        if ($pathinfo === '/atenciones/get') {
            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAreaModEstabController::getAtencionesAction',  '_route' => 'get_atenciones',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // get_especialidades
            if ($pathinfo === '/especialidades/get') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAreaModEstabController::getEspecialidadesAction',  '_route' => 'get_especialidades',);
            }

            if (0 === strpos($pathinfo, '/expedientes/creados')) {
                // expedientes_creados
                if ($pathinfo === '/expedientes/creados') {
                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteController::expedientesCreados',  '_route' => 'expedientes_creados',);
                }

                // expedientes_creados_listado
                if ($pathinfo === '/expedientes/creados/listado') {
                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteController::expedientesCreadosListado',  '_route' => 'expedientes_creados_listado',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/buscar/paciente')) {
            // buscar_paciente
            if ($pathinfo === '/buscar/paciente') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteController::buscarPacienteAction',  '_route' => 'buscar_paciente',);
            }

            // buscar_paciente_global
            if ($pathinfo === '/buscar/paciente/global') {
                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteController::buscarPacienteGlobalAction',  '_route' => 'buscar_paciente_global',);
            }

        }

        // cargar_paciente
        if ($pathinfo === '/cargar/paciente') {
            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteController::cargarBusquedaJSON',  '_route' => 'cargar_paciente',);
        }

        // edad_paciente
        if ($pathinfo === '/paciente/edad}') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_edad_paciente;
            }

            return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteController::edad_paciente',  '_route' => 'edad_paciente',);
        }
        not_edad_paciente:

        if (0 === strpos($pathinfo, '/report')) {
            // _report_show
            if (0 === strpos($pathinfo, '/report/show') && preg_match('#^/report/show/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_report_show')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\ReporteController::showAction',));
            }

            // _report_paciente
            if (0 === strpos($pathinfo, '/report/paciente') && preg_match('#^/report/paciente/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_report_paciente')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\ReporteController::pacienteAction',));
            }

        }

        // _exportar_reporte
        if (0 === strpos($pathinfo, '/exportar') && preg_match('#^/exportar/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_exportar_reporte')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\ReporteController::exportarReporteAction',));
        }

        // hoja_ingreso_egreso
        if (0 === strpos($pathinfo, '/hoja/ingreso/egreso') && preg_match('#^/hoja/ingreso/egreso/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'hoja_ingreso_egreso')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\ReporteSeguimientoController::hojaIngresoEgresoAction',));
        }

        // total_ingresos
        if (0 === strpos($pathinfo, '/total/ingresos') && preg_match('#^/total/ingresos/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)/(?P<fecha_inicio>[^/]++)/(?P<fecha_fin>[^/]++)(?:/(?P<id_servicio>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'total_ingresos')), array (  'id_servicio' => 0,  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\ReporteSeguimientoController::totalIngresosAction',));
        }

        // _report_seguimiento_paciente
        if (0 === strpos($pathinfo, '/report/seguimiento/paciente') && preg_match('#^/report/seguimiento/paciente/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_report_seguimiento_paciente')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\ReporteSeguimientoController::pacienteAction',));
        }

        // total_emergencias
        if (0 === strpos($pathinfo, '/total/emergencias') && preg_match('#^/total/emergencias/(?P<report_name>[^/]++)/(?P<report_format>[^/]++)/(?P<fecha_inicio>[^/]++)/(?P<fecha_fin>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'total_emergencias')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\ReporteSeguimientoController::totalEmergenciasAction',));
        }

        // buscar_emergencias
        if ($pathinfo === '/buscar/emergencias') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaController::buscarEmergenciasAction',  '_route' => 'buscar_emergencias',);
        }

        // cargar_emergencias
        if ($pathinfo === '/cargar/emergencias') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaController::cargarEmergenciasAction',  '_route' => 'cargar_emergencias',);
        }

        // buscar_emergencias_pacientes
        if ($pathinfo === '/buscar/emergencias/pacientes') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaController::buscarEmergenciasPacienteAction',  '_route' => 'buscar_emergencias_pacientes',);
        }

        // pacientes_en_emergencia
        if ($pathinfo === '/pacientes/en/emergencia') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaController::cargarReporteEmergenciaAction',  '_route' => 'pacientes_en_emergencia',);
        }

        if (0 === strpos($pathinfo, '/obtener')) {
            // get_especialidad_ingresos
            if ($pathinfo === '/obtener/especialidades/ingresos') {
                return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::getEspecialidadesIngresoAction',  '_route' => 'get_especialidad_ingresos',);
            }

            if (0 === strpos($pathinfo, '/obtener/servicios/hospitalarios')) {
                // get_servicios_hospitalarios
                if ($pathinfo === '/obtener/servicios/hospitalarios') {
                    return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::getServiciosHospitalariosAction',  '_route' => 'get_servicios_hospitalarios',);
                }

                // get_servicios_hospitalarios_otros
                if ($pathinfo === '/obtener/servicios/hospitalarios/otros') {
                    return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::getServiciosHospitalariosOtrosAction',  '_route' => 'get_servicios_hospitalarios_otros',);
                }

                // get_servicios_hospitalarios_todos
                if ($pathinfo === '/obtener/servicios/hospitalarios/todos') {
                    return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::getServiciosHospitalariosTodosAction',  '_route' => 'get_servicios_hospitalarios_todos',);
                }

            }

        }

        // buscar_ingresos
        if ($pathinfo === '/buscar/ingresos') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::buscarIngresosAction',  '_route' => 'buscar_ingresos',);
        }

        // cargar_ingresos
        if ($pathinfo === '/cargar/ingresos') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::cargarIngresosAction',  '_route' => 'cargar_ingresos',);
        }

        // buscar_ingresos_pacientes
        if ($pathinfo === '/buscar/ingresos/pacientes') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::buscarIngresosPacienteAction',  '_route' => 'buscar_ingresos_pacientes',);
        }

        // pacientes_ingresados
        if ($pathinfo === '/pacientes/ingresado') {
            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoController::cargarReporteIngresoAction',  '_route' => 'pacientes_ingresados',);
        }

        if (0 === strpos($pathinfo, '/citas')) {
            // citasdiaxmedico
            if ($pathinfo === '/citas/dia/medico/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citasdiaxmedico;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getCitCitasDiaxMedicoAction',  '_route' => 'citasdiaxmedico',);
            }
            not_citasdiaxmedico:

            // citashorariomedico
            if ($pathinfo === '/citas/horario/medico/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citashorariomedico;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getHorarioMedicoAction',  '_route' => 'citashorariomedico',);
            }
            not_citashorariomedico:

            // citasverificarevento
            if ($pathinfo === '/citas/verificar/evento/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citasverificarevento;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::verifyMedicEventAction',  '_route' => 'citasverificarevento',);
            }
            not_citasverificarevento:

            // citasdetallehora
            if ($pathinfo === '/citas/detalle/hora/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citasdetallehora;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getDetalleCitaHoraAction',  '_route' => 'citasdetallehora',);
            }
            not_citasdetallehora:

            // citasexpedientepaciente
            if ($pathinfo === '/citas/expediente/paciente/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citasexpedientepaciente;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getExpedientePacienteAction',  '_route' => 'citasexpedientepaciente',);
            }
            not_citasexpedientepaciente:

            if (0 === strpos($pathinfo, '/citas/medicos')) {
                // citasgetmedico
                if ($pathinfo === '/citas/medicos/get') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_citasgetmedico;
                    }

                    return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getMedicoAction',  '_route' => 'citasgetmedico',);
                }
                not_citasgetmedico:

                // citasgetmedicoespecilidadestab
                if ($pathinfo === '/citas/medicos/especilidad/estab/get') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_citasgetmedicoespecilidadestab;
                    }

                    return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getMedicoEspecilidadEstabAction',  '_route' => 'citasgetmedicoespecilidadestab',);
                }
                not_citasgetmedicoespecilidadestab:

            }

            // citaspacienteposeecita
            if ($pathinfo === '/citas/paciente/poseecita/get') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citaspacienteposeecita;
                }

                return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::pacientePoseeCitaAction',  '_route' => 'citaspacienteposeecita',);
            }
            not_citaspacienteposeecita:

            if (0 === strpos($pathinfo, '/citas/comproba')) {
                // citascomprobardisponibilidad
                if ($pathinfo === '/citas/comprobar/disponibilidad') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_citascomprobardisponibilidad;
                    }

                    return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::comprobarDisponibilidadAction',  '_route' => 'citascomprobardisponibilidad',);
                }
                not_citascomprobardisponibilidad:

                // citasgetcomprobante
                if (0 === strpos($pathinfo, '/citas/comprobante/get') && preg_match('#^/citas/comprobante/get(?:/(?P<report_format>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_citasgetcomprobante;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'citasgetcomprobante')), array (  'report_format' => 'HTML',  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::getComprobanteCitaAction',));
                }
                not_citasgetcomprobante:

            }

            // citasbuildcomprobante
            if (0 === strpos($pathinfo, '/citas/buildcomprobante/get') && preg_match('#^/citas/buildcomprobante/get/(?P<id>[^/]++)(?:/(?P<report_format>[^/]++))?$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_citasbuildcomprobante;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'citasbuildcomprobante')), array (  'report_format' => 'HTML',  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaController::buildComprobanteCitaAction',));
            }
            not_citasbuildcomprobante:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/minsal/s')) {
                if (0 === strpos($pathinfo, '/admin/minsal/siaps')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/siaps/ctlestablecimiento')) {
                        // admin_minsal_siaps_ctlestablecimiento_list
                        if ($pathinfo === '/admin/minsal/siaps/ctlestablecimiento/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.establecimiento',  '_sonata_name' => 'admin_minsal_siaps_ctlestablecimiento_list',  '_route' => 'admin_minsal_siaps_ctlestablecimiento_list',);
                        }

                        // admin_minsal_siaps_ctlestablecimiento_batch
                        if ($pathinfo === '/admin/minsal/siaps/ctlestablecimiento/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.establecimiento',  '_sonata_name' => 'admin_minsal_siaps_ctlestablecimiento_batch',  '_route' => 'admin_minsal_siaps_ctlestablecimiento_batch',);
                        }

                        // admin_minsal_siaps_ctlestablecimiento_edit
                        if (preg_match('#^/admin/minsal/siaps/ctlestablecimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_ctlestablecimiento_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.establecimiento',  '_sonata_name' => 'admin_minsal_siaps_ctlestablecimiento_edit',));
                        }

                        // admin_minsal_siaps_ctlestablecimiento_show
                        if (preg_match('#^/admin/minsal/siaps/ctlestablecimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_ctlestablecimiento_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.establecimiento',  '_sonata_name' => 'admin_minsal_siaps_ctlestablecimiento_show',));
                        }

                        // admin_minsal_siaps_ctlestablecimiento_export
                        if ($pathinfo === '/admin/minsal/siaps/ctlestablecimiento/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.establecimiento',  '_sonata_name' => 'admin_minsal_siaps_ctlestablecimiento_export',  '_route' => 'admin_minsal_siaps_ctlestablecimiento_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/siaps/mnt')) {
                        if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntmodalidadestablecimiento')) {
                            // admin_minsal_siaps_mntmodalidadestablecimiento_list
                            if ($pathinfo === '/admin/minsal/siaps/mntmodalidadestablecimiento/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_list',  '_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_list',);
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_create
                            if ($pathinfo === '/admin/minsal/siaps/mntmodalidadestablecimiento/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_create',  '_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_create',);
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_batch
                            if ($pathinfo === '/admin/minsal/siaps/mntmodalidadestablecimiento/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_batch',  '_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_batch',);
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_edit
                            if (preg_match('#^/admin/minsal/siaps/mntmodalidadestablecimiento/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_edit',));
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_delete
                            if (preg_match('#^/admin/minsal/siaps/mntmodalidadestablecimiento/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_delete',));
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_show
                            if (preg_match('#^/admin/minsal/siaps/mntmodalidadestablecimiento/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_show',));
                            }

                            // admin_minsal_siaps_mntmodalidadestablecimiento_export
                            if ($pathinfo === '/admin/minsal/siaps/mntmodalidadestablecimiento/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.modalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntmodalidadestablecimiento_export',  '_route' => 'admin_minsal_siaps_mntmodalidadestablecimiento_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/siaps/mnta')) {
                            if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntareamodestab')) {
                                // admin_minsal_siaps_mntareamodestab_list
                                if ($pathinfo === '/admin/minsal/siaps/mntareamodestab/list') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_list',  '_route' => 'admin_minsal_siaps_mntareamodestab_list',);
                                }

                                // admin_minsal_siaps_mntareamodestab_create
                                if ($pathinfo === '/admin/minsal/siaps/mntareamodestab/create') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_create',  '_route' => 'admin_minsal_siaps_mntareamodestab_create',);
                                }

                                // admin_minsal_siaps_mntareamodestab_batch
                                if ($pathinfo === '/admin/minsal/siaps/mntareamodestab/batch') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_batch',  '_route' => 'admin_minsal_siaps_mntareamodestab_batch',);
                                }

                                // admin_minsal_siaps_mntareamodestab_edit
                                if (preg_match('#^/admin/minsal/siaps/mntareamodestab/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntareamodestab_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_edit',));
                                }

                                // admin_minsal_siaps_mntareamodestab_delete
                                if (preg_match('#^/admin/minsal/siaps/mntareamodestab/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntareamodestab_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_delete',));
                                }

                                // admin_minsal_siaps_mntareamodestab_show
                                if (preg_match('#^/admin/minsal/siaps/mntareamodestab/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntareamodestab_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_show',));
                                }

                                // admin_minsal_siaps_mntareamodestab_export
                                if ($pathinfo === '/admin/minsal/siaps/mntareamodestab/export') {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.areamodalidadestablecimiento',  '_sonata_name' => 'admin_minsal_siaps_mntareamodestab_export',  '_route' => 'admin_minsal_siaps_mntareamodestab_export',);
                                }

                            }

                            if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntatenareamodestab')) {
                                // admin_minsal_siaps_mntatenareamodestab_list
                                if ($pathinfo === '/admin/minsal/siaps/mntatenareamodestab/list') {
                                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::listAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_list',  '_route' => 'admin_minsal_siaps_mntatenareamodestab_list',);
                                }

                                // admin_minsal_siaps_mntatenareamodestab_create
                                if ($pathinfo === '/admin/minsal/siaps/mntatenareamodestab/create') {
                                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::createAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_create',  '_route' => 'admin_minsal_siaps_mntatenareamodestab_create',);
                                }

                                // admin_minsal_siaps_mntatenareamodestab_batch
                                if ($pathinfo === '/admin/minsal/siaps/mntatenareamodestab/batch') {
                                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_batch',  '_route' => 'admin_minsal_siaps_mntatenareamodestab_batch',);
                                }

                                // admin_minsal_siaps_mntatenareamodestab_edit
                                if (preg_match('#^/admin/minsal/siaps/mntatenareamodestab/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntatenareamodestab_edit')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::editAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_edit',));
                                }

                                // admin_minsal_siaps_mntatenareamodestab_delete
                                if (preg_match('#^/admin/minsal/siaps/mntatenareamodestab/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntatenareamodestab_delete')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_delete',));
                                }

                                // admin_minsal_siaps_mntatenareamodestab_show
                                if (preg_match('#^/admin/minsal/siaps/mntatenareamodestab/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntatenareamodestab_show')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::showAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_show',));
                                }

                                // admin_minsal_siaps_mntatenareamodestab_export
                                if ($pathinfo === '/admin/minsal/siaps/mntatenareamodestab/export') {
                                    return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntAtenAreaModEstabAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.ambientes',  '_sonata_name' => 'admin_minsal_siaps_mntatenareamodestab_export',  '_route' => 'admin_minsal_siaps_mntatenareamodestab_export',);
                                }

                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntconexion')) {
                            // admin_minsal_siaps_mntconexion_list
                            if ($pathinfo === '/admin/minsal/siaps/mntconexion/list') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_list',  '_route' => 'admin_minsal_siaps_mntconexion_list',);
                            }

                            // admin_minsal_siaps_mntconexion_create
                            if ($pathinfo === '/admin/minsal/siaps/mntconexion/create') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_create',  '_route' => 'admin_minsal_siaps_mntconexion_create',);
                            }

                            // admin_minsal_siaps_mntconexion_batch
                            if ($pathinfo === '/admin/minsal/siaps/mntconexion/batch') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_batch',  '_route' => 'admin_minsal_siaps_mntconexion_batch',);
                            }

                            // admin_minsal_siaps_mntconexion_edit
                            if (preg_match('#^/admin/minsal/siaps/mntconexion/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntconexion_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_edit',));
                            }

                            // admin_minsal_siaps_mntconexion_delete
                            if (preg_match('#^/admin/minsal/siaps/mntconexion/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntconexion_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_delete',));
                            }

                            // admin_minsal_siaps_mntconexion_show
                            if (preg_match('#^/admin/minsal/siaps/mntconexion/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntconexion_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_show',));
                            }

                            // admin_minsal_siaps_mntconexion_export
                            if ($pathinfo === '/admin/minsal/siaps/mntconexion/export') {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.conexion',  '_sonata_name' => 'admin_minsal_siaps_mntconexion_export',  '_route' => 'admin_minsal_siaps_mntconexion_export',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntpaciente')) {
                            // admin_minsal_siaps_mntpaciente_list
                            if ($pathinfo === '/admin/minsal/siaps/mntpaciente/list') {
                                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::listAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_list',  '_route' => 'admin_minsal_siaps_mntpaciente_list',);
                            }

                            // admin_minsal_siaps_mntpaciente_create
                            if ($pathinfo === '/admin/minsal/siaps/mntpaciente/create') {
                                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::createAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_create',  '_route' => 'admin_minsal_siaps_mntpaciente_create',);
                            }

                            // admin_minsal_siaps_mntpaciente_batch
                            if ($pathinfo === '/admin/minsal/siaps/mntpaciente/batch') {
                                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_batch',  '_route' => 'admin_minsal_siaps_mntpaciente_batch',);
                            }

                            // admin_minsal_siaps_mntpaciente_edit
                            if (preg_match('#^/admin/minsal/siaps/mntpaciente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntpaciente_edit')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::editAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_edit',));
                            }

                            // admin_minsal_siaps_mntpaciente_delete
                            if (preg_match('#^/admin/minsal/siaps/mntpaciente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntpaciente_delete')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_delete',));
                            }

                            // admin_minsal_siaps_mntpaciente_show
                            if (preg_match('#^/admin/minsal/siaps/mntpaciente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntpaciente_show')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::showAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_show',));
                            }

                            // admin_minsal_siaps_mntpaciente_export
                            if ($pathinfo === '/admin/minsal/siaps/mntpaciente/export') {
                                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_export',  '_route' => 'admin_minsal_siaps_mntpaciente_export',);
                            }

                            // admin_minsal_siaps_mntpaciente_view
                            if (preg_match('#^/admin/minsal/siaps/mntpaciente/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntpaciente_view')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::viewAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_view',));
                            }

                            // admin_minsal_siaps_mntpaciente_buscaremergencia
                            if ($pathinfo === '/admin/minsal/siaps/mntpaciente/consulta/emergencia') {
                                return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntPacienteAdminController::buscaremergenciaAction',  '_sonata_admin' => 'sonata.admin.mntpaciente',  '_sonata_name' => 'admin_minsal_siaps_mntpaciente_buscaremergencia',  '_route' => 'admin_minsal_siaps_mntpaciente_buscaremergencia',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/seguimiento/sec')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/seguimiento/secingreso')) {
                        // admin_minsal_seguimiento_secingreso_list
                        if ($pathinfo === '/admin/minsal/seguimiento/secingreso/list') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::listAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_list',  '_route' => 'admin_minsal_seguimiento_secingreso_list',);
                        }

                        // admin_minsal_seguimiento_secingreso_create
                        if ($pathinfo === '/admin/minsal/seguimiento/secingreso/create/id_paciente') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::createAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_create',  '_route' => 'admin_minsal_seguimiento_secingreso_create',);
                        }

                        // admin_minsal_seguimiento_secingreso_batch
                        if ($pathinfo === '/admin/minsal/seguimiento/secingreso/batch') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_batch',  '_route' => 'admin_minsal_seguimiento_secingreso_batch',);
                        }

                        // admin_minsal_seguimiento_secingreso_edit
                        if (preg_match('#^/admin/minsal/seguimiento/secingreso/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_seguimiento_secingreso_edit')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::editAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_edit',));
                        }

                        // admin_minsal_seguimiento_secingreso_delete
                        if (preg_match('#^/admin/minsal/seguimiento/secingreso/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_seguimiento_secingreso_delete')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::deleteAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_delete',));
                        }

                        // admin_minsal_seguimiento_secingreso_show
                        if (preg_match('#^/admin/minsal/seguimiento/secingreso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_seguimiento_secingreso_show')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::showAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_show',));
                        }

                        // admin_minsal_seguimiento_secingreso_export
                        if ($pathinfo === '/admin/minsal/seguimiento/secingreso/export') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_export',  '_route' => 'admin_minsal_seguimiento_secingreso_export',);
                        }

                        // admin_minsal_seguimiento_secingreso_resumen
                        if (rtrim($pathinfo, '/') === '/admin/minsal/seguimiento/secingreso/resumen') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'admin_minsal_seguimiento_secingreso_resumen');
                            }

                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecIngresoAdminController::resumenAction',  '_sonata_admin' => 'sonata.admin.secingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secingreso_resumen',  '_route' => 'admin_minsal_seguimiento_secingreso_resumen',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/seguimiento/secemergencia')) {
                        // admin_minsal_seguimiento_secemergencia_list
                        if ($pathinfo === '/admin/minsal/seguimiento/secemergencia/list') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaAdminController::listAction',  '_sonata_admin' => 'sonata.admin.secemergencia',  '_sonata_name' => 'admin_minsal_seguimiento_secemergencia_list',  '_route' => 'admin_minsal_seguimiento_secemergencia_list',);
                        }

                        // admin_minsal_seguimiento_secemergencia_batch
                        if ($pathinfo === '/admin/minsal/seguimiento/secemergencia/batch') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.secemergencia',  '_sonata_name' => 'admin_minsal_seguimiento_secemergencia_batch',  '_route' => 'admin_minsal_seguimiento_secemergencia_batch',);
                        }

                        // admin_minsal_seguimiento_secemergencia_show
                        if (preg_match('#^/admin/minsal/seguimiento/secemergencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_seguimiento_secemergencia_show')), array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaAdminController::showAction',  '_sonata_admin' => 'sonata.admin.secemergencia',  '_sonata_name' => 'admin_minsal_seguimiento_secemergencia_show',));
                        }

                        // admin_minsal_seguimiento_secemergencia_export
                        if ($pathinfo === '/admin/minsal/seguimiento/secemergencia/export') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.secemergencia',  '_sonata_name' => 'admin_minsal_seguimiento_secemergencia_export',  '_route' => 'admin_minsal_seguimiento_secemergencia_export',);
                        }

                        // admin_minsal_seguimiento_secemergencia_resumen_emergencia
                        if ($pathinfo === '/admin/minsal/seguimiento/secemergencia/resumen/emergencia') {
                            return array (  '_controller' => 'Minsal\\SeguimientoBundle\\Controller\\SecEmergenciaAdminController::resumenEmergenciaAction',  '_sonata_admin' => 'sonata.admin.secemergencia',  '_sonata_name' => 'admin_minsal_seguimiento_secemergencia_resumen_emergencia',  '_route' => 'admin_minsal_seguimiento_secemergencia_resumen_emergencia',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntexpediente')) {
                    // admin_minsal_siaps_mntexpediente_list
                    if ($pathinfo === '/admin/minsal/siaps/mntexpediente/list') {
                        return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::listAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_list',  '_route' => 'admin_minsal_siaps_mntexpediente_list',);
                    }

                    // admin_minsal_siaps_mntexpediente_create
                    if ($pathinfo === '/admin/minsal/siaps/mntexpediente/create') {
                        return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::createAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_create',  '_route' => 'admin_minsal_siaps_mntexpediente_create',);
                    }

                    // admin_minsal_siaps_mntexpediente_batch
                    if ($pathinfo === '/admin/minsal/siaps/mntexpediente/batch') {
                        return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::batchAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_batch',  '_route' => 'admin_minsal_siaps_mntexpediente_batch',);
                    }

                    // admin_minsal_siaps_mntexpediente_edit
                    if (preg_match('#^/admin/minsal/siaps/mntexpediente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntexpediente_edit')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::editAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_edit',));
                    }

                    // admin_minsal_siaps_mntexpediente_show
                    if (preg_match('#^/admin/minsal/siaps/mntexpediente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntexpediente_show')), array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::showAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_show',));
                    }

                    // admin_minsal_siaps_mntexpediente_export
                    if ($pathinfo === '/admin/minsal/siaps/mntexpediente/export') {
                        return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::exportAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_export',  '_route' => 'admin_minsal_siaps_mntexpediente_export',);
                    }

                    // admin_minsal_siaps_mntexpediente_listarexpedientes
                    if ($pathinfo === '/admin/minsal/siaps/mntexpediente/listarexpedientes') {
                        return array (  '_controller' => 'Minsal\\SiapsBundle\\Controller\\MntExpedienteAdminController::listarexpedientesAction',  '_sonata_admin' => 'sonata.admin.expediente',  '_sonata_name' => 'admin_minsal_siaps_mntexpediente_listarexpedientes',  '_route' => 'admin_minsal_siaps_mntexpediente_listarexpedientes',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/seguimiento/secprocedenciaingreso')) {
                    // admin_minsal_seguimiento_secprocedenciaingreso_list
                    if ($pathinfo === '/admin/minsal/seguimiento/secprocedenciaingreso/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.reporte.ingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secprocedenciaingreso_list',  '_route' => 'admin_minsal_seguimiento_secprocedenciaingreso_list',);
                    }

                    // admin_minsal_seguimiento_secprocedenciaingreso_batch
                    if ($pathinfo === '/admin/minsal/seguimiento/secprocedenciaingreso/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.reporte.ingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secprocedenciaingreso_batch',  '_route' => 'admin_minsal_seguimiento_secprocedenciaingreso_batch',);
                    }

                    // admin_minsal_seguimiento_secprocedenciaingreso_show
                    if (preg_match('#^/admin/minsal/seguimiento/secprocedenciaingreso/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_seguimiento_secprocedenciaingreso_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.reporte.ingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secprocedenciaingreso_show',));
                    }

                    // admin_minsal_seguimiento_secprocedenciaingreso_export
                    if ($pathinfo === '/admin/minsal/seguimiento/secprocedenciaingreso/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.reporte.ingreso',  '_sonata_name' => 'admin_minsal_seguimiento_secprocedenciaingreso_export',  '_route' => 'admin_minsal_seguimiento_secprocedenciaingreso_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntci')) {
                    if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntcie10')) {
                        // admin_minsal_siaps_mntcie10_list
                        if ($pathinfo === '/admin/minsal/siaps/mntcie10/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.cie10',  '_sonata_name' => 'admin_minsal_siaps_mntcie10_list',  '_route' => 'admin_minsal_siaps_mntcie10_list',);
                        }

                        // admin_minsal_siaps_mntcie10_batch
                        if ($pathinfo === '/admin/minsal/siaps/mntcie10/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.cie10',  '_sonata_name' => 'admin_minsal_siaps_mntcie10_batch',  '_route' => 'admin_minsal_siaps_mntcie10_batch',);
                        }

                        // admin_minsal_siaps_mntcie10_show
                        if (preg_match('#^/admin/minsal/siaps/mntcie10/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntcie10_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.cie10',  '_sonata_name' => 'admin_minsal_siaps_mntcie10_show',));
                        }

                        // admin_minsal_siaps_mntcie10_export
                        if ($pathinfo === '/admin/minsal/siaps/mntcie10/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.cie10',  '_sonata_name' => 'admin_minsal_siaps_mntcie10_export',  '_route' => 'admin_minsal_siaps_mntcie10_export',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntciq')) {
                        // admin_minsal_siaps_mntciq_list
                        if ($pathinfo === '/admin/minsal/siaps/mntciq/list') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.ciq',  '_sonata_name' => 'admin_minsal_siaps_mntciq_list',  '_route' => 'admin_minsal_siaps_mntciq_list',);
                        }

                        // admin_minsal_siaps_mntciq_batch
                        if ($pathinfo === '/admin/minsal/siaps/mntciq/batch') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.ciq',  '_sonata_name' => 'admin_minsal_siaps_mntciq_batch',  '_route' => 'admin_minsal_siaps_mntciq_batch',);
                        }

                        // admin_minsal_siaps_mntciq_show
                        if (preg_match('#^/admin/minsal/siaps/mntciq/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntciq_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.ciq',  '_sonata_name' => 'admin_minsal_siaps_mntciq_show',));
                        }

                        // admin_minsal_siaps_mntciq_export
                        if ($pathinfo === '/admin/minsal/siaps/mntciq/export') {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.ciq',  '_sonata_name' => 'admin_minsal_siaps_mntciq_export',  '_route' => 'admin_minsal_siaps_mntciq_export',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/user')) {
                // admin_sonata_user_user_list
                if ($pathinfo === '/admin/sonata/user/user/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_list',  '_route' => 'admin_sonata_user_user_list',);
                }

                // admin_sonata_user_user_create
                if ($pathinfo === '/admin/sonata/user/user/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_create',  '_route' => 'admin_sonata_user_user_create',);
                }

                // admin_sonata_user_user_batch
                if ($pathinfo === '/admin/sonata/user/user/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_batch',  '_route' => 'admin_sonata_user_user_batch',);
                }

                // admin_sonata_user_user_edit
                if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_edit',));
                }

                // admin_sonata_user_user_delete
                if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_delete',));
                }

                // admin_sonata_user_user_show
                if (preg_match('#^/admin/sonata/user/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_show',));
                }

                // admin_sonata_user_user_export
                if ($pathinfo === '/admin/sonata/user/user/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_sonata_user_user_export',  '_route' => 'admin_sonata_user_user_export',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/minsal')) {
                if (0 === strpos($pathinfo, '/admin/minsal/siaps/mntempleado')) {
                    // admin_minsal_siaps_mntempleado_list
                    if ($pathinfo === '/admin/minsal/siaps/mntempleado/list') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_list',  '_route' => 'admin_minsal_siaps_mntempleado_list',);
                    }

                    // admin_minsal_siaps_mntempleado_create
                    if ($pathinfo === '/admin/minsal/siaps/mntempleado/create') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_create',  '_route' => 'admin_minsal_siaps_mntempleado_create',);
                    }

                    // admin_minsal_siaps_mntempleado_batch
                    if ($pathinfo === '/admin/minsal/siaps/mntempleado/batch') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_batch',  '_route' => 'admin_minsal_siaps_mntempleado_batch',);
                    }

                    // admin_minsal_siaps_mntempleado_edit
                    if (preg_match('#^/admin/minsal/siaps/mntempleado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntempleado_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_edit',));
                    }

                    // admin_minsal_siaps_mntempleado_delete
                    if (preg_match('#^/admin/minsal/siaps/mntempleado/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntempleado_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_delete',));
                    }

                    // admin_minsal_siaps_mntempleado_show
                    if (preg_match('#^/admin/minsal/siaps/mntempleado/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_siaps_mntempleado_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_show',));
                    }

                    // admin_minsal_siaps_mntempleado_export
                    if ($pathinfo === '/admin/minsal/siaps/mntempleado/export') {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.empleado',  '_sonata_name' => 'admin_minsal_siaps_mntempleado_export',  '_route' => 'admin_minsal_siaps_mntempleado_export',);
                    }

                }

                if (0 === strpos($pathinfo, '/admin/minsal/citas/citcitasdia')) {
                    // admin_minsal_citas_citcitasdia_list
                    if ($pathinfo === '/admin/minsal/citas/citcitasdia/list') {
                        return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaAdminController::listAction',  '_sonata_admin' => 'sonata.admin.citcitasdia',  '_sonata_name' => 'admin_minsal_citas_citcitasdia_list',  '_route' => 'admin_minsal_citas_citcitasdia_list',);
                    }

                    // admin_minsal_citas_citcitasdia_create
                    if ($pathinfo === '/admin/minsal/citas/citcitasdia/create') {
                        return array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaAdminController::createAction',  '_sonata_admin' => 'sonata.admin.citcitasdia',  '_sonata_name' => 'admin_minsal_citas_citcitasdia_create',  '_route' => 'admin_minsal_citas_citcitasdia_create',);
                    }

                    // admin_minsal_citas_citcitasdia_edit
                    if (preg_match('#^/admin/minsal/citas/citcitasdia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_citas_citcitasdia_edit')), array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaAdminController::editAction',  '_sonata_admin' => 'sonata.admin.citcitasdia',  '_sonata_name' => 'admin_minsal_citas_citcitasdia_edit',));
                    }

                    // admin_minsal_citas_citcitasdia_show
                    if (preg_match('#^/admin/minsal/citas/citcitasdia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_minsal_citas_citcitasdia_show')), array (  '_controller' => 'Minsal\\CitasBundle\\Controller\\CitCitasDiaAdminController::showAction',  '_sonata_admin' => 'sonata.admin.citcitasdia',  '_sonata_name' => 'admin_minsal_citas_citcitasdia_show',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/admin/sonata/user/group')) {
                // admin_sonata_user_group_list
                if ($pathinfo === '/admin/sonata/user/group/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_list',  '_route' => 'admin_sonata_user_group_list',);
                }

                // admin_sonata_user_group_create
                if ($pathinfo === '/admin/sonata/user/group/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_create',  '_route' => 'admin_sonata_user_group_create',);
                }

                // admin_sonata_user_group_batch
                if ($pathinfo === '/admin/sonata/user/group/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_batch',  '_route' => 'admin_sonata_user_group_batch',);
                }

                // admin_sonata_user_group_edit
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_edit',));
                }

                // admin_sonata_user_group_delete
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_delete',));
                }

                // admin_sonata_user_group_show
                if (preg_match('#^/admin/sonata/user/group/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_sonata_user_group_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_show',));
                }

                // admin_sonata_user_group_export
                if ($pathinfo === '/admin/sonata/user/group/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_sonata_user_group_export',  '_route' => 'admin_sonata_user_group_export',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/sonata/cache')) {
            // sonata_cache_esi
            if (0 === strpos($pathinfo, '/sonata/cache/esi') && preg_match('#^/sonata/cache/esi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_esi')), array (  '_controller' => 'sonata.cache.esi:cacheAction',));
            }

            // sonata_cache_ssi
            if (0 === strpos($pathinfo, '/sonata/cache/ssi') && preg_match('#^/sonata/cache/ssi/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_ssi')), array (  '_controller' => 'sonata.cache.ssi:cacheAction',));
            }

            if (0 === strpos($pathinfo, '/sonata/cache/js-')) {
                // sonata_cache_js_async
                if ($pathinfo === '/sonata/cache/js-async') {
                    return array (  '_controller' => 'sonata.cache.js_async:cacheAction',  '_route' => 'sonata_cache_js_async',);
                }

                // sonata_cache_js_sync
                if ($pathinfo === '/sonata/cache/js-sync') {
                    return array (  '_controller' => 'sonata.cache.js_sync:cacheAction',  '_route' => 'sonata_cache_js_sync',);
                }

            }

            // sonata_cache_apc
            if (0 === strpos($pathinfo, '/sonata/cache/apc') && preg_match('#^/sonata/cache/apc/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_apc')), array (  '_controller' => 'sonata.cache.apc:cacheAction',));
            }

            // sonata_cache_symfony
            if (0 === strpos($pathinfo, '/sonata/cache/symfony') && preg_match('#^/sonata/cache/symfony/(?P<token>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_cache_symfony')), array (  '_controller' => 'sonata.cache.symfony:cacheAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

            if (0 === strpos($pathinfo, '/login')) {
                // sonata_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::loginAction',  '_route' => 'sonata_user_security_login',);
                }

                // sonata_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_sonata_user_security_check;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::checkAction',  '_route' => 'sonata_user_security_check',);
                }
                not_sonata_user_security_check:

            }

            // sonata_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\SecurityFOSUser1Controller::logoutAction',  '_route' => 'sonata_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            if (0 === strpos($pathinfo, '/resetting/re')) {
                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
                }
                not_fos_user_resetting_reset:

                // sonata_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_resetting_request;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::requestAction',  '_route' => 'sonata_user_resetting_request',);
                }
                not_sonata_user_resetting_request:

            }

            // sonata_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_sonata_user_resetting_send_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::sendEmailAction',  '_route' => 'sonata_user_resetting_send_email',);
            }
            not_sonata_user_resetting_send_email:

            // sonata_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_resetting_check_email;
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_resetting_check_email',);
            }
            not_sonata_user_resetting_check_email:

            // sonata_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_sonata_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\ResettingFOSUser1Controller::resetAction',));
            }
            not_sonata_user_resetting_reset:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // fos_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'fos_user_profile_edit_authentication',);
                }

                // fos_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'fos_user_profile_edit',);
                }

            }

            // sonata_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_sonata_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_profile_show');
                }

                return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::showAction',  '_route' => 'sonata_user_profile_show',);
            }
            not_sonata_user_profile_show:

            if (0 === strpos($pathinfo, '/profile/edit-')) {
                // sonata_user_profile_edit_authentication
                if ($pathinfo === '/profile/edit-authentication') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editAuthenticationAction',  '_route' => 'sonata_user_profile_edit_authentication',);
                }

                // sonata_user_profile_edit
                if ($pathinfo === '/profile/edit-profile') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ProfileFOSUser1Controller::editProfileAction',  '_route' => 'sonata_user_profile_edit',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'fos_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // fos_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                }
                not_fos_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // fos_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_fos_user_registration_confirm:

                    // fos_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                    }
                    not_fos_user_registration_confirmed:

                }

            }

            // sonata_user_registration_register
            if (rtrim($pathinfo, '/') === '/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_user_registration_register');
                }

                return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::registerAction',  '_route' => 'sonata_user_registration_register',);
            }

            if (0 === strpos($pathinfo, '/register/c')) {
                // sonata_user_registration_check_email
                if ($pathinfo === '/register/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_sonata_user_registration_check_email;
                    }

                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::checkEmailAction',  '_route' => 'sonata_user_registration_check_email',);
                }
                not_sonata_user_registration_check_email:

                if (0 === strpos($pathinfo, '/register/confirm')) {
                    // sonata_user_registration_confirm
                    if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirm;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_registration_confirm')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmAction',));
                    }
                    not_sonata_user_registration_confirm:

                    // sonata_user_registration_confirmed
                    if ($pathinfo === '/register/confirmed') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_sonata_user_registration_confirmed;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\RegistrationFOSUser1Controller::confirmedAction',  '_route' => 'sonata_user_registration_confirmed',);
                    }
                    not_sonata_user_registration_confirmed:

                }

            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/change-password')) {
                // fos_user_change_password
                if ($pathinfo === '/admin/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_change_password;
                    }

                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'fos_user_change_password',);
                }
                not_fos_user_change_password:

                // sonata_user_change_password
                if ($pathinfo === '/admin/change-password') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_sonata_user_change_password;
                    }

                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\ChangePasswordFOSUser1Controller::changePasswordAction',  '_route' => 'sonata_user_change_password',);
                }
                not_sonata_user_change_password:

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }

                }

                // sonata_user_admin_security_logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'Application\\Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

        }

        // fullcalendar_loader
        if ($pathinfo === '/fc-load-events') {
            return array (  '_controller' => 'ADesigns\\CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'fullcalendar_loader',);
        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
