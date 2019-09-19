<?php


namespace App\Repository;

// using this as a mock for the data repo in the real application it would probably be an in memory kvs ie redis or memcache
class Repository
{
    public function getData()
    {
        $datatobecompared =
            array(
                "somedomian.com:8080string/wordvalue",
                "another.com:8087turn/this?parmater",
                "somedomian.com:8065/string/wordvalue",
                 );
        return $datatobecompared;

    }
}