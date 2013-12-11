<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PRODUCTS FROM CSV</title>
    </head>
    <body>
        <table cellpadding="0" cellspacing="0">
            <thead>
            <th>
            <td>PRODUCT ID</td>
            <td>PRODUCT NAME</td>
            <td>CATEGORY</td>
            <td>PRICE</td>
        </th>
    </thead>

    <tbody>
        <?php foreach ($csvData as $field) : ?>
            <tr>
                <td><?= $field['id']; ?></td>
                <td><?= $field['name']; ?></td>
                <td><?= $field['category']; ?></td>
                <td><?= $field['price']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>

</table>

</body>
</html>
