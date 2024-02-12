<a class="status-update" data-route="{{ route('admin.status-update') }}" data-table-name="{{ $table_name ?? '' }}" data-id="{{ $id ?? '' }}" href="javascript:void(0)">
    @if ($status ?? 0 == 1)
        <i class="fas fa-toggle-on fa-1x text-success" data-status="1"></i>
    @else
        <i class="fas fa-toggle-off fa-1x text-danger" data-status="0"></i>
    @endif
</a>