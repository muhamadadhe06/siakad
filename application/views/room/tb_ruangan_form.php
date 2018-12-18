<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-building" aria-hidden="true"></i> Ruangan</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Nama Ruangan
                                            <?php echo form_error('nama_ruangan') ?></label>
                                        <input type="text" class="form-control" name="nama_ruangan" id="nama_ruangan" placeholder="Nama Ruangan" value="<?php echo $nama_ruangan; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="varchar">Kapasitas
                                            <?php echo form_error('kapasitas') ?></label>
                                        <input type="number" class="form-control" name="kapasitas" id="kapasitas" placeholder="Kapasitas" value="<?php echo $kapasitas; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="enum">Tipe Ruangan
                                            <?php echo form_error('tipe_ruangan') ?></label>
                                        <select name="tipe_ruangan" class="form-control">
                                            <option>- Tipe -</option>
                                            <option <?php if($tipe_ruangan=='Laboratorium'){echo 'selected';} ?> value="Laboratorium">Laboratorium</option>
                                            <option <?php if($tipe_ruangan=='Kelas'){echo 'selected';} ?> value="Kelas">Kelas</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('room') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
