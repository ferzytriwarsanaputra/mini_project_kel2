<?php
class AdminView
{
    public function render()
    {
?>
        <!DOCTYPE html>
        <html lang="en" dir="ltr">

        <head>
            <meta charset="utf-8">
            <title>Admin</title>
            <link rel="stylesheet" href="css/style.css">
            <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
                    <li>
                        <a href="home.html"><i class="fa fa-user-circle"></i>Admin</a>
                        <a href="TambahAdmin.php">Tambah Admin</a>
                        <a href="show.php">Show Admin</a>

                    </li>
                </ul>
            </div>
            <div class="welcome-box">
                <h3>Selamat datang Admin</h3>
                <p></p>
            </div>
        </body>

        </html>
<?php
    }
}
?>