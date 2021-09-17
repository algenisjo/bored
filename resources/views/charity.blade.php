<?php 
    $json = file_get_contents('https://www.boredapi.com/api/activity?type=charity');
    $jsonArray = json_decode($json, true);
?>

@extends('layout')