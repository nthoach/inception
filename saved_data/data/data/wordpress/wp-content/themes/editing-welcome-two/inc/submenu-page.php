<?php
// Adding a submenu page to the Appearance main menu
function editing_welcome_two_add_about_page() {
	add_theme_page( esc_html__('Explore the Theme', 'editing-welcome-two'), esc_html__('Explore the Theme', 'editing-welcome-two'), 'edit_theme_options', 'editing-welcome-two-about-page', 'editing_welcome_two_about_page');
}

add_action( 'admin_menu', 'editing_welcome_two_add_about_page' );


// The structure of the About Page
function editing_welcome_two_about_page()
{ ?>

    <div class="page-container">
        <h1 class="ew-two-h1"><?php esc_html_e('Welcome to Editing Welcome Two!', 'editing-welcome-two'); ?></h1>
        <div class="page-inner">

            <div class="ew-two-info-box">
                <section class="ew-two-section">
                    <h2 class="ew-two-h2"><?php esc_html_e('Build accessible websites', 'editing-welcome-two'); ?></h2>
                    <p class="ew-two-p"><?php esc_html_e('Everybody should be able to use your website, including people with disabilities (e.g. visual impairments or reduced dexterity). Editing Welcome Two is designed to help you create accessible pages according to the official ', 'editing-welcome-two'); ?><a href="https://www.w3.org/TR/WCAG22/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Web Content Accessibility Guidelines (WCAG 2.2) (opens new tab).', 'editing-welcome-two'); ?></a></p>
                    <ul class="ew-two-ul-txt">
                        <li><?php esc_html_e('All patterns are designed in a way that their content can be presented without loss of information or functionality, and without requiring scrolling in two dimensions on very small screens (tested down to a width of 320 CSS and a height of 256 CSS pixels).', 'editing-welcome-two'); ?></li>
                        <li><?php esc_html_e('The theme\'s default sizing of buttons and links in pagination menus takes into account that these elements need to have a certain size in order to be easily clickable.', 'editing-welcome-two'); ?></li>
                        <li><?php esc_html_e('The colors in the theme\'s color palette are named in a specific way that tells the site creator how to use them according to the WCAG 2.2. There are three types of colors: Base, Decorative and Contrast. A base color and a contrast color always have a contrast ratio of at least 7:1, meeting Success Criterion 1.4.6 of the WCAG 2.2 (a criterion about the contrast between text and its background). Decorative colors on the other hand are meant to only be used for decorative purposes (borders, shadows or backgrounds of elements without text/buttons/inputs).', 'editing-welcome-two'); ?></li>
                    </ul>
                    <p class="ew-two-p"><?php esc_html_e('Accessible websites may be necessary for some, but they are beneficial for all!', 'editing-welcome-two'); ?></p>
                    <hr />
                    <h3 class="ew-two-h3"><?php esc_html_e('Interesting Recources:', 'editing-welcome-two'); ?></h3>
                    <ul class="ew-two-ul-txt">
                        <li><a href="https://www.w3.org/WAI/fundamentals/accessibility-intro/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Introduction to Web Accessibility (opens new tab)', 'editing-welcome-two'); ?></a></li>
                        <li><a href="https://www.w3.org/WAI/people-use-web/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('How People with Disabilities Use the Web (opens new tab)', 'editing-welcome-two'); ?></a></li>
                    </ul>
                </section>
            </div>

            <div class="ew-two-info-box ew-two-pro-box">
                <h2 class="ew-two-h2"><?php esc_html_e('Want More? Explore Editing Welcome Two ', 'editing-welcome-two'); ?><span class="pro"><?php esc_html_e('Pro ', 'editing-welcome-two'); ?></span><?php esc_html_e('!', 'editing-welcome-two'); ?></h2>
                <div class="ew-two-img-row">
                    <img class="ew-two-img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screenshot_default_layout_1.webp' ) ); ?>" alt="<?php esc_attr_e( 'Screenshot from the theme Editing Welcome Two Pro', 'editing-welcome-two' ); ?>" />
                    <img class="ew-two-img" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/screenshot_sun_layout_4.webp' ) ); ?>" alt="<?php esc_attr_e( 'Screenshot from the theme Editing Welcome Two Pro', 'editing-welcome-two' ); ?>" />
                </div>
                <ul class="ew-two-ul">
                    <li><?php esc_html_e('One Theme - four different Layouts', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Lots of beautiful patterns', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Four well designed homepages', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Responsive design', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Accessibility-ready', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Different header and footer layouts', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Different style variations including a dark layout', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Updates and support via e-mail', 'editing-welcome-two'); ?></li>
                    <li><?php esc_html_e('Usable in German as well as in English', 'editing-welcome-two'); ?></li>
                </ul>
                <p class="ew-two-p"><?php esc_html_e('Please notice, that the sales page and order form are only available in German!', 'editing-welcome-two'); ?></p>
                <p class="ew-two-p"><?php esc_html_e('Find more detailed information including screenshots and demo pages on: ', 'editing-welcome-two'); ?><a class="theme-link" href="https://webdesign-johanna-schuermann.de/editing-welcome-two/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Editing Welcome Two Pro (Theme Website, opens new tab).', 'editing-welcome-two'); ?></a></p>
            </div>



<div class="ew-two-info-box">
                <section class="ew-two-section">
                    <h2 class="ew-two-h2"><?php esc_html_e('Elegant and versatile', 'editing-welcome-two'); ?></h2>
                    <p class="ew-two-p"><?php esc_html_e('Editing Welcome Two is suitable for various types of websites. Its plain and well structured design makes it a good choice not only for coaches and therapists.', 'editing-welcome-two'); ?></p>
                </section>

                <section class="ew-two-section">
                    <h2 class="ew-two-h2"><?php esc_html_e('Easy to customize', 'editing-welcome-two'); ?></h2>
                    <p class="ew-two-p"><?php esc_html_e('As a block theme, Editing Welcome Two is fully compatible with the Site Editor and thus very easy to customize. In addition to its predefined color palette and gradients, the theme allows you to select custom colors and create custom gradients. So even if both of the theme\'s style variations do not meet your needs, you can adjust the layout with only a few clicks.', 'editing-welcome-two'); ?></p>
                </section>

                <section class="ew-two-section">
                    <h2 class="ew-two-h2"><?php esc_html_e('Support', 'editing-welcome-two'); ?></h2>
                    <p class="ew-two-p"><?php esc_html_e('If you encounter technical problems, feel free to ask your questions in the ', 'editing-welcome-two'); ?><a href="https://wordpress.org/support/theme/editing-welcome-two/" target="_blank" rel="noopener noreferrer"><?php esc_html_e('Editing Welcome Two Support Forum on WordPress.org (opens new tab).', 'editing-welcome-two'); ?></a></p>
                </section>
            </div>

        </div>
    </div>

<?php
} ?>
