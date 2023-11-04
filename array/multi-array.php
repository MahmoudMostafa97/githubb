<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
  $products = [
    ["product #1",150],
    ["product #2",50],
    ["product #3",200]
 ];
?>

<table border="2px">
    <thead>
        <tr>
            <th>product</th>
            <th>price</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $products[0][0]."<br> ";?> </td>
            <td><?php echo $products[0][1]."<br>";?></td>
           
         
            
        </tr>
        <tr>
        <td>
            <?php echo $products[1][0]."<br> ";?> </td>
            <td><?php echo $products[1][1]."<br>";?></td>
        </tr>
        <tr>
        <td>
            <?php echo $products[2][0]."<br> ";?> </td>
            <td><?php echo $products[2][1]."<br>";?></td>
        </tr>
    </tbody>
</table>
</body>
</html>