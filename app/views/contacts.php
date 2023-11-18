<section class="contacts">
    <div class="container">
        <div class="contacts__wrap">
            <div class="contacts__info" data-aos="fade-up" data-aos-duration="2000">
                <h2 class="contacts__title">
                    <span class="contacts__title-span">Let's chat.</span>
                    Tell me about your subject.
                </h2>
                <p class="contacts__description">
                    Feel free to use the contact form to reachout to us.
                </p>
            </div>
            <form action="./mail-action" method="post" class="contacts__form" data-aos="fade-up"
                data-aos-duration="2000">
                <h3 class="contacts__form-title">Send me <span class="contacts__form-title-span">a message🚀</span></h3>
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="full-name" class="contacts__form-input" placeholder="Full name*"
                            autocomplete="given-name family-name" required />
                        <div class="form-group">
                            <input type="email" name="email" class="contacts__form-input" placeholder="Email address*"
                                autocomplete="email" required />
                        </div>
                        <div class="form-group">
                            <input type="text" name="subject" class="contacts__form-input" placeholder="Subject" />
                        </div>
                        <div class="form-group">
                            <label for="message">Tell me what you want to chat about*</label>
                            <textarea name="message" id="message" rows="15" class="contacts__form-text"
                                required></textarea>
                        </div>
                        <input type="submit" value="Send Message" class="btn btn--submit" />
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>