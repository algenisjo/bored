<?php 
    $json = file_get_contents('https://www.boredapi.com/api/activity?type=relaxation');
    $jsonArray = json_decode($json, true);
?>

@extends('layout')

