<?php

interface TransportInterface
{
    const TRANSPORT_NUMBER_LABEL = 'transportNumber';
    const TRANSPORT_SEAT_LABEL = 'seat';
    const TRANSPORT_GATE_LABEL = 'gate';
    const TRANSPORT_BAGGAGE_LABEL = 'babbage';
    const TRANSPORT_DESCRIPTION_LABEL = 'description';
    const TRANSPORT_FROM_LABEL = 'from';
    const TRANSPORT_TO_LABEL = 'to';

    public function getTransportName();

    public function getTransportNumber();

    public function getSeat();

    public function getGate();

    public function getBaggage();

    public function getDescription();

    public function getFrom();

    public function getTo();

    public function setTransportNumber($transportNumber = null);

    public function setSeat($seat = null);

    public function setGate($gate = null);

    public function setBaggage($baggage = null);

    public function setDescription($description = null);

    public function setFrom($from = null);

    public function setTo($to = null);
}