<?php
/**
 * The template for displaying the custom front page
 *
 * @package Laura_Cafe
 */

get_header();
?>

  <!-- Hero Section -->
  <section class="hero-section" id="home">
    <div class="hero-container">
      <div class="hero-content">
        <div class="hero-eyebrow">
          <span class="pill-badge"><?php _e('Slow Living · Artisanal Roastery', 'laura-cafe'); ?></span>
          <span class="est-tag"><?php _e('Est. 2021', 'laura-cafe'); ?></span>
        </div>
        <h1 class="hero-title"><?php _e('A quiet sanctuary for mindful coffee & gentle mornings.', 'laura-cafe'); ?></h1>
        <p class="hero-subtitle">
          <?php _e('Step inside our sun-drenched space where time slows down. We brew single-origin beans sourced with care, paired with fresh stone-ground pastries and warm linen ambiance.', 'laura-cafe'); ?>
        </p>

        <div class="hero-cta-group">
          <a href="#menu" class="btn btn-primary">
            <span><?php _e('Explore The Menu', 'laura-cafe'); ?></span>
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="arrow-icon">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
          <a href="#story" class="btn btn-text">
            <span><?php _e('Discover Our Craft', 'laura-cafe'); ?></span>
            <span class="line-grow"></span>
          </a>
        </div>

        <div class="hero-highlights">
          <div class="hero-stat">
            <span class="stat-number">100%</span>
            <span class="stat-label"><?php _e('Organic Micro-lots', 'laura-cafe'); ?></span>
          </div>
          <div class="stat-divider"></div>
          <div class="hero-stat">
            <span class="stat-number">48hr</span>
            <span class="stat-label"><?php _e('Slow Fermented Dough', 'laura-cafe'); ?></span>
          </div>
          <div class="stat-divider"></div>
          <div class="hero-stat">
            <span class="stat-number">Zero</span>
            <span class="stat-label"><?php _e('Artificial Additives', 'laura-cafe'); ?></span>
          </div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="image-frame-main">
          <img 
            src="https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?auto=format&fit=crop&w=1000&q=80" 
            alt="<?php esc_attr_e('Warm sunlit beige cafe with ceramic mugs and soft linen decor', 'laura-cafe'); ?>" 
            class="hero-img"
            loading="eager"
          />
          <div class="image-overlay-glow"></div>
        </div>

        <!-- Floating Info Cards -->
        <div class="floating-badge badge-top">
          <div class="badge-icon-box">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
              <line x1="6" y1="1" x2="6" y2="4"></line>
              <line x1="10" y1="1" x2="10" y2="4"></line>
              <line x1="14" y1="1" x2="14" y2="4"></line>
            </svg>
          </div>
          <div class="badge-text">
            <strong><?php _e('Today\'s Single Origin', 'laura-cafe'); ?></strong>
            <span><?php _e('Ethiopian Guji Natural · Notes of Apricot & Honey', 'laura-cafe'); ?></span>
          </div>
        </div>

        <div class="floating-badge badge-bottom">
          <span class="live-dot"></span>
          <div>
            <strong><?php _e('Open Now', 'laura-cafe'); ?></strong>
            <span><?php _e('Serving hot coffee & warm pastries', 'laura-cafe'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Philosophy / Pillars Strip -->
  <section class="pillars-section">
    <div class="container">
      <div class="pillars-grid">
        <div class="pillar-card">
          <span class="pillar-num">01</span>
          <h3 class="pillar-title"><?php _e('Mindful Roasting', 'laura-cafe'); ?></h3>
          <p class="pillar-desc"><?php _e('Light roast profiles that celebrate natural berry notes, floral aromas, and delicate acidity without harsh bitterness.', 'laura-cafe'); ?></p>
        </div>
        <div class="pillar-card">
          <span class="pillar-num">02</span>
          <h3 class="pillar-title"><?php _e('Artisan Ceramics', 'laura-cafe'); ?></h3>
          <p class="pillar-desc"><?php _e('Every beverage is poured into custom stoneware vessels handcrafted by local ceramists for tactile warmth.', 'laura-cafe'); ?></p>
        </div>
        <div class="pillar-card">
          <span class="pillar-num">03</span>
          <h3 class="pillar-title"><?php _e('Slow Sourdough Bakes', 'laura-cafe'); ?></h3>
          <p class="pillar-desc"><?php _e('Fermented for two days using unbleached heirloom flours, French cultured butter, and organic raw cane sugar.', 'laura-cafe'); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Story & Aesthetics Section -->
  <section class="story-section" id="story">
    <div class="container story-container">
      <div class="story-visuals">
        <div class="story-img-col main">
          <img 
            src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=800&q=80" 
            alt="<?php esc_attr_e('Minimalist cafe interior with warm wood and cream tones', 'laura-cafe'); ?>" 
            class="story-img primary"
            loading="lazy"
          />
        </div>
        <div class="story-img-col secondary">
          <img 
            src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=600&q=80" 
            alt="<?php esc_attr_e('Handcrafted ceramic latte art cup', 'laura-cafe'); ?>" 
            class="story-img detail"
            loading="lazy"
          />
          <div class="story-quote-card">
            <p><?php _e('"We created a sanctuary where coffee is not a rush, but an intentional pause in your day."', 'laura-cafe'); ?></p>
            <span class="quote-author"><?php _e('— Camille Laurent, Head Roaster', 'laura-cafe'); ?></span>
          </div>
        </div>
      </div>

      <div class="story-text-content">
        <span class="section-tag"><?php _e('Our Philosophy', 'laura-cafe'); ?></span>
        <h2 class="section-title"><?php _e('Rooted in natural textures, warm silence, and slow craftsmanship.', 'laura-cafe'); ?></h2>
        <p class="story-body">
          <?php _e('L\'AURA was born out of a desire for simplicity. In a city that moves at relentless speed, we designed an earthy, beige-toned haven inspired by Nordic minimalism and Japanese wabi-sabi.', 'laura-cafe'); ?>
        </p>
        <p class="story-body">
          <?php _e('We strip away the excess: no blaring screens, no harsh fluorescent lamps, only acoustic melodies, natural morning light, limewash walls, and the comforting hiss of our custom copper espresso machine.', 'laura-cafe'); ?>
        </p>
        
        <div class="story-signatures">
          <div class="signature-item">
            <div class="sig-icon">✦</div>
            <div>
              <h4><?php _e('Ethical Direct Trade', 'laura-cafe'); ?></h4>
              <p><?php _e('We work directly with smallholder coffee farms in Colombia, Kenya, and Guatemala.', 'laura-cafe'); ?></p>
            </div>
          </div>
          <div class="signature-item">
            <div class="sig-icon">✦</div>
            <div>
              <h4><?php _e('Oat & Almond Milks House-Pressed', 'laura-cafe'); ?></h4>
              <p><?php _e('Creamy organic nut milks crafted fresh every morning without preservatives.', 'laura-cafe'); ?></p>
            </div>
          </div>
        </div>

        <div class="story-action">
          <a href="#hours" class="btn btn-outline"><?php _e('Visit Our Haven', 'laura-cafe'); ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Interactive Coffee Origins & Tasting Notes Explorer -->
  <section class="origins-section" id="origins">
    <div class="container">
      <div class="origins-header">
        <span class="section-tag"><?php _e('Roaster\'s Tasting Lab', 'laura-cafe'); ?></span>
        <h2 class="section-title"><?php _e('Explore Our Current Single Origins', 'laura-cafe'); ?></h2>
        <p class="section-subtitle"><?php _e('Select an origin to preview its unique sensory profile and altitude characteristics.', 'laura-cafe'); ?></p>
      </div>

      <div class="origins-card-wrap">
        <div class="origin-nav">
          <button class="origin-nav-btn active" data-origin="ethiopia">
            <span>🇪🇹 <?php _e('Ethiopia Guji', 'laura-cafe'); ?></span>
            <small><?php _e('Natural · 2,100m', 'laura-cafe'); ?></small>
          </button>
          <button class="origin-nav-btn" data-origin="colombia">
            <span>🇨🇴 <?php _e('Colombia Huila', 'laura-cafe'); ?></span>
            <small><?php _e('Washed · 1,850m', 'laura-cafe'); ?></small>
          </button>
          <button class="origin-nav-btn" data-origin="guatemala">
            <span>🇬🇹 <?php _e('Guatemala Antigua', 'laura-cafe'); ?></span>
            <small><?php _e('Honey Process · 1,600m', 'laura-cafe'); ?></small>
          </button>
        </div>

        <div class="origin-display-panel" id="originPanel">
          <div class="origin-info-side">
            <span class="origin-varietal" id="originVarietal"><?php _e('Heirloom Typica Varietal · 2,100m', 'laura-cafe'); ?></span>
            <h3 class="origin-name" id="originName"><?php _e('Ethiopian Guji Natural', 'laura-cafe'); ?></h3>
            <p class="origin-desc" id="originDesc">
              <?php _e('Grown under native shade trees in the highland Guji zone. Sun-dried on raised African beds for 21 days, unlocking vibrant floral jasmine, dried apricot, and wildflower honey aromatics.', 'laura-cafe'); ?>
            </p>
            <div class="origin-tags" id="originTags">
              <span class="taste-tag">Jasmine</span>
              <span class="taste-tag">Bergamot</span>
              <span class="taste-tag">Apricot</span>
              <span class="taste-tag">Raw Honey</span>
            </div>
          </div>

          <div class="origin-metrics-side">
            <div class="metric-row">
              <div class="metric-label">
                <span><?php _e('Acidity (Crisp & Floral)', 'laura-cafe'); ?></span>
                <span class="metric-val" id="metricAcidity">90%</span>
              </div>
              <div class="metric-bar-bg"><div class="metric-bar-fill" id="barAcidity" style="width: 90%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-label">
                <span><?php _e('Sweetness (Honey & Stone Fruit)', 'laura-cafe'); ?></span>
                <span class="metric-val" id="metricSweetness">85%</span>
              </div>
              <div class="metric-bar-bg"><div class="metric-bar-fill" id="barSweetness" style="width: 85%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-label">
                <span><?php _e('Body (Silky & Light)', 'laura-cafe'); ?></span>
                <span class="metric-val" id="metricBody">55%</span>
              </div>
              <div class="metric-bar-bg"><div class="metric-bar-fill" id="barBody" style="width: 55%;"></div></div>
            </div>

            <div class="metric-row">
              <div class="metric-label">
                <span><?php _e('Floral Aroma', 'laura-cafe'); ?></span>
                <span class="metric-val" id="metricAroma">95%</span>
              </div>
              <div class="metric-bar-bg"><div class="metric-bar-fill" id="barAroma" style="width: 95%;"></div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Curated Menu Section -->
  <section class="menu-section" id="menu">
    <div class="container">
      <div class="menu-header">
        <span class="section-tag"><?php _e('Artisanal Offerings', 'laura-cafe'); ?></span>
        <h2 class="section-title"><?php _e('Thoughtfully Crafted Menu', 'laura-cafe'); ?></h2>
        <p class="section-subtitle"><?php _e('Prepared to order with whole ingredients, single origin beans, and gentle patience.', 'laura-cafe'); ?></p>

        <!-- Category Filter Tabs -->
        <div class="menu-tabs" role="tablist">
          <button class="tab-btn active" data-category="all" role="tab"><?php _e('All Selections', 'laura-cafe'); ?></button>
          <button class="tab-btn" data-category="coffee" role="tab"><?php _e('Single Origin & Espresso', 'laura-cafe'); ?></button>
          <button class="tab-btn" data-category="tea" role="tab"><?php _e('Tea & Botanical', 'laura-cafe'); ?></button>
          <button class="tab-btn" data-category="bakery" role="tab"><?php _e('Morning Bakery', 'laura-cafe'); ?></button>
          <button class="tab-btn" data-category="brunch" role="tab"><?php _e('Nourishing Plates', 'laura-cafe'); ?></button>
        </div>
      </div>

      <!-- Menu Grid -->
      <div class="menu-grid" id="menuGrid">
        
        <!-- Coffee Items -->
        <article class="menu-item-card" data-category="coffee">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">V60 Single Origin Pour Over</h3>
              <span class="item-badge"><?php _e('Signature', 'laura-cafe'); ?></span>
            </div>
            <span class="item-price">$6.50</span>
          </div>
          <p class="item-description"><?php _e('Ethiopian Yirgacheffe, slow dripped over ice or served hot. Notes of white peach, bergamot blossoms, and wildflower honey.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Single Origin', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Light Roast', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="c1" data-name="V60 Single Origin Pour Over" data-price="6.50" aria-label="<?php esc_attr_e('Add V60 to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="coffee">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Oat Milk Velvet Flat White</h3>
              <span class="item-badge"><?php _e('Favorite', 'laura-cafe'); ?></span>
            </div>
            <span class="item-price">$5.80</span>
          </div>
          <p class="item-description"><?php _e('Double ristretto shot extracted over micro-foamed house-steamed oat milk. Silky, nutty, with cocoa finish.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Vegan', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Organic Oat', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="c2" data-name="Oat Milk Velvet Flat White" data-price="5.80" aria-label="<?php esc_attr_e('Add Flat White to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="coffee">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Cardamom Spiced Cortado</h3>
            </div>
            <span class="item-price">$5.20</span>
          </div>
          <p class="item-description"><?php _e('Equal parts espresso and steamed whole milk infused with freshly cracked green cardamom pods and raw demerara sugar.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('House Specialty', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="c3" data-name="Cardamom Spiced Cortado" data-price="5.20" aria-label="<?php esc_attr_e('Add Cortado to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="coffee">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Slow Drip Cold Brew 18h</h3>
            </div>
            <span class="item-price">$6.00</span>
          </div>
          <p class="item-description"><?php _e('Steeped cold for eighteen hours with roasted chicory and Bourbon varietal coffee. Low acidity, chocolate-forward.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Zero Sugar', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Ice Sphere', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="c4" data-name="Slow Drip Cold Brew 18h" data-price="6.00" aria-label="<?php esc_attr_e('Add Cold Brew to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <!-- Tea & Matcha Items -->
        <article class="menu-item-card" data-category="tea">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Ceremonial Uji Matcha Latte</h3>
              <span class="item-badge"><?php _e('Organic', 'laura-cafe'); ?></span>
            </div>
            <span class="item-price">$6.80</span>
          </div>
          <p class="item-description"><?php _e('First-harvest stone ground tencha from Uji, Kyoto. Whisked traditionally with creamy warm oat milk and touch of maple.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Kyoto Direct', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Oat Milk', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="t1" data-name="Ceremonial Uji Matcha Latte" data-price="6.80" aria-label="<?php esc_attr_e('Add Matcha to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="tea">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Loomi & Lavender Infusion</h3>
            </div>
            <span class="item-price">$5.00</span>
          </div>
          <p class="item-description"><?php _e('Sun-dried wild lavender buds paired with Persian black lime and verbena leaves. Soothing, aromatic, caffeine-free.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Herbal', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Calming', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="t2" data-name="Loomi & Lavender Infusion" data-price="5.00" aria-label="<?php esc_attr_e('Add Tea to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <!-- Bakery Items -->
        <article class="menu-item-card" data-category="bakery">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Cardamom & Brown Butter Knot</h3>
              <span class="item-badge"><?php _e('Fresh Daily', 'laura-cafe'); ?></span>
            </div>
            <span class="item-price">$4.80</span>
          </div>
          <p class="item-description"><?php _e('Swedish style kanelbulle twisted with toasted cardamom seeds, browned Normandy butter, and coarse pearl sugar.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Slow Dough', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('6 AM Bake', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="b1" data-name="Cardamom & Brown Butter Knot" data-price="4.80" aria-label="<?php esc_attr_e('Add Cardamom Knot to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="bakery">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Almond Frangipane Brioche</h3>
            </div>
            <span class="item-price">$5.20</span>
          </div>
          <p class="item-description"><?php _e('Twice-baked rich brioche filled with creamy almond custard, perfumed with orange blossom water and toasted flakes.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Classic French', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="b2" data-name="Almond Frangipane Brioche" data-price="5.20" aria-label="<?php esc_attr_e('Add Brioche to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <!-- Nourishing Plates Items -->
        <article class="menu-item-card" data-category="brunch">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Sourdough Avocado & Fermented Chili</h3>
              <span class="item-badge"><?php _e('Bestseller', 'laura-cafe'); ?></span>
            </div>
            <span class="item-price">$12.50</span>
          </div>
          <p class="item-description"><?php _e('Toasted heirloom country sourdough, smashed Hass avocado, house fermented chili oil, micro radish greens, and smoked sea salt.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Plant Based', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Country Loaf', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="p1" data-name="Sourdough Avocado & Fermented Chili" data-price="12.50" aria-label="<?php esc_attr_e('Add Avocado Toast to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

        <article class="menu-item-card" data-category="brunch">
          <div class="item-header">
            <div class="item-title-wrap">
              <h3 class="item-title">Whipped Ricotta & Figs on Brioche</h3>
            </div>
            <span class="item-price">$13.00</span>
          </div>
          <p class="item-description"><?php _e('Sheep’s milk ricotta whipped with thyme honey, fresh black mission figs, crushed pistachios, and balsamic drizzle.', 'laura-cafe'); ?></p>
          <div class="item-bottom-action">
            <div class="item-footer">
              <span class="diet-tag"><?php _e('Vegetarian', 'laura-cafe'); ?></span>
              <span class="diet-tag"><?php _e('Seasonal', 'laura-cafe'); ?></span>
            </div>
            <button class="btn-add-item" data-id="p2" data-name="Whipped Ricotta & Figs" data-price="13.00" aria-label="<?php esc_attr_e('Add Ricotta Brioche to order', 'laura-cafe'); ?>">
              <span>+ <?php _e('Add to Bag', 'laura-cafe'); ?></span>
            </button>
          </div>
        </article>

      </div>

      <div class="menu-note">
        <p><?php _e('✦ All coffees are available decaffeinated using pure mountain water extraction. Alternative milks (Oat, House Almond) served at no extra charge.', 'laura-cafe'); ?></p>
      </div>
    </div>
  </section>

  <!-- Visual Ambiance / Gallery -->
  <section class="ambiance-section" id="ambiance">
    <div class="container">
      <div class="ambiance-header">
        <span class="section-tag"><?php _e('Visual Poetry', 'laura-cafe'); ?></span>
        <h2 class="section-title"><?php _e('Quiet Moments in Cream & Clay', 'laura-cafe'); ?></h2>
        <p class="section-subtitle"><?php _e('Take a glimpse into our sun-warmed atelier, our craft, and peaceful mornings.', 'laura-cafe'); ?></p>
      </div>

      <div class="gallery-grid">
        <div class="gallery-item item-large">
          <img 
            src="https://images.unsplash.com/photo-1554118811-1e0d58224f24?auto=format&fit=crop&w=1000&q=80" 
            alt="<?php esc_attr_e('Warm sunlit beige cafe seating with oak chairs and linen', 'laura-cafe'); ?>"
            loading="lazy"
          />
          <div class="gallery-caption">
            <span><?php _e('Morning Sun at Table 04', 'laura-cafe'); ?></span>
          </div>
        </div>

        <div class="gallery-item">
          <img 
            src="https://images.unsplash.com/photo-1514432324607-a09d9b4aefdd?auto=format&fit=crop&w=700&q=80" 
            alt="<?php esc_attr_e('Hand-poured flat white in rustic stoneware', 'laura-cafe'); ?>"
            loading="lazy"
          />
          <div class="gallery-caption">
            <span><?php _e('Stoneware Flat White', 'laura-cafe'); ?></span>
          </div>
        </div>

        <div class="gallery-item">
          <img 
            src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=700&q=80" 
            alt="<?php esc_attr_e('Golden flaky croissants on stone plate', 'laura-cafe'); ?>"
            loading="lazy"
          />
          <div class="gallery-caption">
            <span><?php _e('Morning Bakes at 7:00 AM', 'laura-cafe'); ?></span>
          </div>
        </div>

        <div class="gallery-item">
          <img 
            src="https://images.unsplash.com/photo-1536256263959-770b48d82b0a?auto=format&fit=crop&w=700&q=80" 
            alt="<?php esc_attr_e('Whisking organic matcha in traditional chawan', 'laura-cafe'); ?>"
            loading="lazy"
          />
          <div class="gallery-caption">
            <span><?php _e('Ceremonial Uji Matcha', 'laura-cafe'); ?></span>
          </div>
        </div>

        <div class="gallery-item item-wide">
          <img 
            src="https://images.unsplash.com/photo-1447933601403-0c6688de566e?auto=format&fit=crop&w=1000&q=80" 
            alt="<?php esc_attr_e('Freshly roasted specialty coffee beans', 'laura-cafe'); ?>"
            loading="lazy"
          />
          <div class="gallery-caption">
            <span><?php _e('Small-Batch Roast Lab', 'laura-cafe'); ?></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Editorial Spotlight / Seasonal Special -->
  <section class="spotlight-section">
    <div class="container">
      <div class="spotlight-card">
        <div class="spotlight-badge"><?php _e('Special Feature of the Month', 'laura-cafe'); ?></div>
        <h2 class="spotlight-title"><?php _e('Toasted Hazelnut & Orange Blossom Cortado', 'laura-cafe'); ?></h2>
        <p class="spotlight-text">
          <?php _e('A bespoke seasonal creation featuring roasted Piedmont hazelnuts infused with organic clover honey, a drop of orange blossom hydrosol, and our Colombian single estate espresso. Served alongside an artisanal sable biscuit.', 'laura-cafe'); ?>
        </p>
        <div class="spotlight-details">
          <div class="spotlight-meta">
            <span class="meta-label"><?php _e('Origin', 'laura-cafe'); ?></span>
            <span class="meta-val">Huila, Colombia (1,850m)</span>
          </div>
          <div class="spotlight-meta">
            <span class="meta-label"><?php _e('Tasting Notes', 'laura-cafe'); ?></span>
            <span class="meta-val">Praline, Clementine, Brown Butter</span>
          </div>
          <div class="spotlight-meta">
            <span class="meta-label"><?php _e('Available Until', 'laura-cafe'); ?></span>
            <span class="meta-val"><?php _e('End of Season', 'laura-cafe'); ?></span>
          </div>
        </div>
        <div class="spotlight-action">
          <button class="btn btn-primary btn-add-item" data-id="feat1" data-name="Toasted Hazelnut & Orange Blossom Cortado" data-price="6.20">
            <span><?php _e('Add Featured Special to Bag ($6.20)', 'laura-cafe'); ?></span>
          </button>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials / Guest Reflections -->
  <section class="testimonials-section">
    <div class="container">
      <div class="testimonials-inner">
        <span class="section-tag"><?php _e('Guest Reflections', 'laura-cafe'); ?></span>
        <blockquote class="featured-quote">
          <?php _e('"L\'AURA is not just a cafe; it is a gentle breathing room. The warm beige limewash, the quiet hum of jazz, and the precision in every pour make it our daily sanctuary."', 'laura-cafe'); ?>
        </blockquote>
        <div class="quote-cite">
          <strong><?php _e('The Architectural Digest Review', 'laura-cafe'); ?></strong>
          <span><?php _e('Selected in Best Minimalist Coffee Houses 2025', 'laura-cafe'); ?></span>
        </div>
      </div>
    </div>
  </section>

  <!-- Visit, Hours & Location Section -->
  <section class="visit-section" id="hours">
    <div class="container">
      <div class="visit-grid">
        <!-- Info Column -->
        <div class="visit-info">
          <span class="section-tag"><?php _e('Find Us', 'laura-cafe'); ?></span>
          <h2 class="section-title"><?php _e('Warm doors open every sunrise.', 'laura-cafe'); ?></h2>
          <p class="visit-desc">
            <?php _e('We are nestled on a quiet tree-lined cobblestone corner in the Arts Quarter. Walk-ins are always welcomed with warmth.', 'laura-cafe'); ?>
          </p>

          <div class="info-blocks">
            <div class="info-block">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
              </div>
              <div>
                <h4><?php _e('Opening Hours', 'laura-cafe'); ?></h4>
                <div class="hours-row">
                  <span><?php _e('Monday — Friday', 'laura-cafe'); ?></span>
                  <span class="hours-time"><?php echo esc_html(get_theme_mod('laura_hours_weekday', '7:30 AM — 6:30 PM')); ?></span>
                </div>
                <div class="hours-row">
                  <span><?php _e('Saturday — Sunday', 'laura-cafe'); ?></span>
                  <span class="hours-time"><?php echo esc_html(get_theme_mod('laura_hours_weekend', '8:00 AM — 7:00 PM')); ?></span>
                </div>
                <span class="hours-sub"><?php _e('* Kitchen serves warm brunch until 3:00 PM daily', 'laura-cafe'); ?></span>
              </div>
            </div>

            <div class="info-block">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                  <circle cx="12" cy="10" r="3"></circle>
                </svg>
              </div>
              <div>
                <h4><?php _e('Atelier Address', 'laura-cafe'); ?></h4>
                <p><?php echo esc_html(get_theme_mod('laura_address', '148 Linen Way, Atelier Quarter, Downtown')); ?></p>
                <p class="address-note"><?php _e('A two-minute stroll from St. Jude Garden Fountain', 'laura-cafe'); ?></p>
              </div>
            </div>

            <div class="info-block">
              <div class="info-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                  <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                  <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
              </div>
              <div>
                <h4><?php _e('Contact & Roastery Inquiries', 'laura-cafe'); ?></h4>
                <p><?php echo esc_html(get_theme_mod('laura_email', 'bonjour@lauracafe.com')); ?> · <?php echo esc_html(get_theme_mod('laura_phone', '(555) 234-8901')); ?></p>
                <p class="address-note"><?php _e('Wholesale & event bookings welcome', 'laura-cafe'); ?></p>
              </div>
            </div>
          </div>

          <div class="visit-cta">
            <button class="btn btn-primary" id="openReserveBtn2"><?php _e('Book Table Online', 'laura-cafe'); ?></button>
            <a href="https://maps.google.com" target="_blank" rel="noopener" class="btn btn-outline"><?php _e('Get Directions', 'laura-cafe'); ?></a>
          </div>
        </div>

        <!-- Visual Map Card Column -->
        <div class="visit-map-card">
          <div class="map-aesthetic-preview">
            <div class="map-artistic-base">
              <div class="map-grid-lines"></div>
              <div class="map-pin-pulse">
                <div class="pulse-ring"></div>
                <div class="pin-marker">
                  <span>☕</span>
                </div>
              </div>
              <div class="map-overlay-label">
                <strong><?php bloginfo('name') ? bloginfo('name') : 'L\'AURA CAFÉ'; ?></strong>
                <span><?php _e('148 Linen Way · Corner Haven', 'laura-cafe'); ?></span>
              </div>
            </div>
            
            <div class="amenities-list">
              <div class="amenity-item">
                <span class="amenity-icon">✓</span>
                <span><?php _e('Specialty Oat & Almond Milk', 'laura-cafe'); ?></span>
              </div>
              <div class="amenity-item">
                <span class="amenity-icon">✓</span>
                <span><?php _e('Sunlit Outdoor Linen Terrace', 'laura-cafe'); ?></span>
              </div>
              <div class="amenity-item">
                <span class="amenity-icon">✓</span>
                <span><?php _e('High-Speed Fiber Wi-Fi (Quiet Hours apply)', 'laura-cafe'); ?></span>
              </div>
              <div class="amenity-item">
                <span class="amenity-icon">✓</span>
                <span><?php _e('Pet & Pup Friendly Patio', 'laura-cafe'); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Newsletter / The Morning Letter -->
  <section class="newsletter-section">
    <div class="container">
      <div class="newsletter-box">
        <span class="section-tag"><?php _e('The Morning Letter', 'laura-cafe'); ?></span>
        <h2 class="newsletter-title"><?php _e('Subscribe to our Sunday coffee reflections.', 'laura-cafe'); ?></h2>
        <p class="newsletter-desc">
          <?php _e('No spam, never noisy. Every alternate Sunday we send seasonal bean arrivals, secret pastry recipes from our bakehouse, and slow morning playlists.', 'laura-cafe'); ?>
        </p>

        <form class="newsletter-form" id="newsletterForm">
          <div class="form-group-inline">
            <input 
              type="email" 
              placeholder="<?php esc_attr_e('Your peaceful email address...', 'laura-cafe'); ?>" 
              required 
              class="newsletter-input" 
              id="newsletterEmail"
            />
            <button type="submit" class="btn btn-primary"><?php _e('Join Circle', 'laura-cafe'); ?></button>
          </div>
          <div class="form-feedback" id="newsletterFeedback"></div>
        </form>
      </div>
    </div>
  </section>

<?php
get_footer();

