<?php

/**
 * Created by PhpStorm.
 * User: mohsen
 * Date: 8/17/2016
 * Time: 11:35 PM
 */
class ServerConf
{
    public $host = 'http://91.109.17.87';

    /**
     * @return string
     */
    public static function getHost()
    {
        $conf = new ServerConf();
        return $conf->host;
    }



}