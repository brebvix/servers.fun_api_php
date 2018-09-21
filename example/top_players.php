<?php
include('../ServersFunApi.php');

$api = new ServersFunApi('217.182.36.95:7777');

$topPlayers = $api->get('players', ['type' => 'top']);
?>
<h3>TOP players</h3>
<table>
    <thead>
    <tr>
        <th># id</th>
        <th>Nickname</th>
        <th>Played minutes</th>
        <th>Last activity</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($topPlayers['list'] AS $player): ?>
        <tr>
            <td><?= $player['id'] ?></td>
            <td><?= $player['nickname'] ?></td>
            <td><?= $player['playedMinutes'] ?></td>
            <td><?= $player['lastActivity'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
