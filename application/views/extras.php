<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://bootswatch.com/lumen/bootstrap.min.css" type="text/css">
    <title></title>
</head>
<body>
<!--Registration Form-->
<?=  form_open('',['class'=>'form-horizontal col-md-6']) ?>
<?= form_fieldset('Registration Form') ?>
<div class="form-group">
    <?= form_label('First Name','firstName',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'firstName']) ?>
    </div>
</div>
<div class="form-group">
    <?= form_label('Last Name','lastName',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'lastName']) ?>
    </div>
</div>
<div class="form-group">
    <?= form_label('Email','email',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'email']) ?>
    </div>
</div>
<div class="form-group">
    <?= form_label('Phone number','phoneNumber',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'phoneNumber']) ?>
    </div>
</div>

<div class="form-group">
    <?= form_label('Username','username',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'username']) ?>
    </div>
</div>

<div class="form-group">
    <?= form_label('Phone number','password',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'password']) ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-5 col-md-offset-3">
        <?= form_submit('submit','Register',['class'=> 'btn btn-primary']) ?>
        <?=  form_reset('reset','Reset',['class'=>'btn btn-default']) ?>
    </div>
</div>
<?= form_fieldset_close() ?>
<?= form_close()  ?>
<!--end registration Form-->

<!--    Login Form-->
<?=  form_open('',['class'=>'form-horizontal col-md-6']) ?>
<?= form_fieldset('Please Login') ?>
<div class="form-group">
    <?= form_label('Username','username',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'username']) ?>
    </div>
</div>

<div class="form-group">
    <?= form_label('Password','password',['class'=> 'col-md-3 control-label']) ?>
    <div class="col-md-5">
        <?= form_input(['class'=> 'form-control','name' => 'password']) ?>
    </div>
</div>
<div class="form-group">
    <div class="col-md-5 col-md-offset-3">
        <?= form_submit('submit','Login',['class'=> 'btn btn-primary']) ?>
    </div>
</div>
<?= form_fieldset_close() ?>
<?= form_close()  ?>
<!--end login form-->
</body>
</html>
