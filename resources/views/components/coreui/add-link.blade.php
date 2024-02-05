<div class="row">
    <div class="col-12 d-flex justify-content-md-end">
        <a href="{{ $url }}" class="btn btn-primary">
            <svg class="icon me-2">
                <use xlink:href="admin/vendors/@coreui/icons/svg/free.svg#cil-plus"></use>
            </svg>
            @if (empty($label))
                Tambah Data
            @else
                {{ $label }}
            @endif
        </a>
    </div>
</div>
