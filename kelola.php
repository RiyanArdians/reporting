<!DOCTYPE html>

<?php
    include 'koneksi.php';

    $id_stiker = '';
    $tanggal = '';
    $week = '';
    $operator = '';
    $leader = '';
    $reject = '';
    $finish = '';
    $presentase = '';

    if(isset($_GET['ubah'])){
        $id_stiker = $_GET['ubah'];

        $query = "SELECT * FROM tb_bop3 WHERE id_stiker = '$id_stiker';";
        $sql = mysqli_query($conn, $query);

        $result = mysqli_fetch_assoc($sql);

        $tanggal = $result['tanggal'];
        $week = $result['week'];
        $operator = $result['operator'];
        $leader = $result['leader'];
        $reject = $result['reject'];
        $finish = $result['finish'];
        $presentase = $result['presentase'];

        //var_dump($result);
       //die();
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Boostrap-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <!--J-Query-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <title>rijek</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/ver2-logo(png).png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Data reject
          </a>
        </div>
      </nav>

    <div class="container">
       <form method="POST" action="proses.php">
           <input type="hidden" value="<?php echo $id_stiker; ?>" name="id_stiker">
        <div class="mb-3 row">
                <label for="nisn" class="col-sm-2 col-form-label">
                    Tanggal
                </label>
                <div class="col-sm-10">
                <input required type="date" name="tanggal" class="form-control" id="tanggal" value="<?php echo date("d-m-Y"); ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="week" class="col-sm-2 col-form-label">
                    Week
                </label>
                <div class="col-sm-10">
                <input required type="text" name="week" class="form-control" id="operator" placeholder="01" value="<?php echo $week;?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="operator" class="col-sm-2 col-form-label">
                    Operator
                </label>
                <div class="col-sm-10">
                <input required type="text" name="operator" class="form-control" id="operator" placeholder="Riyan Ardiansyah" value="<?php echo $operator;?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="leader" class="col-sm-2 col-form-label">
                    Group Leader
                </label>
                <div class="col-sm-10">
                    <select required id="leader" name="leader" class="form-select">
                        <option <?php if($leader =='SRI WAHYUNI'){echo "selected";}?> value="SRI WAHYUNI">SRI WAHYUNI</option>
                        <option <?php if($leader =='SITI AISYAH'){echo "selected";}?> value="SITI AISYAH">SITI AISYAH</option>
                        <option <?php if($leader =='ETI SUMIATI'){echo "selected";}?> value="ETI SUMIATI">ETI SUMIATI</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="reject" class="col-sm-2 col-form-label">
                    Reject Sticker
                </label>
                <div class="col-sm-10">
                <input required type="text" name="reject" class="form-control" id="reject" placeholder="0" value="<?php echo $reject;?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="finish" class="col-sm-2 col-form-label">
                    Finish Good
                </label>
                <div class="col-sm-10">
                <input required type="text" name="finish" class="form-control" id="finish" placeholder="0" value="<?php echo $finish;?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="presentase" class="col-sm-2 col-form-label">
                    Persentase
                </label>
                <div class="col-sm-10">
                <input required type="text"  pattern="[0-9]+([\.,][0-9]+)?" name="presentase" class="form-control" id="presentase" placeholder="0" value="<?php echo $presentase;?>">
                </div>
            </div>

            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Simpan Perubhan
                        </button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="add" class="btn btn-primary">
                            <i class="fa fa-floppy-o" aria-hidden="true"></i>
                            Tambahkan
                        </button>
                    <?php
                        } 
                    ?>    
                    <a href="index.php" type="button" class="btn btn-danger">
                        <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                        Batal
                    </a>
                </div>
            </div>
       </form>
    </div>
</body>
</html>