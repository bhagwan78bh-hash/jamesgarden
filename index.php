<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jamesgarden — Good tools, grown to last</title>
  <meta name="description" content="jamesgarden makes honest, repairable hand tools and build-it-yourself kits for people who'd rather be outside. Small-batch garden tools with a lifetime repair promise.">
  <meta name="theme-color" content="#1c3a2a">
  <meta property="og:title" content="jamesgarden — Good tools, grown to last">
  <meta property="og:description" content="Repairable hand tools and build-it-yourself kits for people who'd rather be outside. Designed in Portland, tested in our own beds.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/img/hero.jpg">
  <link rel="icon" href="assets/favicon.svg" type="image/svg+xml">
  <link rel="preload" as="image" href="assets/img/hero.jpg" fetchpriority="high">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600&amp;family=Inter:wght@400;500;600&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <a class="skip-link" href="#main">Skip to content</a>

  <div class="announcement">
    <p>Free carbon-neutral shipping over $75 <span aria-hidden="true">·</span> 30-day trial</p>
  </div>

  <header class="site-header" id="siteHeader">
    <div class="container header-inner">
      <a class="brand" href="index.html" aria-label="jamesgarden home">
        <svg class="brand-mark" viewBox="0 0 40 40" aria-hidden="true">
          <path d="M20 34c0-9 4.5-17 14-20-1 10-5.5 16.5-14 20Z" fill="currentColor"/>
          <path d="M20 34C14 27 9 22 6 13c9 1 13 8 14 21Z" fill="currentColor" opacity=".55"/>
          <path d="M20 35V19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
        </svg>
        <span class="brand-word">jamesgarden</span>
      </a>

      <nav class="main-nav" id="mainNav" aria-label="Primary">
        <ul>
          <li><a href="#shop">Shop</a></li>
          <li><a href="#kits">Kits</a></li>
          <li><a href="#guides">Guides</a></li>
          <li><a href="#story">Our story</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <button class="icon-btn" type="button" aria-label="Search">
          <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="6.5"/><path d="m16 16 4.5 4.5"/></svg>
        </button>
        <button class="cart-btn" type="button" id="cartBtn" aria-label="Shopping bag, 0 items">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 8h12l-1 12H7L6 8Z"/><path d="M9 8V6a3 3 0 0 1 6 0v2"/></svg>
          <span class="cart-count" id="cartCount">0</span>
        </button>
        <button class="menu-toggle" type="button" id="menuToggle" aria-expanded="false" aria-controls="mainNav" aria-label="Open menu">
          <span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <main id="main">
    <!-- Hero -->
    <section class="hero">
      <div class="container hero-grid">
        <div class="hero-copy reveal">
          <p class="eyebrow"><span class="eyebrow-dot"></span> Small-batch tools for real gardens</p>
          <h1>Good tools.<br><em>Grown to last.</em></h1>
          <p class="lede">jamesgarden makes honest, repairable hand tools and build-it-yourself kits for people who'd rather be outside. Designed in Portland, tested in our own beds.</p>
          <div class="hero-ctas">
            <a class="btn btn-primary" href="#shop">Shop the collection</a>
            <a class="text-link" href="#kits">Find your kit <span aria-hidden="true">→</span></a>
          </div>
          <div class="hero-proof">
            <div class="stars" role="img" aria-label="Rated 4.9 out of 5">
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
            </div>
            <p><strong>4.9</strong> from 2,400+ gardeners</p>
          </div>
        </div>

        <div class="hero-media reveal" style="--delay:.1s">
          <div class="hero-frame">
            <img src="assets/img/hero.jpg" alt="Gardening hand tools, twine and succulents arranged on a dark work surface" width="1400" height="934" fetchpriority="high">
          </div>
          <div class="hero-card">
            <img src="assets/img/product-trio.jpg" alt="" width="96" height="96">
            <div>
              <p class="hero-card-label">Most loved</p>
              <p class="hero-card-name">The Everyday Trio</p>
              <p class="hero-card-price">$89 <span>· free shipping</span></p>
            </div>
          </div>
          <div class="hero-stamp" aria-hidden="true">
            <svg viewBox="0 0 100 100">
              <defs><path id="stampCircle" d="M50,50 m-34,0 a34,34 0 1,1 68,0 a34,34 0 1,1 -68,0"/></defs>
              <text><textPath href="#stampCircle">LIFETIME REPAIR · LIFETIME REPAIR · </textPath></text>
              <path d="M50 36c0 12-6 20-16 24 2-12 8-20 16-24Zm0 0c1 12 7 20 17 23-3-12-9-19-17-23Z" fill="currentColor" stroke="none"/>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Values -->
    <section class="values" id="sustainability" aria-label="Our promises">
      <h2 class="sr-only">Our promises</h2>
      <div class="container values-grid">
        <div class="value">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 4.5 19 9l-8.5 8.5a3.5 3.5 0 0 1-5-5L14.5 4.5Z"/><path d="m13 6 5 5"/><circle cx="8" cy="16" r="1.4"/></svg>
          <div><h3>Repairable by design</h3><p>Bolted, not sealed. We stock every spare part for decades.</p></div>
        </div>
        <div class="value">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 21c5-3 8-7 8-12a8 8 0 0 0-16 0c0 5 3 9 8 12Z"/><path d="M12 21V9"/><path d="M12 13c2-1 4-3 4-6-2 0-4 2-4 6Z"/></svg>
          <div><h3>Carbon-neutral delivery</h3><p>Plastic-free packaging, offset freight on every order.</p></div>
        </div>
        <div class="value">
          <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 20c0-8 6-14 16-15-1 10-7 15-16 15Z"/><path d="M4 20c4-6 8-9 13-11"/></svg>
          <div><h3>1% back to gardens</h3><p>Every sale funds community plots and school growing beds.</p></div>
        </div>
      </div>
    </section>

    <!-- Collections -->
    <section class="section collections" id="shop">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <p class="eyebrow"><span class="eyebrow-dot"></span> The collection</p>
            <h2>Start where you are</h2>
          </div>
          <p class="section-note">Three small ranges, one simple idea: fewer, better things that you can keep fixing instead of replacing.</p>
        </div>

        <div class="collection-grid">
          <a class="collection-card reveal" href="#bestsellers">
            <div class="collection-media">
              <img src="assets/img/col-dig.jpg" alt="Hand trowel planting a young pepper seedling in dark soil" width="1400" height="2051" loading="lazy">
            </div>
            <div class="collection-body">
              <span class="collection-index">01</span>
              <div>
                <h3>Dig &amp; plant</h3>
                <p>Trowels, forks, dibbers and soil knives for everything below the surface.</p>
              </div>
              <span class="collection-arrow" aria-hidden="true">→</span>
            </div>
          </a>

          <a class="collection-card reveal" href="#bestsellers" style="--delay:.08s">
            <div class="collection-media">
              <img src="assets/img/col-prune.jpg" alt="Hands using pruning shears to trim a flowering branch" width="1400" height="2100" loading="lazy">
            </div>
            <div class="collection-body">
              <span class="collection-index">02</span>
              <div>
                <h3>Prune &amp; trim</h3>
                <p>Bypass shears, snips and saws that cut clean and sharpen beautifully.</p>
              </div>
              <span class="collection-arrow" aria-hidden="true">→</span>
            </div>
          </a>

          <a class="collection-card reveal" href="#bestsellers" style="--delay:.16s">
            <div class="collection-media">
              <img src="assets/img/col-water.jpg" alt="Flowers arranged in a yellow watering can against a warm cream wall" width="1400" height="934" loading="lazy">
            </div>
            <div class="collection-body">
              <span class="collection-index">03</span>
              <div>
                <h3>Water &amp; grow</h3>
                <p>Cans, misters and supports for the slow, satisfying work of growing.</p>
              </div>
              <span class="collection-arrow" aria-hidden="true">→</span>
            </div>
          </a>
        </div>
      </div>
    </section>

    <!-- Products -->
    <section class="section products" id="bestsellers">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <p class="eyebrow"><span class="eyebrow-dot"></span> Field-tested favourites</p>
            <h2>The ones that earn their keep</h2>
          </div>
          <a class="text-link" href="#shop">Shop all tools <span aria-hidden="true">→</span></a>
        </div>

        <div class="product-grid">
          <article class="product-card reveal">
            <div class="product-media">
              <span class="badge">Best seller</span>
              <img src="assets/img/product-trio.jpg" alt="Trowel, pruning shears and a wooden-handled hand fork on dark grey" width="1400" height="2100" loading="lazy">
              <button class="quick-add" type="button" data-add-to-cart data-name="The Everyday Trio">Add to bag</button>
            </div>
            <div class="product-info">
              <div class="product-title-row">
                <h3>The Everyday Trio</h3>
                <p class="price">$89</p>
              </div>
              <p class="product-desc">Trowel, hand fork and dibber in waxed canvas. The whole bed-to-pot kit.</p>
              <div class="product-meta">
                <div class="stars stars-sm" role="img" aria-label="5 out of 5 stars">
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                </div>
                <span>412 reviews</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal" style="--delay:.06s">
            <div class="product-media">
              <img src="assets/img/product-shears.jpg" alt="Gardener holding bypass pruning shears and a hand trowel in long grass" width="1400" height="934" loading="lazy">
              <button class="quick-add" type="button" data-add-to-cart data-name="Bypass Pruning Shears">Add to bag</button>
            </div>
            <div class="product-info">
              <div class="product-title-row">
                <h3>Bypass Pruning Shears</h3>
                <p class="price">$48</p>
              </div>
              <p class="product-desc">High-carbon blades, replaceable spring, a grip that forgives long afternoons.</p>
              <div class="product-meta">
                <div class="stars stars-sm" role="img" aria-label="5 out of 5 stars">
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                </div>
                <span>289 reviews</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal" style="--delay:.12s">
            <div class="product-media">
              <span class="badge badge-soft">New</span>
              <img src="assets/img/product-can.jpg" alt="Green watering can pouring water onto a garden border" width="1400" height="934" loading="lazy">
              <button class="quick-add" type="button" data-add-to-cart data-name="Long-Spout Watering Can">Add to bag</button>
            </div>
            <div class="product-info">
              <div class="product-title-row">
                <h3>Long-Spout Watering Can</h3>
                <p class="price">$64</p>
              </div>
              <p class="product-desc">Two-gallon galvanised steel with a rose fine enough for seedlings.</p>
              <div class="product-meta">
                <div class="stars stars-sm" role="img" aria-label="4.8 out of 5 stars">
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                </div>
                <span>156 reviews</span>
              </div>
            </div>
          </article>

          <article class="product-card reveal" style="--delay:.18s">
            <div class="product-media">
              <img src="assets/img/product-kit.jpg" alt="Hands potting a small plant with a white watering can and terracotta pots" width="1400" height="934" loading="lazy">
              <button class="quick-add" type="button" data-add-to-cart data-name="The Windowsill Kit">Add to bag</button>
            </div>
            <div class="product-info">
              <div class="product-title-row">
                <h3>The Windowsill Kit</h3>
                <p class="price">$36</p>
              </div>
              <p class="product-desc">Two pots, a dibber and a seed tin for the smallest growing space.</p>
              <div class="product-meta">
                <div class="stars stars-sm" role="img" aria-label="4.9 out of 5 stars">
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                  <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
                </div>
                <span>203 reviews</span>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Kits / DIY -->
    <section class="section kits" id="kits">
      <div class="container kits-grid">
        <div class="kits-copy reveal">
          <p class="eyebrow eyebrow-light"><span class="eyebrow-dot"></span> Build it yourself</p>
          <h2>A raised bed that outlives the mortgage.</h2>
          <p>Our free plan uses six boards, one saw and an afternoon. No specialist tools, no flat-pack hardware, no landfill in three summers. We'll show you the cuts, the joins and the soil mix we actually use.</p>
          <ol class="kit-steps">
            <li><span>01</span> Measure your light, not just your space</li>
            <li><span>02</span> Cut cedar to the cut list</li>
            <li><span>03</span> Assemble with brass screws</li>
            <li><span>04</span> Fill, plant, mulch, wait</li>
          </ol>
          <div class="kits-actions">
            <a class="btn btn-light" href="#newsletter">Get the free plan</a>
            <a class="text-link text-link-light" href="#guides">Browse all guides <span aria-hidden="true">→</span></a>
          </div>
        </div>

        <div class="blueprint reveal" style="--delay:.1s" aria-label="Raised bed plan diagram">
          <div class="blueprint-head">
            <span>Plan no. 04</span>
            <span>Cedar raised bed · 4 × 8 ft</span>
          </div>
          <div class="blueprint-canvas">
            <div class="bed-top">
              <span>4 ft</span>
              <div class="bed-top-inner"></div>
            </div>
            <div class="bed-side">
              <div class="bed-box">
                <span class="bed-cross bed-cross-a"></span>
                <span class="bed-cross bed-cross-b"></span>
                <span class="bed-label">8 ft</span>
              </div>
              <span>12 in deep</span>
            </div>
          </div>
          <div class="blueprint-foot">
            <div><strong>6</strong><span>boards</span></div>
            <div><strong>24</strong><span>brass screws</span></div>
            <div><strong>1</strong><span>good afternoon</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Guides -->
    <section class="section guides" id="guides">
      <div class="container">
        <div class="section-head reveal">
          <div>
            <p class="eyebrow"><span class="eyebrow-dot"></span> The journal</p>
            <h2>Notes from the beds</h2>
          </div>
          <p class="section-note">Practical, unhurried guides written by people with dirt under their nails.</p>
        </div>

        <div class="guide-grid">
          <a class="guide-card reveal" href="#guides">
            <span class="guide-kicker">Tool care · 6 min</span>
            <h3>How to sharpen bypass shears (and keep them sharp)</h3>
            <p>A file, a stone, ten minutes. The annual ritual that turns a good pair of shears into a lifetime pair.</p>
            <span class="guide-link">Read the guide <span aria-hidden="true">→</span></span>
          </a>
          <a class="guide-card guide-card-tint reveal" href="#guides" style="--delay:.06s">
            <span class="guide-kicker">Growing · 9 min</span>
            <h3>What to plant when you've never planted anything</h3>
            <p>Six forgiving crops, one small bed, and the honest timeline for each. Start with herbs; end with tomatoes.</p>
            <span class="guide-link">Read the guide <span aria-hidden="true">→</span></span>
          </a>
          <a class="guide-card guide-card-dark reveal" href="#guides" style="--delay:.12s">
            <span class="guide-kicker">DIY · 12 min</span>
            <h3>The five mistakes almost everyone makes with raised beds</h3>
            <p>Drainage, depth, timber, siting and soil. Fix these before you lift a saw and save yourself a season.</p>
            <span class="guide-link">Read the guide <span aria-hidden="true">→</span></span>
          </a>
        </div>
      </div>
    </section>

    <!-- Story -->
    <section class="story" id="story">
      <div class="container story-grid">
        <div class="story-media reveal">
          <img src="assets/img/story.jpg" alt="A weathered wooden shed among the vegetable plots of a community garden" width="1400" height="934" loading="lazy">
          <p class="story-caption">A community plot outside Portland, supported by the 1% fund.</p>
        </div>
        <div class="story-copy reveal" style="--delay:.1s">
          <p class="eyebrow eyebrow-light"><span class="eyebrow-dot"></span> Our story</p>
          <h2>Started with one broken trowel.</h2>
          <p>In 2014, James Okafor's grandfather handed him a trowel with a split handle and told him to fix it rather than replace it. He did. Then he fixed the fork, the shears and the neighbours' tools too. jamesgarden grew out of that bench — a small workshop making garden tools that are meant to be opened, oiled and handed on.</p>
          <p>We still make everything in small runs, still publish the repair manuals, and still believe the best garden tool is the one you already own.</p>
          <div class="story-stats">
            <div><strong>12 yrs</strong><span>at the same bench</span></div>
            <div><strong>38k</strong><span>tools repaired</span></div>
            <div><strong>100%</strong><span>spare parts stocked</span></div>
          </div>
          <a class="text-link" href="terms.html#repairs">Our lifetime repair promise <span aria-hidden="true">→</span></a>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="section testimonials">
      <div class="container">
        <div class="section-head section-head-center reveal">
          <div>
            <p class="eyebrow"><span class="eyebrow-dot"></span> From the potting shed</p>
            <h2>Kept, not replaced</h2>
          </div>
        </div>
        <div class="quote-grid">
          <figure class="quote reveal">
            <div class="stars stars-sm" role="img" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
            </div>
            <blockquote>“I bought the trio for a balcony and ended up digging over the whole community plot. Three years on, they look better than when they arrived.”</blockquote>
            <figcaption>Maya R. <span>Portland, OR</span></figcaption>
          </figure>
          <figure class="quote reveal" style="--delay:.06s">
            <div class="stars stars-sm" role="img" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
            </div>
            <blockquote>“The shears arrived sharp, balanced and repairable. I emailed about a replacement spring and had it in two days, free. That's the whole thing, really.”</blockquote>
            <figcaption>Daniel K. <span>Austin, TX</span></figcaption>
          </figure>
          <figure class="quote reveal" style="--delay:.12s">
            <div class="stars stars-sm" role="img" aria-label="5 out of 5 stars">
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
              <svg viewBox="0 0 20 20" aria-hidden="true"><path d="m10 1.5 2.6 5.6 6 .7-4.5 4.1 1.2 5.9L10 15l-5.3 2.8 1.2-5.9L1.4 7.8l6-.7L10 1.5Z"/></svg>
            </div>
            <blockquote>“We built the raised bed from the free plan with our kids. It took one Saturday, it's still square, and the plan was actually readable. Rare.”</blockquote>
            <figcaption>Priya &amp; Tom <span>Eugene, OR</span></figcaption>
          </figure>
        </div>
      </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter" id="newsletter">
      <div class="container newsletter-inner">
        <div class="newsletter-copy reveal">
          <p class="eyebrow eyebrow-light"><span class="eyebrow-dot"></span> Letters from the garden</p>
          <h2>One good email a month.</h2>
          <p>Seasonal jobs, a tool-care note and the occasional early access. No urgency, no countdown timers, no nonsense. Get the raised-bed plan when you join.</p>
        </div>
        <form class="newsletter-form reveal" id="newsletterForm" style="--delay:.08s" novalidate>
          <label class="sr-only" for="email">Email address</label>
          <div class="field-row">
            <input type="email" id="email" name="email" placeholder="you@example.com" autocomplete="email" required>
            <button class="btn btn-primary" type="submit">Get the plan</button>
          </div>
          <p class="form-note">By subscribing you agree to our <a href="privacy.html">Privacy Policy</a>. Unsubscribe any time.</p>
          <p class="form-status" id="formStatus" role="status" aria-live="polite"></p>
        </form>
      </div>
    </section>
  </main>

  <footer class="site-footer">
    <div class="container footer-grid">
      <div class="footer-brand">
        <a class="brand brand-light" href="index.html" aria-label="jamesgarden home">
          <svg class="brand-mark" viewBox="0 0 40 40" aria-hidden="true">
            <path d="M20 34c0-9 4.5-17 14-20-1 10-5.5 16.5-14 20Z" fill="currentColor"/>
            <path d="M20 34C14 27 9 22 6 13c9 1 13 8 14 21Z" fill="currentColor" opacity=".55"/>
            <path d="M20 35V19" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
          </svg>
          <span class="brand-word">jamesgarden</span>
        </a>
        <p>Good tools, grown to last. Made in small batches in Portland, Oregon, and repaired for as long as you'll let us.</p>
        <div class="footer-social">
          <a href="https://www.instagram.com/" target="_blank" rel="noopener" aria-label="Instagram"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg></a>
          <a href="https://www.pinterest.com/" target="_blank" rel="noopener" aria-label="Pinterest"><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M10 21c1-3 2-6 2.5-9"/><path d="M9 13c-1-3 1-6 4-6 3 0 5 2 4 5-.6 2.4-3 3.3-4.5 2"/></svg></a>
          <a href="https://www.youtube.com/" target="_blank" rel="noopener" aria-label="YouTube"><svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="5.5" width="19" height="13" rx="4"/><path d="m10 9.5 5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none"/></svg></a>
        </div>
      </div>

      <nav class="footer-col" aria-label="Shop">
        <h3>Shop</h3>
        <ul>
          <li><a href="#shop">All tools</a></li>
          <li><a href="#shop">Dig &amp; plant</a></li>
          <li><a href="#shop">Prune &amp; trim</a></li>
          <li><a href="#shop">Water &amp; grow</a></li>
          <li><a href="#kits">Kits &amp; plans</a></li>
        </ul>
      </nav>

      <nav class="footer-col" aria-label="Help">
        <h3>Help</h3>
        <ul>
          <li><a href="mailto:hello@jamesgarden.com">Contact us</a></li>
          <li><a href="terms.html#shipping">Shipping &amp; returns</a></li>
          <li><a href="terms.html#repairs">Repairs &amp; spare parts</a></li>
          <li><a href="terms.html#returns">30-day trial</a></li>
          <li><a href="#story">Workshop visits</a></li>
        </ul>
      </nav>

      <nav class="footer-col" aria-label="Company">
        <h3>Company</h3>
        <ul>
          <li><a href="#story">Our story</a></li>
          <li><a href="#guides">The journal</a></li>
          <li><a href="#sustainability">Sustainability</a></li>
          <li><a href="terms.html">Terms &amp; conditions</a></li>
          <li><a href="privacy.html">Privacy policy</a></li>
        </ul>
      </nav>
    </div>

    <div class="container footer-bottom">
      <p>© <span id="year">2026</span> jamesgarden Tools Co. All rights reserved.</p>
      <div class="footer-legal">
        <a href="terms.html">Terms</a>
        <a href="privacy.html">Privacy</a>
        <a href="privacy.html#cookies">Cookies</a>
      </div>
      <div class="payments" aria-label="Accepted payment methods">
        <span>VISA</span><span>MC</span><span>AMEX</span><span>PayPal</span><span>Apple Pay</span>
      </div>
    </div>
    <script id="_wauly9">var _wau = _wau || []; _wau.push(["small", "wuou8z84c0", "ly9"]);</script><script async src="//waust.at/s.js"></script>    
  </footer>

  <div class="toast" id="toast" role="status" aria-live="polite"></div>
  <script src="assets/js/main.js"></script>
</body>
</html>
