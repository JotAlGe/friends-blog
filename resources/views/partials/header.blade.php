{{-- header --}}
<header class="p-3 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between justify-content-lg-around">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo" width="100">
            </a>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>

            <div class="dropdown text-end">
                <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle show" id="dropdownUser1"
                    data-bs-toggle="dropdown" aria-expanded="true">
                    <img src="{{ asset('assets/images/'. Auth::user()->profile_photo)}}" alt="mdo" width="32"
                        height="32" class="rounded-circle">

                </a>
                <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" data-popper-placement="bottom-end"
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

<script>
    const a = document.getElementById('dropdownUser1')
    const ul = document.querySelector('.dropdown-menu')

    a.addEventListener('click', function(){
        ul.classList.toggle('show')
    })
</script>
