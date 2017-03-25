<?php require('partials/header.php'); ?>


<div id="page-wrapper">

    <?php require('partials/navigation.php'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Adding new user.</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->


        <div class="row">
            <div class="col-lg-6">

                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">New user</h3>
                    </div>
                    <div class="panel-body">

                        <form method="post" action="/users/addhandler">

                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control" id="username">
                            </div>
                            <div class="form-group">
                                <label for="firstname">Firstname:</label>
                                <input type="text" name="firstname" class="form-control" id="firstname">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Lastname:</label>
                                <input type="text" name="lastname" class="form-control" id="lastname">
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" class="form-control" id="email">
                            </div>

                            <button type="submit" class="btn btn-success">Create</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
        <!-- /.row -->
        <br/>
        <br/>
        <br/>


    </div>
    <!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

<?php require('partials/footer.php'); ?>