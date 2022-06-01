<?php
     include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if ($_POST['aksi'] == "add"){
            
            $tanggal= $_POST['tanggal'];
            $week= $_POST['week'];
            $operator = $_POST['operator'];
            $leader = $_POST['leader'];
            $reject= $_POST['reject'];
            $finish= $_POST['finish'];
            $presentase= $_POST['presentase'];

            $query = "INSERT INTO tb_bop3 VALUES(null, '$tanggal', '$week', '$operator', '$leader', '$reject', '$finish', '$presentase')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                header("location: index.php");
                //echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
            } else{
                echo $query;
            }

            //echo $nisn.$nama_siswa.$jenis_kelamin.$foto.$alamat;
            
            //echo "<br>tambah data <a href='index.php'>[Home]</a>";
        }else if($_POST['aksi'] == "edit"){
           //echo "edit data <a href='index.php'>[Home]</a>";

           // var_dump($_POST);
            $id_stiker = $_POST['id_stiker'];
            $tanggal= $_POST['tanggal'];
            $week= $_POST['week'];
            $operator = $_POST['operator'];
            $leader = $_POST['leader'];
            $reject= $_POST['reject'];
            $finish= $_POST['finish'];
            $presentase= $_POST['presentase'];

            

            $query = "UPDATE tb_bop3 SET tanggal='$tanggal', week='$week', operator='$operator', leader='$leader', reject='$reject', finish='$finish', presentase='$presentase' WHERE id_stiker=$id_stiker;";
            $sql = mysqli_query($conn, $query);
            
           
                header("location: index.php");
               
        }

    }
    if(isset($_GET['hapus'])){
        $id_stiker = $_GET['hapus'];
        $query = "DELETE FROM tb_bop3 WHERE id_stiker = '$id_stiker';";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            //echo "data berhasil di tambahkan <a href='index.php'>[Home]</a>";
        } else{
            echo $query;
        }

        //echo "Hapus data <a href='index.php'>[Home]</a>";
    }
?>