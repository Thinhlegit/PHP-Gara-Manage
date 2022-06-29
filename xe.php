<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $SOXE = $_POST['SOXE'];
        $HANGXE= $_POST['HANGXE'];
        $NAMSX = $_POST['NAMSX'];
        $MAKH = $_POST['MAKH'];

        $sql = "INSERT INTO `xe` (SOXE, HANGXE, NAMSX, MAKH) 
        values('$SOXE','$HANGXE','$NAMSX','$MAKH')";
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
            <h2 class="mt-5">Thêm Khách Hàng</h2>
            <div class="form-group row">
                <label class="col-sm-2">Họ tên khách hàng</label>
                <div class="col-sm-5">
                    <select  class="col-sm-5" name="MAKH" id="cars">
                    <?php
                        $sql = "SELECT * FROM `khachhang`";
                        $result = mysqli_query($connect,$sql); 
                        if($result){
                            while($row = mysqli_fetch_array($result))
                            {
                                $MAKH = $row['MAKH'];
                                $HOTENKH = $row['HOTENKH'];  
                                echo '
                                    <option value="'.$MAKH.'">'.$HOTENKH.'</option>';
                            }
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="SOXE" class="col-sm-2 ">Số xe</label>
                <div class="col-sm-5">
                <input type="text" name="SOXE" placeholder="51H-XXX.XX">
                </div>
            </div>
            <div class="form-group row">
                <label for="HANGXE" class="col-sm-2 ">Hãng Xe</label>
                <div class="col-sm-5">
                    <select name="HANGXE">
                        <option value="Toyota">Toyota</option>
                        <option value="BMW">BMW</option>
                        <option value="Audi">Audi</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="NAMSX" class="col-sm-2 ">Năm sản xuất</label>
                <div class="col-sm-5">
                <input type="text" name="NAMSX" placeholder="2020">
                </div>
            </div>
            <button type="submit"  name="submit" class="btn btn-primary btn-lg">Thêm</button>
        </form>
    </div>
</body>
</html>
<?php 
   


?>