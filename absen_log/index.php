
<?php
require_once '../config/conn.php';
require_once '../template/header_tabel.php';
require_once '../template/aside.php';
require_once 'func.php';

?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Absen_log</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">Absen_log</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
        <div class="card-header">
          <h3 class="card-title">Absen_log</h3>
        </div>

        <div class="card-body">

<?php  
// there for call modal form create data
require_once 'create.php';?>
     <div class="table-responsive">
     <table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
      <th>No</th>
    <th>tanggal_scan</th> 
<th>tanggal</th> 
<th>jam</th> 
<th>pin</th> 
<th>nip</th> 
<th>nama</th> 
<th>jabatan</th> 
<th>departemen</th> 
<th>kantor</th> 
<th>verifikasi</th> 
<th>io</th> 
<th>workcode</th> 
<th>sn</th> 
<th>mesin</th> 

      <th>Opsi</th>
      </tr>
      </thead>
      <tbody> 
    <?php
      $ga = GetAll();
      $no = 1;
      foreach($ga as $data){?>
       <tr>
       <td><?=$no++?></td>
<td><?=$data['tanggal_scan']?></td>
<td><?=$data['tanggal']?></td>
<td><?=$data['jam']?></td>
<td><?=$data['pin']?></td>
<td><?=$data['nip']?></td>
<td><?=$data['nama']?></td>
<td><?=$data['jabatan']?></td>
<td><?=$data['departemen']?></td>
<td><?=$data['kantor']?></td>
<td><?=$data['verifikasi']?></td>
<td><?=$data['io']?></td>
<td><?=$data['workcode']?></td>
<td><?=$data['sn']?></td>
<td><?=$data['mesin']?></td>

               <td>
                <form method='POST' action='func.php'>
                <input type='hidden' name='id' value='<?=$data['id']?>'>
              <span><button type='button' class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal_edit_<?=$data['id']?>"><i class="fa fa-edit"></i>
                </button>
                

<div class="modal fade" id="modal_edit_<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_createLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action='func.php' method='POST'>
             <input type='hidden' name='id' value="<?php echo $data['id'];?>">
          
               
                <div class="form-group">
                  <label for="tanggal_scan"> tanggal_scan:</label>
                  <input type="text" class="form-control" id="tanggal_scan" name='tanggal_scan' value="<?php echo $data['tanggal_scan']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tanggal"> tanggal:</label>
                  <input type="text" class="form-control" id="tanggal" name='tanggal' value="<?php echo $data['tanggal']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="jam"> jam:</label>
                  <input type="text" class="form-control" id="jam" name='jam' value="<?php echo $data['jam']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pin"> pin:</label>
                  <input type="text" class="form-control" id="pin" name='pin' value="<?php echo $data['pin']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nip"> nip:</label>
                  <input type="text" class="form-control" id="nip" name='nip' value="<?php echo $data['nip']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nama"> nama:</label>
                  <input type="text" class="form-control" id="nama" name='nama' value="<?php echo $data['nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="jabatan"> jabatan:</label>
                  <input type="text" class="form-control" id="jabatan" name='jabatan' value="<?php echo $data['jabatan']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="departemen"> departemen:</label>
                  <input type="text" class="form-control" id="departemen" name='departemen' value="<?php echo $data['departemen']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="kantor"> kantor:</label>
                  <input type="text" class="form-control" id="kantor" name='kantor' value="<?php echo $data['kantor']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="verifikasi"> verifikasi:</label>
                  <input type="text" class="form-control" id="verifikasi" name='verifikasi' value="<?php echo $data['verifikasi']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="io"> io:</label>
                  <input type="text" class="form-control" id="io" name='io' value="<?php echo $data['io']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="workcode"> workcode:</label>
                  <input type="text" class="form-control" id="workcode" name='workcode' value="<?php echo $data['workcode']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="sn"> sn:</label>
                  <input type="text" class="form-control" id="sn" name='sn' value="<?php echo $data['sn']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="mesin"> mesin:</label>
                  <input type="text" class="form-control" id="mesin" name='mesin' value="<?php echo $data['mesin']; ?>">
                </div>
            
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='update' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>
                <button class='btn btn-warning btn-xs' type='submit' name='duplicate' onClick="javascript:return confirm('Copy Data ? CLick Ok!');"><i class="fa fa-copy"></i></button>
               <button class='btn btn-danger btn-xs' type='submit' name='delete' onClick="javascript:return confirm('are u sure want delet this ?');"><i class="fa fa-trash"></span>
                </form>
                </td>
                </tr>
                <?php } ?>
        </tfoot>
                </table>
              </div>
               </div>
           </div>
         </div>
      </div>
  </div>

      
</section>
  </div>
<?php require_once '../template/footer.php';?>

