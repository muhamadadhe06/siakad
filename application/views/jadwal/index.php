<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-calendar-o" aria-hidden="true"></i>
                                        <?= $judul ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <?php
                                if($this->session->userdata('input_status')){
                                    if($this->session->userdata('input_status')=='exist'){
                                ?>
                                <div class="aler alert-warning"><br><p style="margin-left:20px"><i class="fa fa-circle-alert"></i> Maaf jadwal sudah dipakai !</p><br></div>
                                <?php
                                    }else{
                                ?>
                                <div class="aler alert-primary"><br><i class="fa fa-square-check"></i> Berhasil menambahkan !<br></div>
                                <?php   
                                    }
                                    $this->session->unset_userdata("input_status");
                                }
                                ?>
                                <br>
                                <form class="form-inline" action="<?= site_url('jadwal/search') ?>" method="get">
                                    <div class="form-group">
                                        <label class="" for="email">Prodi </label> &nbsp;
                                        <select class="form-control" name="prodi">
                                            <option value="">- Prodi -</option>
                                            <?php
                                            foreach($prodi as $data_prodi){
                                            ?>
                                            <option value="<?= $data_prodi->id_jurusan ?>">
                                                <?= $data_prodi->nama_jenjang." ".$data_prodi->nama_jurusan ?>
                                            </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label class="" for="pwd">Matakuliah </label>&nbsp;
                                        <input type="text" class="form-control" name="mk" id="pwd" placeholder="Matakuliah">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                                <br>
                                <table class="table table-bordered" style="margin-bottom: 10px">
                                    <thead>
                                        <th>No</th>
                                        <th>Matakuliah</th>
                                        <th>Prodi</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Kelas</th>
                                        <th>Dosen</th>
                                        <th>Ruang</th>
                                        <th>Hari</th>
                                        <th>Jam</th>
                                        <?php
                                        if($this->session->userdata('login_data')->status!='kajur' && $this->session->userdata('login_data')->status!='dosen' && $this->session->userdata('login_data')->status!='baak'){
                                        ?>
                                        <th>Aksi</th>
                                        <?php    
                                        }
                                        ?>
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
                                                <?= "(".$data->kode_mk.") ".$data->nama_mk ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_jenjang." ".$data->nama_jurusan ?>
                                            </td>
                                            <td>
                                                <?= $data->tahun_ajaran ?>
                                            </td>
                                            <td>
                                                <?= $data->semester_prodi ?>
                                            </td>
                                            <td>
                                                <?= $data->nama_kelas ?>
                                            </td>
                                            <td>
                                                <?= '('.$data->nidn.') '.$data->nama ?>
                                            </td>
                                            <form action="<?= site_url('jadwal/single_plot') ?>" method="post">
                                                <td>
                                                    <?php
                                                if($data->id_jadwal_mk){
                                                ?>
                                                    <?= $data->nama_ruangan ?>
                                                    <?php
                                                }else{
                                                ?>
                                                    <select class="form-control" name="id_ruangan" required>
                                                        <option value="">- Pilih Ruangan -</option>
                                                        <?php
                                                    foreach($ruang as $data_r){
                                                    ?>
                                                        <option value="<?= $data_r->id ?>">
                                                            <?= $data_r->nama_ruangan ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                    <?php
                                                }
                                                ?>
                                                </td>
                                                <td>
                                                    <?php
                                                if($data->id_jadwal_mk){
                                                ?>
                                                    <?= $data->hari ?>
                                                    <?php
                                                }else{
                                                ?>
                                                    <select class="form-control" name="id_hari" required>
                                                        <option value="">- Pilih Hari -</option>
                                                        <?php
                                                    foreach($hari as $data_r){
                                                    ?>
                                                        <option value="<?= $data_r->id_hari ?>">
                                                            <?= $data_r->hari ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                    <?php
                                                }
                                                ?>
                                                </td>
                                                <td>

                                                    <?php
                                                if($data->id_jadwal_mk){
                                                ?>
                                                    <?= $data->jam_mulai.' - '.$data->jam_akhir ?>
                                                    <?php
                                                }else{
                                                ?>
                                                    <select class="form-control" name="id_jam" required>
                                                        <option value="">- Pilih Jam -</option>
                                                        <?php
                                                    foreach($jam as $data_r){
                                                    ?>
                                                        <option value="<?= $data_r->id_jam ?>">
                                                            <?= $data_r->jam_mulai.' - '.$data_r->jam_akhir ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                    </select>
                                                    <?php
                                                }
                                                ?>
                                                </td>
                                                <?php
                                                if($this->session->userdata('login_data')->status!='kajur'  && $this->session->userdata('login_data')->status!='dosen' && $this->session->userdata('login_data')->status!='baak'){
                                                ?>
                                                <td>
                                                    <?php
                                                if($data->id_jadwal_mk){
                                                ?>
                                                    <a class="btn btn-warning" href="<?= site_url('jadwal/deny/'.$data->id_jadwal_mk)?>"><i class="fa fa-trash"></i></a>
                                                    <?php
                                                }else{
                                                ?>
                                                    <input type="hidden" name="id_mk" value="<?= $data->ploting_id_matakuliah ?>" />
                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i></button>
                                                    <?php
                                                }
                                                ?>

                                                </td>
                                                <?php 
                                                }
                                                ?>
                                            </form>
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
