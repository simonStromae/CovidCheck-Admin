<?php

use App\City;
use App\Statistic;
use Illuminate\Support\Facades\Auth;

function Username(){
        return Auth::user()->username;
}

function RoleUser(){
    return Auth::user()->role;
}

function AvatarUser(){
    return Auth::user()->avatar;
}

function addZero($number){
    return ($number > 9) ? $number : '0'.$number;
}

function countCasCity($name, $val){
    $datas = Statistic::where('cities_id', $val)->pluck($name);
    $response = 0;
    foreach ($datas as $data):
        $response += $data;
    endforeach;

    return addZero($response);
}

function countCas($name){
    $datas = Statistic::all()->pluck($name);
    $response = 0;
    foreach ($datas as $data):
        $response += $data;
    endforeach;

    return addZero($response);
}
function countCasRegion($region_id, $name){
    $response = 0;
    $cities = City::where('regions_id', $region_id)->get();
    foreach ($cities as $city):
        $val = $city->id;
        $datas = Statistic::where('cities_id', $val)->pluck($name);
        foreach ($datas as $data):
            $response += $data;
        endforeach;
    endforeach;

    return $response;
}
function newFormat($date){
    return \DateTime::createFromFormat('m/d/Y', $date)->format('d/m/Y');
}


