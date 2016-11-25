<?php

require_once(__DIR__ . '/TransportInterface.php');

class TransportBuilder
{
    /**
     * @param TransportInterface | null  $transport
     * @param array $ticket
     */
    public function create(TransportInterface $transport, $ticket)
    {
        try{
            $transport->setTransportNumber($ticket[$transport::TRANSPORT_NUMBER_LABEL]);
            $transport->setGate($ticket[$transport::TRANSPORT_GATE_LABEL]);
            $transport->setSeat($ticket[$transport::TRANSPORT_SEAT_LABEL]);
            $transport->setBaggage($ticket[$transport::TRANSPORT_BAGGAGE_LABEL]);
            $transport->setDescription($ticket[$transport::TRANSPORT_DESCRIPTION_LABEL]);
            $transport->setFrom($ticket[$transport::TRANSPORT_FROM_LABEL]);
            $transport->setTo($ticket[$transport::TRANSPORT_TO_LABEL]);
            return $transport;
        } catch (Exception $e) {
            echo 'Transport is not found: ',  $e->getMessage(), "\n";
        }
    }
}