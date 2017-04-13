<?php include('include/header.php'); ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">SPARK</h1>
                    </div>
                    <!-- /.col-lg-12 -->
			<form role="form" name="form1" action="park.php" method="post">
				<div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" name="name">
                                            <p class="help-block">Your Name goes here</p>
                                </div>
				<div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email">
                                            <p class="help-block">Your Email goes here</p>
                                </div>
				<div class="form-group">
                                            <label>Vehicle Reg No</label>
                                            <input class="form-control" name="vehicleno">
                                            <p class="help-block">Registration Number of vehicle</p>
                                </div>
				<button type="submit" class="btn btn-default">Next</button>
			</form>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    
<?php include('include/footer.php'); ?>
