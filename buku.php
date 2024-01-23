 <div class="card">
      <div class="card-header">
                <h3 class="card-title">Data Tabel Buku</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Judul Buku</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <?php $no=1;
                  foreach ($buku as $ssw ) :?>
                  <tbody>
                  <tr>
                    <td><?= $no++?></td>
                    <td><?= $ssw->judul?></td>
                    <td><?= $ssw->pengarang?></td>
                    <td> <?= $ssw->penerbit?></td>
                    <td><?= $ssw->jenis_buku?></td>
                    <td>
                    	<a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                    	<a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
              </tbody>
          <?php endforeach ?>
          </table>
      </div>
  </div>