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
                                <h2 style="margin-top:0px">Mahsiswa : <?= $nama_mhs ?></h2>
                                <table class="table">
                                    <tr>
                                        <td>Nama</td>
                                        <td>
                                            <?php echo $nama_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <td>
                                            <?php echo $tempat_lahir_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tgl Lahir</td>
                                        <td>
                                            <?php echo $tgl_lahir_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>
                                            <?php echo $gender_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>
                                            <?php echo $agama_mhs; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Angkatan</td>
                                        <td>
                                            <?php echo $angkatan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jenjang</td>
                                        <td>
                                            <?php echo $jurusans->nama_jenjang.' '.$jurusans->nama_jurusan; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Status Masuk</td>
                                        <td>
                                            <?php
                                            if($id_st_msk=='1'){
                                                echo 'Baru';    
                                            }else{
                                                echo 'Transfer';
                                                
                                            }
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sks Diakui</td>
                                        <td>
                                            <?php echo $sks_diakui; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><a href="<?php echo site_url('mahasiswa') ?>" class="btn btn-default"><i class="fa fa-arrow-left"></i> Kembali</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
