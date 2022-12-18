<?php
     $koneksi = mysqli_connect("localhost", "root", "", "barbershop");

     function view($query){
          global $koneksi;
          $hasil = mysqli_query($koneksi, $query);
          $rows =[];
          while($row = mysqli_fetch_assoc($hasil)){
               $rows[] = $row;
          }
          return $rows;
     }

     function addModel($data){
          global $koneksi;
          $nama = $data["nama"];
          $tarif = $data["tarif"];
          $gambar = $data["gambar"];

          $query = "INSERT INTO model VALUES ('','$nama', '$tarif', '$gambar')";
          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
     }

     function addCabang($data){
          global $koneksi;
          $nm_cabang = $data["nm_cabang"];
          $jam_op = $data["jam_op"];
          $no_telp = $data["no_telp"];
          $alamat = $data["alamat"];

          $query = "INSERT INTO cabang VALUES ('','$nm_cabang', '$jam_op', '$no_telp', '$alamat')";
          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
     }

     function addTransaksi($data){
          global $koneksi;
          $tgl = $data["tgl"];
          $id_model = $data["id_model"];
          $id_cabang = $data["id_cabang"];

          $query = "INSERT INTO transaksi VALUES ('','$tgl', '$id_model', '$id_cabang')";
          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
     }

     function delete($query) {
          global $koneksi;
          mysqli_query($koneksi, $query);
          return mysqli_affected_rows($koneksi);
     }

     function updateModel($data, $id) {
          global $koneksi;
          $nama = $data["nama"];
          $tarif = $data["tarif"];
          $gambar = $data["gambar"];

          $query = "UPDATE model SET nama_model = '$nama', tarif = '$tarif', img_model = '$gambar' WHERE id_model = $id";
          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
     }

     function updateCabang($data, $id){
          global $koneksi;
          $nm_cabang = $data["nm_cabang"];
          $jam_op = $data["jam_op"];
          $no_telp = $data["no_telp"];
          $alamat = $data["alamat"];

          $query = "UPDATE cabang SET nm_cabang = '$nm_cabang', jam_op = '$jam_op', no_telp = '$no_telp', alamat = '$alamat' WHERE id_cabang = $id";
          mysqli_query($koneksi, $query);

          return mysqli_affected_rows($koneksi);
     }

?>