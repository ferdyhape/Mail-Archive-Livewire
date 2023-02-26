<div style="width: 20%">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" id="sidebar">
        <a href="/" class="d-flex align-items-center text-white text-decoration-none mb-3">
            <p class="my-auto fs-3"><i class="fa-solid fa-sitemap me-3"></i>HMTI</p>
        </a>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link text-white" aria-current="page">
                    <p class="my-auto"><i class="fa-solid fa-gauge me-3"></i>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white" onclick="archiveshow()">
                    <p class="my-auto"><i class="fa-solid fa-box-archive me-3"></i>Archive</p>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white" onclick="categoryshow()">
                    <p class="my-auto"><i class="fa-solid fa-tag me-3"></i>Category</p>
                </a>
            </li>
            <li>
                <a href="#" class="nav-link text-white" onclick="activityshow()">
                    <p class="my-auto"><i class="fa-solid fa-person-walking me-3"></i>Activity</p>
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                    class="rounded-circle me-2">
                <strong>{{ Auth::user()->name }}</strong>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li>
                    @livewire('auth.logout')
                </li>
            </ul>
        </div>
    </div>
</div>
