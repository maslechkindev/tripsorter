<?php
require_once (__DIR__ . '/TransportInterface.php');

class Airplain implements TransportInterface
{
    /** @var  string */
    private $_transportNumber;

    /** @var  string */
    private $_seat;

    /** @var  string */
    private $_gate;

    /** @var  string */
    private $_baggage;

    /** @var  string */
    private $_description;

    /** @var  string */
    private $_from;

    /** @var  string */
    private $_to;

    /**
     * @return string
     */
    public function getTransportName()
    {
        return self::TRANSPORT_NAME;
    }

    /**
     * @return string
     */
    public function getTransportNumber(){
        return $this->_transportNumber;
    }

    /**
     * @return string
     */
    public function getSeat()
    {
        return $this->_seat;
    }

    /**
     * @return string
     */
    public function getGate()
    {
        return $this->_gate;
    }

    /**
     * @return string
     */
    public function getBaggage()
    {
        return $this->_baggage;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        return $this->_from;
    }

    /**
     * @return string
     */
    public function getTo()
    {
        return $this->_to;
    }

    /**
     * @param string $transportNumber
     */
    public function setTransportNumber($transportNumber = null)
    {
        $this->_transportNumber = $transportNumber;
    }

    /**
     * @param string $gate
     */
    public function setGate($gate = null)
    {
        $this->_gate = $gate;
    }

    /**
     * @param string $seat
     */
    public function setSeat($seat = null)
    {
        $this->_seat = $seat;
    }

    /**
     * @param string $baggage
     */
    public function setBaggage($baggage = null)
    {
        $this->_baggage = $baggage;
    }

    /**
     * @param string $description
     */
    public function setDescription($description = null)
    {
        $this->_description = $description;
    }

    /**
     * @param string $from
     */
    public function setFrom($from = null)
    {
        $this->_from = $from;
    }

    /**
     * @param string $to
     */
    public function setTo($to = null)
    {
        $this->_to = $to;
    }
}