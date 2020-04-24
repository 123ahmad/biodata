<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
 
    <link rel="stylesheet" href="assets/css/bootstrap.css"> 

</head> 
<body> 
 
    <div class="container">
    <form method="post" action="input-data-keluhan.php">
            <table>
                <tr>
                    <td>NAMA</td><td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>ALAMAT</td><td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>KELUHAN</td><td><input type ="text" name="keluhan"></td>
                </tr>
                <tr><td>JENIS KELAMIN</td><td>
                        <input type="radio" name="jenis_kelamin" value="L">Laki Laki
                        <input type="radio" name="jenis_kelamin" value="P">Perempuan
                    </td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN</button></td></tr>
            </table>
        </form>
</div>
 
    <script src="assets/js/jquery.js"></script> 
    <script src="assets/js/popper.js"></script> 
    <script src="assets/js/bootstrap.js"></script>
</body> 
</html>
