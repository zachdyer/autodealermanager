<?php require_once("../../../../functions/adm.php"); ?>

<?php $adm = new Adm() ?>
<?php $adm->header() ?>

    <div class="content-wrapper">
        <div class="container-fluid">
          <div class="card-header">
            <i class="fa fa-car"></i> Add Inventory
          </div>
          <div class="card card-register mx-auto mt-5">
      <div class="card-header"><?php $adm->printMessage(); ?></div>
      <div class="card-body">
        <form method="post" onsubmit="adm.inventory.add">
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="make">Make</label>
                <select data-tracking-id="home_page_mmy_make_select" name="make" 
                class="js-makes-select mmy-select w-100 btn btn-sm btn-primary form-control" 
                id="make" onchange="adm.inventory.update.model()">
                    <option selected="" class="medium" value="">Select Make</option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="model">Model</label>
                <select data-tracking-id="home_page_mmy_submodel_select" 
                name="select-model" 
                class="js-submodels-select mmy-select w-100 btn btn-sm btn-primary form-control" 
                id="model" disabled="true">
                    <option selected="" class="medium" value="">
                        Select Model
                    </option>
                </select>
              </div>
              <div class="col-md-6">
                <label for="yearpicker">Year</label>
                <select id="yearpicker" name="yearpicker"
                class="js-makes-select mmy-select w-100 btn btn-sm btn-primary form-control">
                </select>
              </div>
              <div class="col-md-6">
                <label for="price">Price</label>
                <input class="form-control" id="price" type="text" name="price"
                aria-describedby="nameHelp" placeholder="Enter price of automobile">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="description" name="notes" placeholder="Enter description of vehicle"></textarea>
          </div>
          
          <button id="submit" class="btn btn-primary btn-block" onclick="adm.inventory.add.submit()">Add Inventory</button>
        </form>
      </div>
    </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    
    <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase.js"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyBMAc0hmngDcmh_4ivrQE_oKnjhXo6hTrw",
        authDomain: "autodealermanager-5a63e.firebaseapp.com",
        databaseURL: "https://autodealermanager-5a63e.firebaseio.com",
        projectId: "autodealermanager-5a63e",
        storageBucket: "autodealermanager-5a63e.appspot.com",
        messagingSenderId: "836651387919"
      };
      firebase.initializeApp(config);
    </script>
    
    <?php $adm->footer() ?>
