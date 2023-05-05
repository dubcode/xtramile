<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package emd
 */

?>

<footer id="footer">
    <div class="container">

        <!-- footer - grid -->
        <div class="footer__grid">

            <!-- footer - col one -->
            <div class="footer__col footer__col-one">
                <span class="footer__title">
                    Our Studio
                </span>
                <p>
                    Kern House,<br/>
                    Stone Business Park,<br/>
                    Stone,<br/>
                    ST15 0TL,<br/>
                    UK
                </p>
            </div>

            <!-- footer - col two -->
            <div class="footer__col footer__col-two">
                <span class="footer__title">
                    Explore
                </span>
                <ul>
                    <li>
                        <a href="#">
                            Our Results
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Services
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            About
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Careers
                        </a>
                    </li>
                </ul>
            </div>

            <!-- footer - col three -->
            <div class="footer__col footer__col-three">
                <span class="footer__title">
                    Follow
                </span>
                <ul>
                    <li>
                        <a href="#">
                            LinkedIn
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Twitter
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Instagram
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            Facebook
                        </a>
                    </li>
                </ul>
            </div>

            <!-- footer - col four -->
            <div class="footer__col footer__col-four">
                <span class="footer__sub-title">
                    Your partner to digital excellence
                </span>
                <div class="footer__logos">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/Extramile-Digital-Logo-2x.png'; ?>" height="198" width="196"  alt="extramile-digital-logo" title="Extramile Digital">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/wordpress.png'; ?>" height="92" width="236"  alt="wordpress-logo" title="WordPress">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?= get_template_directory_uri() . '/assets/img/google-partner.png'; ?>" height="146" width="206"  alt="google-partner-logo" title="Google Partner">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- footer - base -->
        <div class="footer__base">
            <div class="footer__copyright">
                <span>© Copyright 2022 Extramile Digital. All rights reserved</span>
            </div>
            <div class="footer__policies">
                <ul>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/privacy-policy/">
                            Privacy Policy
                        </a>
                    </li>
                    <li>
                        <a href="<?php bloginfo('url'); ?>/cookie-policy/">
                            Cookie Policy
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
