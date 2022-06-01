<?php
    include 'koneksi.php';
    
    $query = "SELECT * FROM tb_bop3;";
    $sql = mysqli_query($conn, $query);
    $no = 0;

?>


<!DOCTYPE html>
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

    <title>Reject Sticker BOP 03</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="img/ver2-logo(png).png" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Reject Sticker BOP 03
          </a>
        </div>
      </nav>

      <!--Judul-->
      <div class="container-fluid">
        <h1 class="mt-4">Data Reject Sticker</h1>
        <figure>
              <blockquote class="blockquote">
                  <p>Harap isi dengan benar dan jujur.</p>
              </blockquote>
              
        </figure>
        <a href="kelola.php" type="button"class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Input Reject
        </a>

    <div class="container">
       

        <!--Tabel-->
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th><center>No</center></th>
                        <th>Tanggal</th>
                        <th>Week</th>
                        <th>Operator</th>
                        <th>Group Leader</th>
                        <th>Reject Sticker</th>
                        <th>Finish Good</th>
                        <th>Persentase</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php
                            while($result = mysqli_fetch_assoc($sql)){
                    ?>

                        <tr>
                            <th><center>
                                <?php echo ++$no; ?>.
                            </center></th>
                            <td>
                                <?php echo $result['tanggal']; ?>
                            </td>
                            <td>
                                <?php echo $result['week']; ?>
                            </td>
                            <td>
                                <?php echo $result['operator']; ?>
                            </td>
                            <td>
                                <?php echo $result['leader']; ?>
                            </td>
                            <td>
                                <?php echo $result['reject']; ?>
                            </td>
                            <td>
                                <?php echo $result['finish']; ?>
                            </td>
                            <td>
                                <?php echo $result['presentase']; ?>
                            </td>
                            <td>
                                <a href="kelola.php?ubah=<?php echo $result['id_stiker']; ?>" type="button" class="btn btn-success btn-sm">
                                    <i class=" fa fa-pencil"></i>
                                </a>
                                <a href="proses.php?hapus=<?php echo $result['id_stiker']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah Anda Yakin Ingin Menghapus Data???')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>

           

                </tbody>
            </table>
          </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>