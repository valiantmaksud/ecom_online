<div class="card">
    <div class="card-header justify-content-between d-flex align-items-center">
        <h4 class="card-title">Product Data</h4>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-2 active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home"
                        role="tab" aria-controls="v-pills-home" aria-selected="true">Basic</a>

                    <a class="nav-link mb-2" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile"
                        role="tab" aria-controls="v-pills-profile" aria-selected="false">Inventory</a>

                    <a class="nav-link mb-2" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages"
                        role="tab" aria-controls="v-pills-messages" aria-selected="false">Shipping</a>

                    <a class="nav-link" id="v-pills-attribute-tab" data-bs-toggle="pill" href="#v-pills-attribute"
                        role="tab" aria-controls="v-pills-attribute" aria-selected="false">Attribute</a>

                    <a class="nav-link" id="v-pills-advance-tab" data-bs-toggle="pill" href="#v-pills-advance"
                        role="tab" aria-controls="v-pills-advance" aria-selected="false">Advance</a>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content text-muted mt-4 mt-md-0" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                        aria-labelledby="v-pills-home-tab">
                        <x-floating-input name="price" title="Regular Price ৳" value="{{ old('price', $product->price ?? '') }}"/>
                        <x-floating-input name="offer_price" title="Sale Price ৳" value="{{ old('offer_price', $product->offer_price ?? '') }}"/>
                    </div>

                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab">
                        <x-floating-input name="sku" title="SKU" value="{{ old('sku', $product->sku ?? '') }}" />
                        <x-floating-select name="stock_status" title="Stock Status" selected="instock" :collections="[
                            'instock' => 'In Stock',
                            'outofstock' => 'Out of Stock',
                            'onbackorder' => 'On Backorder',
                        ]" />
                    </div>

                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab">
                        <x-floating-input name="weight" title="Weight" value="{{ old('weight', $product->weight ?? '') }}" />
                    </div>

                    <div class="tab-pane fade" id="v-pills-attribute" role="tabpanel"
                        aria-labelledby="v-pills-attribute-tab">
                        <div class="mb-3">
                            <label for="attribute"
                                class="form-label font-size-13 text-muted">Attribute</label>
                            <select class="form-control attribute" data-trigger name="choices-single-default"
                                id="choices-single-default">
                                <option value="">Select Attribute</option>
                                @foreach ($attributes as $item)
                                    <option value="{{ $item->id }}" data-objects="{{ $item->objects }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="objects">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
