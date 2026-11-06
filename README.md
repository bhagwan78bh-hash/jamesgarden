# jamesgarden

A responsive brand website for **jamesgarden**, a fictional small-batch DIY garden-tool maker. Built with plain HTML, CSS and a small amount of vanilla JavaScript — no frameworks or build step.

## Pages

| File | Purpose |
| --- | --- |
| `index.html` | Home / brand landing page — hero, collections, products, DIY raised-bed section, journal, story, testimonials, newsletter |
| `terms.html` | Terms & Conditions, including orders, shipping, returns, the 30-day trial and lifetime repair promise |
| `privacy.html` | Privacy Policy, including cookies, data sharing, retention, GDPR/CCPA rights and contact details |

## Preview locally

```bash
python3 -m http.server 4173
```

Then open <http://127.0.0.1:4173/index.html>.

## Structure

```
index.html
terms.html
privacy.html
assets/
  css/styles.css     design system, layout, responsive breakpoints
  js/main.js         mobile nav, cart demo, newsletter validation, reveal animations
  favicon.svg        leaf mark
  img/               local photography
```

## Features

- Responsive layout down to 390px, with an intentional tablet layout.
- Sticky header, mobile menu, scroll-reveal animations and reduced-motion support.
- Demo bag counter (persisted in `localStorage`), add-to-bag feedback and a newsletter form with inline validation.
- Accessible landmarks, skip link, focus styles, labelled controls and live regions.
- Legal pages with sticky table of contents and print-friendly prose.

## Notes

- All copy, prices, addresses, emails and legal text are sample content for a fictional business. Replace the contact details and have a qualified professional review the legal pages before using them commercially.
- Product photography is from [Burst](https://burst.shopify.com/) (free stock photos by Shopify). Photos are downloaded locally into `assets/img/`; no hotlinking.
- Fonts are loaded from Google Fonts (Fraunces and Inter) with local serif/sans fallbacks.

## Credits

Photography by Burst / Shopify contributors:

- `hero.jpg` — succulents and gardening tools flat lay
- `col-dig.jpg` — trowel planting a pepper seedling
- `col-prune.jpg` — pruning a flowering branch
- `col-water.jpg` — flowers in a watering can
- `product-trio.jpg` — gardening tools on dark grey
- `product-shears.jpg` — gardener holding shears and trowel
- `product-can.jpg` — green watering can
- `product-kit.jpg` — repotting a plant
- `story.jpg` — shed in a community garden
