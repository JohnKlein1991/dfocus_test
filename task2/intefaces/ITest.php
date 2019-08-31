<?php


namespace interfaces;


interface ITest
{
    public function __construct($data);

    public function getAnswers();

    //в бд в таблице algo_to_tests находим какие алгоритмы нужны для данного теста и возвращаем их названия в виде
    // массива
    public function getAlgo($db);
}