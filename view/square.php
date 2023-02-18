<!doctype html>
<html lang="en">

<?php include "layout/header.php" ?>

<body>
    <form action="" method="post" class="find">
        <!-- HÌnh vuông thì có một ô input -->
        <div class="form-group">
            <label for="">Please enter length</label>
            <input type="hidden" name="nameShape" value="square">
            <input type="number" name="length" id="" class="form-control" placeholder="Please enter length" aria-describedby="helpId">
        </div>

        <input type="submit" name="submit" class="btn btn-info">
    </form>
    <?php include "layout/footer.php" ?>
</body>

</html>