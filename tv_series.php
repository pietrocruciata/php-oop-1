<?php

//CREO L'ESTENZIONE TVSERIES DELLA CLASSE PRODUCTION

class TVSeries extends Production
{
    public $seasons;

    function __construct($_title, $_language, $_vote, $_image, $_seasons)
    //AGGIUNGO LA VARIABILE SEASONS
    {
        parent::__construct($_title, $_language, $_vote, $_image);
        $this->seasons = $_seasons;
    }
}