@forelse (optional(auth()->user()->cart)->details ?? [] as $item)
    <div class="pdct_added">
        
        <div class="ordered_left" style="width: 45%">
            <div class="ordered_img">
                @if (file_exists(optional($item->product)->image))
                    <img src="{{ asset(optional($item->product)->image) }}" alt="{{ optional($item->product)->name }}">
                @else
                    <img src="{{ asset('assets/frontend') }}/image/section_img/ordered_1.jpg" alt="{{ optional($item->product)->name }}">
                @endif
            </div>
            <div class="ordered_desc">
                <p>{{ optional($item->product)->name }}</p>
                <span>BDT {{ number_format($item->price) }}</span>
            </div>
        </div>
        <div class="text-center">
            <select name="size_ids[]" class="form-controls select2 address_portion">
                @foreach (optional($item->product)->product_sizes as $size)
                    <option value="{{ $size->id }}">{{ $size->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="ordered_right">
            <div class="count">
                <div class="quantity">
                    <a href="javascript:void(0)" class="quantity_minus" onclick="updateCart(`{{ $item->id }}`, -1)">
                        <span><i class="fas fa-minus"></i></span>
                    </a>
                    <input name="quantity" type="text" class="quantity_input" value="{{ $item->quantity }}">
                    <a href="javascript:void(0)" class="quantity_plus" onclick="updateCart(`{{ $item->id }}`, 1)">
                        <span><i class="fas fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <div class="price">
                <p>BDT {{ number_format($item->amount) }}</p>
            </div>
            <div class="remove">
                <a href="javascript:void(0)" onclick="removeFromCart(`{{ $item->id }}`)"><i class="fas fa-trash-alt"></i></a>
            </div>
        </div>
    </div>
@empty
    <div class="pdct_added">
        <span class="text-danger">No items added to cart.</span>
    </div>
@endforelse
