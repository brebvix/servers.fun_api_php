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

$server = $api->get('servers');
?>

<h3>Информация о сервере: <?= $server['title'] ?></h3>
<table>
    <thead>
    <tr>
        <th>Параметр</th>
        <th>Значение</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Адрес</td>
        <td><?= $server['ip'] ?>:<?= $server['port'] ?></td>
    </tr>
    <tr>
        <td>Игровой мод</td>
        <td><?= $server['gamemode'] ?></td>
    </tr>
    <tr>
        <td>Игра (мультиплеер)</td>
        <td><?= $server['game']['title'] ?></td>
    </tr>
    <tr>
        <td>Язык</td>
        <td><?= $server['language'] ?></td>
    </tr>
    <tr>
        <td>Рейтинг</td>
        <td><?= $server['rating'] ?><sup> / 10</sup></td>
    </tr>
    <tr>
        <td>Сайт</td>
        <td><?= $server['site'] ?></td>
    </tr>
    <tr>
        <td>Статус</td>
        <td><?= $server['onlineStatus'] ? 'Онлайн' : 'Оффлайн' ?></td>
    </tr>
    <tr>
        <td colspan="2">
            <hr>
        </td>
    </tr>
    <tr>
        <td>Игроки</td>
        <td><?= $server['players']['number'] ?> / <?= $server['players']['maximum'] ?></td>
    </tr>
    <tr>
        <td>Средний онлайн</td>
        <td><?= $server['players']['averageNumber'] ?></td>
    </tr>
    <tr>
        <td>Максимальный онлайн</td>
        <td><?= $server['players']['maximumNumber'] ?></td>
    </tr>
    </tbody>
</table>
