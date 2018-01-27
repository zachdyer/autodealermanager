<?php require_once("../../../functions/adm.php"); ?>

<?php $adm = new Adm() ?>
<?php $adm->header() ?>

    <div class="content-wrapper">
      <div class="container-fluid">
        
        <!-- Example DataTables Card-->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fa fa-car"></i> Inventory
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Price</th>
                    <th></th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php foreach($inventory as $car) : ?>
                  <tr>
                      <td><?php echo $car['title'] ?></td>
                      <td><?php echo $car['description'] ?></td>
                      <td><?php echo $car['price'] ?></td>
                      <td><a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <?php $adm->footer() ?>
