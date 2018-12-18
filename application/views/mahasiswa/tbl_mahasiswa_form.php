<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-users" aria-hidden="true"></i> Mahasiswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">NIM
                                            <?php echo form_error('nim') ?></label>
                                        <input type="text" <?php if($nim){echo 'readonly';} ?> class="form-control" name="nim" id="nim" placeholder="NIM" value="<?php echo $nim; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Nama
                                            <?php echo form_error('nama_mhs') ?></label>
                                        <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" placeholder="Nama" value="<?php echo $nama_mhs; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Tempat Lahir
                                            <?php echo form_error('tempat_lahir_mhs') ?></label>
                                        <input type="text" class="form-control" name="tempat_lahir_mhs" id="tempat_lahir_mhs" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir_mhs; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Tanggal Lahir
                                            <?php echo form_error('tgl_lahir_mhs') ?></label>
                                        <input type="date" class="form-control" name="tgl_lahir_mhs" id="tgl_lahir_mhs" placeholder="Tgl Lahir" value="<?php echo $tgl_lahir_mhs; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="enum">Jenis Kelamin
                                            <?php echo form_error('gender_mhs') ?></label>
                                        <select class="form-control" name="gender_mhs">
                                            <option>- Jenis Kelamin -</option>
                                            <option value="L" <?php if($gender_mhs=='L'){ echo 'selected';} ?>>Laki - laki</option>
                                            <option value="P" <?php if($gender_mhs=='P'){ echo 'selected';} ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="enum">Agama
                                            <?php echo form_error('agama_mhs') ?></label>
                                        <select class="form-control" name="agama_mhs">
                                            <option>- Agama -</option>
                                            <option value="Islam" <?php if($agama_mhs=='Islam'){ echo 'selected';} ?>>Islam</option>
                                            <option value="Kristen" <?php if($agama_mhs=='Kristen'){ echo 'selected';} ?>>Kristen</option>
                                            <option value="Katolik" <?php if($agama_mhs=='Katolik'){ echo 'selected';} ?>>Katolik</option>
                                            <option value="Budha" <?php if($agama_mhs=='Budha'){ echo 'selected';} ?>>Budha</option>
                                            <option value="Hindu" <?php if($agama_mhs=='Hindu'){ echo 'selected';} ?>>Hindu</option>
                                            <option value="Kong Hu Chu" <?php if($agama_mhs=='Kong Hu Chu'){ echo 'selected';} ?>>Kong Hu Chu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Status Masuk
                                            <?php echo form_error('id_st_msk') ?></label>
                                        
                                        <select class="form-control" name="id_st_msk">
                                            <option>- Status -</option>
                                            <option value="1" <?php if($id_st_msk=='1'){ echo 'selected';} ?>>Baru</option>
                                            <option value="2" <?php if($id_st_msk=='2'){ echo 'selected';} ?>>Transfer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="tinyint">SKS Diakui
                                            <?php echo form_error('sks_diakui') ?></label>
                                        <input type="text" class="form-control" name="sks_diakui" id="sks_diakui" placeholder="Sks Diakui" value="<?php echo $sks_diakui; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Angkatan
                                            <?php echo form_error('angkatan') ?></label>
                                        <input type="text" class="form-control" name="angkatan" id="angkatan" placeholder="Angkatan" value="<?php echo $angkatan; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Jurusan
                                            <?php echo form_error('id_jenjang') ?></label>
                                        <select name="id_jenjang" class="form-control">
                                            <option>- Jurusan -</option>
                                            <?php
                                            $text='';
                                            foreach($jurusans as $data){
                                                if($id_jenjang==$data->id_jurusan){
                                                    $text='selected';
                                                }
                                            ?>
                                            <option <?= $text ?> value="<?= $data->id_jurusan ?>"><?= $data->nama_jenjang.' - '.$data->nama_jurusan ?></option>
                                            <?php
                                            $text='';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <!-----------------
                                    <div class="form-group">
                                        <label for="varchar">Foto Mhs
                                            <?php echo form_error('foto_mhs') ?></label>
                                        <input type="text" class="form-control" name="foto_mhs" id="foto_mhs" placeholder="Foto Mhs" value="<?php echo $foto_mhs; ?>" />
                                    </div>
                                    ----------------------->
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
