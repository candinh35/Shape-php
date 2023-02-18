<!doctype html>
<html lang="en">

<?php include "layout/header.php" ?>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Perimeter</th>
                <th>Acreage</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo ucfirst($nameShape); ?></td>
                <td><?php echo $perimeter; ?></td>
                <td><?php echo $acreage; ?></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <?php include "layout/footer.php" ?>
</body>

</html>