<?php 
$page_title = 'GAMEONIX ESPORTS & GAMING - Ultimate Gaming Experience';
include './includes/header.php'; 
?>

  <!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
      <div class="hero-content">

        <h1>Download India's Ultimate Gaming Platform</h1>

        <p>
          Play top-tier mobile games with your friends. Secure payments, quick withdrawals, fair gameplay, and more.
          Join millions of gamers in the ultimate gaming experience.
        </p>

        <div class="hero-buttons">
          <a href="#download" class="btn btn-primary">Signup Now</a>
          <a href="#features" class="btn btn-secondary">Learn More</a>
        </div>

      </div>

      <div class="hero-image">
        <img src="<?php echo $imgurl?>/mockup.png" alt="mockup" />
      </div>

    </div>
  </section>




  <!-- Trust Banner Section -->
  <section class="trust-banner">
    <div class="container">
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-users"></i>
        </div>
        <div class="trust-text">
          <h3>Trusted by</h3>
          <p><span class="count-number" data-target="300">0</span>k+ Users</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-certificate"></i>
        </div>
        <div class="trust-text">
          <h3>Certified Secure</h3>
          <p>Fair Gameplay</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div class="trust-text">
          <h3>100% Safe</h3>
          <p>Secure Payments</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-bolt"></i>
        </div>
        <div class="trust-text">
          <h3>Quick Withdrawal</h3>
          <p>Instant Payouts</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sliding Banner Section -->
  <section class="sliding-banner-section">
    <div class="container">
      <div class="sliding-banner-container">
        <div class="sliding-banner-track">

          <div id="bg1" class="sliding-banner">
            <div class="inner">
              <h3>MASSIVE TOURNAMENTS</h3>
              <p>Join our weekly tournaments with prize pools up to ₹1,00,000. Compete against the best players and
                prove
                your skills!</p>
              <a href="#" class="btn btn-primary">Join Now</a>
            </div>
          </div>

          <div id="bg2" class="sliding-banner ">
            <h3>EXCLUSIVE REWARDS</h3>
            <p>Get exclusive in-game items, skins, and bonuses when you play through our platform. Sign up today for
              special offers!</p>
            <a href="#" class="btn btn-primary">Get Rewards</a>
          </div>

          <div id="bg3" class="sliding-banner">
            <h3>LIVE STREAMING</h3>
            <p>Watch professional gamers live or stream your own gameplay to thousands of viewers. Build your gaming
              community now!</p>
            <a href="#" class="btn btn-primary">Start Streaming</a>
          </div>

        </div>
      </div>
      <div class="sliding-banner-nav">
        <div class="sliding-banner-dot active"></div>
        <div class="sliding-banner-dot"></div>
        <div class="sliding-banner-dot"></div>
      </div>
    </div>
  </section>

  <!-- Games Section -->
  <section id="games" class="games-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Popular Games</h2>
        <p>Play your favorite games and win exciting cash prizes</p>
      </div>

      <div class="game-category animate-on-scroll">
        <h3>Battle Royale Games</h3>
        <div class="games-grid">
          <div class="game-card">
            <img src="<?php echo $imgurl?>/bgmi.jpg" alt="BGMI" class="game-img"
              onerror="this.src='https://via.placeholder.com/300x180/333333/ff0000?text=BGMI'">
            <h4>BGMI</h4>
            <div class="game-overlay">
              <span>Battlegrounds Mobile India</span>
              <a href="#" class="play-btn">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
          <div class="game-card">
            <img src="<?php echo $imgurl?>/valo1.jpg" alt="VALORANT" class="game-img"
              onerror="this.src='https://via.placeholder.com/300x180/333333/ff0000?text=VALORANT'">
            <h4>VALORANT</h4>
            <div class="game-overlay">
              <span>Tactical 5v5 Shooter</span>
              <a href="#" class="play-btn">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
          <div class="game-card">
            <img src="<?php echo $imgurl?>/freefire.jpg" alt="FREE FIRE" class="game-img"
              onerror="this.src='https://via.placeholder.com/300x180/333333/ff0000?text=FREE+FIRE'">
            <h4>FREE FIRE</h4>
            <div class="game-overlay">
              <span>Ultimate Survival Shooter</span>
              <a href="#" class="play-btn">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
          <div class="game-card">
            <img src="<?php echo $imgurl?>/cod1.jpg" alt="COD: MOBILE" class="game-img"
              onerror="this.src='https://via.placeholder.com/300x180/333333/ff0000?text=COD:+MOBILE'">
            <h4>COD: MOBILE</h4>
            <div class="game-overlay">
              <span>Call of Duty Mobile</span>
              <a href="#" class="play-btn">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
          <div class="game-card">
            <img src="<?php echo $imgurl?>/newstarte.jpg" alt="PUBG: NEW STATE" class="game-img"
              onerror="this.src='https://via.placeholder.com/300x180/333333/ff0000?text=PUBG:+NEW+STATE'">
            <h4>PUBG: NEW STATE</h4>
            <div class="game-overlay">
              <span>Next-Gen Battle Royale</span>
              <a href="#" class="play-btn">
                <i class="fas fa-play"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="features-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Why Choose GAMEONIX?</h2>
        <p>Experience the best of online gaming with amazing features</p>
      </div>

      <div class="features-grid">
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-users"></i>
          </div>
          <h3>Multiplayer Gaming</h3>
          <p>Play with friends and other players from around the country in intense battles</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-trophy"></i>
          </div>
          <h3>Tournaments & Contests</h3>
          <p>Participate in daily tournaments with massive prize pools and exciting rewards</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-lock"></i>
          </div>
          <h3>Secure Transactions</h3>
          <p>Your money is safe with our secure payment gateways and encryption</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-headset"></i>
          </div>
          <h3>24/7 Support</h3>
          <p>Get help anytime with our dedicated customer support team</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-globe"></i>
          </div>
          <h3>Multiple Languages</h3>
          <p>Play games in your preferred language with our localized interface</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-gift"></i>
          </div>
          <h3>Bonuses & Rewards</h3>
          <p>Get exciting bonuses, exclusive skins, and rewards every day</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Download Section -->
  <section id="download" class="download-section">
    <div class="container">
      <div class="download-content animate-on-scroll">
        <h2>Download the GAMEONIX App Now</h2>
        <p>
          Join millions of gamers and start playing your favorite games. Download the app and get
          started with exclusive bonuses!
        </p>
        <div class="download-buttons">
          <a href="#" class="download-btn">
            <div class="download-btn-icon">
              <i class="fab fa-google-play"></i>
            </div>
            <span>
              <small>Get it on</small>
              <strong>Google Play</strong>
            </span>
          </a>
          <a href="#" class="download-btn">
            <div class="download-btn-icon">
              <i class="fab fa-apple"></i>
            </div>
            <span>
              <small>Download on the</small>
              <strong>App Store</strong>
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Backed By Section -->
  <section class="backed-by-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Backed By</h2>
        <p>GAMEONIX is supported by leading global investors</p>
      </div>
      <div class="investors-grid">
        <div class="investor-item animate-on-scroll">
          <img src="https://gametosa.com/img/msforstartupw.png" alt="Investor 2" onerror="">
        </div>
        <div class="investor-item animate-on-scroll">
          <img src="https://gametosa.com/img/gcforstartup.png" alt="Investor 3" onerror="">
        </div>
      </div>
    </div>
  </section> 

  <!-- FAQ Section -->
  <section id="faq" class="faq-section">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Frequently Asked Questions</h2>
        <p>Find answers to common questions about GAMEONIX</p>
      </div>

      <div class="faq-container">
        <div class="faq-item animate-on-scroll">
          <div class="faq-question">
            <h3>What is GAMEONIX?</h3>
            <div class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
          <div class="faq-answer">
            <p>GAMEONIX is India's premier gaming platform offering popular games like BGMI, VALORANT, FREE FIRE, COD:
              MOBILE, and PUBG: NEW STATES. Users can play with friends or other players from around the country in
              multiple formats and languages.</p>
          </div>
        </div>

        <div class="faq-item animate-on-scroll">
          <div class="faq-question">
            <h3>Is it safe to play games on GAMEONIX?</h3>
            <div class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
          <div class="faq-answer">
            <p>Yes, GAMEONIX provides a secure gaming environment. It is certified for fair gameplay for all users. All
              payment transactions are secured with top-level encryption, and personal information is protected as per
              privacy policies.</p>
          </div>
        </div>

        <div class="faq-item animate-on-scroll">
          <div class="faq-question">
            <h3>How do I withdraw my winnings?</h3>
            <div class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
          <div class="faq-answer">
            <p>You can withdraw your winnings from the Wallet section in the app. GAMEONIX offers multiple withdrawal
              options including UPI, bank transfer, and mobile wallets. Withdrawals are processed quickly, and the money
              is transferred to your account within 24 hours.</p>
          </div>
        </div>

        <div class="faq-item animate-on-scroll">
          <div class="faq-question">
            <h3>Can I play with my friends on GAMEONIX?</h3>
            <div class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
          <div class="faq-answer">
            <p>Yes, GAMEONIX allows you to play with your friends. You can create private rooms in most games and invite
              your friends to join using the room code. This way, you can enjoy playing exclusive matches with your
              friends and family.</p>
          </div>
        </div>

        <div class="faq-item animate-on-scroll">
          <div class="faq-question">
            <h3>Are tournaments available on GAMEONIX?</h3>
            <div class="faq-icon">
              <i class="fas fa-chevron-down"></i>
            </div>
          </div>
          <div class="faq-answer">
            <p>Yes, GAMEONIX hosts regular tournaments with exciting prize pools. You can participate in daily, weekly,
              and monthly tournaments for all the popular games like BGMI, VALORANT, FREE FIRE, COD: MOBILE, and PUBG:
              NEW STATES.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include './includes/footer.php'; ?>