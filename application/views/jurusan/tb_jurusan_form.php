<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-clone" aria-hidden="true"></i> Jurusan</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <form action="<?php echo $action; ?>" method="post">
                                    <div class="form-group">
                                        <label for="varchar">Nama Jurusan
                                            <?php echo form_error('nama_jurusan') ?></label>
                                        <input type="text" class="form-control" name="nama_jurusan" id="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $nama_jurusan; ?>" />
                                    </div>
                                    <div class="form-group">
                                        <label for="int">Id Jenjang
                                            <?php echo form_error('id_jenjang') ?></label>

                                        <select name="id_jenjang" class="form-control">
                                            <option>- Jenjang -</option>
                                            <?php 
                                        $text='';
                                        foreach($jenjangs as $data){
                                            
                                            if($data->id_jenjang==$id_jenjang){
                                                $text='selected';
                                            }
                                        ?>
                                            <option <?= $text ?> value="<?= $data->id_jenjang ?>">
                                                <?= $data->nama_jenjang ?>
                                            </option>
                                            <?php
                                        $text='';
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <input type="hidden" name="id_jurusan" value="<?php echo $id_jurusan; ?>" />
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo $button ?></button>
                                    <a href="<?php echo site_url('jurusan') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
