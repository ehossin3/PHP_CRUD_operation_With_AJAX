<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Operation in AJAX</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

    <!-- View data modal start -->
    <div class="modal fade" id="viewData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Teacher Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body view_techer">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- View data modal end -->

    <!-- Edit data modal start -->
    <div class="modal fade" id="editData" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Teacher Data</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body view_techer">
                
            </div>
            <div class="modal-footer">
                
            </div>
            </div>
        </div>
    </div>
    <!-- Edit data modal end -->

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="card-header">
                        <h2 class="h2 text-center text-bg-info py-3">PHP CRUD Operation in AJAX</h2>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="h3 text-center text-uppercase text-bg-dark py-2">Data Input Form</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-5">
                                    <form id="teachers_input">
                                        <div class="mb-3">
                                            <label class="label form-label" for="">Teacher Name:</label>
                                            <input class="form-control" type="text" name="teacher_name" placeholder="Teacher name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label form-label" for="">Teacher Phone:</label>
                                            <input class="form-control" type="text" name="teacher_phone" placeholder="Teacher Phone No" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label form-label" for="">Teacher Email:</label>
                                            <input class="form-control" type="text" name="teacher_email" placeholder="Teacher Email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="label form-label" for="">Teacher Gender:</label>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="male" name="gender" value="Male" checked>Male
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="female" name="gender" value="Female">Female
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" id="others" name="gender" value="Others">Others
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-dark" type="submit">Add Teacher</button>
                                            
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="card-footer">
                                <h3 class="h3 text-center text-uppercase text-bg-info py-2">Teachers List</h3>
                                <div class="input-group mt-2 mx-2 mb-2">
                                    <div class="form-outline w-auto" data-mdb-input-init>
                                        <input type="search" id="search_bar" class="form-control" placeholder="Search...."/>
                                    </div>
                                </div>
                                <table class="table table-bordered  table-responsive">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Phone No</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body">
                                    </tbody>

                                </table>
                            </div>
                            
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="scripts.js"></script>
</body>
</html>