<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'month']);
?>
<h4>Average online <?= $statistics['averageOnline'] ?> (last month)</h4>
<h4>Maximum online <?= $statistics['maximumOnline'] ?> (last month)</h4>
<table>
    <thead>
    <tr>
        <th>Average online</th>
        <th>Maximum online</th>
        <th>Date</th>
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
