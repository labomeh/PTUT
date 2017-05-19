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

        // ptut_redirect
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ptut_redirect');
            }

            return array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::redirectAction',  '_route' => 'ptut_redirect',);
        }

        // ptut_platform_view
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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

            // ptut_platform_article_creator
            if ($pathinfo === '/admin/creer') {
                return array (  '_controller' => 'PTUT\\PlatformBundle\\Controller\\PlatformController::article_creatorAction',  '_route' => 'ptut_platform_article_creator',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'PTUT\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
