<?= $this->include('templates/header.php'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                    <div class="card-body">
                        <form class="" action="/register" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email"  id="email" type="email" placeholder="name@example.com" value="<?= set_value('email') ?>" />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="password" type="password" placeholder="Password" />
                                <label for="password">Password</label>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                <a class="small" href="password.html">Forgot Password?</a>
                                <a class="btn btn-primary" href="index.html">Login</a>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center py-3">
                        <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
                    </div>
            </div>
        </div>
    </div>
</div>

<?= $this->include('templates/footer.php'); ?>