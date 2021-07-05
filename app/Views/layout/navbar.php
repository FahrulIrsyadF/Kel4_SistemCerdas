<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">

        <a href="#" class="logo" style="color: white;">
            KANKER SERVIKS
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <?php if (session()->get('username') == NULL) { ?>
                    <a href="<?= base_url('auth'); ?>" class="btn btn-light font-weight-bold" type="button">Login</a>
                <?php } else { ?>
                    <li class="nav-item dropdown hidden-caret">
                        
                    </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
</div>
<!-- End Navbar -->