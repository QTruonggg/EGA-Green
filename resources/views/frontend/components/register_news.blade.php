<div class="container">
    <div class="row">
        <div class="col-md-6 col-sm-10 mx-auto">
            <h4 class="text-center">Đăng ký nhận tin</h4>
            <div class="form_register">
                <div class="custom-input-group mb-3 form_newsletter form_newsletter_customer">
                    <form accept-charset="UTF-8" action="" class="contact-form" method="post">
                        <input name="form_type" type="hidden" value="customer" />
                        <input name="utf8" type="hidden" value="✓" />
                        <div class="input-group">
                            <input type="hidden" id="newsletter-tags" name="contact[tags]"
                                value="khách hàng tiềm năng, bản tin" />
                            <input class="form-control input-group-field" aria-label="Địa chỉ Email"
                                type="email" placeholder="Nhập địa chỉ email" id="newsletter-email"
                                name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required
                                autocomplete="off" />
                            <div class="input-group-btn btn-action">
                                <button class="h-100 btn text-white button_subscribe subscribe" type="submit"
                                    aria-label="Đăng ký nhận tin" name="subscribe">
                                    Đăng ký
                                </button>
                            </div>
                        </div>
                        {{-- <div class="sitebox-recaptcha hidden">
                            This site is protected by reCAPTCHA and the Google
                            <a href="https://policies.google.com/privacy" target="_blank"
                                rel="noreferrer">Privacy Policy</a>
                            and
                            <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms
                                of Service</a>
                            apply.
                        </div>

                        <input id="2ab5f3b1195d478fa1fe7a9f423fbfe1" name="g-recaptcha-response"
                            type="hidden" /><noscript
                            src="../www.google.com/recaptcha/api4d7a.js?render=6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-"></noscript><noscript>grecaptcha.ready(function()
                            {grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-',
                            {action: 'submit'}).then(function(token)
                            {document.getElementById('2ab5f3b1195d478fa1fe7a9f423fbfe1').value
                            = token;});});</noscript> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>