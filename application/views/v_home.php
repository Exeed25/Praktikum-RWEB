<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
	<br>
	<br>
	<br>
  <h2><?php echo $judul ?></h2>
  <br>
  <!-- this for nvbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin:24px 0;">
		<a class="navbar-brand" href="javascript:void(0)">Admin</a>
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navb">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link disabled" href="javascript:void(0)"><?php echo $this->session->userdata('username')?></a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<a href="<?php echo site_url('login/logout')?>" class="btn btn-success my-2 my-sm-0" type="button">Logout</a>
			</form>
		</div>
	</nav>
	<!-- this for nvbar -->
  <br>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data Anggota
  </button>

<br>
<br>
  <table class="table">
    <thead>
      <tr>
        <th>No.Anggota</th>
        <th>Nama Anggota</th>
        <th>Email</th>
        <th>Jabatan</th>
      </tr>
    </thead>
    <tbody>
     	
      <?php foreach ($data_anggota as $data):?>
      	
      	<tr>
      		<td><?php echo $data->No_Anggota ?></td>
      		<td><?php echo $data->Nama_Anggota ?></td>
      		<td><?php echo $data->Email ?></td>
      		<td><?php echo $data->Jabatan ?></td>
      	</tr>
  	  <?php endforeach ?>
  	  
    </tbody>
    
  </table>

 <h2><?php echo "Data Berita" ?></h2>
  <table class="table">
    <thead>
      <tr>
        <th>No.Berita</th>
        <th>Judul</th>
        <th>Isi Berita</th>
      </tr>
    </thead>
    <tbody>
     	
      <?php foreach ($data_berita as $data):?>
      	
      	<tr>
      		<td><?php echo $data->No_Berita ?></td>
      		<td><?php echo $data->Judul ?></td>
      		<td><?php echo $data->Isi_Berita ?></td>
      	</tr>
  	  <?php endforeach ?>
    </tbody>
  </table>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Data Anggota</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'home/tambah_aksi'; ?>">
        
        	<div class="form-group">
        		<label>No.Anggota</label><br>
        		<input type="number" name="no" class="form-controll">
        	</div>
        	<div class="form-group">
        		<label>Nama Anggota</label><br>
        		<input type="text" name="nama" class="form-controll">
        	</div>
        	<div class="form-group">
        		<label>Email</label><br>
        		<input type="text" name="email" class="form-controll">
        	</div>
        	<div class="form-group">
        		<label>Jabatan</label><br>
        		<input type="text" name="jabatan" class="form-controll">
        	</div>
        	<div class="modal-footer">
		        <button type="reset" class="btn btn-danger" >Reset</button>
		        <button type="submit" class="btn btn-primary">Simpan</button>
	      	</div>
	      	
        </form>
      </div>
      
    </div>
  </div>
</div>

</div>

</body>
</html>
