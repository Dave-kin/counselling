<?php require_once('partial/header.php'); ?>

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our upcoming meetings</h6>
          <h2>Upcoming Meetings</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>New Lecturers Meeting</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Network Teaching Concept</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Online Teaching Tools</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                      </div>
                      <a href="meeting-details.html"><h4>New Teaching Techniques</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Technology Conference</h4></a>
                      <p>TemplateMo is the best website<br>when it comes to Free CSS.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all imp att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Online Teaching Techniques</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all soon imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Instant Lecture Design</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 templatemo-item-col all att soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <a href="meeting-details.html"><h4>Online Social Networking</h4></a>
                      <p>Morbi in libero blandit lectus<br>cursus ullamcorper.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2022 Edu Meeting Co., Ltd. All Rights Reserved. 
    </div>
  </section>

  <!-- Scripts -->
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <div class="elfsight-app-b604aa22-7a1c-40e6-86b6-d5ba211bca7f"></div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>

