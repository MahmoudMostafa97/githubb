<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php $student= [
    "name"=>"Mahmoud",
    "email"=>"mahmoud97m97@gmail.com",
    "phone"=>"0996620159"

];
?>

<table border="2px">
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $student["name"]."<br>";?> </td>
            <td><?php echo $student["email"]."<br>";?></td>
            <td><?php echo $student["phone"]."<br>";?></td>
        </tr>
    </tbody>
</table>
</body>
</html>