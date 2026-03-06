<?php 
    require 'koneksi.php';

    if(isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "DELETE FROM ulasan_film WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        $stmt->execute();
        $stmt->close();
        $conn->close();
        
        header('Location: index.php');
        exit;
    } else {
        echo "id film tidak ditemukan";
    }
    