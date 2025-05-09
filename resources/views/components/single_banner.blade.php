<div class="section bg_light_blue2 pb-0 pt-md-0">
    <div class="container">
      <div class="row align-items-center flex-row-reverse">
        <div class="col-md-6 offset-md-1">
          <div class="medium_divider d-none d-md-block clearfix"></div>
          <div class="trand_banner_text text-center text-md-start">
            <div class="heading_s1 mb-3">
              <span class="sub_heading">{{ $single_banner->sub_heading }}</span>
              <h2>{{ $single_banner->heading }}</h2>
            </div>
            <h5 class="mb-4">{{ $single_banner->description }}</h5>
            <a
              href="{{ url($single_banner->button_link) }}"
              class="btn btn-fill-out rounded-0"
              >{{ $single_banner->button_text }}</a
            >
          </div>
          <div class="medium_divider clearfix"></div>
        </div>
        <div class="col-md-5">
          <div class="text-center trading_img">
            <img src="{{ asset($single_banner->image) }}" alt="tranding_img" />
          </div>
        </div>
      </div>
    </div>
  </div>
