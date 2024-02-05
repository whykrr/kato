<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="admin/assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="admin/assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <x-coreui.nav-item href="{{ url('admin') }}" icon="speedometer" label="Dashboard" permission="" />
        <li class="nav-title">Utama</li>
        <x-coreui.nav-item href="{{ url('admin/customer') }}" icon="star" label="Pelanggan" permission="" />
        <x-coreui.nav-item href="{{ url('admin/user') }}" icon="user" label="Admin" permission="" />
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-3d"></use>
                </svg> Product
            </a>
            <ul class="nav-group-items">
                <x-coreui.nav-item href="{{ url('admin/category') }}" label="Kategori" permission="" />
                <x-coreui.nav-item href="{{ url('admin/variation') }}" label="Varian" permission="" />
                <x-coreui.nav-item href="{{ url('admin/product') }}" label="Produk" permission="" />
            </ul>
        </li>
        <x-coreui.nav-item href="{{ url('admin/stock') }}" icon="plus" label="Input Stok" permission="" />
        <x-coreui.nav-item href="{{ url('admin/promo') }}" icon="tag" label="Promosi & Diskon" permission="" />
        <x-coreui.nav-item href="{{ url('admin/order') }}" icon="cart" label="Pesanan" permission="" />

        <li class="nav-title">Pengaturan</li>
        <x-coreui.nav-item href="{{ url('admin/payment') }}" icon="cash" label="Pembayaran" permission="" />
        <x-coreui.nav-item href="{{ url('admin/shipping') }}" icon="paper-plane" label="Pengiriman" permission="" />

        <li class="nav-title">Situs Web</li>
        <x-coreui.nav-item href="{{ url('admin/website-banner') }}" icon="image" label="Spanduk" permission="" />
        <x-coreui.nav-item href="{{ url('admin/website-article') }}" icon="newspaper" label="Artikel" permission="" />
        <x-coreui.nav-item href="{{ url('admin/website-faq') }}" icon="chat-bubble" label="Pertanyaan Umum"
            permission="" />

    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
