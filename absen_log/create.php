

  <button type='button' class="btn btn-default" data-toggle="modal" data-target="#modal_create">
                  Tambah Data
                </button>

<div class="modal fade" id="modal_create" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_createLabel">Create Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action='func.php' method='POST'>
          
              <div class="form-group">
                <label for="tanggal_scan"> tanggal_scan:</label>
                <input type="text" class="form-control" id="tanggal_scan" name='tanggal_scan' placeholder='tanggal_scan'>
              </div>
              
              <div class="form-group">
                <label for="tanggal"> tanggal:</label>
                <input type="text" class="form-control" id="tanggal" name='tanggal' placeholder='tanggal'>
              </div>
              
              <div class="form-group">
                <label for="jam"> jam:</label>
                <input type="text" class="form-control" id="jam" name='jam' placeholder='jam'>
              </div>
              
              <div class="form-group">
                <label for="pin"> pin:</label>
                <input type="text" class="form-control" id="pin" name='pin' placeholder='pin'>
              </div>
              
              <div class="form-group">
                <label for="nip"> nip:</label>
                <input type="text" class="form-control" id="nip" name='nip' placeholder='nip'>
              </div>
              
              <div class="form-group">
                <label for="nama"> nama:</label>
                <input type="text" class="form-control" id="nama" name='nama' placeholder='nama'>
              </div>
              
              <div class="form-group">
                <label for="jabatan"> jabatan:</label>
                <input type="text" class="form-control" id="jabatan" name='jabatan' placeholder='jabatan'>
              </div>
              
              <div class="form-group">
                <label for="departemen"> departemen:</label>
                <input type="text" class="form-control" id="departemen" name='departemen' placeholder='departemen'>
              </div>
              
              <div class="form-group">
                <label for="kantor"> kantor:</label>
                <input type="text" class="form-control" id="kantor" name='kantor' placeholder='kantor'>
              </div>
              
              <div class="form-group">
                <label for="verifikasi"> verifikasi:</label>
                <input type="text" class="form-control" id="verifikasi" name='verifikasi' placeholder='verifikasi'>
              </div>
              
              <div class="form-group">
                <label for="io"> io:</label>
                <input type="text" class="form-control" id="io" name='io' placeholder='io'>
              </div>
              
              <div class="form-group">
                <label for="workcode"> workcode:</label>
                <input type="text" class="form-control" id="workcode" name='workcode' placeholder='workcode'>
              </div>
              
              <div class="form-group">
                <label for="sn"> sn:</label>
                <input type="text" class="form-control" id="sn" name='sn' placeholder='sn'>
              </div>
              
              <div class="form-group">
                <label for="mesin"> mesin:</label>
                <input type="text" class="form-control" id="mesin" name='mesin' placeholder='mesin'>
              </div>
              
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='insert' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>


