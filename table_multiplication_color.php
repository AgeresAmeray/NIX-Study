<?php
require 'function_table.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="table.css" rel="stylesheet" type="text/css"/>
    <title>NIX Education</title>
</head>
<body>
<p><h3>Таблица умножения</h3></p>
<div class="table">
    <div class="d-table">
        <div class="d-tr">
            <? for ($i = 1; $i <= 10; $i++): ?>
                <? if ($i == 6): ?>
                    <?= '</div>' ?>
                    <?= '<div class="d-tr">' ?>
                <? endif; ?>
                <div class="d-td">
                    <? for ($j = 1; $j <= 10; $j++): ?>
                        <? $multiplicand = getColor($i); ?>
                        <? $factor = getColor($j); ?>
                        <span style="color:<?= $multiplicand ?> "> <?= $i ?></span> x
                        <span style="color:<?= $factor ?>"> <?= $j ?></span> =
                        <?= multiplication($i, $j); ?>
                        <br>
                    <? endfor; ?>
                </div>
            <? endfor; ?>
        </div>
    </div>
</body>
</html>

