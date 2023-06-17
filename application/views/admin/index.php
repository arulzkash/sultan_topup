<?php

if ($this->session->has_userdata('user') != 1) {
    redirect('C_Admin/login');
}

?>

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span> Welcome ADMIN!</h4>

        <!-- Bootstrap modals -->
        <div class="card mb-4">
            <h5 class="card-header">Keep Improving your work!</h5>
            <div class="card-body">

                <!-- Vertically Centered Modal -->
                <div class="col-lg-4 col-md-6">
                    <small class="text-light fw-semibold">A Good Day to Start</small>
                    <div class="mt-3">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCenter">
                            Click Me
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalCenterTitle">Welcome Admin</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Welcome to the Admin Panel! You have successfully logged in as an administrator.</p>
                                        <p>Feel free to manage users, products, and other administrative tasks.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>