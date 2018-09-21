<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'day']);
?>
<h4>Average online <?= $statistics['averageOnline'] ?> (today)</h4>
<h4>Maximum online <?= $statistics['maximumOnline'] ?> (today)</h4>
<table>
    <theead>
        <tr>
            <th>Players</th>
            <th>Date</th>
        </tr>
    </theead>
    <tbody>
    <?php foreach ($statistics['list'] AS $statistic): ?>
        <tr>
            <td><?= $statistic['players'] ?></td>
            <td><?= $statistic['createdAt'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
