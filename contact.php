<?php   include('include/header.php')  ?>


  <main id="main" style="background-image:URL(h7.jpg);">

   

    <!-- ======= Contact Single ======= -->
    <section class="contact mt-5  pt-5">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form ">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="اسم" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="ایمیل آدرس" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="موضوع" required>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="پیام" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 my-3">
                      <div class="mb-3">
                        <div class="loading">در حال ارسال پیام</div>
                        <div class="error-message"></div>
                        <div class="sent-message">پیام شما ارسال شد.تشکر!</div>
                      </div>
                    </div>

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-danger btn-b">ارسال پیام</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-5 section-md-t3 text-white">
                <div class="icon-box section-b2 ">
                  <div class="icon-box-icon text-white">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell text-white">
                    <div class="icon-box-title ">
                      <h4 class="icon-title text-white">سلام کن!</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">ایمیل آدرس:
                        <span class="text-white" >contact@example.com</span>
                      </p>
                      <p class="mb-1 text-white">شماره تماس:
                        <span class="color-a text-white" dir="ltr">+۹۳ ۷۹۰ ۲۳۴ ۳۱۴</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2 text-white">
                  <div class="icon-box-icon text-white">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell text-white">
                    <div class="icon-box-title text-white">
                      <h4 class="icon-title text-white">مارا پیدا کنید در:</h4>
                    </div>
                    <div class="icon-box-content text-white">
                      <p class="mb-1 text-white">
                       افغانسان،هرات،شهر هرات.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box text-white">
                  <div class="icon-box-icon text-white">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell text-white">
                    <div class="icon-box-title">
                      <h4 class="icon-title text-white">شبکه های اجنماعی</h4>
                    </div>
                    <div class="icon-box-content ">
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="link-one">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

  <?php   include('include/footer.php')  ?>
