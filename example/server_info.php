<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$server = $api->get('servers');
?>

<h3>Server info: <?= $server['title'] ?></h3>
<table>
    <thead>
    <tr>
        <th>Parameter</th>
        <th>Value</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Address</td>
        <td><?= $server['ip'] ?>:<?= $server['port'] ?></td>
    </tr>
    <tr>
        <td>Gamemode</td>
        <td><?= $server['gamemode'] ?></td>
    </tr>
    <tr>
        <td>Game</td>
        <td><?= $server['game']['title'] ?></td>
    </tr>
    <tr>
        <td>Language</td>
        <td><?= $server['language'] ?></td>
    </tr>
    <tr>
        <td>Gamemode</td>
        <td><?= $server['gamemode'] ?></td>
    </tr>
    <tr>
        <td>Rating</td>
        <td><?= $server['rating'] ?><sup> / 10</sup></td>
    </tr>
    <tr>
        <td>Site</td>
        <td><?= $server['site'] ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><?= $server['onlineStatus'] ? 'Online' : 'Offline' ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    <tr>
        <td>Players</td>
        <td><?= $server['players']['number'] ?> / <?= $server['players']['maximum'] ?></td>
    </tr>
    <tr>
        <td>Average online</td>
        <td><?= $server['players']['averageNumber'] ?></td>
    </tr>
    <tr>
        <td>Maximum online</td>
        <td><?= $server['players']['maximumNumber'] ?></td>
    </tr>
    </tbody>
</table>
