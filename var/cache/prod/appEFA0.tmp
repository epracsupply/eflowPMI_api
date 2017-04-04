<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/api')) {
            // api_index
            if ($pathinfo === '/api/index') {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::indexAction',  '_route' => 'api_index',);
            }

            // api_get
            if ($pathinfo === '/api/get') {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getAction',  '_route' => 'api_get',);
            }

            // api_post
            if ($pathinfo === '/api/post') {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::postAction',  '_route' => 'api_post',);
            }

            // api_getMonedas
            if ($pathinfo === '/api/getMonedas') {
                return array (  '_controller' => 'AppBundle\\Controller\\ApiController::getMonedasAction',  '_route' => 'api_getMonedas',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
