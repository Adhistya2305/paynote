{{-- langkah 14 --}}

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand my-3 d-flex align-items-center justify-content-center" href="/">

        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        <div class="sidebar-brand-text mx-3">
            @yield('title', 'PayNote')
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                {{-- Langkah 5L --}}
                {{-- 6L	Membuat Halaman Tambah Data Kategori di 
                    resources/views/dashboard/categories/add.blade.php --}}
                <a class="collapse-item" href="{{route('categories')}}">Category</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Pemasukan -->
    {{-- Langkah 6M --}}
    <li class="nav-item">
        <a class="nav-link" href="{{route('incomes')}}">
        <i class="fas fa-fw fa-download"></i>
        <span>Pemasukan</span>
        </a>
    </li>
    {{-- Langkah 7M --}}
    {{-- Membuat Halaman Tambah Data Pemasukan di resources/views/dashboard/incomes/add.blade.php --}}


    <!-- Nav Item - Pegeluaran -->
    <li class="nav-item">
        <a class="nav-link" href="{{route('expenses')}}">
        <i class="fas fa-fw fa-external-link-alt"></i>
        <span>Pengeluaran</span></a>
    </li>


    <div class="text-center d-none d-md-inline">
        <br>
        <button class="rounded-sm border-0" id="sidebarToggle"></button>
    </div>
</ul>

{{-- 15.	Kemudian untuk bagian Footer di 
    resources/views/layouts/partials/footer.blade.php--}}