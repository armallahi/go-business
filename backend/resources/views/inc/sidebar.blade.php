<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-tachometer-alt fa-lg mr-3"></i>
                <span class="menu-title">الصفحة الرئيسية</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('add') }}">
                <i class="fas fa-plus fa-lg mr-3"></i>
                <span class="menu-title">إضافة</span>
            </a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('upload') }}">
                <i class="fas fa-upload fa-lg mr-3"></i>
                <span class="menu-title">رفع ملف</span>
            </a>
        </li>

    </ul>
</nav>