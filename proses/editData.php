<?php
  include "../koneksi.php";
  
  if (isset($_POST["ubah"])) {
    $id = $_GET["id"];
    $nama = $_POST["nama"];
    $genre = $_POST["genre"];
    $deskripsi = $_POST["deskripsi"];
    
    $sql = "UPDATE listgames SET nama = '$nama', genre = '$genre', deskripsi = '$deskripsi' WHERE id = '$id'";
    
    $result = mysqli_query($koneksi, $sql);
    
    if ($result) {
      echo"
        <script>
          alert('Data berhasil diubah');
          document.location.href = '../dashboard.php';
        </script>
      ";
    }else{
      echo"
      <script>
        alert('Data gagal diubah');
        document.location.href = '../dashboard.php';
      </script>
      ";
    }
  }
?>