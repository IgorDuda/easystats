<?php require('partials/header.php'); ?>


<div id="page-wrapper">

    <?php require('partials/navigation.php'); ?>

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Users informatoin overview</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="/users/add" title="Add user" >
                    <i class="fa fa-plus" aria-hidden="true"></i> Add user
                </a>
            </div>
        </div>
        <br/>

        <div class="row">
            <div class="col-lg-12">

                <div class="panel panel-green">
                    <div class="panel-heading">
                        <h3 class="panel-title">Users</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                        <tr>
                                            <td><?= $user->id; ?></td>
                                            <td><?= $user->username; ?></td>
                                            <td><?= $user->firstname; ?></td>
                                            <td><?= $user->lastname; ?></td>
                                            <td><?= $user->email; ?></td>
                                            <td>
                                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                <i class="fa fa-times" aria-hidden="true"></i>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
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