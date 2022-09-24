<!--Navbar start-->
<section id="content-wrapper">
    <nav class="nav-bar">
        <div id="collapsebar">
            <a href="#" class="collapseBar" id="collapseBar">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>

        <div class="dropdown" id="user">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
               data-bs-toggle="dropdown" aria-expanded="false">
                <strong style="margin-right:10px;">{{Auth::user()->name}}</strong>
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
            </ul>
        </div>
    </nav>


</section>
