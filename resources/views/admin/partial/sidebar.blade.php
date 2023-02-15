<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('dashboard/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">LinuxGhost</h4>
        </div>
        <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
        </div>
    </div>

    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.home') }}">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <!--start users-->
        <li class="menu-label">Users</li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Users / Writers</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
        <!--end users-->

        <!--start blog-->
        <li class="menu-label">Blog</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-house-fill"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{ route('admin.post.index') }}"><i class="bi bi-circle"></i>Posts</a>
                </li>
                <li> <a href="{{ route('admin.category.index') }}"><i class="bi bi-circle"></i>Categories</a>
                </li>
                <li> <a href="{{ route('admin.tag.index') }}"><i class="bi bi-circle"></i>Tags</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Comments</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
        <!--end blog-->

        <!--start other-->
        <li class="menu-label">Others</li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Profile</div>
            </a>
        </li>
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                </div>
                <div class="menu-title">Settings</div>
            </a>
        </li>
        <!--end other-->

    </ul>
    <!--end navigation-->
</aside>
