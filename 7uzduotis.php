<!DOCTYPE html>
<html>
<head>
    <style>
        .even {
            border: solid 1px black;
            background-color: #504545;
            width: 100px;
            height: 100px;
        }

        .odd {
            border: solid 1px black;
            background-color: #FFF;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<table>
    <?php for ($i = 0; $i < 7 ; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 7; $j++): ?>
                <td class="<?= ($j === $i || ($j + $i == 6)) ? 'even' : 'odd' ?>"></td>
            <?php endfor; ?>
        </tr>
    <?php endfor ?>
</table>

</body>
</html>