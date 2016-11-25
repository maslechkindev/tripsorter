<?php

interface TripSorterInterface
{
    public function setTickets($tickets);
    
    public function getRoute();

    public function setRoute($route);
}