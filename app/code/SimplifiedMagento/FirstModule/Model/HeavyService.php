<?php


namespace SimplifiedMagento\FirstModule\Model;


class HeavyService
{
    public function __contruct()
    {
        echo " HeavyService has been instantiated";
    }

    public function printHeavyServiceMessage()
    {
        echo "Message from Heavy Service class";
    }
}