<!doctype html>
<html>
    <head>
        <title>Pagination with Boostrap 3 - harviacode.com</title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <?php
        // Establish database connection
        $conn = mysqli_connect("localhost", "admin", "admin", "toko");

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $kiriman = $_GET['data'];

        // Assuming $conn is your database connection variable

        $barang_query = "SELECT * FROM barang WHERE id_barang='$kiriman'";
        $barang_result = mysqli_query($conn, $barang_query);

        if (!$barang_result) {
            die("Error: " . mysqli_error($conn));
        }

        $data_barang = mysqli_fetch_array($barang_result);

        echo "
        <br/><br/><br/><br/>
        <center>
        <form action=simpan_mutakhir_barang.php method=post>
            <table style='font-family:sans-serif'; class='table table-bordered'>
                <tr>
                    <td>ID Barang</td><td>:</td>
                    <td><input class=form-control type=text name=id_barang value='$data_barang[0]' readonly></td> 
                </tr>
                <tr>
                    <td>Nama Barang</td> <td>:</td>
                    <td><input class=form-control type=text name=nama value='$data_barang[1]'></td>
                </tr>
                <tr>
                    <td>Jenis Barang</td><td>:</td>
                    <td><input class=form-control type=text name=jenis value='$data_barang[2]'></td>
                </tr>
                <tr>
                    <td>Ukuran</td><td>:</td>
                    <td><input class=form-control type=text name=ukuran value='$data_barang[3]'></td>
                </tr>
                <tr>
                    <td>Warna</td><td>:</td>
                    <td><input class=form-control type=text name=warna value='$data_barang[4]'></td>
                </tr>
                <tr>
                    <td>ID Supplier</td><td>:</td>
                    <td><input class=form-control type=text name=id_supplier value='$data_barang[5]'></td>
                </tr>
                <tr>
                    <td>Harga</td><td>:</td>
                    <td><input class=form-control type=text name=harga value='$data_barang[6]'></td>
                </tr>
                <tr>
                    <td>Jumlah</td><td>:</td>
                    <td><input class=form-control type=text name=jumlah value='$data_barang[7]'></td>
                </tr>
                <tr>
                    <td><input type=submit class='btn btn-primary' value='Simpan Mutakhir'></td>
                    <td><a href=index.php><input class='btn btn-primary' type=button value=Batal></a></td>
                </tr>
            </table>
        </form>
        </center>
        ";

        // Close connection
        mysqli_close($conn);
        ?>
    </body>
</html>
