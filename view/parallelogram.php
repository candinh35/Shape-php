<!doctype html>
<html lang="en">

<?php include "layout/header.php" ?>

<body>
    <form action="" method="post" class="find">

        <!-- HÌnh chữ nhật thì có 2 ô input -->
        <div class="form-group">
            <label for="">Please enter length</label>
            <input type="hidden" name="nameShape" value="parallelogram">
            <input type="text" name="length" id="" class="form-control" placeholder="Please enter length" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Please enter width</label>
            <input type="text" name="width" id="" class="form-control" placeholder="Please enter width" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Please enter height</label>
            <input type="text" name="height" id="" class="form-control" placeholder="Please enter height" aria-describedby="helpId">
        </div>
        <input type="submit" name="submit" class=" btn btn-info">
    </form>
    <?php include "layout/footer.php" ?>
</body>

</html>