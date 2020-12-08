<!-- Modal -->
<div class="modal fade" id="test-modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="title">...</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php?page=welcome">Accounting</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item active">
                <a class="nav-link" href="#"> Insights <span class="sr-only">(current)</span></a>
            </li>

            <!-- <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li> -->

            <li class="nav-item active dropdown position-static" id="service">
                <a class="nav-link" id="services" href="#">
                    Services
                </a>

                <div class="dropdown-menu w-50 text-center" id="service-menu">

                    <a class="dropdown-item" href="components/member.php?page=solutions">Solutions for your business</a>

                    <div class="dropdown-item dropright position-static" id="audit">
                        <a class="dropdown-item" href="#">
                            Audit and Assurance Services
                        </a>

                        <div class="dropdown-menu w-100" id="audit-menu">
                            <a class="dropdown-item" href="components/member.php?page=audit_services">Audit Services</a>
                            <a class="dropdown-item" href="#">Audit Quality</a>
                            <a class="dropdown-item" href="#">Audit Approach</a>  
                        </div>

                    </div>

                    <div class="dropdown-item dropright position-static" id="tax">
                        <a class="dropdown-item" href="#">
                            Tax Services
                        </a>

                        <div class="dropdown-menu w-100" id="tax-menu">
                            <a class="dropdown-item" href="#">Licensing services</a>
                            <a class="dropdown-item" href="#">International tax planning</a>
                            <a class="dropdown-item" href="#">Expatriate tax planning</a>  
                        </div>
                    </div>
                    <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>-->
                </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#">Meet our people</a>
            </li>

            <!-- Login/Logout -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=register">Register</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=login">Login</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=logout">Logout</a>
            </li>

        </ul>

        <!-- Form Search -->
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
