<?php 

// Retrieve data from the database
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>

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
  
  // Get a reference to the database service
  var database = firebase.database();
  
  // Getting a reference to the table
  var ref = database.ref("inventory");
  
  // The reference can use listeners. This listener checks for a value.
  ref.on('value', successData, errData);
  
  // Callback for a successful result
  function successData(data) {
    // use val to get the values
    var val = data.val();
    
    // use keys to get keys so you can loop over the data
    var keys = Object.keys(val);
    
    // Looping over the keys array I can now get the field values
    for(var i = 0; i < keys.length; i++) {
        var key = keys[i];
        var make = val[key].brand;
        var model = val[key].model;
        var price = val[key].price;
        var year = val[key].year;
        
        console.log(make);
    }
    
    console.log(data.val());
  }
  
  // Callback when there is a problem
  function errData(err) {
    console.error(err);
  }
  
  //Saving data
  var car = {
      "make": "25-HONDA",
      "model": "CIVIC",
      "year": 2018,
      "desc": "good car"
  };
  
  
  
</script>