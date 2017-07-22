<div class="container" style="margin-top:100px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Sign in to continue</strong>
                </div>
                <div class="panel-body">
                    <?php if($this->session->flashdata('message')):?>
                        <div class="alert alert-sm alert-danger">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <?= $this->session->flashdata('message')?>
                        </div>
                    <?php endif; ?>
                    <form role="form" action="<?= base_url('auth/login')?>" method="POST">
                        <fieldset>
                            <div class="row">
                                <div class="center-block">
                                    <img class="profile-img img-rounded img-responsive"
                                         src="../assets/images/User3.png" alt="" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span>
                                            <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                        </div>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-md btn-primary btn-block" value="Sign in">
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="panel-footer ">
                    Forgot password! <a href="#" onClick=""> Reset Here </a>
                </div>
            </div>
        </div>
    </div>
</div>

