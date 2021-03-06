<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-list" aria-hidden="true"></i> Matakuliah</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Kode Matakuliah
                                            <?php echo form_error('kode_mk') ?></label>
                                        <input <?php if($kode_mk){echo 'readonly';} ?> type="text" class="form-control" name="kode_mk" id="kode_mk" placeholder="Kode Mk" value="<?php echo $kode_mk; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Nama Matakuliah
                                            <?php echo form_error('nama_mk') ?></label>
                                        <input type="text" class="form-control" name="nama_mk" id="nama_mk" placeholder="Nama Mk" value="<?php echo $nama_mk; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="int">MK Prasyarat
                                            <?php echo form_error('id_prasyarat') ?></label>
                                        <select name="id_prasyarat" class="form-control">
                                            <option>- MK Prasyarat -</option>
                                            <?php
                                            $text='';
                                            foreach($prasyarat as $data){
                                                if($id_prasyarat==$data->id_prasyarat_mk){
                                                    $text='selected';
                                                }
                                            ?>
                                            <option <?= $text ?> value="<?= $data->id_prasyarat_mk ?>"><?= $data->id_mk.' - '.$data->nama_mk ?></option>
                                            <?php
                                            $text='';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Kelompok MK
                                            <?php echo form_error('id_kel_mk') ?></label>
                                        
                                        <select name="id_kel_mk" class="form-control">
                                            <option>- Kelompok MK -</option>
                                            <?php
                                            $text='';
                                            foreach($kel_mk as $data){
                                                if($id_kel_mk==$data->id_kel_mk){
                                                    $text='selected';
                                                }
                                            ?>
                                            <option <?= $text ?> value="<?= $data->id_kel_mk ?>"><?= $data->nama_kel_mk ?></option>
                                            <?php
                                            $text='';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">SKS
                                            <?php echo form_error('sks_mk') ?></label>
                                        <input type="text" class="form-control" name="sks_mk" id="sks_mk" placeholder="Sks Mk" value="<?php echo $sks_mk; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Jurusan
                                            <?php echo form_error('id_jurusan') ?></label>
                                        <select name="id_jurusan" class="form-control">
                                            <option>- Jurusan -</option>
                                            <?php
                                            $text='';
                                            foreach($jurusans as $data){
                                                if($id_jurusan==$data->id_jurusan){
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
                                    <div class="form-group">
                                        <label for="int">Semester
                                            <?php echo form_error('semester_prodi') ?></label>
                                        <input type="text" class="form-control" name="semester_prodi" id="sks_mk" placeholder="Semester" value="<?php echo $semester_prodi; ?>" />
                                    </div>
                                    <input type="hidden" name="id_mk" value="<?php echo $id_mk; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('matakuliah') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
