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
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('matakuliah/create'),'<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <form action="<?php echo site_url('matakuliah/index'); ?>" class="form-inline" method="get">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                                <span class="input-group-btn">
                                                    <?php 
                                if ($q <> '')
                                {
                                    ?>
                                                    <a href="<?php echo site_url('matakuliah'); ?>" class="btn btn-default">Reset</a>
                                                    <?php
                                }
                            ?>
                                                    <button class="btn btn-primary" type="submit">Search</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <table class="table table-bordered" style="margin-bottom: 10px">
                                    <tr>
                                        <th>No</th>
                                        <th>Kode MK</th>
                                        <th>Nama MK</th>
                                        <!------------
                                        <th>Id Prasyarat</th>
                                        <th>Id Kel Mk</th>
                                        --------------->
                                        <th>SKS</th>
                                        <th>Jurusan</th>
                                        <th>Semester</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
            foreach ($matakuliah_data as $matakuliah)
            {
                
                if($matakuliah->status=='1'){
                ?>
                                    <tr>
                                        <td width="80px">
                                            <?php echo ++$start ?>
                                        </td>
                                        <td>
                                            <?php echo $matakuliah->kode_mk ?>
                                        </td>
                                        <td>
                                            <?php echo $matakuliah->nama_mk ?>
                                        </td>
                                        <!--------------------
                                        <td>
                                            <?php echo $matakuliah->id_prasyarat ?>
                                        </td>
                                        <td>
                                            <?php echo $matakuliah->id_kel_mk ?>
                                        </td>
                                        ----------------->
                                        <td>
                                            <?php echo $matakuliah->sks_mk ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $text='';
                                            foreach($jurusans as $data){
                                                if($data->id_jurusan==$matakuliah->id_jurusan){
                                                    $text=$data->nama_jenjang.' - '.$data->nama_jurusan;
                                                }                    
                                            }
                                            echo $text ;
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $matakuliah->semester_prodi ?>
                                        </td>
                                        <td style="text-align:center" width="200px">
                                            <a class="btn btn-primary" href="<?= site_url('matakuliah/kelas/'.$matakuliah->id_mk)?>"><i class="fa fa-plus"></i></a>
                                            <a class="btn btn-warning" href="<?= site_url('matakuliah/update/'.$matakuliah->id_mk)?>"><i class="fa fa-pencil"></i></a>
                                            <a class="btn btn-danger"  onclick="javasciprt: return confirm('Anda yakin akan menghapus data jenjang? ')"  href="<?= site_url('matakuliah/delete/'.$matakuliah->id_mk)?>"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <?php
                }
                
            }
            ?>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="#" class="btn btn-primary">Total Record :
                                            <?php echo $total_rows ?></a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <?php echo $pagination ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
