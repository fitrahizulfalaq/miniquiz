<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">     
    <div class="col-12">     
      <div class="card-header">
        <a href="<?=base_url('');?>" class="btn btn-info btn-sm float-right"><i class="fas fa-backward"></i> Kembali</a>          
      </div>  

      <div class="card">
        <div class="card-header bg-primary">
          <h3 class="card-title"><?=$menu?></h3>
        </div>
        
        <div class="card-body">
          <div class="table-responsive">
          <table id="example2" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Pendaftar</th>
              <th>#</th>
            </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                foreach ($row->result() as $key => $data) {;
              ?>
                <tr>
                  <td scope="row">
                    <h5> <?= $data->nama?> </h5>
                    <h6> +62 <?= $data->hp?> </h6>
                  </td>
                  <td>                    
                    <a href="<?= site_url('pendaftaran/acc/'.$data->id);?>" class="btn btn-sm btn-success"><i class='fas fa-check'></i></a>
                    <a href="<?= site_url('pendaftaran/hapus/'.$data->id);?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin mau dihapus?')"><i class='fas fa-trash'></i></a>
                  </td>
            	  </tr>
            	<?php }?>
            </tbody>
          </table>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content --