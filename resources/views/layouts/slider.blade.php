  <div class="">
  <div class="swiper">
    <div class="swiper-wrapper ">
      <div class="swiper-slide myswiper">
        <img class="object-cover w-full overflow-hidden" src="https://source.unsplash.com/user/erondu/3000x900" alt="image" />
        <div class="button-left">Hello world</div>
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full" src="https://source.unsplash.com/collection/190727/3000x900"
          alt="image" />
          <div class="button-left">Hello world</div>
      </div>
      <div class="swiper-slide">
        <img class="object-cover w-full" src="https://source.unsplash.com/collection/190728/3000x900"
          alt="image" />
          <div class="button-left">Hello world</div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".swiper", {
        cssMode: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
        },
        autoplay: {
        delay: 5000,
        },
        mousewheel: true,
        keyboard: true,
      });
  </script>
</div>