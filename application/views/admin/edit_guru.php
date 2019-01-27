<!DOCTYPE html>
<html lang="en">

  <head>
  <?php $this->load->view("admin/_partials/head.php") ?>
  </head>

  <body id="page-top">
    
  <!-- Navbar-->
  <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="wrapper">

      <!-- Sidebar-->
      <?php $this->load->view("admin/_partials/sidebar.php") ?>

      <div id="content-wrapper">

        <div class="container-fluid">
        
        <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
                    <a href="<?php echo site_url('admin/akun/guru') ?>"><i class=""></i>
                    , Kembali</a>
				</div>
		<?php endif; ?>

          <!-- Page Content -->
          <div class="card mb-3">
              <div class="card-header">
                  <i class="fas fa-edit"></i>
                  Edit Akun Guru
              </div>
              <div class="card-body">
                <form action="<?php base_url('admin/akun/edit_guru') ?>" method="post" enctype="multipart/form-data" >
                  <?php /*<div class="form-group">
                    <label for="nama">NIP*</label>
                    <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                     type="number" name="nama" placeholder="08xxxxxxxx" autofocus required/>
                    <div class="invalid-feedback">
                      <?php echo form_error('nama') ?>
                    </div>
                  </div> */ ?>
                    <input type="hidden" name="id" value="<?php echo $akun->id_akun?>" />
                  <div class="form-group">
                      <label for="nama">Nama*</label>
                      <input class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                       type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $akun->nama ?>" required autofocus/>
                      <div class="invalid-feedback">
                        <?php echo form_error('nama') ?>
                      </div>
                    </div>

                  <div class="form-group">
                    <label for="email">Email*</label>
                    <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                     type="email" name="email" placeholder="Email" value="<?php echo $akun->email ?>" required />
                    <div class="invalid-feedback">
                      <?php echo form_error('email') ?>
                    </div>
                  </div>
    
                  <div class="form-group">
                      <label for="password">Password*</label>
                      <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                       type="password" name="password" placeholder="Masukkan Password" required />
                      <div class="invalid-feedback">
                        <?php echo form_error('password') ?>
                      </div>
                    </div>
                 
                  <input class="btn btn-success" type="submit" name="btn" value="Save!" /> 
                  
                </form>
    
              </div>
    
              <div class="card-footer small text-muted">
                * wajib diisi
              </div>
    
    
            </div>
        <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view("admin/_partials/scrolltop.php") ?>
    <!-- Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>
    <!-- Js-->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>