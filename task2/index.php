<?php
namespace helpers;

const ROOT = __DIR__;

// проверяем, авторизирован ли пользователь
$user = new User();

if(!$user->isUser()){

}
//если метод get - показваем тест
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
?>
<form method="post">

</form>
<? }
//если post - значит отправлен результат теста, анализируем его
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $test = new Test($_POST);

    $dbConf = require ROOT.'/config/db_config.php';
    $dbHelper = new DBHelper($dbConf);
    $db = $dbHelper->db;

    $algoArr = $test->getAlgo($db);
    $answersArr = $test->getAnswers();

    $result = [];
    foreach ($algoArr as $algo) {
        $algoInstanse = new $algo($answersArr);
        //результат получаем в виде массива, например ['Повар' => '100']
        $result[] = $algoInstanse->getResult($db);
    }
    ?>
    <h2>Ваш результат</h2>
    <?php
    foreach ($result as $name => $percent) {
        ?>
        <p><?= $name ?>: <?= $percent ?>%</p>
        <?
    }
}
?>
