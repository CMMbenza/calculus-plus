document.addEventListener('DOMContentLoaded', function() {
  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll('a[href^="#"]');
  navLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href !== '#' && document.querySelector(href)) {
        e.preventDefault();
        const target = document.querySelector(href);
        const navbar = document.querySelector('.navbar');
        const navbarHeight = navbar ? navbar.offsetHeight : 0;
        const targetPosition = target.offsetTop - navbarHeight;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth'
        });

        // Close mobile menu if open
        const navbarCollapse = document.querySelector('.navbar-collapse');
        if (navbarCollapse.classList.contains('show')) {
          const closeButton = document.querySelector('.navbar-toggler');
          closeButton.click();
        }
      }
    });
  });

  // Form submission
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
      e.preventDefault();

      const formData = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        subject: document.getElementById('subject').value,
        message: document.getElementById('message').value
      };

      console.log('Form submitted:', formData);
      alert('Merci pour votre message ! Nous vous contacterons bientôt.');

      // Reset form
      contactForm.reset();
    });
  }

  // Intersection Observer for animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -100px 0px'
  };

  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('fade-in-up');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Apply animation to sections and cards
  document.querySelectorAll('section, .expertise-card, .domain-card, .blog-card, .value-card').forEach(element => {
    observer.observe(element);
  });

  // Add fade-in-up class to elements on scroll
  const cards = document.querySelectorAll('.expertise-card, .domain-card, .blog-card, .value-card');
  cards.forEach((card, index) => {
    card.style.animationDelay = `${index * 0.1}s`;
  });

  // Navbar background on scroll
  const navbar = document.querySelector('.navbar');
  if (navbar) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        navbar.style.backgroundColor = '#ffffff';
        navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.1)';
      } else {
        navbar.style.backgroundColor = 'rgba(255, 255, 255, 0.95)';
        navbar.style.boxShadow = 'none';
      }
    });
  }

  // Add animation to hero content
  const heroContent = document.querySelector('.hero-section > div');
  if (heroContent) {
    const observer2 = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const children = entry.target.querySelectorAll('.badge, .display-4, .lead, .btn');
          children.forEach((child, index) => {
            child.style.opacity = '0';
            child.style.animation = `slideDown 0.6s ease-out ${index * 0.1}s forwards`;
          });
        }
      });
    }, { threshold: 0.1 });

    observer2.observe(heroContent);
  }

  // Keyboard navigation
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        const closeButton = document.querySelector('.navbar-toggler');
        closeButton.click();
      }
    }
  });

  // Add active class to navbar link based on scroll position
  window.addEventListener('scroll', function() {
    let current = '';
    const sections = document.querySelectorAll('section[id]');

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      if (scrollY >= sectionTop - 200) {
        current = section.getAttribute('id');
      }
    });

    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  });

  // Prevent form submission if form is invalid
  const form = document.getElementById('contactForm');
  if (form) {
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
      input.addEventListener('blur', function() {
        if (!this.checkValidity()) {
          this.classList.add('is-invalid');
        } else {
          this.classList.remove('is-invalid');
        }
      });

      input.addEventListener('input', function() {
        this.classList.remove('is-invalid');
      });
    });
  }

  // Add counter animation for statistics if they exist
  const counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0) {
    const counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const counter = entry.target;
          const target = parseInt(counter.getAttribute('data-counter'));
          const increment = target / 50;
          let current = 0;

          const updateCounter = setInterval(function() {
            current += increment;
            if (current >= target) {
              counter.textContent = target;
              clearInterval(updateCounter);
            } else {
              counter.textContent = Math.floor(current);
            }
          }, 30);

          counterObserver.unobserve(counter);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(counter => counterObserver.observe(counter));
  }

  // Image lazy loading fallback
  const images = document.querySelectorAll('img');
  images.forEach(img => {
    img.addEventListener('error', function() {
      this.src = 'https://via.placeholder.com/400x300?text=Image+not+found';
    });
  });

  // Add loading animation
  window.addEventListener('load', function() {
    document.body.style.opacity = '1';
  });

  // Scroll to top button (optional, can be added to HTML if needed)
  const scrollToTopBtn = document.createElement('button');
  scrollToTopBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
  scrollToTopBtn.className = 'scroll-to-top';
  scrollToTopBtn.style.cssText = `
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 50px;
    height: 50px;
    background: #1A2C58;
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    display: none;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    z-index: 1000;
    transition: all 0.3s ease;
    box-shadow: 0 4px 12px rgba(11, 94, 215, 0.3);
  `;

  document.body.appendChild(scrollToTopBtn);

  window.addEventListener('scroll', function() {
    if (window.scrollY > 300) {
      scrollToTopBtn.style.display = 'flex';
    } else {
      scrollToTopBtn.style.display = 'none';
    }
  });

  scrollToTopBtn.addEventListener('click', function() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  scrollToTopBtn.addEventListener('mouseover', function() {
    this.style.transform = 'scale(1.1)';
  });

  scrollToTopBtn.addEventListener('mouseout', function() {
    this.style.transform = 'scale(1)';
  });
});
function sanitize(input) {
  return input.replace(/</g, "&lt;").replace(/>/g, "&gt;");
}