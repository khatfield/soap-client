<?php
namespace Khatfield\SoapClient\Event;

use Symfony\Contracts\EventDispatcher\Event;

class FaultEvent extends Event
{
    protected $soapFault;

    protected $requestEvent;

    public function __construct(\SoapFault $soapFault, RequestEvent $requestEvent)
    {
        $this->setSoapFault($soapFault);
        $this->setRequestEvent($requestEvent);
    }

    /**
     * @return \SoapFault
     */
    public function getSoapFault()
    {
        return $this->soapFault;
    }

    public function setSoapFault($soapFault)
    {
        $this->soapFault = $soapFault;
    }

    /**
     * @return RequestEvent
     */
    public function getRequestEvent()
    {
        return $this->requestEvent;
    }

    public function setRequestEvent(RequestEvent $requestEvent)
    {
        $this->requestEvent = $requestEvent;
    }
}