<?php 
    $json = file_get_contents('https://www.boredapi.com/api/activity?type=busywork');
    $jsonArray = json_decode($json, true);
?>


@extends('layout')