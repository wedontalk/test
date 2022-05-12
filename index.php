<?php require_once 'baitest1.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài test 1</title>
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
        <p style="color:red">Cho mảng số nguyên chưa được sắp xếp. Viết hàm xếp 5 số lớn nhất ra đầu mảng</p>
        <p>
            findMax5 ([3,4,5,3,2,3,10,11]) => 
            <?php
            for ($i=0; $i < count(timgiatri([3,4,5,3,2,3,10,11])); $i++) { 
                echo timgiatri ([3,4,5,3,2,3,10,11])[$i].' ';
            }?>
        </p>
        <p> 
            findMax5 ([14,12,38,17,10,36,12,29,45,34,48,22]) => 
            <?php
            for ($i=0; $i < count(timgiatri([14,12,38,17,10,36,12,29,45,34,48,22])); $i++) { 
                echo timgiatri([14,12,38,17,10,36,12,29,45,34,48,22])[$i].' ';
            }?>
        </p>
        <p> 
            findMax5 ([10,11,2,30,22,6,8,9,11,12,22]) => 
            <?php
            for ($i=0; $i < count(timgiatri([10,11,2,30,22,6,8,9,11,12,22])); $i++) { 
                echo timgiatri ([10,11,2,30,22,6,8,9,11,12,22])[$i].' ';
            }?>
        </p>
        <!-- test 2 -->
        <p style="color:red">Viết hàm nhận vào 1 mảng và trả ra phần tử xuất hiện nhiều lần nhất trong mảng</p>
        <p>
            findFrequent ([3, 7, 3]) =>
            <?php
                echo timphantu([3, 7, 3]);
            ?>
        </p>
        <p>
            findFrequent ([null, "hello", true, null]) =>
            <?php
                echo timphantu([null, "hello", true, null]);
            ?>
        </p>
        <p> 
            findFrequent ([false, "up", "down", "left", "right", true, false]) =>
            <?php
                echo timphantu([false, "up", "down", "left", "right", true, false]);
            ?>
        </p>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>