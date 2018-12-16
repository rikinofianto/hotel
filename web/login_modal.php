
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog">
    <!-- Modal1 -->
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <div class="contact-agileits">
                    <h4>Login</h4>
                    <form method="post" name="sentMessage" id="contactForm">
                        <div class="control-group form-group">
                            <label class="contact-p1">Username/Email:</label>
                            <input type="text" class="form-control" name="username" id="username" required>
                            <p class="help-block"></p>
                        </div>
                        <div class="control-group form-group">
                            <label class="contact-p1">Password:</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <p class="help-block"></p>
                        </div>
                        <input type="submit" name="submit_login" value="Login" class="btn btn-primary">
                    </form>
                    <p class="contact-agile2">
                        jika belum memiliki akun, silahkan daftar <a href="#registrasi" class="scroll exit">Registrasi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    if (isset($_POST['submit_login'])) {
        $login = $user->loginTamu($_POST);
        if ($login) {
            header("Refresh:0");
        }
    }
?>
