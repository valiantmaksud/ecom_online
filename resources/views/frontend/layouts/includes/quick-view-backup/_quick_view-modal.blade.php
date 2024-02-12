{{-- <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">QUICK SHOP</a> --}}
  <!-- QUICK VIEW MODAL -->
<div class="modal fade quick-view" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg-7">
                    <div class="quick-view-left-side">

                        {{-- image zoom html start --}}
                        <div class="image-show" href="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}">
                            <i class="icofont-heart product-details-wish flybtn"></i>
                            <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" id="show-img" alt="preview img" class="flyitem">
                        </div>

                        <div class="thumbnail-border">
                            <div class="small-img">
                                <img src="{{ asset('icon_right.png') }}" class="icon-left" alt="" id="prev-img">
                                <div class="small-container">
                                <div id="small-img-roll">

                                    <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" class="show-small-img" alt="thumbnail">
                                    <img src="{{ asset('assets/frontend/image/section_img/product_dets2.jpg') }}" class="show-small-img" alt="thumbnail">
                                    <img src="{{ asset('assets/frontend/image/section_img/product_dets1.jpg') }}" class="show-small-img" alt="thumbnail">
                                    <img src="{{ asset('assets/frontend/image/section_img/product_dets2.jpg') }}" class="show-small-img" alt="thumbnail">

                                </div>
                                </div>
                                <img src="{{ asset('icon_right.png') }}" class="icon-right" alt="" id="next-img">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="quick-view-right-side">
                        product info
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
</div>

