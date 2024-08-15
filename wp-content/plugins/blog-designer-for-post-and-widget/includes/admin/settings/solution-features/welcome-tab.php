<?php
/**
 * Admin Class
 *
 * Handles the Admin side functionality of plugin
 *
 * @package Popup Anything on click
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
} ?>

<div id="bdpw_welcome_tabs" class="bdpw-vtab-cnt bdpw_welcome_tabs bdpw-clearfix">	
	
    <div class="bdpw-deal-offer-wrap">
        <h3 style="font-weight: bold; font-size: 30px; color:#ffef00; text-align:center; margin: 15px 0 5px 0;">Why Invest Time On Free Version?</h3>

        <h3 style="font-size: 18px; text-align:center; margin:0; color:#fff;">Explore Blog Designer - Post and Widget Pro with Essential Bundle Free for 5 Days.</h3>           

        <div class="bdpw-deal-free-offer">
            <a href="<?php echo esc_url( BDPW_PLUGIN_BUNDLE_LINK ); ?>" target="_blank" class="bdpw-sf-free-btn"><span class="dashicons dashicons-cart"></span> Try Pro For 5 Days Free</a>
        </div>
    </div>

    <!-- Start - Welcome Box -->
    <div class="bdpw-sf-welcome-wrap" style="border: 1px solid #ddd; background: #fff;box-shadow: 0 3px 2px rgb(0 0 0 / 5%);padding: 50px; margin-bottom: 1rem;">
        <div class="bdpw-sf-welcome-inr bdpw-sf-center">
            <h5 class="bdpw-sf-content" style="font-size:24px;">Display customizable  <span class="bdpw-sf-blue">blog layouts, vertical scrolling blog widgets</span> in the most engaging and customized way</h5>
            <h5 class="bdpw-sf-content"  style="font-size:22px;">Experience <span class="bdpw-sf-blue">7 Layouts</span>, <span class="bdpw-sf-blue">70+ stunning designs</span>. </h5>
            <h5 class="bdpw-sf-content" style="font-size:20px;"><span class="bdpw-sf-blue">10,000+ </span>websites are using <span class="bdpw-sf-blue">Blog Designer</span>.</h5>
            <div style="margin-top: 15px; text-transform: uppercase; text-align:center;">
                <a href="<?php echo esc_url( $bdpw_add_link ); ?>" class="bdpw-sf-btn">Launch Blog Designer With Free Features</a>
            </div>
        </div>
    </div>
</div>