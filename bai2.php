<?php
    include_once 'xulydulieu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài test 2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">bài 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bai2.php">bài 2</a>
            </li>
        </ul>
    </div>
    <hr>
    <div class="container">
        <form action="xulydulieu.php" method="post">
            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" class="form-control" name="hovaten">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" class="form-control" name="sodienthoai">
            </div>
            <div class="form-group">
                <label>Nội dung liên hệ</label>
                <input type="text" class="form-control" name="noidung">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <hr>
            <span class="btn btn-danger"><a href="?delete" style="color:white">Xóa tất cả</a></span>
    </div>
    <hr>
    <div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">id</th>
            <th scope="col">Họ và tên</th>
            <th scope="col">email</th>
            <th scope="col">số điện thoại</th>
            <th scope="col">Nội dung liên hệ</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ( $result as  $val) {
                echo '<tr>
                    <th scope="row">'.$val['id'].'</th>
                    <td>'.$val['hovaten'].'</td>
                    <td>'.$val['email'].'</td>
                    <td>'.$val['sodienthoai'].'</td>
                    <td>'.$val['noidung'].'</td>
                </tr>';
            }
            ?>
        </tbody>
    </table>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
<?php
    if(isset($_GET['delete'])){
        $sql = "DELETE FROM dulieu";
        // Thực thi câu truy vấn
        $conn->exec($sql);
        header("location:bai2.php");
    }
?>