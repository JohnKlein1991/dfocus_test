<?php


namespace interfaces;


interface IAlgo
{
    //принимает массив названий вопросов и вариантов ответов, например ['like_cook' => 1, 'like_eat' => 3]
    public function __construct($questionsArr);

    //проходит по массиву с вопросами. Для каждого алгоритма есть таблица с вопросами со столбцами:
    // question, answer, result (например like_cook, 1, 2), суммирует результаты (столбец result),
    // считает процент, возвращает массив вида ['Повар' => '100']
    public function getResult($db);
}