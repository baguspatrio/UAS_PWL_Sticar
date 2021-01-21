
<?php $this->load->view('admin/_partials/header.php') ?>
<?php $this->load->view('admin/_partials/navbar.php') ?>
<?php $this->load->view('admin/_partials/sidebar.php') ?>


	
		<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-8">
        	<form action="<?php echo base_url('Admin/aksitambahkendaraan') ?>" method="POST" enctype="multipart/form-data">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Kendaraan</h3>
              <!-- <?php echo $error; ?> -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
      			    <label>Nama Driver</label>
      					 <div class="form-group">
                          <select class="form-control js-example-basic-single select2"name="idDriver" required>
                             <?php foreach ($driver as $key ) {?>
                  						<option value="<?php echo $key->idDriver ?>"><?php echo $key->namaDriver ?></option>
                  						<?php } ?>
       
                          </select>
                        </div>
      			  </div>
               
              <div class="form-group">
                <label for="inputName">Merek Kendaraan</label>
                <select class="form-control" name="merk" id="merk" required>
                        <option value="">No Selected</option>
                        <?php foreach($merk as $row):?>
                        <option value="<?php echo $row->idMerk;?>"><?php echo $row->namaMerk;?></option>
                        <?php endforeach;?>
                    </select>
              </div>
              <div class="form-group">
                <label for="type">Tipe Kendaraan</label>
                <select class="form-control" id="type" name="type" required>
                        <option>No Selected</option>
 
                    </select>
              </div>
              <div class="form-group">
                <label for="nopol">No. Plat</label>
                <input type="text" id="nopol" class="form-control" required placeholder="Masukkan No. Plat" name="nopol" value="<?= set_value('nopol') ?>">
              </div>
              <div class="form-group">
                <label for="tahunKendaraan">Tahun Kendaraan</label>
                <input type="text" id="tahunKendaraan" class="form-control" required placeholder="Masukkan Foto Produk" name="tahunKendaraan">
              </div>
              <div class="row">
		        <div class="col-12">
		          <button type="cancel" class="btn btn-secondary" onclick="javascript:window.location='<?php echo base_url('admin/Admin/tampildatapengiklan') ?>';">Cancel</button>
		          <input type="submit" value="SIMPAN" class="btn btn-success float-right">
		       </div>
              
            </div>
            <!-- /.card-body -->
          </div>
      </form>
          <!-- /.card -->
        </div>
        
      </div>
    </section>
    <!-- /.content -->
		

<?php $this->load->view('admin/_partials/footer.php') ?>
<script type="text/javascript">
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>
 <script type="text/javascript">
        $(document).ready(function(){
 
            $('#merk').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('Admin/gettype');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].idType+'>'+data[i].namaType+'</option>';
                        }
                        $('#type').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

