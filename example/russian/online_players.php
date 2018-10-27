<?php
/*
 * Copyright 2018 Nazar Gavaga.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use brebvix\ServersFunApi;

$api = new ServersFunApi('217.182.36.95:7777');

$players = $api->get('players', ['type' => 'online']);
?>
<h3>Игроки онлайн</h3>
<table>
    <thead>
    <tr>
        <th># id</th>
        <th>Никнейм</th>
        <th>Количество отыгранных минут</th>
        <th>Последний раз был онлайн</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($players['list'] AS $player): ?>
        <tr>
            <td><?= $player['id'] ?></td>
            <td><?= $player['nickname'] ?></td>
            <td><?= $player['playedMinutes'] ?></td>
            <td><?= $player['lastActivity'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
