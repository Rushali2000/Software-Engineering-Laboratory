<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Posts</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </li>
      </ul>

      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container my-5">
  <div style="position:relative; display: flex; justify-content: space-between; align-items: center;">
  <h1>POSTS</h1>
  <button type="button" class="btn btn-primary" style="position: absolute; right: 2px;" data-toggle="modal" data-target="#addpost">Create New Post</button>
  </div>
  <br>
  <div class="row">
    @foreach($postData as $pd)
      <div class="col-md-4 mb-4">
        <div class="card">
          <img class="card-img-top" src="{{asset('uploads/'.$pd->image)}}" alt="Post Image">
          <div class="card-body">
            <h5 class="card-title">{{$pd->title}}</h5>
            <p class="card-text">{{$pd->description}}</p>
            <p class="card-text"><small class="text-muted">{{$pd->date}}</small></p>
          </div>
          <div class="card-footer">
            <div class="media">
              <img class="mr-3 rounded-circle" style="width: 40px; height:40px; border-radius: 50%;" src="{{asset('uploads/'.$pd->image)}}" alt="User Profile Pic" style="width: 40px;">
              <div class="media-body">
                <h5 class="mt-0">User Name</h5>
                <strong>Event By:</strong> {{$pd->organization}}
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

<!-- Modal Post -->
<div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
  <form action="dataInsert" method="post" enctype="multipart/form-data">
  @csrf  

  @method('POST') 

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create New Post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Title</span>
                                        </div>
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Date</span>
                                        </div>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Description</span>
                                        </div>
                                        <input type="text" class="form-control" name="description" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Organization</span>
                                        </div>
                                        <input type="text" class="form-control" name="organization" required>
                                    </div>
                                  <!--  <form method="POST" action="" enctype="multipart/form-data"> -->
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" />
            </div>
        <!--</form> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" href="/">Close</button>
        <button type="submit" class="btn btn-primary" href="/postData">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>


</body>
</html>