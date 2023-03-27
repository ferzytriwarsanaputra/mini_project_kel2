<div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-6" style="width: 18rem;">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <div class="container">
            <div class="login">
                <form action="<?= BASEURL; ?>/login/loginUser" method="post">
                    <h1>Login</h1>
                    <hr>
                    <p>Rental Mobil</p>
                    <label for="">Username</label>
                    <input type="text" name="nik" placeholder="Username">
                    <label for="">Password</label>
                    <input type="password" name="password" placeholder="Password">
                    <button type="submit" name="login">Login</button>

                    <a href="<?= BASEURL; ?>/login/daftar" class="card-link float-end">Daftar</a>
                </form>
            </div>
            <div class="right">
                <img src="<?= BASEURL; ?>/img/login.jpg">
            </div>
        </div>

    </div>
</div>
</div>