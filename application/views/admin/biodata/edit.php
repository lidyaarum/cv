<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div class="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div class="content-wrapper">

		<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Main content -->
        <section class="content">
            <div class="container-fluid">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Biodata</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/biodata/edit') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">
                <input type="hidden" name="id" value="<?php echo $biodata->id ?>" />
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="<?php echo $biodata->name ?>" type="text" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" id="name" placeholder="Name" name="name">
                    <div class="invalid-feedback">
                        <?php echo form_error('name') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="place">Place</label>
                    <input type="text" value="<?php echo $biodata->place ?>" class="form-control <?php echo form_error('place') ? 'is-invalid':'' ?>" id="place" placeholder="Place" name="place">
                    <div class="invalid-feedback">
                        <?php echo form_error('place') ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="date">Date</label>
                    <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                    </div>
                    <input type="text" value="<?php echo $biodata->date ?>" class="form-control <?php echo form_error('date') ? 'is-invalid':'' ?>" data-inputmask="'alias': 'dd-mm-yyyy'" name="date">
                    <div class="invalid-feedback">
                        <?php echo form_error('date') ?>
                    </div>
                    
                  </div>
                  </div>

                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" value="<?php echo $biodata->address ?>" class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>" id="address" placeholder="Address" name="address">
                    <div class="invalid-feedback">
                        <?php echo form_error('address') ?>
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" value="<?php echo $biodata->email ?>" class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>" id="email" placeholder="email" name="email">
                    <div class="invalid-feedback">
                        <?php echo form_error('email') ?>
                    </div>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="resume">Resume</label>
                    <textarea class="form-control <?php echo form_error('resume') ? 'is-invalid':'' ?>" id="editor1" style="width: 100%" name="resume"><?php echo $biodata->resume ?></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('resume') ?>
                    </div>
                  </div>
                    
                <div class="form-group">
                    <label for="sex">Gender</label>
                    <select class="form-control select2" style="width: 100%;" name="gender">
                        <option value="<?php echo $biodata->gender?>"><?php echo $biodata->gender ?></option>
                        <option value="Female">Perempuan</option>
                        <option value="Male">Laki-Laki</option>
                    </select>
                </div>
 
                <div class="form-group">
                      <label for="Foto">Foto</label>
                      <input id="foto" type="file" name="foto" class="form-control">
                      <input type="hidden"id="foto" name="old_image" value="<?php echo $biodata->foto ?>"/>
                      <label class="custom-file-label" for="foto">Choose file</label>
                      <div class="invalid-feedback">
                          <?php echo form_error('foto') ?>
                      </div>
                </div> 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Back</button>
                </div>
              </form>
            </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->		
	</div>
    <!-- /.content-wrapper -->
    
    <!-- Sticky Footer -->
    <?php $this->load->view("admin/_partials/footer.php") ?>

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
    
</body>
</html>