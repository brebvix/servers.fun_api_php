<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'day']);
?>
<h4>Средний онлайн <?= $statistics['averageOnline'] ?> (за сегодня)</h4>
<h4>Максимальный онлайн <?= $statistics['maximumOnline'] ?> (за сегодня)</h4>
<table>
    <thead>
    <tr>
        <th>Игроки</th>
        <th>Дата</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($statistics['list'] AS $statistic): ?>
        <tr>
            <td><?= $statistic['players'] ?></td>
            <td><?= $statistic['createdAt'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
