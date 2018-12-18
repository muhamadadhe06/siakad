<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Tambah Dosen</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="varchar">Nidn
                                            <?php echo form_error('nidn') ?></label>
                                        <input <?php if($nidn){echo 'readonly';} ?> type="text" class="form-control" name="nidn" id="nidn" placeholder="Nidn" value="<?php echo $nidn; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Nama
                                            <?php echo form_error('nama') ?></label>
                                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="enum">Jenis Kelamin
                                            <?php echo form_error('gender') ?></label>
                                        <select class="form-control" name="gender">
                                            <option>- Jenis Kelamin -</option>
                                            <option value="L" <?php if($gender=='L'){ echo 'selected';} ?>>Laki - laki</option>
                                            <option value="P" <?php if($gender=='P'){ echo 'selected';} ?>>Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat
                                            <?php echo form_error('alamat') ?></label>
                                        <textarea class="form-control" rows="3" name="alamat" id="alamat" placeholder="Alamat"><?php echo $alamat; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Tempat Lahir
                                            <?php echo form_error('tempat_lahir') ?></label>
                                        <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Tanggal Lahir
                                            <?php echo form_error('tgl_lahir') ?></label>
                                        <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="Tanggal Lahir" value="<?php echo $tgl_lahir; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="enum">Agama
                                            <?php echo form_error('agama') ?></label>
                                        <select class="form-control" name="agama">
                                            <option>- Agama -</option>
                                            <option value="Islam" <?php if($agama=='Islam'){ echo 'selected';} ?>>Islam</option>
                                            <option value="Kristen" <?php if($agama=='Kristen'){ echo 'selected';} ?>>Kristen</option>
                                            <option value="Katolik" <?php if($agama=='Katolik'){ echo 'selected';} ?>>Katolik</option>
                                            <option value="Budha" <?php if($agama=='Budha'){ echo 'selected';} ?>>Budha</option>
                                            <option value="Hindu" <?php if($agama=='Hindu'){ echo 'selected';} ?>>Hindu</option>
                                            <option value="Kong Hu Chu" <?php if($agama=='Kong Hu Chu'){ echo 'selected';} ?>>Kong Hu Chu</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Jabatan
                                            <?php echo form_error('id_jabatan') ?></label>
                                        <select class="form-control" name="id_jabatan">
                                            <option>- Jabatan -</option>
                                            <?php
                                            foreach($jabatan as $data){
                                                $text='';
                                                if($data->id_jabatan==$id_jabatan){
                                                    $text='selected';
                                                }
                                            ?>
                                            <option <?= $text ?> value="<?= $data->id_jabatan ?>"><?= $data->nama_jabatan ?></option>
                                            <?php
                                                
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Foto
                                            <?php echo form_error('img_file') ?></label>
                                        <input type="file" class="form-control" name="img_file" id="img_file" accept="image/jpeg"/>
                                    </div>
                                    <input type="hidden" name="id_status" value="1"/>
                                    <input type="hidden" name="id_dosen" value="<?php echo $id_dosen; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('dosen') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
