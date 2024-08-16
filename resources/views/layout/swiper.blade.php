
  <!-- Swiper -->
  <div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
      <div class="swiper-slide">Resize me!</div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      direction: getDirection(),
      loop: true, // Enable loop
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      on: {
        resize: function () {
          swiper.changeDirection(getDirection());
        },
      },
    });

    function getDirection() {
      var windowWidth = window.innerWidth;
      var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

      return direction;
    }
  </script>
