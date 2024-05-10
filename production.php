<?php
//CREAO LA CLASSE PRODUCTION
class Production
{
    public $title;
    public $language;
    public $vote;
    public $image;

    function __construct($_title, $_language, $_vote, $_image)
    {
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
        $this->image = $_image;
    }
}