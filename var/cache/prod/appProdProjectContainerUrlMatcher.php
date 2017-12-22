<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/platform')) {
            // cd_platform_home
            if (preg_match('#^/platform(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cd_platform_home')), array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::indexAction',  'page' => 1,));
            }

            // cd_platform_view
            if (0 === strpos($pathinfo, '/platform/advert') && preg_match('#^/platform/advert/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cd_platform_view')), array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::viewAction',));
            }

            // cd_platform_add
            if ('/platform/add' === $pathinfo) {
                return array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'cd_platform_add',);
            }

            // cd_platform_edit
            if (0 === strpos($pathinfo, '/platform/edit') && preg_match('#^/platform/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cd_platform_edit')), array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::editAction',));
            }

            // cd_platform_delete
            if (0 === strpos($pathinfo, '/platform/delete') && preg_match('#^/platform/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cd_platform_delete')), array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
            }

            // cd_platform_view_slug
            if (preg_match('#^/platform/(?P<year>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cd_platform_view_slug')), array (  '_controller' => 'CD\\PlatformBundle\\Controller\\AdvertController::viewSlugAction',  'format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
