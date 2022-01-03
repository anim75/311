<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <tittle>User Profile</tittle>
        <link href="proile.css" rel="stylesheet"/>
</head>
<div class="container">
    <a href="Edit Profile.php" class="btn btn-primary pull-right">
 Dashboard </a>
<a href="index.php"class="btn btn-primary">Home</a>
<br/>
<br/>

<h2 class="text-center">User Login Form</h2>
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form action="" method="POST"> class="form-horizontal">
        
<div class="form-group">
<label class="control-label col-sm-1">  User ID
</label>
<div class="col-sm-4">
<input type="number" placeholder="user id" class="form-control"/>
</div>
        

<div class="form-group">
<label class="control-label col-sm-1">  Email
</label>
<div class="col-sm-4">
<input type="email" placeholder="Email" class="form-control"/>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-1">  Password
</label>
<div class="col-sm-4">
<input type="password" placeholder="Password" class="form-control"/>
</div>
</div>
<div class="form-group">
<label class="control-label col-sm-1">  Confirm Password
</label>
<div class="col-sm-4">
<input type="text" placeholder="Confirm password" class="form-control"/>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-1">  Gender
</label>
<div class="col-sm-4">
<input type="text" placeholder="Gender" class="form-control"/>
</div>
</div>


<div class="form-group">
<label class="control-label col-sm-1">  Phone no
</label>
<div class="col-sm-4">
<input type="number" placeholder="Phone no" class="form-control"/>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-1">  Address
</label>
<div class="col-sm-4">
<input type="text" placeholder="Address" class="form-control"/>
</div>
</div>

<div class="form-group">
<label class="control-label col-sm-1">  Photo
</label>
<div class="col-sm-4">
<input type="file" />
</div>
</div>

</div>
</form>