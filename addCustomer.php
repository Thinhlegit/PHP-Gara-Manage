<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $MAKH = $_POST['MAKH'];
        $HOTENKH= $_POST['HOTENKH'];
        $DIACHI = $_POST['DIACHI'];
        $DIENTHOAI = $_POST['DIENTHOAI'];

        $sql = "INSERT INTO `khachhang` (MAKH, HOTENKH, DIACHI, DIENTHOAI) 
        values('$MAKH','$HOTENKH','$DIACHI','$DIENTHOAI')";
        $result = mysqli_query($connect,$sql);
        if($result){
            echo "data inserted successfully";
            // header("location:display.php");
        }
        else{
            echo "data inserted unsuccessfully";
        }
        $result->close();    
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Add New Customer</title>
</head>
<body >
    
    <div class="container m-5 w-75">
        
        <form method="post">
            <h2 class="mt-5">Thêm thông tin xe khách hàng</h2>

            <div class="form-group row">
                <label for="MAKH" class="col-sm-2 ">Mã khách hàng</label>
                <div class="col-sm-5">
                <input type="text" name="MAKH" placeholder="KH01">
                </div>
            </div>
            <div class="form-group row">
                <label for="HOTENKH" class="col-sm-2 ">Họ tên khách hàng</label>
                <div class="col-sm-5">
                <input type="text" name="HOTENKH" placeholder="Trần Văn Hùng">
                </div>
            </div>
            <div class="form-group row">
                <label for="DIACHI" class="col-sm-2 ">Địa chỉ</label>
                <div class="col-sm-5">
                <input type="text" name="DIACHI" placeholder="ABC">
                </div>
            </div>
            <div class="form-group row">
                <label for="DIENTHOAI" class="col-sm-2 ">Điện thoại</label>
                <div class="col-sm-5">
                <input type="text" name="DIENTHOAI" placeholder="09xxxxxxxxx">
                </div>
            </div>
            <button type="submit"  name="submit" class="btn btn-primary btn-lg">Thêm</button>
        </form>
    </div>
</body>
</html>
<?php 
   


?>