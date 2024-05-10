<?php


//CREO L'ESTENZIONE MOVIE DELLA CLASSE PRODUCTION
class Movie extends Production
{
    public $profit;
    public $duration;

    function __construct($_title, $_language, $_vote, $_image, $_profit, $_duration)
    //AGGIUNGO LE VARIABILI PROFIT E DURATION
    {
        parent::__construct($_title, $_language, $_vote, $_image);
        $this->profit = $_profit;
        $this->duration = $_duration;
    }
}