<?php require_once("../../../functions/adm.php"); ?>
<?php $adm = new Adm(); ?>
<?php $adm->header(); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Database</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-database"></i> Database</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Database</th>
                  <th>JSONs</th>
                  <th>Size</th>
                  <th>Last Modified</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Database</th>
                  <th>JSONs</th>
                  <th>Size</th>
                  <th>Last Modified</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach($databases as $db) : ?>
                <tr>
                    <td><?php echo $db ?></td>
                    <td><?php echo 0 ?></td>
                    <td><?php echo 0 ?></td>
                    <td><?php echo 0 ?></td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php $adm->footer() ?>
