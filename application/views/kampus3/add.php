<!-- Begin Page Content -->
<style>
	.dataTables_filter {
		display: none;
	}
</style>
<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="h2 text-gray-800"><?= $title; ?></h2>
    <h1 class="h5 mb-4 text-gray-500"> <span  class="badge badge-pill badge-success">Kampus 3</span></h1>


    <hr class="sidebar-divider mt-3">
    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <div class="col-md-12">

        <div class="row mb-3">

				<div class="col-md-12 d-flex justify-content-center">
					<input type="text" class="form-control p-4 my-4 col-8 text-center" style="font-size: 22px;" autofocus id="myInputTextField" placeholder="Cari nama santri">
				</div>
			</div>
        <table id="example2" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Wali</th>
                <th>Kelas</th>
                <th>Gedung</th>
                <th>Kamar</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php $no =1; foreach($santri as $s ):?>
            <tr>
                <td><?= $no++?></td>
                <td><?= $s['nama']?></td>
                <td><?= $s['wali']?></td>
                <td><?= $s['kelas']?></td>
                <td><?= $s['gedung']?></td>
                <td><?= $s['kamar']?></td>
                <td><?= $s['alamat']?></td>
                <td style="text-align: center;" >
                <h5>   <a href="<?= base_url('kampus_3/editSantri/'.$s['id']); ?>" class="badge badge-pill badge-secondary">Edit</a>
                    <a href="<?= base_url('kampus_3/izin/'.$s['id']); ?>" class="badge badge-pill badge-success">Izin</a></h5> 
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
