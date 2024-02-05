<div class="modal fade" id="{{ $id }}" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1"
    aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-{{ $bg }} text-white">
                <h5 class="modal-title" id="{{ $id }}Label">{{ $title }}</h5>
            </div>
            <div class="modal-body">
                <p>{{ $body }}</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-coreui-dismiss="modal">Batal</button>
                <a href="{{ $url }}" class="btn btn-primary" type="button">Ya</a>
            </div>
        </div>
    </div>
</div>
