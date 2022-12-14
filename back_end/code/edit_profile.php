<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Profile</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="icons/logo.jpg" alt="" width="50" height="50">
          </a>
        <a class="navbar-brand" href="#">Arkan Developers</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Manage Property
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Sell property</a>
                <a class="dropdown-item" href="#">Buy a property</a>
                <a class="dropdown-item" href="#">Get recommendations</a>
                <a class="dropdown-item" href="#">Contact expert</a>
                <a class="dropdown-item" href="#">Buy a property</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><img src="icons/history.png" alt="" width="25" height="25"> History</a>
              </div>
            </li>
          
          </ul>
          
          <form class="form-inline my-2 my-lg-0">
       
          <input class="form-control mr-sm-2" type="search" placeholder="Enter name of the city" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            
          </form>
       
        </div>
      </nav>

<form>

















    <section style="background-color: #eee;">
        <div class="container py-5">
          <div class="row">
            <div class="col">
              <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">

                  <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="card mb-4">
                <div class="card-body text-center">
                  <img src="images/profile.jpg" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                  <h5 class="my-3"><input type="file"><p style="color:red">*Upload profile picture</p></h5>
                  <p class="text-muted mb-1"><input type="text" placeholder="Property dealer"></p>
                
                  <div class="d-flex justify-content-center mb-2">
                    <button type="submit" class="btn btn-success">Change!</button>

                  </div>
                </div>
              </div>
              <div class="card mb-4 mb-lg-0">

              </div>
            </div>
            <div class="col-lg-8">
              <div class="card mb-4">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Username</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" placeholder="Shaikh Zaka Tabish"></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" placeholder="tabish@gmail.com"></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Phone</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" placeholder="9087197329874"></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">UID</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><input type="text" placeholder="1235345324"></p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <p class="mb-0">Address</p>
                    </div>
                    <div class="col-sm-9">
                      <p class="text-muted mb-0"><div class="row">
                        <div class="col-md-8 mb-4">
                          <div class="card mb-4">
                            <div class="card-header py-3">
                              <h5 class="mb-0">Address info</h5>
                            </div>
                            <div class="card-body">
                              <form>
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row mb-4">
                                  <div class="col">
                                    <div class="form-outline">
                                      <input type="text" id="form7Example1" class="form-control" />
                                      <label class="form-label" for="form7Example1">country</label>
                                    </div>
                                  </div>
                                  <div class="col">
                                    <div class="form-outline">
                                      <input type="text" id="form7Example2" class="form-control" />
                                      <label class="form-label" for="form7Example2">State</label>
                                    </div>
                                  </div>
                                </div>
                      
                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example3" class="form-control" />
                                  <label class="form-label" for="form7Example3">City</label>
                                </div>
                      
                                <!-- Text input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example4" class="form-control" />
                                  <label class="form-label" for="form7Example4">Area</label>
                                </div>
                      
                                <!-- Email input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example5" class="form-control" />
                                  <label class="form-label" for="form7Example5">Appartment number if exist:</label>
                                </div>
                      
                                <!-- Number input -->
                                <div class="form-outline mb-4">
                                  <input type="text" id="form7Example6" class="form-control" />
                                  <label class="form-label" for="form7Example6">Plot number</label>
                                </div>
                      
                                <!-- Message input -->
                                <div class="form-outline mb-4">
                                  <textarea class="form-control" id="form7Example7" rows="4"></textarea>
                                  <label class="form-label" for="form7Example7">Additional information like landmark</label>
                                </div>
                      
                                <button type="submit" class="btn btn-success">Change!</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      
                       
                       
                      </div></p>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>










    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
