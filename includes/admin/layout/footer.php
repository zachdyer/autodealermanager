    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © AutoDealerManager 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="/admin?logout=true">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- New Inventory Modal-->
    <div class="modal fade" id="addInventoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addInventoryModalLabel">Ready to add a new inventory?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Fill out the form and press 'Add it!' to save it to your inventory.</p>
            <form onsubmit="adm.ajax()">
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inventoryType">Type</label>
                    <input class="form-control" id="inventoryType" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
                  </div>
                  <div class="col-md-6">
                    <label for="inventoryTitle">Title</label>
                    <input class="form-control" id="inventoryTitle" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="inventoryDesc">Description</label>
                <input class="form-control" id="inventoryDesc" type="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <div class="form-row">
                  <div class="col-md-6">
                    <label for="inventoryPrice">Price</label>
                    <input class="form-control" id="inventoryPrice" type="password" placeholder="Password">
                  </div>
                  <div class="col-md-6">
                    <label for="inventoryBrand">Brand</label>
                    <input class="form-control" id="inventoryBrand" type="password" placeholder="Confirm password">
                  </div>
                </div>
              </div>
            </form>
          
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#" onclick="adm.inventory.add()">Add it!</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="/vendor/chart.js/Chart.min.js"></script>
    <script src="/vendor/datatables/jquery.dataTables.js"></script>
    <script src="/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="/js/sb-admin-datatables.min.js"></script>
    <script src="/js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>