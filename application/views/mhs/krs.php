<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-check" aria-hidden="true"></i>
                                        <?= $judul ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-lg-12">
                                <br>
                                <div class="row">
                                    <div class="col-lg-1">
                                        &nbsp; &nbsp; &nbsp; Nama
                                    </div>
                                    <div class="col-lg-8">
                                        :
                                        <?= $mhs->nama_mhs ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1">
                                        &nbsp; &nbsp; &nbsp; NIM
                                    </div>
                                    <div class="col-lg-8">
                                        :
                                        <?= $mhs->nim ?>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-1">
                                        &nbsp; &nbsp; &nbsp; Prodi
                                    </div>
                                    <div class="col-lg-8">
                                        :
                                        <?= $mhs->nama_jenjang.' '.$mhs->nama_jurusan ?>
                                    </div>
                                </div>
                                <br>
                                <?php
                                if(date('Y-m-d')>=date('Y-m-d',strtotime($jadwal->tgl_awl_krs)) && date('Y-m-d')<=date('Y-m-d',strtotime($jadwal->tgl_akr_krs))){
                                ?>
                                <a class="btn btn-primary" href="<?= site_url('mhs/list_krs') ?>"><i class="fa fa-plus"></i> Tambahkan KRS</a>
                                <?php
                                }
                                ?>
                                <br>
                                <br>

                                <table class="table table-bordered" style="margin-bottom: 10px">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama MK</th>
                                        <th>SKS</th>
                                        <th>Semester</th>
                                        <th>Kelas</th>
                                        <th>Jadwal</th>
                                        <th>Ruang</th>
                                        <th>Dosen</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                        foreach($mk_daftar as $data){
                                        ?>
                                        <tr>
                                            <td>
                                                <?= $i ?>
                                            </td>
                                            <td>
                                                <?= '('.$data->kode_mk.') '.$data->nama_mk ?>
                                            </td>
                                            <td>
                                                <?= $data->sks_mk ?>
                                            </td>
                                            <td>
                                                <?= $data->semester_prodi ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_kelas ?>
                                            </td>
                                            <td>
                                                <?= $data->hari ?>
                                                <?= $data->jam_mulai ?> -
                                                <?= $data->jam_akhir ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_ruangan ?>
                                            </td>
                                            <td>
                                                <?= $data->nama ?>
                                            </td>
                                            <td>
                                                <?php
                                                if($data->status_krs=='Y'){
                                                ?>
                                                <div class="alert alert-success">ACC</div>
                                                <?php
                                                }else{
                                                ?>
                                                <div class="alert alert-danger">Non ACC</div>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if($data->status_krs=='Y'){
                                                ?>
                                                <?php
                                                }else{
                                                ?>
                                                <a class="btn btn-warning" href="<?= site_url('mhs/krs_delete?id='.$data->id_krs.'&nim='.$data->nim) ?>"><i class="fa fa-trash"></i></a>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
