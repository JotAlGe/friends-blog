{{-- home

<p>{{ auth()->id() }}</p>
<p>{{ auth()->user()->name }}</p>
<p>{{ auth()->user()->lastname }}</p>
<p>{{ auth()->user()->username }}</p>
<p>{{ auth()->user()->email }}</p>

<img src="{{ asset('assets/images/user.png') }}" width="50"><br>
<img src="{{ asset('assets/images/portada.png') }}" width="100%" height="300px">


<form action="{{ route('logout') }}" method="post">
    @csrf
    <input type="submit" value="Logout">
</form> --}}
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    </head>

    <body>
        {{-- header --}}
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-around">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                            <use xlink:href="#bootstrap"></use>
                        </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-between mb-md-0">
                        <li><a href="#" class="nav-link px-2 link-secondary">Overview</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Inventory</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Customers</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Products</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show"
                            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                            <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small show" aria-labelledby="dropdownUser1"
                            data-popper-placement="bottom-end"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(-110px, 34px);">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">

            <div class="row">
                <div class="col-md-offset-3 col-md-6 col-xs-12">
                    <div class="well well-sm well-social-post">
                        <form>
                            <ul class="list-inline" id='list_PostActions'>
                                <li class='active'><a href='#'>Update status</a></li>
                                {{-- <li><a href='#'>Add photos/Video</a></li>
                                <li><a href='#'>Create photo album</a></li> --}}
                            </ul>
                            <textarea class="form-control" placeholder="What's in your mind?"></textarea>
                            <ul class='list-inline post-actions'>
                                <li><a href="#"><span class="glyphicon glyphicon-camera"></span></a></li>
                                <li><a href="#" class='glyphicon glyphicon-user'></a></li>
                                <li><a href="#" class='glyphicon glyphicon-map-marker'></a></li>
                                <li class='pull-right mb-3 mt-1'><a href="#" class='btn btn-primary btn-xs'>Post</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-7">

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">Config</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                            default model text.
                        </p>

                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                        </div>
                    </div>
                    <div class="social-footer">
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Internet tend to repeat predefined chunks as necessary, making this the first true
                                generator on
                                the Internet. It uses a dictionary of over 200 Latin words.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                <small class="text-muted">12.06.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Making this the first true generator on the Internet. It uses a dictionary of.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                <small class="text-muted">10.07.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">Config</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                            default model text.
                        </p>
                        <p>
                            Lorem Ipsum as their
                            default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in their infancy. Packages and web page editors now use Lorem Ipsum as their
                            default model text.
                        </p>
                        <img src="https://via.placeholder.com/650x280/FFB6C1/000000" class="img-responsive">
                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                        </div>
                    </div>
                    <div class="social-footer">
                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Internet tend to repeat predefined chunks as necessary, making this the first true
                                generator on
                                the Internet. It uses a dictionary of over 200 Latin words.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                                <small class="text-muted">12.06.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Making this the first true generator on the Internet. It uses a dictionary of.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                <small class="text-muted">10.07.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Making this the first true generator on the Internet. It uses a dictionary of.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                <small class="text-muted">10.07.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="social-feed-box">

                    <div class="pull-right social-action dropdown">
                        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu m-t-xs">
                            <li><a href="#">Config</a></li>
                        </ul>
                    </div>
                    <div class="social-avatar">
                        <a href="" class="pull-left">
                            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                        </div>
                    </div>
                    <div class="social-body">
                        <p>
                            Packages and web page editors now use Lorem Ipsum as their
                            default model text. Page editors now use Lorem Ipsum as their
                            default model text.
                        </p>
                        <div class="btn-group">
                            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                        </div>
                    </div>
                    <div class="social-footer">


                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <a href="#">
                                    Andrew Williams
                                </a>
                                Making this the first true generator on the Internet. It uses a dictionary of.
                                <br>
                                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11 Like this!</a> -
                                <small class="text-muted">10.07.2014</small>
                            </div>
                        </div>

                        <div class="social-comment">
                            <a href="" class="pull-left">
                                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
                            </a>
                            <div class="media-body">
                                <textarea class="form-control" placeholder="Write comment..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
        </script>

    </body>

</html>
