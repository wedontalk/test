<?php
    // Nhánh kết nối thành công
    try {
        // Kết nối
        $conn = new PDO("mysql:host=localhost;dbname=xulydulieu", 'root', '');
        // Thiết lập chế độ lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } 
    // Nhánh kết nối thất bại
    catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }
    $show = $conn->prepare("SELECT id, hovaten, email, sodienthoai, noidung FROM dulieu");
    $show->execute();
    $show->setFetchMode(PDO::FETCH_ASSOC);
    $result = $show->fetchAll();
?>
<?php
        if (isset($_POST["hovaten"])) {
            $hovaten = $_POST['hovaten'];
        }
        if (isset($_POST["email"])) {
            $email = $_POST['email'];
        }
        if (isset($_POST["sodienthoai"])) {
            $sodienthoai = $_POST['sodienthoai'];
        }
        if (isset($_POST["noidung"])) {
            $noidung = $_POST['noidung'];
        }
        // thêm dữ liệu    
        if(isset($_POST["hovaten"]) && isset($_POST["email"]) && isset($_POST["sodienthoai"])){
            if($hovaten != "" && $email != "" && $sodienthoai != ""){
                $sql = "INSERT INTO dulieu (hovaten, email, sodienthoai, noidung) VALUES ('$hovaten','$email','$sodienthoai','$noidung')";
                $result = $conn->query($sql);
                header("location:bai2.php");
            }
            else{
                echo 'thất bại';
            }
        }
?>