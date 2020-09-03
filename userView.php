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
            <tr>
                <td><?php if (isset($user)) { echo $user->getFirstName(); } ?></td>
                <td><?php if (isset($user)) { echo $user->getLastName(); } ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
