<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'week']);
?>
<h4>Средний онлайн <?= $statistics['averageOnline'] ?> (за неделю)</h4>
<h4>Максимальный онлайн <?= $statistics['maximumOnline'] ?> (за неделю)</h4>
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
