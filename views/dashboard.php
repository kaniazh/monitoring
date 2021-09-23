<?php if (__session('access') == 'super_user') : ?>
<?php endif; ?>
<script>
    function preview_foto(event) {

        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('viewfoto');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
<script src="views/demo js/chart-area-demo.js"></script>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?= base_url('dashboard'); ?>"><i class="fa fa-home">Dashboard</i></a></li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3><?= count(list_guru()); ?></h3>

                    <p>Keadaan Relay</p>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="65" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
                        <path d="M7.5 1v7h1V1h-1z" />
                        <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?= count(list_siswa()); ?></h3>

                    <p>Suhu Air</p>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="85" height="70" fill="currentColor" class="bi bi-thermometer" viewBox="0 0 16 16">
                        <path d="M8 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                        <path d="M8 0a2.5 2.5 0 0 0-2.5 2.5v7.55a3.5 3.5 0 1 0 5 0V2.5A2.5 2.5 0 0 0 8 0zM6.5 2.5a1.5 1.5 0 1 1 3 0v7.987l.167.15a2.5 2.5 0 1 1-3.333 0l.166-.15V2.5z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3><?= count(list_kelas()); ?></h3>

                    <p>PH</p>
                </div>
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="65" fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6zM6.646 4.646c-.376.377-1.272 1.489-2.093 3.13l.894.448c.78-1.559 1.616-2.58 1.907-2.87l-.708-.708z" />
                    </svg>
                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3><?= count(list_pengguna()); ?></h3>

                    <p>Amonia</p>
                </div>
                <div class="icon">
                    <i class='fa fa-flask' style="font-size: 70px"></i>
                </div>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->



    <!-- Default box -->





    <section class="content">
        <div class="box box-primary">
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th width="5">Waktu</th>
                            <th>Tanggal</th>
                            <th>Suhu Air</th>
                            <th>Amonia</th>
                            <th>PH</th>
                            <th>Keadaan Relay</th>
                            <th>Amonia</th>
                            <th>ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /* Select queries return a resultset */
                        $result = $mysqli->query("SELECT Nama FROM siswa LIMIT 10");
                        printf("Select returned %d rows.\n", $result->num_rows);

                        $n = 1;
                        foreach ($students as $row) : ?>
                            <tr>
                                <td><?= $n++ . '.'; ?></td>
                                <td><?= $row->kelas_kd; ?></td>
                                <td><?= $row->nis; ?></td>
                                <td><?= $row->nisn; ?></td>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->tmp_lhr . ', ' . date('d M Y', strtotime($row->tgl_lhr)); ?></td>
                                <td><?= $row->jk == 'L' ? 'Laki-Laki' : 'Perempuan'; ?></td>
                                <td><?= $row->alamat; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    </form>
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->