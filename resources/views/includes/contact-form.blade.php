<div class="support support-3 mb-0" style="padding: 20px 0">
    <div class="container">
        <div class="row justify-content-between">

            <div class="col-xl-5 col-lg-5 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="part-text">
                    <span class="phone-number">{{env('COMPANY_PHONE_2')}}</span>
                    <p>We’re available 24/7!
                        Get in touch for a detailed analysis and thorough assessment of your plan.</p>

                    <a href="#" id="contact-now-btn" class="support-button">
                      Contact now <i class="fas fa-long-arrow-alt-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="part-cta">
                    <a href="{{route('contact-us')}}" class="cta-button">REACH OUT NOW</a>
                    <h2>Obtain further information by
                         contacting with our experienced 
                         IT staff.</h2>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
  document.getElementById('contact-now-btn').addEventListener('click', function (e) {
    e.preventDefault();

    const phoneNumber = '919643044561'; // WhatsApp format: country code + number (no +, no spaces)
    const telNumber = '+919643044561';  // tel: format with +

    const screenWidth = window.innerWidth;

    if (screenWidth >= 650) {
      // Open WhatsApp in new tab
      window.open(`https://wa.me/${phoneNumber}`, '_blank');
    } else {
      // Open phone dialer
      window.location.href = `tel:${telNumber}`;
    }
  });
</script>