



$(document).ready(function(){

    // Load teachers=============================================>
        teacherLoad();
    function teacherLoad(){

        $.ajax({
            type: "GET",
            url: "teacherslist.php",
            success: function (response) {
            
                $("#table-body").html(response);
            }
        });
    }
        //add data=============================================>
    $(document).on('submit', '#teachers_input', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type        : 'POST',
            url         : 'addteachers.php',
            data        : formData,
            processData : false,
            contentType : false,
            success : function(response){
                teacherLoad();
                alert(response);
                
                
            }    
        });    
    });

        // Edit data=============================================>
        $(document).on('click', '#edit-btn', function(){
            var EditBtnId = $(this).val();
            $.ajax({

                type    : "POST",
                url     : "editdata.php",
                data    : {Id : EditBtnId},
                success : function(response){
                    $(".view_techer").html(response);
                }
            });

        });

        //update data =============================================>
        $(document).on('submit', '#edit_teachers', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
        
            $.ajax({
                type        : 'POST',
                url         : 'updatedata.php',
                data        : formData,
                processData : false,
                contentType : false,
                success : function(response){
                    teacherLoad();
                    alert(response);
                    
                    
                }
                
            });
            
        });


        // View Data=============================================>
        $(document).on('click', '#view-btn', function(){
            
            var ViewBtnId = $(this).val();
            $.ajax({
                type    : "POST",
                url     : "viewdata.php",
                data    : {Id : ViewBtnId},
                success : function(response){
                    $(".view_techer").html(response);
                }
            });
        });

        //Delete Data=============================================>
        $(document).on('click', '#delete-btn', function(){
            var DeleteBtnId = $(this).val();
            var Confirm = confirm("Are You Sure?");
            if(Confirm){
                $.ajax({
                    type    : "POST",
                    url     : "deletedata.php",
                    data    : {Id : DeleteBtnId},
                    success : function(response){                
                        alert(response);
                        teacherLoad();
                    }
                });    
            }
        });


        //AJAX serach=============================================================>
        $('#search_bar').on('keyup', function(){
            var SearchVal = $(this).val();
            if(SearchVal !== ""){
                $.ajax({
                    type    : "POST",
                    url     : "search.php",
                    data    : {SearchVal : SearchVal},
                    success : function(response){
                        $("#table-body").html(response);
                        
                        
                    }
                });
            } else {
                teacherLoad();
            }
            
        });

       
});  



