<?php
class User
{
    private $address;
    private $cardnumber;
    private $expdate;
    public function __construct($address, $cardnumber, $expdate)
    {
        $this->address = $address;
        $this->cardnumber = $cardnumber;
        $this->expdate = $expdate;
    }

    public function checkExpdate($expdate) {
        if (strtotime($expdate < strtotime(date('M-Y')))) {
            echo('data scadenza carta accettata');
        } else {
            echo('carta scaduta');
        }




    }


}