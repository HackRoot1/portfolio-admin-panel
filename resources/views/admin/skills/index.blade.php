<?php include('./layouts/header.php'); ?>

<div class="wrapper">
    <?php include('./components/sidebar.php') ?>


    <div class="main">
        <?php include('./components/navbar.php') ?>

        <main class="content">
            <div class="container-fluid p-0">

                <a href="add-staff.php" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> New Staff</a>
                <div class="mb-3">
                    <h1 class="h3 d-inline align-middle">Staffs List</h1>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <div class="card-actions float-end">
                                    <div class="dropdown position-relative">
                                        <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                            <i class="align-middle" data-feather="more-horizontal"></i>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="card-title mb-0">Orders</h5>
                            </div>
                            <div class="card-body">
                                <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Profile</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Added Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><strong>#0001</strong></td>
                                            <td><img src="./img/avatars/avatar-2.jpg" width="50" alt=""></td>
                                            <td>Brian Smith</td>
                                            <td>brian@gmail.com</td>
                                            <td>2023-12-05</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" checked type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="view-staff.php" class="btn btn-primary btn-sm">View</a>
                                                <a href="edit-staff.php" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#0001</strong></td>
                                            <td><img src="./img/avatars/avatar-2.jpg" width="50" alt=""></td>
                                            <td>Brian Smith</td>
                                            <td>brian@gmail.com</td>
                                            <td>2023-12-05</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" checked type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#0001</strong></td>
                                            <td><img src="./img/avatars/avatar-2.jpg" width="50" alt=""></td>
                                            <td>Brian Smith</td>
                                            <td>brian@gmail.com</td>
                                            <td>2023-12-05</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#0001</strong></td>
                                            <td><img src="./img/avatars/avatar-2.jpg" width="50" alt=""></td>
                                            <td>Brian Smith</td>
                                            <td>brian@gmail.com</td>
                                            <td>2023-12-05</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" checked type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>#0001</strong></td>
                                            <td><img src="./img/avatars/avatar-2.jpg" width="50" alt=""></td>
                                            <td>Brian Smith</td>
                                            <td>brian@gmail.com</td>
                                            <td>2023-12-05</td>
                                            <td>
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="view_admin">
                                                </div>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm">View</a>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                <a href="#" class="btn btn-primary btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>

        <?php include('./components/footer.php') ?>
    </div>
</div>

<?php include('./layouts/footer.php'); ?>