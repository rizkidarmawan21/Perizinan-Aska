

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 2</span></h1>

    <hr class="sidebar-divider mt-3">
    <?= $this->session->flashdata('message'); ?>

    <a href="<?= base_url('kampus_2/add'); ?>" type="button" class="btn btn-success mb-3">
    <i class="fas fa-plus"></i>  Tambah Perizinan
    </a>
    <div class="row">
        <div class="col-md-12">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Kamar</th>
                <th>Keperluan</th>
                <th>Tgl Izin</th>
                <th>Tgl Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach( $izin as $i):?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $i['nama']?></td>
                <td><?= $i['kelas']?></td>
                <td><?= $i['gedung']?>-<?= $i['kamar']?></td>
                <td><?= $i['izin']?></td>
                <td><?= date('d F Y', $i['tgl_ijin'])?></td>
                <td><?= date('d F Y', strtotime($i['tgl_kembali']))?></td>
                <td> 
                <?php if($i['status'] == 0 ):?>
                <span class="badge badge-pill badge-danger"> Waiting Verified </span></td>
                <?php endif;?>

                <?php if($i['status'] == 1 ):?>
                <span class="badge badge-pill badge-warning"> Verified - 

                                <?php if (date('d F Y') > date('d F Y',strtotime($i["tgl_kembali"]))) { ?>
									
									<span class="text-danger">Terlambat</span>	
									
								<?php } else {?>
										
									<span class="text-secondary">Masa Izin</span>	
						        <?php } ?>
                
                
                </span>
                <?php 
                                
                            
                                
                                if (date('d F Y') > date('d F Y',strtotime($i["tgl_kembali"]))) { 
                                
                                                     $nohp = $i['no_telepon'] ;
                                     // kadang ada penulisan no hp 0811 239 345
                                     $nohp = str_replace(" ","",$nohp);
                                     // kadang ada penulisan no hp (0274) 778787
                                     $nohp = str_replace("(","",$nohp);
                                     // kadang ada penulisan no hp (0274) 778787
                                     $nohp = str_replace(")","",$nohp);
                                     // kadang ada penulisan no hp 0811.239.345
                                     $nohp = str_replace(".","",$nohp);
                                 
                                     // cek apakah no hp mengandung karakter + dan 0-9
                                     if(!preg_match('/[^+0-9]/',trim($nohp))){
                                         // cek apakah no hp karakter 1-3 adalah +62
                                         if(substr(trim($nohp), 0, 3)=='+62'){
                                             $hp = trim($nohp);
                                             echo '<a target="blank" href ="https://api.whatsapp.com/send?phone='.trim($nohp).'&text=Assalamualaikum%20%0A%0AKami%20dari%20ponpes%20Askhabul%20Kahfi%20menginformasikan%20bahwa%20putra%20%2F%20putri%20bapak%20%2F%20ibu%20%2C%20telah%20terlambat%20kembali%20ke%20pondok%20pesantren%20%2C%20mohon%20kepada%20bapak%20%2F%20ibu%20wali%20santri%20untuk%20bisa%20mengantarkan%20putra%20%2F%20putri%20nya%20ke%20pesantren%20demi%20mentaati%20peraturan%20pondok%20pesantren%20Askhabul%20Kahfi%20%2C%20jika%20terlambat%20datang%20ke%20pesantren%20maka%20akan%20di%20kenai%20sanksi%20kecuali%20ada%20konfirmasi%20perpanjangan%20izin%20%2C%20yg%20bisa%20di%20kirimkan%20ke%20nomor%20kantor%20kampus%20masing2%20terima%20kasih%20%0A%0AWassalamualaikum" class="badge badge-pill badge-success" >Kirim WA</a>';
                                         }
                                         // cek apakah no hp karakter 1 adalah 0
                                         elseif(substr(trim($nohp), 0, 1)=='0'){
                                             $hp = '62'.substr(trim($nohp), 1);
                                             echo '<a target="blank" href ="https://api.whatsapp.com/send?phone='.$hp.'&text=Assalamualaikum%20%0A%0AKami%20dari%20ponpes%20Askhabul%20Kahfi%20menginformasikan%20bahwa%20putra%20%2F%20putri%20bapak%20%2F%20ibu%20%2C%20telah%20terlambat%20kembali%20ke%20pondok%20pesantren%20%2C%20mohon%20kepada%20bapak%20%2F%20ibu%20wali%20santri%20untuk%20bisa%20mengantarkan%20putra%20%2F%20putri%20nya%20ke%20pesantren%20demi%20mentaati%20peraturan%20pondok%20pesantren%20Askhabul%20Kahfi%20%2C%20jika%20terlambat%20datang%20ke%20pesantren%20maka%20akan%20di%20kenai%20sanksi%20kecuali%20ada%20konfirmasi%20perpanjangan%20izin%20%2C%20yg%20bisa%20di%20kirimkan%20ke%20nomor%20kantor%20kampus%20masing2%20terima%20kasih%20%0A%0AWassalamualaikum" class="badge badge-pill badge-success" >Kirim WA</a>';
                                         }
                                     }else {
                                         $hp= 0;
                                             echo '<a target="blank" href ="https://api.whatsapp.com/send?phone='.$hp.'&text=Assalamualaikum%20%0A%0AKami%20dari%20ponpes%20Askhabul%20Kahfi%20menginformasikan%20bahwa%20putra%20%2F%20putri%20bapak%20%2F%20ibu%20%2C%20telah%20terlambat%20kembali%20ke%20pondok%20pesantren%20%2C%20mohon%20kepada%20bapak%20%2F%20ibu%20wali%20santri%20untuk%20bisa%20mengantarkan%20putra%20%2F%20putri%20nya%20ke%20pesantren%20demi%20mentaati%20peraturan%20pondok%20pesantren%20Askhabul%20Kahfi%20%2C%20jika%20terlambat%20datang%20ke%20pesantren%20maka%20akan%20di%20kenai%20sanksi%20kecuali%20ada%20konfirmasi%20perpanjangan%20izin%20%2C%20yg%20bisa%20di%20kirimkan%20ke%20nomor%20kantor%20kampus%20masing2%20terima%20kasih%20%0A%0AWassalamualaikum" class="badge badge-pill badge-success" >Kirim WA</a>';
                                         
                                     }
                                
                                
                                }
                                
                                ?>
                
                </td>
                <?php endif;?>
                <?php if($i['status'] == 2 ):?>
                <span class="badge badge-pill badge-success"> Sudah Kembali </span></td>
                <?php endif;?>
                


                <td>

                <?php if($user['role_id'] == 1):?>
                <a href="<?= base_url('kampus_2/detail/'. $i['id']);?>" class="badge badge-pill badge-warning">Detail</a>
                <a href="<?= base_url('kampus_2/editIzin/'. $i['id']);?>" class="badge badge-pill badge-secondary">Edit</a>
                <a href="<?= base_url('kampus_2/delIzin/'. $i['id']);?>" onclick="return confirm('Are you sure you want to delete this data?')" class="badge badge-pill badge-danger">Delete</a>
                
                        <?php if( $i['status'] == 0 ):?>
                            <a href="<?= base_url('kampus_2/printRequest/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Surat Pengantar</a>
                            <a href="<?= base_url('kampus_2/verify/'. $i['id']);?>" class="badge badge-pill badge-primary">Verify</a>
                        <?php elseif( $i['status'] == 1) :?>
                            <?php if ($i['izin'] == "Pulang") :?>
                            <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                            <a href="<?= base_url('kampus_2/printOut/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Izin</a>
                            <?php else:?>
                                <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                                <a href="<?= base_url('kampus_2/printKeluar/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Keluar</a>
                            <?php endif;?>
                        <?php endif;?>


                <?php elseif($user['role_id'] == 14):?>

                <a href="<?= base_url('kampus_2/detail/'. $i['id']);?>" class="badge badge-pill badge-warning">Detail</a>
                <a href="<?= base_url('kampus_2/editIzin/'. $i['id']);?>" class="badge badge-pill badge-secondary">Edit</a>
                <a href="<?= base_url('kampus_2/delIzin/'. $i['id']);?>" onclick="return confirm('Are you sure you want to delete this data?')" class="badge badge-pill badge-danger">Delete</a>
                
                        <?php if( $i['status'] == 0 ):?>
                            <a href="<?= base_url('kampus_2/printRequest/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Surat Pengantar</a>
                            <a href="<?= base_url('kampus_2/verify/'. $i['id']);?>" class="badge badge-pill badge-primary">Verify</a>
                        <?php elseif( $i['status'] == 1) :?>

                            <?php if ($i['izin'] == "Pulang") :?>
                                <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                                <a href="<?= base_url('kampus_2/printOut/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Izin</a>
                            <?php else:?>
                                <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                                <a href="<?= base_url('kampus_2/printKeluar/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Keluar</a>
                            <?php endif;?>
                        <?php endif;?>

                <?php else:?>

                <a href="<?= base_url('kampus_2/detail/'. $i['id']);?>" class="badge badge-pill badge-warning">Detail</a>
                <a href="<?= base_url('kampus_2/editIzin/'. $i['id']);?>" class="badge badge-pill badge-secondary">Edit</a>
                <a href="<?= base_url('kampus_2/delIzin/'. $i['id']);?>" onclick="return confirm('Are you sure you want to delete this data?')" class="badge badge-pill badge-danger">Delete</a>

                        <?php if( $i['status'] == 0 ):?>
                            <a href="<?= base_url('kampus_2/printRequest/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Surat Pengantar</a>
                        <?php elseif( $i['status'] == 1) :?>
                            <?php if($i['izin'] == "Pulang"):?>
                                <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                            <?php else: ?>
                                <a href="<?= base_url('kampus_2/back/'. $i['id']);?>" class="badge badge-pill badge-success">Kembali</a>
                                <a href="<?= base_url('kampus_2/printKeluar/'. $i['id']);?>" target="blank" class="badge badge-pill badge-dark">Print Keluar</a>
                            <?php endif?>
                        <?php endif?>
                <?php endif;?>   


               
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>




        </div>
    </div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
