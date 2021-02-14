<?php

//header("Content-type:application/json");


class Read{

    //private $url="https://swapi.dev/api/people/";



    public function getall($url){

        $curl=curl_init();
        curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($curl,CURLOPT_URL,$url);
        $result=curl_exec($curl);

       // return $arr=json_decode($result,true); //return data as array or object
        return $result;


    } 

}




?>

