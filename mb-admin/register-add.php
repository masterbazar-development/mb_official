<?php 

include('authentication.php');
include('includes/header.php');
include('includes/navbar-top.php')
?>
<div class="container-fluid px-4">
<h3 class="mt-4">Users</h3>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
    <li class="breadcrumb-item">Users</li>
</ol>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>ADD Admin/User
                <a href="view-register" class="btn btn-danger float-end">Back</a>
                </h4>
            </div>
            <div class="card-body">

            <form action="code.php" method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <lable for="">First Name</lable>
                            <input type="text" name="fname" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <lable for="">Last Name</lable>
                            <input type="text" name="lname" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <lable for="">Email</lable>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <lable for="">Password</lable>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="col-md-6 mb-3">
                            <lable for="">Role as</lable>
                            <select name="role_as" required class="form-control">
                            <option value="">--Select Role--</option>
                            <option value="1" >Admin</option>
                            <option value="0" >User</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <lable for="">Status</lable>
                            <input type="checkbox" name="status" width="70px" height="70px"/>
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" name="add_user" class="btn btn-primary">Add Admin/User</button>
                        </div>
                    </div>
                </form>


            </div>
        </div>
    </div>
</div>
</div>
               



<?php include('includes/footer.php')?>