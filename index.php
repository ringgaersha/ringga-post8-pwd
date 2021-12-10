<?php
    //create database connection using config file
    include_once("koneksi.php");

    //fetch all users data from database
    $result = mysqli_query($con,"SELECT * FROM mahasiswa");
?>
<html>
    <head>
        <title>Halaman Utama</title>
        <style type="text/css">
		button{
            padding: 8px 20px;
            border-radius:5px;
            background-color: CadetBlue;
        }
        a{
            text-decoration:none;
            color:black;

        }
	</style>
    </head>    

    <body>
       <button> <b><a href="tambah.php">Tambah Data Baru</a></b></button></br></br>
        <table width='80%' border=1>
 
            <tr>
                <th>Nim</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>Tgl Lahir</th>
                <th>Update</th>
                
            </tr>
          
    <?php
        while($user_data = mysqli_fetch_array($result)){
            echo"<tr>";
                echo"<td>".$user_data['nim']."</td>";
                echo"<td>".$user_data['namaMHS']."</td>";
                echo"<td>".$user_data['jkel']."</td>";
                echo"<td>".$user_data['alamat']."</td>";
                echo"<td>".$user_data['tgllhr']."</td>";
                echo"<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
        }
    ?> 
  
    </table>
    <br><br>
    <!--Modifikasi menambahkan fungsional cetak -->
    <button>  <b><a href="cetak.php">CETAK DATA</a></b></button> 
    </body>
</html>