<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$statistics = $api->get('statistics', ['per' => 'week']);
?>
<h4>Average online <?= $statistics['averageOnline'] ?> (last week)</h4>
<h4>Maximum online <?= $statistics['maximumOnline'] ?> (last week)</h4>
<table>
    <theead>
        <tr>
            <th>Average online</th>
            <th>Maximum online</th>
            <th>Date</th>
        </tr>
    </theead>
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
