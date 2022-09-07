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

        {{-- headers --}}
        @include('partials.header')

        <div class="container">

            {{-- post form --}}
            @include('partials.post')


            <div class="col-md-7 mx-auto">
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
