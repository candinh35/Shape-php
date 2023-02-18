<!doctype html>
<html lang="en">

<?php include "layout/header.php" ?>

<body>
    <form action="" method="post" class="find">

        <!-- HÌnh tam giác thì có 3 ô input -->
        <div class="form-group">
            <label for="">Please enter edgeOne</label>
            <input type="hidden" name="nameShape" value="triangle">
            <input type="text" name="edgeOne" id="" class="form-control" placeholder="Please enter edgeOne" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Please enter edgeTwo</label>
            <input type="text" name="edgeTwo" id="" class="form-control" placeholder="Please enter edgeTwo" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Please enter edgeThree</label>
            <input type="text" name="edgeThree" id="" class="form-control" placeholder="Please enter edgeThree" aria-describedby="helpId">
        </div>
        <input type="submit" name="submit" class=" btn btn-info">
    </form>
    <?php include "layout/footer.php" ?>
</body>

</html>