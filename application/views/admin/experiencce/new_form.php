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
                <h3 class="card-title">Tambah Pengalaman</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="<?php base_url('admin/experiencce/add') ?>" method="post" enctype="multipart/form-data" >
                <div class="card-body">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>" id="name" placeholder="Name Pengalaman" name="name">
                    <div class="invalid-feedback">
                        <?php echo form_error('name') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="text" class="form-control <?php echo form_error('tahun') ? 'is-invalid':'' ?>" id="tahun" placeholder="Tahun Pengalaman" name="tahun">
                    <div class="invalid-feedback">
                        <?php echo form_error('tahun') ?>
                    </div>
                  </div>                  
                  <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>" id="editor1" style="width: 100%" name="keterangan"></textarea>
                    <div class="invalid-feedback">
                        <?php echo form_error('keterangan') ?>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" class="btn btn-warning" onclick="history.back();">Kembali</button>
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