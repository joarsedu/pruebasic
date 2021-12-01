<div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
        <?php if (isset($error)) {
            ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error; ?>
        </div>

        <?php
        }?>
    </div>

    <div class="col-md-4 col-md-offset-4">

        <form class="form-signin" action="?validar/login" method="POST">
            <h2 class="form-signin-heading">Login</h2>
            <label for="email" class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required=""
                autofocus="">
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                required="">
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        </form>
    </div>
</div>