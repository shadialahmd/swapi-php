<?php

header("Content-type:application/json");


class Read{

    private $url="https://swapi.dev/api/people/";



    public function getall(){

        $curl=curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl,CURLOPT_URL,$this->url);
        $result=curl_exec($curl);

       // return $arr=json_decode($result,true); //return data as array or object
        return $result;


    } 

}

$r=new Read();
print_r($r->getall());



?>