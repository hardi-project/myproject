<html>
	<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/datatable/datatables.css' ?>">
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatable/jquery.dataTables.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/datatable/datatables.js'; ?>"></script>
        <!-- <style type="text/css">
			.navbar, .jumbotron, .well
			{
				margin: 0;
			}
        </style> -->
    </head>
    <body>

      <div class="container">

      	<div class="panel panel-default">

          	<div class="panel-heading">
              	<div class="panel-heading">

									<?PHP

							if($this->uri->segment(2) == 'scafol_tabel')
							{
								echo "<div class='alert alert-success alert-message'>";

								echo " dokumen sudah diupdate";
								echo "</div>";
							}


										?>

      </div>
                  <div class="clearfix"></div>
              </div>
              <br>

									<div class="row">
								<div class="col-lg-5">
									<ul class="panel-right">
								<button class="btn btn-primary tambah" title="Tambah" data-toggle="modal" data-target="#modal_lihatt1" href="<?php echo base_url().'upload/tambah/'?>">Tambah Dokumen
								</button>
							</ul>
								</div>

      				</div>

              <table class="table table-responsive">
                <table class="table table-bordered table-striped table-hover" id="table-datatable">
                    <thead>
                        <tr>
                          <tr>
                            <tr>
                            <th>#</th>
                            <th>Nama Dokumen</th>
                            <th>Tanggal Upload</th>
                            <th>Pengupload</th>
                            <th>Aksi</th>

                    </thead>
                    <tbody>

                      <?php
                      $no = 1;
                      foreach($scafol_tabel as $row){
                        ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?PHP echo $row->nama_dokumen ?></td>
                        <td><?PHP echo $row->tanggal ?></td>
                        <td><?php echo $row->pengupload ?></td>
                        <td><a class="btn btn-danger btn-xs" onclick="return confirm('anda yakin menghapus data?')" href="<?php echo base_url().'upload/hapus/'.$row->id_dokumen; ?>">Hapus<span class="glyphicon glyphicon-remove"></span></a>
												  	<a class="btn btn-primary btn-xs download"  href="<?php echo base_url().'upload/download/'.$row->id_dokumen;?>">Download Dokumen</a>
										 </td>
                      </tr>
                    <?php } ?>

                    </tbody>
                  </table>
                  </table>

            </div>
            </div>
            </div>
      			<div class="modal fade" id="modal_lihatt1">
      			<div class="modal-dialog">
      				<div class="modal-content">

      					</div>
      				</div>
      				</div>

      			<script type="text/javascript">
      			$(document).ready(function() {
      			$('.tambah').click(function() {
      			});
      			$('.table').dataTable();
      			});
      			</script>

      			<script type="text/javascript">
      			$(document).ready(function() {
      			  $('.alert-message').delay(3000).slideUp('slow');
      			});
      			</script>

      <div class="modal fade" id="modal_download">
      	<div class="modal-dialog">
      		<div class="modal-content">

      			</div>
      		</div>
      		</div>


		<script type="text/javascript">
      $(document).ready(function() {
      $('.download').click(function() {
      });
      $('.table').dataTable();
      });
      </script>


    </body>

<html>
