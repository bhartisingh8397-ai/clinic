<?php
/**
 * Template Name: About Us Page
 */
get_header(); ?>

<main>
    <section class="about-hero"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about-hero-neutral.png');">
        <div class="hero-overlay"></div>
        <div class="container hero-content" data-aos="fade-up">
            <span class="badge">LEGACY OF
                EXCELLENCE</span>
            <h1 class="hero-title" style="color: var(--white);">About Dr. <span class="accent-text">Praveen Lakra</span>
            </h1>
            <p style="font-size: 1.3rem; opacity: 0.95; color: var(--white);">15+ Years of Distinguished Practice in
                Medical & Aesthetic
                Dermatology</p>
        </div>
    </section>

    <section class="doctor-profile" style="padding: 120px 0; background: #fff;">
        <div class="container">
            <div class="profile-grid">
                <div class="profile-image" data-aos="fade-right">
                    <div style="position: relative;">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/larka.jpg"
                            alt="Dr. Praveen Lakra" class="premium-img"
                            style="width: 100%; border-radius: 4px; box-shadow: 20px 20px 0 var(--bg-light);">
                        <div
                            style="position: absolute; bottom: -20px; right: -20px; background: var(--accent); padding: 25px; border-radius: 4px;">
                            <span style="font-weight: 800; font-size: 1.5rem; color: var(--primary);">MBBS, MD</span>
                        </div>
                    </div>
                </div>
                <div class="profile-info" data-aos="fade-left">
                    <span class="badge" style="color: var(--accent);">EXPERTISE</span>
                    <h2 class="section-heading" style="margin: 20px 0;">Defining the
                        Standard of <span class="accent-text">Skin Care</span></h2>

                    <p class="bio" style="font-size: 1.1rem; line-height: 1.8; color: #555; margin-bottom: 25px;">
                        Dr. Praveen Lakra is a highly acclaimed dermatologist with over 15 years of dedicated practice
                        in clinical and cosmetic dermatology. With an MD in Dermatology, he has successfully treated
                        thousands of patients, helping them achieve healthy, glowing skin and revitalized hair.
                    </p>
                    <p class="bio" style="font-size: 1.1rem; line-height: 1.8; color: #555;">
                        Known for his patient-centric approach and meticulous attention to detail, Dr. Lakra specializes
                        in advanced treatments for acne, pigmentation, and complex skin conditions, alongside
                        cutting-edge aesthetic procedures.
                    </p>

                    <div class="stats-flex" style="margin-top: 40px;">
                        <div>
                            <span
                                style="display: block; font-size: 2rem; font-weight: 700; color: var(--accent);">15K+</span>
                            <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Satisfied
                                Patients</span>
                        </div>
                        <div style="width: 1px; background: #eee;"></div>
                        <div>
                            <span
                                style="display: block; font-size: 2rem; font-weight: 700; color: var(--accent);">15+</span>
                            <span style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">Years
                                Practice</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="expertise-grid-section" style="padding: 120px 0; background: var(--bg-light);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 80px;" data-aos="fade-up">
                <h2 style="font-family: 'Playfair Display', serif; font-size: 3rem;">Core <span
                        class="accent-text">Specializations</span></h2>
                <div style="width: 60px; height: 3px; background: var(--accent); margin: 30px auto;"></div>
            </div>
            <div class="expertise-grid">
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="100"
                    style="background: #fff; padding: 40px; text-align: center; border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; display: block;"><i
                            class="fa-solid fa-wand-sparkles"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Cosmetic</h3>
                    <p style="color: #666; font-size: 0.95rem;">Expert in Botox, Fillers, Chemical Peels, and anti-aging
                        treatments.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="200"
                    style="background: #fff; padding: 40px; text-align: center; border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; display: block;"><i
                            class="fa-solid fa-microscope"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Clinical</h3>
                    <p style="color: #666; font-size: 0.95rem;">Comprehensive care for Acne, Eczema, Psoriasis, and
                        medical conditions.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="300"
                    style="background: #fff; padding: 40px; text-align: center; border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; display: block;"><i
                            class="fa-solid fa-bolt-lightning"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Laser</h3>
                    <p style="color: #666; font-size: 0.95rem;">Advanced technology for hair removal, scar reduction and
                        resurfacing.</p>
                </div>
                <div class="expertise-card" data-aos="fade-up" data-aos-delay="400"
                    style="background: #fff; padding: 40px; text-align: center; border-radius: 4px; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
                    <span class="icon"
                        style="font-size: 2.5rem; color: var(--accent); margin-bottom: 20px; display: block;"><i
                            class="fa-solid fa-droplet"></i></span>
                    <h3 style="font-family: 'Playfair Display', serif; margin-bottom: 15px;">Restoration</h3>
                    <p style="color: #666; font-size: 0.95rem;">Advanced solutions for hair thinning and loss, including
                        PRP therapies.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-banner"
        style="padding: 100px 0; background: var(--primary); color: var(--white); text-align: center;">
        <div class="container" data-aos="zoom-in">
            <h2 class="section-heading" style="color: var(--white);">Experience Premium
                Skin Care</h2>
            <p style="margin: 30px 0 50px; opacity: 0.8; font-size: 1.2rem;">Book your private consultation with Dr.
                Praveen Lakra today.</p>
            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">Request an Appointment</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>