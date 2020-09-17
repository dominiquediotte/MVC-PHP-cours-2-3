<?php

echo    '<tr>';
echo        '<td>' . $user->getFirstName() . '</td>';
echo        '<td>' . $user->getLastName() . '</td>';
echo        '<td><button type="button" class="btn btn-danger">Supprimer</button></td>';
echo    '</tr>';
