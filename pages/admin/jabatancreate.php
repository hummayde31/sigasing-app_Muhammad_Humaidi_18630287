<section class="content-header">
    <div class="container-fluid">
        <div class="row mb2">
            <div class="col-sm-6">
                <h1>Tambah Data Jabatan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrump-item"><a href="?page=home">Home</a></li>
                    <li class="breadcrump-item"><a href="?page=jabatanread">Jabatan</a></li>
                    <li class="breadcrump-item">Tambah Data</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="card-header">
        <h3 class="card-title">Tambah Jabatan</h3>
    </div>
    <div class="card-body">
        <form method="POST">
            <div class="form-group">
                <label for="nama_jabatan">Nama Jabatan</label>
                <input type="text" class="form-control" name="nama_jabatan">
            </div>
            <div class="form-group">
                <label for="gapok_jabatan">Gaji Pokok</label>
                <input type="number" class="form-control" name="gapok_jabatan" onkeypress="return (event.charCode >47 && event.charCode < 58) || event.charCode == 46">
            </div>
            <div class="form-group">
                <label for="tunjangan_jabatan">Tunjangan</label>
                <input type="number" class="form-control" name="tunjangan_jabatan" onkeypress="return (event.charCode >47 && event.charCode < 58) || event.charCode == 46">
            </div>
            <div class="form-group">
                <label for="uang_makan_perhari">Uang Makan Perhari</label>
                <input type="number" class="form-control" name="uang_makan_perhari" onkeypress="return (event.charCode >47 && event.charCode < 58) || event.charCode == 46">
            </div>
            <a href="?page=jabatanread" class="btn btn-danger btn-sm float-right">
                <i class="fa fa-times"></i> Batal
            </a>
            <button type="submit" name="button_create" class="btn btn-success btn-sm float-right">
                <i class="fa fa-save"></i>Simpan
            </button>
        </form>
    </div>
</section>