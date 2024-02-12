{{-- <a href="javascript:void(0)" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">QUICK SHOP</a> --}}
<div class="offcanvas offcanvas-top quick-view" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasTopLabel">adf</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
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
  </div>
