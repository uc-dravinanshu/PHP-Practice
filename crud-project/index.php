<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container-fluid mt-1">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-3">
                <h2 class="text-center bg-light shadow p-2">CRUD OPERATIONS IN PHP</h2>
            </div>
            <div class="col-lg-6">
                <form action="insert.php" method="post" class="bg-light shadow p-4">
                    <div class="mb-3">
                        <label  for="username" class="form-label">Name:</label>
                        <input type="text" name="username" id="username" placeholder="username" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  for="useremail" class="form-label">Email:</label>
                        <input type="text" name="useremail" id="useremail" placeholder="useremail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label  for="userpassword" class="form-label">Password:</label>
                        <input type="text" name="userpassword" id="userpassword" placeholder="usepassword" class="form-control">
                    </div>
                    <div class="mb-3 d-flex">
                        <label  for="userpassword" class="form-label me-4">Gender:</label>
                        <div class="form-check mx-2">
                            <input class="form-check-input shadow-none" type="radio" name="gender" value="M">
                            <label class="form-check-label" for="male">Male</label>  
                        </div>
                        <div class="form-check mx-2">
                            <input class="form-check-input shadow-none" type="radio" name="gender" value="F">
                            <label class="form-check-label" for="female">Female</label>
                        </div> 
                    </div>
                    <div class="mb-3">
                        <button type="submit" id="submit" name="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 mt-2">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle p-2">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Password</th>
                                <th scope="col">Gender</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>