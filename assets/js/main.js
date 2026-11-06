/* jamesgarden — light interactions */
(function () {
  "use strict";

  var header = document.getElementById("siteHeader");
  var menuToggle = document.getElementById("menuToggle");
  var nav = document.getElementById("mainNav");
  var cartBtn = document.getElementById("cartBtn");
  var cartCount = document.getElementById("cartCount");
  var toast = document.getElementById("toast");
  var toastTimer;

  /* Sticky header state */
  function onScroll() {
    if (!header) return;
    header.classList.toggle("is-scrolled", window.scrollY > 12);
  }
  window.addEventListener("scroll", onScroll, { passive: true });
  onScroll();

  /* Mobile navigation */
  if (menuToggle && nav) {
    var closeMenu = function () {
      nav.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.setAttribute("aria-label", "Open menu");
    };

    menuToggle.addEventListener("click", function () {
      var open = nav.classList.toggle("is-open");
      menuToggle.setAttribute("aria-expanded", String(open));
      menuToggle.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    });

    nav.addEventListener("click", function (event) {
      if (event.target.closest("a")) closeMenu();
    });

    document.addEventListener("keydown", function (event) {
      if (event.key === "Escape") closeMenu();
    });

    window.addEventListener("resize", function () {
      if (window.innerWidth > 960) closeMenu();
    });
  }

  /* Toast */
  function showToast(message) {
    if (!toast) return;
    window.clearTimeout(toastTimer);
    toast.textContent = message;
    toast.classList.add("is-visible");
    toastTimer = window.setTimeout(function () {
      toast.classList.remove("is-visible");
    }, 3200);
  }

  /* Search placeholder */
  var searchBtn = document.querySelector('.icon-btn[aria-label="Search"]');
  if (searchBtn) {
    searchBtn.addEventListener("click", function () {
      showToast("Search is coming soon — browse the collection below for now.");
    });
  }

  /* Cart counter */
  var items = 0;
  try {
    var stored = window.localStorage.getItem("jg-bag-count");
    items = stored ? parseInt(stored, 10) || 0 : 0;
  } catch (error) {
    items = 0;
  }

  function renderCart() {
    if (!cartCount) return;
    cartCount.textContent = String(items);
    if (cartBtn) {
      cartBtn.setAttribute(
        "aria-label",
        "Shopping bag, " + items + " item" + (items === 1 ? "" : "s")
      );
    }
    try {
      window.localStorage.setItem("jg-bag-count", String(items));
    } catch (error) {
      /* storage may be unavailable */
    }
  }
  renderCart();

  document.querySelectorAll("[data-add-to-cart]").forEach(function (button) {
    button.addEventListener("click", function () {
      items += 1;
      renderCart();
      var name = button.getAttribute("data-name") || "Item";
      var original = button.textContent;
      button.textContent = "Added";
      button.disabled = true;
      showToast(name + " added to your bag");
      window.setTimeout(function () {
        button.textContent = original;
        button.disabled = false;
      }, 1400);
    });
  });

  if (cartBtn) {
    cartBtn.addEventListener("click", function () {
      if (items === 0) {
        showToast("Your bag is empty — start with the Everyday Trio.");
      } else {
        showToast(
          "Your bag holds " +
            items +
            " item" +
            (items === 1 ? "" : "s") +
            ". Checkout opens in the full shop."
        );
      }
    });
  }

  /* Newsletter */
  var form = document.getElementById("newsletterForm");
  if (form) {
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      var input = form.querySelector('input[type="email"]');
      var status = document.getElementById("formStatus");
      if (!input || !status) return;
      var value = input.value.trim();
      var valid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value);

      if (!valid) {
        status.textContent = "Please enter a valid email address.";
        input.focus();
        return;
      }

      status.textContent =
        "You're in. The raised-bed plan is on its way to " + value + ".";
      form.reset();
    });
  }

  /* Reveal on scroll */
  var reveals = document.querySelectorAll(".reveal");
  if (reveals.length) {
    if ("IntersectionObserver" in window) {
      var observer = new IntersectionObserver(
        function (entries) {
          entries.forEach(function (entry) {
            if (entry.isIntersecting) {
              entry.target.classList.add("is-visible");
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.12, rootMargin: "0px 0px -40px 0px" }
      );
      reveals.forEach(function (el) {
        observer.observe(el);
      });
    } else {
      reveals.forEach(function (el) {
        el.classList.add("is-visible");
      });
    }
  }

  /* Year */
  var year = document.getElementById("year");
  if (year) year.textContent = String(new Date().getFullYear());
})();
