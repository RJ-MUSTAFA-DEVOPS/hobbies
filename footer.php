<?php
/**
 * The template for displaying the footer
 *
 * @package Laura_Cafe
 */
?>
  <!-- Minimalist Aesthetic Footer -->
  <footer class="site-footer">
    <div class="container footer-container">
      <div class="footer-col brand-col">
        <div class="brand-logo footer-logo">
          <span class="logo-serif"><?php bloginfo('name') ? bloginfo('name') : 'L\'AURA'; ?></span>
          <span class="logo-sub"><?php bloginfo('description') ? bloginfo('description') : 'CAFÉ & ROASTERY'; ?></span>
        </div>
        <p class="footer-tagline">
          <?php _e('Pouring with intention, baking with whole grains, and celebrating the art of slow living.', 'laura-cafe'); ?>
        </p>
        <div class="social-links">
          <a href="#" aria-label="Instagram" class="social-link">Instagram</a>
          <span class="social-sep">·</span>
          <a href="#" aria-label="Pinterest" class="social-link">Pinterest</a>
          <span class="social-sep">·</span>
          <a href="#" aria-label="Spotify" class="social-link">Spotify Playlist</a>
        </div>
      </div>

      <div class="footer-col links-col">
        <h4 class="footer-heading"><?php _e('Navigation', 'laura-cafe'); ?></h4>
        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class'     => 'footer-links',
            'container'      => false,
            'fallback_cb'    => 'laura_cafe_footer_nav_fallback',
        ));
        ?>
      </div>

      <div class="footer-col hours-col">
        <h4 class="footer-heading"><?php _e('Visit Us', 'laura-cafe'); ?></h4>
        <p class="footer-info"><?php echo esc_html(get_theme_mod('laura_address', '148 Linen Way, Atelier Quarter')); ?></p>
        <p class="footer-info"><?php printf(__('Open Mon-Fri: %s', 'laura-cafe'), esc_html(get_theme_mod('laura_hours_weekday', '7:30 AM — 6:30 PM'))); ?></p>
        <p class="footer-info"><?php echo esc_html(get_theme_mod('laura_email', 'hello@lauracafe.com')); ?></p>
        <p class="footer-info"><?php echo esc_html(get_theme_mod('laura_phone', '+1 (555) 234-8901')); ?></p>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container footer-bottom-inner">
        <p class="copyright">
          &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('All rights reserved. Handcrafted with beige aesthetic & warmth.', 'laura-cafe'); ?>
        </p>
        <div class="footer-legal">
          <a href="#"><?php _e('Privacy', 'laura-cafe'); ?></a>
          <a href="#"><?php _e('Terms', 'laura-cafe'); ?></a>
          <a href="#"><?php _e('Accessibility', 'laura-cafe'); ?></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Slide-out Order Bag Drawer -->
  <div class="drawer-backdrop" id="bagDrawerBackdrop" aria-hidden="true"></div>
  <aside class="bag-drawer" id="bagDrawer" aria-label="<?php esc_attr_e('Your Coffee Bag', 'laura-cafe'); ?>">
    <div class="bag-drawer-header">
      <div>
        <span class="drawer-eyebrow"><?php _e('Your Takeout Order', 'laura-cafe'); ?></span>
        <h3 class="drawer-title"><?php _e('Selected Bakes & Brews', 'laura-cafe'); ?></h3>
      </div>
      <button class="drawer-close-btn" id="closeBagBtn" aria-label="<?php esc_attr_e('Close bag', 'laura-cafe'); ?>">&times;</button>
    </div>

    <div class="bag-drawer-body" id="bagDrawerBody">
      <div class="empty-bag-state" id="emptyBagState">
        <div class="empty-icon">☕</div>
        <p class="empty-title"><?php _e('Your order bag is peaceful and empty.', 'laura-cafe'); ?></p>
        <p class="empty-sub"><?php _e('Choose a hand-poured coffee or morning pastry from our menu to get started.', 'laura-cafe'); ?></p>
      </div>
      <div class="bag-items-list" id="bagItemsList"></div>
    </div>

    <div class="bag-drawer-footer" id="bagDrawerFooter" style="display: none;">
      <div class="bag-summary-row">
        <span><?php _e('Estimated Prep Time:', 'laura-cafe'); ?></span>
        <strong>~10 - 15 mins</strong>
      </div>
      <div class="bag-total-row">
        <span><?php _e('Total:', 'laura-cafe'); ?></span>
        <span class="bag-total-amount" id="bagTotalAmount">$0.00</span>
      </div>
      <button class="btn btn-primary btn-block" id="checkoutBtn"><?php _e('Send Order for Pickup &rarr;', 'laura-cafe'); ?></button>
    </div>
  </aside>

  <!-- Modal: Table Reservation -->
  <div class="modal-backdrop" id="reserveModal" aria-hidden="true" role="dialog">
    <div class="modal-dialog">
      <div class="modal-header">
        <div>
          <span class="modal-tag"><?php _e('Table Reservation', 'laura-cafe'); ?></span>
          <h3 class="modal-title"><?php _e('Reserve a Quiet Corner', 'laura-cafe'); ?></h3>
        </div>
        <button class="modal-close" id="closeModalBtn" aria-label="<?php esc_attr_e('Close dialog', 'laura-cafe'); ?>">&times;</button>
      </div>

      <form class="reservation-form" id="reservationForm">
        <div class="form-row">
          <div class="form-group">
            <label for="resName"><?php _e('Full Name', 'laura-cafe'); ?></label>
            <input type="text" id="resName" name="name" placeholder="e.g. Eleanor Vance" required>
          </div>
          <div class="form-group">
            <label for="resEmail"><?php _e('Email Address', 'laura-cafe'); ?></label>
            <input type="email" id="resEmail" name="email" placeholder="eleanor@domain.com" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="resDate"><?php _e('Preferred Date', 'laura-cafe'); ?></label>
            <input type="date" id="resDate" name="date" required>
          </div>
          <div class="form-group">
            <label for="resTime"><?php _e('Preferred Time', 'laura-cafe'); ?></label>
            <select id="resTime" name="time" required>
              <option value="" disabled selected><?php _e('Select a quiet hour', 'laura-cafe'); ?></option>
              <option value="08:00 AM">08:00 AM (Quiet Morning)</option>
              <option value="09:30 AM">09:30 AM (Morning Brew)</option>
              <option value="11:00 AM">11:00 AM (Brunch Time)</option>
              <option value="01:30 PM">01:30 PM (Sunlit Afternoon)</option>
              <option value="03:30 PM">03:30 PM (Tea & Pastry)</option>
              <option value="05:00 PM">05:00 PM (Sunset Golden Hour)</option>
            </select>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label for="resGuests"><?php _e('Number of Guests', 'laura-cafe'); ?></label>
            <select id="resGuests" name="guests" required>
              <option value="1">1 Person (Quiet Reading / Work)</option>
              <option value="2" selected>2 Guests (Intimate Table)</option>
              <option value="3">3 Guests</option>
              <option value="4">4 Guests</option>
              <option value="5+">5+ Guests (Garden Table)</option>
            </select>
          </div>
          <div class="form-group">
            <label for="resSeating"><?php _e('Seating Preference', 'laura-cafe'); ?></label>
            <select id="resSeating" name="seating">
              <option value="Window">Sunlit Window Nook</option>
              <option value="Terrace">Linen Patio Terrace</option>
              <option value="Bar">Barista Brew Bar</option>
              <option value="Any" selected>First Available Cozy Table</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="resNotes"><?php _e('Special Notes or Dietary Wishes (Optional)', 'laura-cafe'); ?></label>
          <textarea id="resNotes" name="notes" rows="2" placeholder="e.g. Oat milk preferred, celebratory birthday, quiet corner..."></textarea>
        </div>

        <div class="form-footer">
          <button type="submit" class="btn btn-primary btn-block"><?php _e('Confirm Reservation', 'laura-cafe'); ?></button>
        </div>
      </form>

      <!-- Reservation Confirmation State -->
      <div class="reservation-success" id="reserveSuccess" style="display: none;">
        <div class="success-icon">☕</div>
        <h3 class="success-title"><?php _e('Your Table is Saved', 'laura-cafe'); ?></h3>
        <p class="success-text" id="successDetailText">
          <?php _e('We have reserved a quiet spot for you. A gentle confirmation has been sent to your email.', 'laura-cafe'); ?>
        </p>
        <button class="btn btn-outline" id="resetModalBtn"><?php _e('Make Another Booking', 'laura-cafe'); ?></button>
      </div>
    </div>
  </div>

  <!-- Toast Notification Pill -->
  <div class="toast-notice" id="toastNotice" role="status" aria-live="polite"></div>

  <?php wp_footer(); ?>
</body>
</html>

