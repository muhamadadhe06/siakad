<div class="page" style="background-color:rgb(201, 201, 201)">
    <div class="page-content container-fluid">
        <div class="row" data-plugin="matchHeight" data-by-row="true">
            <div class="col-xxl-12">
                <div id="teamCompletedWidget" class="card card-shadow example-responsive">
                    <div class="card-block p-20 pb-25">
                        <div class="row pb-40" data-plugin="matchHeight">
                            <div class="col-md-6">
                                <div class="counter text-left pl-10">
                                    <div class="counter-label"><i class="fa fa-users" aria-hidden="true"></i> Mahaiswa</div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: -40px" data-plugin="matchHeight">
                            <div class="col-md-12">
                                <br>
                                <div class="row" style="margin-bottom: 10px">
                                    <div class="col-md-4">
                                        <?php echo anchor(site_url('mahasiswa/create'),'<i class="fa fa-plus"></i> Tambah', 'class="btn btn-primary"'); ?>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div style="margin-top: 8px" id="message">
                                            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-1 text-right">
                                    </div>
                                    <div class="col-md-3 text-right">
                                        <form action="<?php echo site_url('mahasiswa/index'); ?>" class="form-inline" method="get">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                                                <span class="input-group-btn">
                                                    <?php 
                                if ($q <> '')
                                {
                                    ?>
                                                    <a href="<?php echo site_url('mahasiswa'); ?>" class="btn btn-default"><i class="fa fa-trash"></i></a>
                                                    <?php
                                }
                            ?>
                                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <table class="table table-bordered" style="margin-bottom: 10px">
                                    <tr>
                                        <th>No</th>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Sks Diakui</th>
                                        <th>Angkatan</th>
                                        <th>Jenjang</th>
                                        <th>Status Masuk</th>
                                        <th>Status aktif</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php
            foreach ($mahasiswa_data as $mahasiswa)
            {
                if($mahasiswa->status=='1'){
                ?>
                                    <tr>
                                        <td width="80px">
                                            <?php echo ++$start ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->nim ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->nama_mhs ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->sks_diakui ?>
                                        </td>
                                        <td>
                                            <?php echo $mahasiswa->angkatan ?>
                                        </td>
                                        <td>
                                            <?php 
                                                foreach($jurusans as $data){
                                                    if($data->id_jurusan==$mahasiswa->id_jurusan){
                                                        echo $data->nama_jenjang.' '.$data->nama_jurusan ;       
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                if($mahasiswa->id_st_msk=='1'){
                                                    echo 'Baru';    
                                                }else{
                                                    echo 'Transfer';    
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                                foreach($ket_mhs as $data){
                                                    if($data->id_ket_mhs==$mahasiswa->id_ket_mhs){
                                                        echo $data->nama_ket_mhs ;       
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td style="text-align:center" width="200px">
                                            
                                            <a class="btn btn-primary" href="<?= site_url('mahasiswa/change/'.$mahasiswa->nim) ?>"><i class="fa fa-refresh"></i></a>
                                            <a class="btn btn-primary" href="<?= site_url('mahasiswa/read/'.$mahasiswa->nim) ?>"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-warning" href="<?= site_url('mahasiswa/update/'.$mahasiswa->nim)?>"><i class="fa fa-pencil"></i></a>
                                            <!--------------------
                                            <a class="btn btn-danger"  onclick="javasciprt: return confirm('Anda yakin akan menghapus data mahasiswa? ')"  href="<?= site_url('mahasiswa/delete/'.$mahasiswa->nim)?>"><i class="fa fa-trash"></i></a>
                                            --------------------------------->
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
