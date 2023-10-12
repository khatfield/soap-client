<?php
namespace Khatfield\SoapClient\Event;

use Symfony\Contracts\EventDispatcher\Event;

class ResponseEvent extends Event
{
    protected $requestEvent;
    protected $response;

    /**
     *
     * @param RequestEvent $requestEvent
     * @param mixed $response   SaveResult[] or QueryResult
     */
    public function __construct(RequestEvent $requestEvent, $response)
    {
        $this->requestEvent = $requestEvent;
        $this->response = $response;
    }

    public function getRequestEvent()
    {
        return $this->requestEvent;
    }

    public function getResponse()
    {
        return $this->response;
    }
}

