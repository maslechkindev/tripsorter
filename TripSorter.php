<?php
require_once(__DIR__ . '/TripSorterInterface.php');
require_once(__DIR__ . '/TransportInterface.php');
require_once(__DIR__ . '/TransportBuilder.php');
require_once(__DIR__ . '/Train.php');
require_once(__DIR__ . '/Bus.php');
require_once(__DIR__ . '/Airplain.php');

class TripSorter implements TripSorterInterface
{

    /** @var  string */
    private $_route;

    /**
     * @param string $tickets
     */
    public function setTickets($tickets)
    {
        $sortTickets = [];
        $builder = new TransportBuilder();
        foreach($tickets as $ticket){
            switch($ticket['name']){
                case 'bus':
                    $transport = new Bus();
                    break;
                case 'airplain':
                    $transport = new Airplain();
                    break;
                case 'train':
                    $transport = new Train();
                    break;
                default:
                    $transport = null;
            }
            $ticket = $builder->create($transport, $ticket);
            //todo sort
            //todo create route $sortTickets
        }
        // todo $this->setRoute($sortTickets);
    }

    /**
     * @return string
     */
    public function getRoute()
    {
        return $this->_route;
    }

    /**
     * @param string $route
     */
    public function setRoute($route)
    {
        $this->_route = $route;
    }
}