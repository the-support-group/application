<?php

namespace Air\Application;

use Air\Routing\Router\RouterInterface;
use Air\Routing\Dispatcher\DispatcherInterface;
use Air\HTTP\Request\RequestInterface;

abstract class Application
{
    /**
     * @var RouterInterface $router A router object.
     */
    protected $router;


    /**
     * @var DispatcherInterface $dispatcher A dispatcher object.
     */
    protected $dispatcher;


    /**
     * @var RequestInterface $request A request object.
     */
    protected $request;


    /**
     * @param RouterInterface $router A router.
     */
    public function setRouter(RouterInterface $router)
    {
        $this->router = $router;
    }


    /**
     * @param DispatcherInterface $dispatcher A dispatcher.
     */
    public function setDispatcher(DispatcherInterface $dispatcher)
    {
        $this->dispatcher = $dispatcher;
    }


    /**
     * @param RequestInterface $request A request.
     */
    public function setRequest(RequestInterface $request)
    {
        $this->request = $request;
    }


    /**
     * Runs the application.
     */
    public function run()
    {
        $resolvedRequest = $this->router->route($this->request);
        echo $this->dispatcher->dispatch($resolvedRequest);
    }
}
