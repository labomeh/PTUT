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

        if (0 === strpos($pathinfo, '/a')) {
            // ptut_platform_view_id
            if (0 === strpos($pathinfo, '/actualites') && preg_match('#^/actualites/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptut_platform_view_id')), array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::viewidAction',));
            }

            // ptut_platform_article
            if (0 === strpos($pathinfo, '/article') && preg_match('#^/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ptut_platform_article')), array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::view_articleAction',));
            }

        }

        // ptut_platform_article_creator
        if ($pathinfo === '/creer/article') {
            return array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::article_creatorAction',  '_route' => 'ptut_platform_article_creator',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
