<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'month']);
?>
<h4>Средний онлайн <?= $statistics['averageOnline'] ?> (за последний месяц)</h4>
<h4>Максимальный онлайн <?= $statistics['maximumOnline'] ?> (за последний месяц)</h4>
<table>
    <thead>
        <tr>
            <th>Средний онлайн</th>
            <th>Максимальный онлайн</th>
            <th>Дата</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($statistics['list'] AS $statistic): ?>
        <tr>
            <td><?= $statistic['averageOnline'] ?></td>
            <td><?= $statistic['maximumOnline'] ?></td>
            <td><?= $statistic['createdAt'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
