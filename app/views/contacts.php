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
<section class="contacts-map">
    <div class="contacts-map__wrap">
        <h2 class="center-align">My Location</h2>
        <iframe class=" contacts-map__iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1558.7147272602856!2d4.9296190272700775!3d52.35746253176003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60971a6fc8131%3A0x9cf5d0a0577cad22!2sMontessori%20Lyceum%20Oostpoort!5e0!3m2!1suk!2snl!4v1700648870838!5m2!1suk!2snl"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>