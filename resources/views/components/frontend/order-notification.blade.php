@forelse (pendingOrders() as $item)
<a href="{{ route('admin.orders.show', $item->id) }}" class="text-reset notification-item">
    <div class="d-flex border-bottom align-items-start">

        <div class="flex-shrink-0">
            <div class="avatar-sm me-3">
                <span class="avatar-title bg-primary rounded-circle font-size-16">
                    <i class="uil-shopping-basket"></i>
                </span>
            </div>
        </div>

        <div class="flex-grow-1">
            <h6 class="mb-1">New order #{{ $item->order_number }} has been placed</h6>
            <div class="text-muted">
                <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold">
                    Total : BDT{{ $item->total }}
                </p>
                <p class="mb-0 font-size-10 text-uppercase fw-bold">
                    <i class="mdi mdi-clock-outline"></i> {{ $item->created_at->diffForHumans() }}
                </p>
            </div>
        </div>

    </div>
</a>
@empty
    <strong class="text-danger">No Orders !</strong>
@endforelse