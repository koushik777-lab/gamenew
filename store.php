<?php 
$page_title = 'GAMEONIX Store - Gaming Products & Merchandise';
include './includes/header.php'; 
?>

  <section class="hero" style="min-height: 40vh; padding: 4rem 0;">
    <div class="container">
      <div class="hero-content" style="text-align: center; max-width: 100%;">
        <h1>GAMEONIX Store</h1>
        <p>Get exclusive gaming products, in-game currency, and premium merchandise</p>
      </div>
    </div>
  </section>

  <section class="games-section" style="padding: 4rem 0;">
    <div class="container">
      <div class="section-header animate-on-scroll">
        <h2>Gaming Products</h2>
        <p>Purchase in-game currency and premium items for your favorite games</p>
      </div>

      <div class="games-grid">
        <div class="game-card">
          <img src="<?php echo $imgurl?>/bgmi.jpg" alt="BGMI UC" class="game-img">
          <h4>BGMI UC</h4>
          <div class="game-overlay">
            <span>Unknown Cash - From ₹79</span>
            <a href="#" class="play-btn">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="game-card">
          <img src="<?php echo $imgurl?>/valo1.jpg" alt="VALORANT Points" class="game-img">
          <h4>VALORANT Points</h4>
          <div class="game-overlay">
            <span>VP Currency - From ₹99</span>
            <a href="#" class="play-btn">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="game-card">
          <img src="<?php echo $imgurl?>/freefire.jpg" alt="Free Fire Diamonds" class="game-img">
          <h4>FREE FIRE Diamonds</h4>
          <div class="game-overlay">
            <span>Premium Diamonds - From ₹49</span>
            <a href="#" class="play-btn">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>
        <div class="game-card">
          <img src="<?php echo $imgurl?>/cod1.jpg" alt="COD Points" class="game-img">
          <h4>COD Points</h4>
          <div class="game-overlay">
            <span>CP Currency - From ₹89</span>
            <a href="#" class="play-btn">
              <i class="fas fa-shopping-cart"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="section-header animate-on-scroll" style="margin-top: 4rem;">
        <h2>Premium Merchandise</h2>
        <p>Show your gaming pride with official GAMEONIX merchandise</p>
      </div>

      <div class="features-grid">
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-tshirt"></i>
          </div>
          <h3>Gaming T-Shirts</h3>
          <p>Premium quality t-shirts with exclusive gaming designs and team logos</p>
          <p style="color: #e50914; font-weight: bold; margin-top: 1rem;">Starting at ₹599</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-hat-cowboy"></i>
          </div>
          <h3>Gaming Caps & Hoodies</h3>
          <p>Stay comfortable while gaming with our premium caps and hoodies</p>
          <p style="color: #e50914; font-weight: bold; margin-top: 1rem;">Starting at ₹799</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-mug-hot"></i>
          </div>
          <h3>Gaming Accessories</h3>
          <p>Mugs, keychains, posters, and more gaming accessories for true gamers</p>
          <p style="color: #e50914; font-weight: bold; margin-top: 1rem;">Starting at ₹199</p>
        </div>
        <div class="feature-card animate-on-scroll">
          <div class="feature-icon">
            <i class="fas fa-medal"></i>
          </div>
          <h3>Limited Edition Items</h3>
          <p>Exclusive collectibles and limited edition merchandise from special events</p>
          <p style="color: #e50914; font-weight: bold; margin-top: 1rem;">Starting at ₹999</p>
        </div>
      </div>
    </div>
  </section>

  <section class="trust-banner">
    <div class="container">
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <div class="trust-text">
          <h3>Secure Payments</h3>
          <p>100% Safe & Encrypted</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <div class="trust-text">
          <h3>Fast Delivery</h3>
          <p>Instant Digital & 2-5 Days Physical</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-headset"></i>
        </div>
        <div class="trust-text">
          <h3>24/7 Support</h3>
          <p>Always Here to Help</p>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-icon">
          <i class="fas fa-undo"></i>
        </div>
        <div class="trust-text">
          <h3>Easy Returns</h3>
          <p>7 Days Return Policy</p>
        </div>
      </div>
    </div>
  </section>

<?php include './includes/footer.php'; ?>
