<?php get_header(); ?>
<main id="content" class="page-content page-contact" role="main">
  <div class="contact-form__wrapper section-border">
    <div class="container">
      <div class="contact-form al-max-w-3xl al-mx-auto">
        <div class="section-padding">
          <div id="template" class="form-wrapper">
            <div id="customer">
              <!-- Create Customer -->
              <div id="create-customer">
                <div class="auth__header">
                  <h4 class="page-header !al-mb-4 al-text-left">
                    You’ve got questions, we’ve got answers on anything !
                  </h4>
                  <p>Let’s Talk, But You First!</p>
                  <p>
                    We’re proud of the relationships we build. We’re all wildly
                    different from each other, so chances are at least one of us has
                    something in common with you!
                  </p>
                </div>

                <form method="post" action="/account" id="create_customer" accept-charset="UTF-8" data-login-with-shop-sign-up="true">
                  <div class="al-grid al-grid-cols-1 md:al-grid-cols-2 md:al-gap-6">
                    <div class="input-row">
                      <label for="first_name" class="login">Name</label>
                      <input type="text" value="" name="customer[first_name]" id="first_name" class="large" size="30" />
                    </div>

                    <div class="input-row">
                      <label for="email" class="login">Email</label>
                      <input type="email" value="" name="customer[email]" id="email" class="large" size="30" />
                    </div>
                  </div>
                  <input type="hidden" name="form_type" value="create_customer" /><input type="hidden" name="utf8" value="✓" />

                  <div class="input-row">
                    <label for="message" class="login">Message</label>
                    <textarea name="message" id="message" cols="30" rows="6"></textarea>
                  </div>

                  <div class="form-action">
                    <button class="btn" type="submit">Send</button>
                  </div>
                </form>
              </div>
              <!-- /#create-customer -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container contact-info section-padding al-max-w-6xl">
    <div class="contact-info__header">
      <div class="al-mb-4 md:al-mb-6">
        <h4 class="page-header !al-mb-4 al-text-left">
          Your connection to Aminu
        </h4>
        <p>
          Always humans, never bots. The hands-down, sharpest and friendliest
          support team in the biz. Need a hand or high-five, friendly folks
          standing by!
        </p>
      </div>
      <div class="al-mb-4 md:al-mb-6">
        <p>
          <strong>Call: </strong><a href="https://web.archive.org/web/20230324225519/tel:+918591110603">+91 8591110603</a>
        </p>
      </div>
      <div class="al-mb-4 md:al-mb-6">
        <p>
          <strong>Customer Support:</strong><br />care@aminu.life <br />Our
          current response time is about 54 minutes.Expect a reply between 8am -
          6:30pm IST Monday through Friday. You can also search our FAQs for
          answers to anything you might be wondering.
        </p>
      </div>
      <div class="al-mb-4 md:al-mb-6">
        <p><strong>Press + Partnerships: </strong><br />press@aminu.life</p>
      </div>
      <div class="al-mb-4 md:al-mb-6">
        <p><strong>Wholesale:</strong><br />wholesale@aminu.life</p>
      </div>
      <div class="al-mb-4 md:al-mb-6">
        <p>
          <strong>Head Office Address:</strong><br />9/B Government Industrial
          Estate, Near Hindustan Naka, Charkop, Kandivali(W), Mumbai - 400 067,
          India.
        </p>
      </div>
    </div>
  </div>
</main>
<?php get_footer();
