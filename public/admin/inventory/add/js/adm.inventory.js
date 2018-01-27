/* global $ */
// $ is now defined in c9 as a global

var adm = adm || {};

adm.inventory = {
    add: function () {
        var make = $("#make").val();
        var model = $("#model").val();
        if(make == "" || model == "") {
            return false;
        } else {
            var database = firebase.database();
        }
    },
    init: function () {
        window.addEventListener("load", function () {
            console.log("test");
            $.ajax({
                type: "get",
                url: "/json/models.json",
                success: function(data) {
                    adm.inventory.models = data;
                    
                    //enabled model selector
                    $("#model").attr("disabled", false);
                    
                    //Create Make selector
                    for(var i = 0; i < data.length; i++) {
                        var option = $("<option value='"+i+"-"+data[i].value+"' data-index='"+i+"'>"+data[i].title+"</option>");
                        $("#make").append(option);
                    }
                    
                    //Create year selector
                    for (i = new Date().getFullYear(); i > 1900; i--) {
                        $('#yearpicker').append($('<option />').val(i).html(i));
                    }
                },
                dataType: "json"
            });
        })
        
    },
    models: null,
    update: {
        model: function () {
            var makeid = parseInt($("#make").val());
            
            //Create model selector menu
            $("#model").html("");
            for(var i = 0; i < adm.inventory.models[makeid].models.length; i++ ) {
                var model = adm.inventory.models[makeid].models[i];
                var option = $("<option value='"+model.value+"' data-index='"+i+"'>"+model.title+"</option>");
                $("#model").append(option);
            }
            
        }
    }
}

adm.inventory.init();