<?php
/**
 * Copyright (c) 2018. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use brebvix\ServersFunApi;

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
