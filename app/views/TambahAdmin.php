<?php
class AdminView
{
    public function render()
    {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="stylesheet" href="style.css">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
            <link rel="stylesheet" href="admin.css">
        </head>

        <body>
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="btn"></i>
                <i class="fas fa-times" id="cancel"></i>
            </label>
            <div class="sidebar">
                <header>Sewa</header>
                <ul>
                    <li><a href="home.html"><i class="fa fa-user-circle"></i>Admin</a>
                        <a href="admin.php">Tambah Admin</a>
                        <a href="show.php">Show Admin</a>

                    </li>
                </ul>
            </div>

            <form method="POST" action="submit.php">
                <div class="form-group">
                    <label for="nama">ID:</label>
                    <input type="text" class="form-control" id="nama" name="id">
                </div>

                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>

                <div class="form-group">
                    <label for="pw">Password:</label>
                    <input type="password" class="form-control" id="pw" name="pw">
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="alamat"></textarea>
                </div>

                <div class="form-group">
                    <label for="kontak">Kontak:</label>
                    <input type="text" class="form-control" id="alamat" name="kontak">
                </div>

                <div class="form-group">
                    <label for="norek">No Rek:</label>
                    <input type="text" id="alamat" name="norek">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </body>

        </html>
<?php
    }
}
?>