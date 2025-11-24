<?php

include 'fungsi.php';
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "tambah"){

            $berhasil = tambah_data($_POST, $_FILES);

            if($berhasil){
                header("location: index.php");
            }else {
                echo $berhasil;
            }

        }elseif ($_POST['aksi'] == "edit"){
            $berhasil = edit_data($_POST, $_FILES);
            if($berhasil){
                header("location: index.php");
            }else {
                echo $berhasil;
            }
        }
    }
    // if(isset($_GET['hapus'])){
    //     hapus_data($_GET);
    //     if($sql){
    //             header("location: index.php");
    //             // echo "berhasil <a href='index.php'>[Home] <a>";
    //         }else {
    //             echo $query;
    //         }   
    //         // echo "hapus data <a href='index.php'>[Home] <a>";
    //     }
?>