<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main>
    <section class="contact-hero"
        style="background: linear-gradient(135deg, #1a3313 0%, #2d4a22 50%, #3d6b2e 100%); text-align: center; color: var(--white); padding: 120px 0;">
        <div class="container" data-aos>
            <span class="badge" style="background: rgba(255,255,255,0.1); color: var(--white);">Contact Us</span>
            <h1 class="hero-title" style="color: var(--white);">Start Your <span
                    class="accent-text">Transformation</span>
            </h1>
        </div>
    </section>

    <section class="contact-v2" style="background: var(--bg-light); padding: 120px 0;">
        <div class="container">
            <div class="contact-card-v2 contact-page-card">
                <div class="contact-info-side contact-info-padded" data-aos="fade-right">
                    <h2
                        style="font-family: 'Playfair Display', serif; color: var(--white); font-size: 3rem; margin-bottom: 30px;">
                        Direct <span class="accent-text" style="font-style: italic;">Contact</span></h2>
                    <p style="opacity: 0.8; margin-bottom: 50px; font-size: 1.1rem; line-height: 1.6;">Private
                        consultations are available by appointment. Our team is dedicated to providing you with a
                        seamless and luxury experience.</p>

                    <div class="contact-details-premium">
                        <div style="margin-bottom: 40px;">
                            <span class="badge"
                                style="background: rgba(255,255,255,0.05); color: var(--accent); letter-spacing: 2px;">GURGAON
                                CLINIC</span>
                            <p style="font-size: 1.2rem; margin-top: 20px; color: var(--white);">
                                <i class="fa-solid fa-location-dot"
                                    style="color: var(--accent); margin-right: 15px;"></i>
                                HexaHealth, 3rd Floor, Building B,<br>Sector 14, MG Road, Gurgaon
                            </p>
                        </div>
                        <div style="margin-bottom: 40px;">
                            <span class="badge"
                                style="background: rgba(255,255,255,0.05); color: var(--accent); letter-spacing: 2px;">CONNECT</span>
                            <p style="font-size: 1.2rem; margin-top: 20px; color: var(--white);">
                                <i class="fa-solid fa-phone" style="color: var(--accent); margin-right: 15px;"></i> +91
                                98765 43210<br>
                                <i class="fa-solid fa-envelope" style="color: var(--accent); margin-right: 15px;"></i>
                                info@drpraveenlakra.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="contact-form-side contact-form-padded" data-aos="fade-left">
                    <h3 class="section-heading" style="margin-bottom: 40px;">Request
                        a <span class="accent-text">Call
                            Back</span></h3>
                    <form action="#" method="POST" class="contact-form-premium">
                        <div class="form-row" style="margin-bottom: 25px;">
                            <input type="text" name="name" placeholder="Full Name" required
                                style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa; border-radius: 4px;">
                        </div>
                        <div class="form-row form-row-half">
                            <input type="email" name="email" placeholder="Email Address" required
                                style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa; border-radius: 4px;">
                            <input type="tel" name="phone" placeholder="Phone Number"
                                style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa; border-radius: 4px;">
                        </div>
                        <div class="form-row" style="margin-bottom: 25px;">
                            <textarea name="message" rows="5" placeholder="How can we help you?" required
                                style="width: 100%; padding: 15px; border: 1px solid #eee; background: #fafafa; border-radius: 4px; resize: none;"></textarea>
                        </div>
                        <div class="form-row" style="margin-top: 30px;">
                            <button type="submit" class="btn"
                                style="width: 100%; padding: 20px; font-weight: 700; letter-spacing: 2px;">CONFIRM
                                REQUEST</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>