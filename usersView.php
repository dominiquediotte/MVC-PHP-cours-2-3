<?php

foreach ($users as $user) {
    echo '<table>';
    echo    '<tr>';
    echo        '<td>' . $user->getFirstName() . '</td>';
    echo        '<td>' . $user->getLastName() . '</td>';
    echo    '</tr>';
    echo '</table>';
}
