<?php 
    $json = file_get_contents('https://www.boredapi.com/api/activity?type=diy');
    $jsonArray = json_decode($json, true);
?>

@extends('layout')