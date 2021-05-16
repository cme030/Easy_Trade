
        <!-- content page title -->
        <div class="container-fluid bg-light-opac">
            <div class="row">
                <div class="container my-3 main-container">
                    <div class="row align-items-center">
                        <div class="col">
                            <h2 class="content-color-primary page-title">Cars Details</h2>
                        </div>
                        <div class="col-auto">
                            <a class="btn btn-rounded pink-gradient text-uppercase pr-3 addcar" href="<?php echo base_url(); ?>add_car_view"><i class="fa fa-plus" aria-hidden="true"></i> <span class="text-hide-xs">Add Car</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content page title ends -->

        <!-- content page -->
        <div class="container mt-4 main-container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card mb-4 fullscreen">
                        <div class="card-header">
                            <div class="media">
                                <div class="media-body">
                                    <h4 class="content-color-primary mb-0">Cars List</h4>
                                </div>
                                <a href="javascript:void(0);" class="icon-circle icon-30 content-color-secondary fullscreenbtn">
                                    <i class="material-icons icon">crop_free</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table" id="cars_list">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Car Name</th>
                                        <th>Car Price</th>
                                        <th>Car Image</th>
                                        <th>Created Date</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
</div>

   <!-- modal for create form -->
   