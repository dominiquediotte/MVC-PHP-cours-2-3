<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>Firstname</td>
                <td>Lastname</td>
            </tr>
        </thead>
        <tbody>
            <?php
            
            foreach ($users as $user) {
                echo '<tr>';
                echo    '<td>' . $user->getFirstName() . '</td>';
                echo    '<td>' . $user->getLastName() . '</td>';
                echo '</tr>';
            }

            ?>
        </tbody>
    </table>
</body>
</html>
