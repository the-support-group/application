<?php

namespace Air\Application;

use Air\Routing\Router\RouterInterface;
use Air\Routing\Dispatcher\DispatcherInterface;
use Air\HTTP\Request\RequestInterface;

interface ApplicationInterface
{
    /**
     * @param RouterInterface $router A router.
     */
    public function setRouter(RouterInterface $router);


    /**
     * @param DispatcherInterface $dispatcher A dispatcher.
     */
    public function setDispatcher(DispatcherInterface $dispatcher);


    /**
     * @param RequestInterface $request A request.
     */
    public function setRequest(RequestInterface $request);
}
