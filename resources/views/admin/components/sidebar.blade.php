<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href='index.html'>
            <span class="sidebar-brand-text align-middle">
                Portfolio Admin
            </span>
            <svg class="sidebar-brand-icon align-middle" width="32px" height="32px" viewBox="0 0 24 24" fill="none" stroke="#FFFFFF" stroke-width="1.5"
                stroke-linecap="square" stroke-linejoin="miter" color="#FFFFFF" style="margin-left: -3px">
                <path d="M12 4L20 8.00004L12 12L4 8.00004L12 4Z"></path>
                <path d="M20 12L12 16L4 12"></path>
                <path d="M20 16L12 20L4 16"></path>
            </svg>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Personal Info
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href="{{ route('admin.personal.info') }}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Personal Info</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='roles.php'>
                    <i class="align-middle" data-feather="info"></i> <span class="align-middle">About</span>
                </a>
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='{{ route('admin.social_links.index') }}'>
                    <i class="align-middle" data-feather="link"></i> <span class="align-middle">Social Links</span>
                </a>
            </li>

            <li class="sidebar-header">
                Skills
            </li>

            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-in.php'>
                    <i class="align-middle" data-feather="star"></i> <span class="align-middle">Skills
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Projects
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="folder"></i> <span class="align-middle">Projects
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Certifications
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="award"></i> <span class="align-middle">Certifications
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Education
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Education
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Professional Experience
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="briefcase"></i> <span class="align-middle">Professional Experience
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Achievements/Awards
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="gift"></i> <span class="align-middle">Achievements/Awards
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Contact Info
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Contact Info
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Testimonials
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Testimonials
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Page Settings
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Page Settings
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Site Settings
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='sign-up.php'>
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Site Settings
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Auth
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='reset-password.php'>
                    <i class="align-middle" data-feather="lock"></i> <span class="align-middle">Reset Password
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='404.php'>
                    <i class="align-middle" data-feather="alert-triangle"></i> <span class="align-middle">404 Page
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='405.php'>
                    <i class="align-middle" data-feather="alert-octagon"></i> <span class="align-middle">405 Page
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='500.php'>
                    <i class="align-middle" data-feather="alert-circle"></i> <span class="align-middle">500 Page
                    </span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='501.php'>
                    <i class="align-middle" data-feather="slash"></i> <span class="align-middle">501 Page
                    </span>
                </a>
            </li>

            <li class="sidebar-header">
                Logs
            </li>
            <li class="sidebar-item">
                <a class='sidebar-link' href='activity-logs.php'>
                    <i class="align-middle" data-feather="activity"></i> <span class="align-middle">Activity Logs</span>
                </a>
            </li>
        </ul>
        <div class="sidebar-cta">
            <div class="sidebar-cta-content">
                <div class="d-grid">
                    <a href="#" class="btn btn-outline-primary" target="_blank">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>