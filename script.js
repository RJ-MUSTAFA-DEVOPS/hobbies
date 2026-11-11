/**
 * L'AURA CAFÉ — WordPress Theme Main JavaScript
 */

document.addEventListener('DOMContentLoaded', () => {

  // ==========================================================================
  // 1. Theme Mood Toggle (Daylight Linen / Candlelight Evening)
  // ==========================================================================
  const themeToggle = document.getElementById('themeToggle');
  const themeSymbol = document.getElementById('themeSymbol');
  const themeText = document.getElementById('themeText');
  const rootHtml = document.documentElement;

  // Retrieve saved preference or default to Daylight
  const savedTheme = localStorage.getItem('laura_cafe_theme') || 'daylight';
  if (savedTheme === 'candlelight') {
    rootHtml.setAttribute('data-theme', 'candlelight');
    if (themeSymbol) themeSymbol.textContent = '☼';
    if (themeText) themeText.textContent = 'Daylight';
  }

  if (themeToggle) {
    themeToggle.addEventListener('click', () => {
      const currentTheme = rootHtml.getAttribute('data-theme');
      if (currentTheme === 'candlelight') {
        rootHtml.removeAttribute('data-theme');
        localStorage.setItem('laura_cafe_theme', 'daylight');
        if (themeSymbol) themeSymbol.textContent = '☾';
        if (themeText) themeText.textContent = 'Candlelight';
        showToast('Switched to Daylight Linen Mood');
      } else {
        rootHtml.setAttribute('data-theme', 'candlelight');
        localStorage.setItem('laura_cafe_theme', 'candlelight');
        if (themeSymbol) themeSymbol.textContent = '☼';
        if (themeText) themeText.textContent = 'Daylight';
        showToast('Switched to Candlelight Evening Mood');
      }
    });
  }

  // ==========================================================================
  // 2. Sticky Header Elevation
  // ==========================================================================
  const header = document.getElementById('navbar');
  const checkHeaderScroll = () => {
    if (header) {
      if (window.scrollY > 30) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }
  };
  window.addEventListener('scroll', checkHeaderScroll, { passive: true });
  checkHeaderScroll();

  // ==========================================================================
  // 3. Mobile Navigation Drawer
  // ==========================================================================
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileDrawer = document.getElementById('mobileDrawer');
  const mobileLinks = document.querySelectorAll('.mobile-link');

  if (mobileToggle && mobileDrawer) {
    mobileToggle.addEventListener('click', () => {
      mobileToggle.classList.toggle('active');
      mobileDrawer.classList.toggle('open');
    });

    mobileLinks.forEach(link => {
      link.addEventListener('click', () => {
        mobileToggle.classList.remove('active');
        mobileDrawer.classList.remove('open');
      });
    });
  }

  // ==========================================================================
  // 4. Coffee Origins & Tasting Notes Switcher
  // ==========================================================================
  const originData = {
    ethiopia: {
      name: "Ethiopian Guji Natural",
      varietal: "Heirloom Typica Varietal · 2,100m",
      desc: "Grown under native shade trees in the highland Guji zone. Sun-dried on raised African beds for 21 days, unlocking vibrant floral jasmine, dried apricot, and wildflower honey aromatics.",
      tags: ["Jasmine", "Bergamot", "Apricot", "Raw Honey"],
      metrics: { acidity: "90%", sweetness: "85%", body: "55%", aroma: "95%" }
    },
    colombia: {
      name: "Colombian Huila San Agustin",
      varietal: "Castillo & Caturra · 1,850m",
      desc: "Handpicked by smallholder growers in Southern Huila. Fully washed and fermented in cold spring water, offering a velvety caramel sweetness, red apple brightness, and praline finish.",
      tags: ["Red Apple", "Dulce de Leche", "Praline", "Orange Peel"],
      metrics: { acidity: "70%", sweetness: "92%", body: "75%", aroma: "82%" }
    },
    guatemala: {
      name: "Guatemalan Antigua Honey",
      varietal: "Bourbon & Typica · 1,600m",
      desc: "Cultivated in volcanic pumice soils beneath volcanoes Agua and Fuego. Yellow-honey processed with mucilage intact, delivering spiced plum, dark chocolate, and toasted almond warmth.",
      tags: ["Dark Chocolate", "Spiced Plum", "Toasted Almond", "Nutmeg"],
      metrics: { acidity: "60%", sweetness: "88%", body: "85%", aroma: "78%" }
    }
  };

  const originBtns = document.querySelectorAll('.origin-nav-btn');
  const originName = document.getElementById('originName');
  const originVarietal = document.getElementById('originVarietal');
  const originDesc = document.getElementById('originDesc');
  const originTags = document.getElementById('originTags');
  const metricAcidity = document.getElementById('metricAcidity');
  const barAcidity = document.getElementById('barAcidity');
  const metricSweetness = document.getElementById('metricSweetness');
  const barSweetness = document.getElementById('barSweetness');
  const metricBody = document.getElementById('metricBody');
  const barBody = document.getElementById('barBody');
  const metricAroma = document.getElementById('metricAroma');
  const barAroma = document.getElementById('barAroma');

  originBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      originBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const originKey = btn.getAttribute('data-origin');
      const data = originData[originKey];

      if (data && originName) {
        originName.textContent = data.name;
        originVarietal.textContent = data.varietal;
        originDesc.textContent = data.desc;

        if (originTags) {
          originTags.innerHTML = data.tags.map(t => `<span class="taste-tag">${t}</span>`).join('');
        }

        if (metricAcidity) metricAcidity.textContent = data.metrics.acidity;
        if (barAcidity) barAcidity.style.width = data.metrics.acidity;

        if (metricSweetness) metricSweetness.textContent = data.metrics.sweetness;
        if (barSweetness) barSweetness.style.width = data.metrics.sweetness;

        if (metricBody) metricBody.textContent = data.metrics.body;
        if (barBody) barBody.style.width = data.metrics.body;

        if (metricAroma) metricAroma.textContent = data.metrics.aroma;
        if (barAroma) barAroma.style.width = data.metrics.aroma;
      }
    });
  });

  // ==========================================================================
  // 5. Menu Category Filter Tabs
  // ==========================================================================
  const tabButtons = document.querySelectorAll('.tab-btn');
  const menuCards = document.querySelectorAll('.menu-item-card');

  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      tabButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');

      const filterCategory = button.getAttribute('data-category');

      menuCards.forEach(card => {
        const itemCategory = card.getAttribute('data-category');

        if (filterCategory === 'all' || itemCategory === filterCategory) {
          card.classList.remove('hidden');
          card.style.opacity = '0';
          card.style.transform = 'translateY(12px)';
          setTimeout(() => {
            card.style.transition = 'opacity 0.35s ease, transform 0.35s ease';
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 30);
        } else {
          card.classList.add('hidden');
        }
      });
    });
  });

  // ==========================================================================
  // 6. Interactive Takeout Order Bag
  // ==========================================================================
  let bagItems = [];
  const openBagBtn = document.getElementById('openBagBtn');
  const closeBagBtn = document.getElementById('closeBagBtn');
  const bagDrawer = document.getElementById('bagDrawer');
  const bagDrawerBackdrop = document.getElementById('bagDrawerBackdrop');
  const bagCount = document.getElementById('bagCount');
  const emptyBagState = document.getElementById('emptyBagState');
  const bagItemsList = document.getElementById('bagItemsList');
  const bagDrawerFooter = document.getElementById('bagDrawerFooter');
  const bagTotalAmount = document.getElementById('bagTotalAmount');
  const checkoutBtn = document.getElementById('checkoutBtn');

  const updateBagUI = () => {
    const totalCount = bagItems.reduce((acc, item) => acc + item.qty, 0);
    if (bagCount) bagCount.textContent = totalCount;

    if (bagItems.length === 0) {
      if (emptyBagState) emptyBagState.style.display = 'block';
      if (bagItemsList) bagItemsList.innerHTML = '';
      if (bagDrawerFooter) bagDrawerFooter.style.display = 'none';
    } else {
      if (emptyBagState) emptyBagState.style.display = 'none';
      if (bagDrawerFooter) bagDrawerFooter.style.display = 'block';

      let total = 0;
      if (bagItemsList) {
        bagItemsList.innerHTML = bagItems.map((item, index) => {
          const itemSubtotal = item.price * item.qty;
          total += itemSubtotal;
          return `
            <div class="bag-item-row">
              <div class="bag-item-info">
                <strong>${item.name}</strong>
                <span>$${itemSubtotal.toFixed(2)}</span>
              </div>
              <div class="bag-item-controls">
                <button class="bag-ctrl-btn dec-btn" data-index="${index}" aria-label="Decrease quantity">&minus;</button>
                <span class="bag-item-qty">${item.qty}</span>
                <button class="bag-ctrl-btn inc-btn" data-index="${index}" aria-label="Increase quantity">&plus;</button>
              </div>
            </div>
          `;
        }).join('');

        // Attach quantity buttons
        document.querySelectorAll('.dec-btn').forEach(btn => {
          btn.addEventListener('click', (e) => {
            const idx = parseInt(e.currentTarget.getAttribute('data-index'), 10);
            if (bagItems[idx].qty > 1) {
              bagItems[idx].qty -= 1;
            } else {
              bagItems.splice(idx, 1);
            }
            updateBagUI();
          });
        });

        document.querySelectorAll('.inc-btn').forEach(btn => {
          btn.addEventListener('click', (e) => {
            const idx = parseInt(e.currentTarget.getAttribute('data-index'), 10);
            bagItems[idx].qty += 1;
            updateBagUI();
          });
        });
      }

      if (bagTotalAmount) bagTotalAmount.textContent = `$${total.toFixed(2)}`;
    }
  };

  const openBag = () => {
    if (bagDrawer && bagDrawerBackdrop) {
      bagDrawer.classList.add('active');
      bagDrawerBackdrop.classList.add('active');
      document.body.style.overflow = 'hidden';
    }
  };

  const closeBag = () => {
    if (bagDrawer && bagDrawerBackdrop) {
      bagDrawer.classList.remove('active');
      bagDrawerBackdrop.classList.remove('active');
      document.body.style.overflow = '';
    }
  };

  if (openBagBtn) openBagBtn.addEventListener('click', openBag);
  if (closeBagBtn) closeBagBtn.addEventListener('click', closeBag);
  if (bagDrawerBackdrop) bagDrawerBackdrop.addEventListener('click', closeBag);

  // Add items from menu
  document.querySelectorAll('.btn-add-item').forEach(button => {
    button.addEventListener('click', () => {
      const id = button.getAttribute('data-id');
      const name = button.getAttribute('data-name');
      const price = parseFloat(button.getAttribute('data-price') || '0');

      const existingIndex = bagItems.findIndex(i => i.id === id);
      if (existingIndex > -1) {
        bagItems[existingIndex].qty += 1;
      } else {
        bagItems.push({ id, name, price, qty: 1 });
      }

      updateBagUI();
      showToast(`Added "${name}" to your bag`);
    });
  });

  // Checkout button simulation
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', () => {
      showToast('Order received! Baristas preparing your brew for pickup (~12m).');
      bagItems = [];
      updateBagUI();
      setTimeout(closeBag, 1200);
    });
  }

  // ==========================================================================
  // 7. Table Reservation Modal
  // ==========================================================================
  const reserveModal = document.getElementById('reserveModal');
  const openReserveBtn = document.getElementById('openReserveBtn');
  const openReserveBtn2 = document.getElementById('openReserveBtn2');
  const mobileReserveBtn = document.getElementById('mobileReserveBtn');
  const closeModalBtn = document.getElementById('closeModalBtn');
  const reservationForm = document.getElementById('reservationForm');
  const reserveSuccess = document.getElementById('reserveSuccess');
  const successDetailText = document.getElementById('successDetailText');
  const resetModalBtn = document.getElementById('resetModalBtn');
  const resDateInput = document.getElementById('resDate');

  if (resDateInput) {
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    const yyyy = tomorrow.getFullYear();
    const mm = String(tomorrow.getMonth() + 1).padStart(2, '0');
    const dd = String(tomorrow.getDate()).padStart(2, '0');
    resDateInput.min = `${yyyy}-${mm}-${dd}`;
    resDateInput.value = `${yyyy}-${mm}-${dd}`;
  }

  const openReservationModal = () => {
    if (reserveModal) {
      reserveModal.classList.add('active');
      reserveModal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      if (mobileToggle && mobileDrawer) {
        mobileToggle.classList.remove('active');
        mobileDrawer.classList.remove('open');
      }
    }
  };

  const closeReservationModal = () => {
    if (reserveModal) {
      reserveModal.classList.remove('active');
      reserveModal.setAttribute('aria-hidden', 'true');
      document.body.style.overflow = '';
    }
  };

  if (openReserveBtn) openReserveBtn.addEventListener('click', openReservationModal);
  if (openReserveBtn2) openReserveBtn2.addEventListener('click', openReservationModal);
  if (mobileReserveBtn) mobileReserveBtn.addEventListener('click', openReservationModal);
  if (closeModalBtn) closeModalBtn.addEventListener('click', closeReservationModal);

  if (reserveModal) {
    reserveModal.addEventListener('click', (e) => {
      if (e.target === reserveModal) closeReservationModal();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') {
        if (reserveModal.classList.contains('active')) closeReservationModal();
        if (bagDrawer && bagDrawer.classList.contains('active')) closeBag();
      }
    });
  }

  if (reservationForm) {
    reservationForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const name = document.getElementById('resName').value.trim();
      const guests = document.getElementById('resGuests').value;
      const date = document.getElementById('resDate').value;
      const time = document.getElementById('resTime').value;
      const seating = document.getElementById('resSeating').value;

      if (successDetailText) {
        successDetailText.innerHTML = `
          Thank you, <strong>${name}</strong>. We have set aside an intimate table for <strong>${guests} ${guests === '1' ? 'guest' : 'guests'}</strong> in our <strong>${seating}</strong> area on <strong>${date}</strong> at <strong>${time}</strong>.
          <br><br>
          A confirmation note has been dispatched to your email. We look forward to welcoming you with fresh brew and warm linen.
        `;
      }

      reservationForm.style.display = 'none';
      if (reserveSuccess) reserveSuccess.style.display = 'block';
    });
  }

  if (resetModalBtn) {
    resetModalBtn.addEventListener('click', () => {
      reservationForm.reset();
      reservationForm.style.display = 'flex';
      if (reserveSuccess) reserveSuccess.style.display = 'none';
    });
  }

  // ==========================================================================
  // 8. Ambient Cafe Sound Generator (Web Audio API - 100% Offline)
  // ==========================================================================
  const ambientSoundBtn = document.getElementById('ambientSoundBtn');
  const audioLabel = document.getElementById('audioLabel');
  let audioCtx = null;
  let isPlayingAudio = false;
  let noiseNode = null;
  let chimeInterval = null;

  const toggleAmbientAudio = () => {
    if (!audioCtx) {
      audioCtx = new (window.AudioContext || window.webkitAudioContext)();
    }

    if (isPlayingAudio) {
      // Stop
      if (audioCtx.state === 'running') {
        audioCtx.suspend();
      }
      clearInterval(chimeInterval);
      isPlayingAudio = false;
      if (ambientSoundBtn) ambientSoundBtn.classList.remove('playing');
      if (audioLabel) audioLabel.textContent = '♫ Play Cafe Ambience';
      showToast('Atmosphere paused');
    } else {
      // Start
      if (audioCtx.state === 'suspended') {
        audioCtx.resume();
      }

      // Generate subtle warm vinyl noise
      const bufferSize = audioCtx.sampleRate * 2;
      const buffer = audioCtx.createBuffer(1, bufferSize, audioCtx.sampleRate);
      const data = buffer.getChannelData(0);
      let lastOut = 0.0;

      for (let i = 0; i < bufferSize; i++) {
        const white = Math.random() * 2 - 1;
        // Pink-like filter for gentle warmth
        data[i] = (lastOut + (0.02 * white)) / 1.02;
        lastOut = data[i];
        data[i] *= 0.04; // Keep it ultra soft & gentle
      }

      noiseNode = audioCtx.createBufferSource();
      noiseNode.buffer = buffer;
      noiseNode.loop = true;

      const filter = audioCtx.createBiquadFilter();
      filter.type = 'lowpass';
      filter.frequency.value = 800;

      const gain = audioCtx.createGain();
      gain.gain.value = 0.15;

      noiseNode.connect(filter);
      filter.connect(gain);
      gain.connect(audioCtx.destination);
      noiseNode.start();

      // Gentle acoustic chime tone every 7 seconds
      const playChime = () => {
        if (!isPlayingAudio) return;
        const freqs = [392.00, 440.00, 523.25, 587.33, 659.25]; // Warm G major pentatonic
        const f = freqs[Math.floor(Math.random() * freqs.length)];

        const osc = audioCtx.createOscillator();
        const chimeGain = audioCtx.createGain();
        osc.type = 'sine';
        osc.frequency.setValueAtTime(f, audioCtx.currentTime);

        chimeGain.gain.setValueAtTime(0.015, audioCtx.currentTime);
        chimeGain.gain.exponentialRampToValueAtTime(0.0001, audioCtx.currentTime + 3.5);

        osc.connect(chimeGain);
        chimeGain.connect(audioCtx.destination);
        osc.start();
        osc.stop(audioCtx.currentTime + 3.6);
      };

      playChime();
      chimeInterval = setInterval(playChime, 7000);

      isPlayingAudio = true;
      if (ambientSoundBtn) ambientSoundBtn.classList.add('playing');
      if (audioLabel) audioLabel.textContent = '♫ Ambience Playing';
      showToast('Playing gentle cafe vinyl ambience');
    }
  };

  if (ambientSoundBtn) {
    ambientSoundBtn.addEventListener('click', toggleAmbientAudio);
  }

  // ==========================================================================
  // 9. Toast Notification Helper
  // ==========================================================================
  const toastNotice = document.getElementById('toastNotice');
  let toastTimer = null;

  function showToast(message) {
    if (!toastNotice) return;
    toastNotice.textContent = message;
    toastNotice.classList.add('show');
    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
      toastNotice.classList.remove('show');
    }, 3200);
  }

  // ==========================================================================
  // 10. Newsletter Form Handling
  // ==========================================================================
  const newsletterForm = document.getElementById('newsletterForm');
  const newsletterEmail = document.getElementById('newsletterEmail');
  const newsletterFeedback = document.getElementById('newsletterFeedback');

  if (newsletterForm) {
    newsletterForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const email = newsletterEmail.value.trim();
      if (email && newsletterFeedback) {
        newsletterFeedback.textContent = `Thank you. We will send our reflections to ${email} every other Sunday.`;
        newsletterFeedback.style.color = 'var(--accent)';
        newsletterEmail.value = '';
        setTimeout(() => {
          newsletterFeedback.textContent = '';
        }, 5000);
      }
    });
  }

});

