<?php
/**
 * Gallery Section - Manaj School
 * Modern Bootstrap 5 Grid + Filter System with AOS Animations
 */
?>
<section id="gallery" class="section bg-light">
  <div class="container">

    <!-- Gallery Heading -->
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="section-title">Our Gallery</h2>
      <p class="section-subtitle">Moments from our school activities and achievements</p>
    </div>

    <!-- Category Filters -->
    <div class="category-filters" data-aos="fade-up" data-aos-delay="100">
      <button class="filter-btn active" data-category="all">All Photos</button>
      <button class="filter-btn" data-category="academics">Academics</button>
      <button class="filter-btn" data-category="sports">Sports</button>
      <button class="filter-btn" data-category="cultural">Cultural Events</button>
      <button class="filter-btn" data-category="infrastructure">Infrastructure</button>
      <button class="filter-btn" data-category="activities">Activities</button>
    </div>

    <!-- Gallery Grid -->
    <div class="gallery-grid" id="galleryGrid">
      <!-- Academic Photos -->
      <div class="gallery-item" data-category="academics" data-aos="fade-up">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=600" alt="Classroom">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Classroom Learning</h4>
              <p>Interactive teaching methods</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="academics" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1581726707445-75cbe4efc586?w=600" alt="Computer Lab">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Computer Laboratory</h4>
              <p>Technology-enabled learning</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="academics" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=600" alt="Science Lab">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Science Practical</h4>
              <p>Hands-on experiments</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Sports Photos -->
      <div class="gallery-item" data-category="sports" data-aos="fade-up">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=600" alt="Running">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Track Events</h4>
              <p>Annual sports competition</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="sports" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1546483875-ad9014c88eba?w=600" alt="Basketball">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Basketball Match</h4>
              <p>Inter-school tournament</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="sports" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1579952363873-27f3bade9f55?w=600" alt="Cricket">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Cricket Championship</h4>
              <p>School cricket team in action</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Cultural Photos -->
      <div class="gallery-item" data-category="cultural" data-aos="fade-up">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=600" alt="Dance">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Dance Performance</h4>
              <p>Annual day celebration</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="cultural" data-aos="fade-up" data-aos-delay="100">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600" alt="Music">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Music Concert</h4>
              <p>Student orchestra performance</p>
            </div>
          </div>
        </div>
      </div>

      <div class="gallery-item" data-category="cultural" data-aos="fade-up" data-aos-delay="200">
        <div class="gallery-item-image">
          <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=600" alt="Art">
          <div class="gallery-item-overlay">
            <div class="gallery-item-info">
              <h4>Art Exhibition</h4>
              <p>Student artwork showcase</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CSS -->
<style>
  :root {
    --primary-color: #EC3237;
    --secondary-color: #FBBB71;
    --dark-color: #363435;
    --light-color: #FEFEFE;
    --gradient-primary: linear-gradient(135deg, #EC3237 0%, #C72C31 100%);
    --gradient-secondary: linear-gradient(135deg, #FBBB71 0%, #F9A952 100%);
  }

  #gallery {
    padding: 80px 0;
  }

  .section-title {
    font-size: 42px;
    font-weight: 800;
    color: var(--dark-color);
    position: relative;
    display: inline-block;
  }

  .section-title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: var(--gradient-secondary);
    border-radius: 2px;
  }

  .section-subtitle {
    color: #666;
    font-size: 18px;
  }

  .category-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
    margin: 40px 0;
  }

  .filter-btn {
    padding: 0.6rem 1.5rem;
    background: white;
    color: var(--dark-color);
    border: 2px solid #eee;
    border-radius: 50px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
  }

  .filter-btn:hover {
    border-color: var(--primary-color);
    color: var(--primary-color);
    transform: translateY(-2px);
  }

  .filter-btn.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
  }

  .gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 24px;
  }

  .gallery-item {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    transition: all 0.3s;
  }

  .gallery-item:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
  }

  .gallery-item-image {
    position: relative;
    padding-top: 75%;
    overflow: hidden;
  }

  .gallery-item-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s;
  }

  .gallery-item:hover img {
    transform: scale(1.1);
  }

  .gallery-item-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
    display: flex;
    align-items: flex-end;
    padding: 20px;
    opacity: 0;
    transition: opacity 0.3s;
  }

  .gallery-item:hover .gallery-item-overlay {
    opacity: 1;
  }

  .gallery-item-info h4 {
    color: white;
    margin: 0;
  }

  .gallery-item-info p {
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
    font-size: 0.9rem;
  }
</style>

<!-- JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800,
    once: true,
    offset: 100
  });

  // Gallery filter
  const filterBtns = document.querySelectorAll('.filter-btn');
  const galleryItems = document.querySelectorAll('.gallery-item');
  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const category = btn.dataset.category;
      galleryItems.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
          item.style.display = 'block';
          setTimeout(() => (item.style.opacity = '1'), 10);
        } else {
          item.style.opacity = '0';
          setTimeout(() => (item.style.display = 'none'), 300);
        }
      });
    });
  });
</script>
