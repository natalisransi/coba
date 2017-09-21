<?php


$this->title = 'Demo Query Builder Yii2';

?>

<h1>Daftar Tim Sepak Bola</h1>

<p>Data berikut diambil dengan menggunakan query builder:</p>
<pre>
$query1 = (new \yii\db\Query())
            ->select(['*'])
            ->from('teams')
            ->all();
</pre>
<p>==> return <?= count($query1) ?> rows</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Country</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query1 as $team): ?>
            <tr>
                <td><?= $team['id'] ?></td>
                <td><?= $team['name'] ?></td>
                <td><?= $team['country'] ?></td>
                <td><?= $team['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr />
<pre>
$query2 = (new \yii\db\Query())
                    ->select(['id', 'name', 'country'])
                    ->from('teams')
                    ->limit(5)
                    ->all();
</pre>
<p>==> return <?= count($query2) ?> rows</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Country</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query2 as $team): ?>
            <tr>
                <td><?= $team['id'] ?></td>
                <td><?= $team['name'] ?></td>
                <td><?= $team['country'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr />
<pre>
$query3 = (new \yii\db\Query())
                    ->select(['*'])
                    ->from('teams')
                    ->where(['country' => 'England'])
                    ->orderBy('name')
                    ->all();
</pre>
<p>==> return <?= count($query3) ?> rows</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Country</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query3 as $team): ?>
            <tr>
                <td><?= $team['id'] ?></td>
                <td><?= $team['name'] ?></td>
                <td><?= $team['country'] ?></td>
                <td><?= $team['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr />
<pre>
$query4 = (new \yii\db\Query())
                    ->select(['*'])
                    ->from('teams')
                    ->where(['description' => '%sebut%'])
                    ->orderBy('name')
                    ->all();
</pre>
<p>==> return <?= count($query4) ?> rows</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Country</td>
            <td>Description</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query4 as $team): ?>
            <tr>
                <td><?= $team['id'] ?></td>
                <td><?= $team['name'] ?></td>
                <td><?= $team['country'] ?></td>
                <td><?= $team['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<hr />
<pre>
$query5 = (new \yii\db\Query())
                    ->select(['country'])
                    ->from('teams')
                    ->groupBy('country')
                    ->orderBy('name')
                    ->all();
</pre>
<p>==> return <?= count($query5) ?> rows</p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td>Country</td>
            <td>Total</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($query5 as $team): ?>
            <tr>
                <td><?= $team['country'] ?></td>
                <td><?= $team['total'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

