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

        // ptut_platform_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::indexAction',  '_route' => 'ptut_platform_homepage',);
        }

        // ptut_platform_view
        if (preg_match('#^/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptut_platform_view')), array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::viewAction',));
        }

        // ptut_platform_creation_article
        if ($pathinfo === '/creation/article') {
            return array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::create_pageAction',  '_route' => 'ptut_platform_creation_article',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
