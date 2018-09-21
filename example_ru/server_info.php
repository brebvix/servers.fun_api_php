<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$server = $api->get('servers');
?>

<h3>Информация о сервере: <?= $server['title'] ?></h3>
<table>
    <theead>
        <tr>
            <th>Параметр</th>
            <th>Значение</th>
        </tr>
    </theead>
    <tbody>
    <tr>
        <td>Адрес</td>
        <td><?= $server['ip'] ?>:<?= $server['port'] ?></td>
    </tr>
    <tr>
        <td>Игровой мод</td>
        <td><?= $server['gamemode'] ?></td>
    </tr>
    <tr>
        <td>Игра (мультиплеер)</td>
        <td><?= $server['game']['title'] ?></td>
    </tr>
    <tr>
        <td>Язык</td>
        <td><?= $server['language'] ?></td>
    </tr>
    <tr>
        <td>Рейтинг</td>
        <td><?= $server['rating'] ?><sup> / 10</sup></td>
    </tr>
    <tr>
        <td>Сайт</td>
        <td><?= $server['site'] ?></td>
    </tr>
    <tr>
        <td>Статус</td>
        <td><?= $server['onlineStatus'] ? 'Онлайн' : 'Оффлайн' ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    <tr>
        <td>Игроки</td>
        <td><?= $server['players']['number'] ?> / <?= $server['players']['maximum'] ?></td>
    </tr>
    <tr>
        <td>Средний онлайн</td>
        <td><?= $server['players']['averageNumber'] ?></td>
    </tr>
    <tr>
        <td>Максимальный онлайн</td>
        <td><?= $server['players']['maximumNumber'] ?></td>
    </tr>
    </tbody>
</table>
