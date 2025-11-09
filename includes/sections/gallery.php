<?php
/**
 * Gallery Grid with Category Filters
 * Modern Bootstrap 5 Grid + Filter UI only
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gallery Grid Filter Only</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
     
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
            border: 2px solid var(--border-color);
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
            margin-bottom: 60px;
        }
        .gallery-item {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            background: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            cursor: pointer;
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
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }
        .gallery-item:hover .gallery-item-image img {
            transform: scale(1.1);
        }
        .gallery-item-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(transparent, rgba(0,0,0,0.7));
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
            font-size: 1.1rem;
            margin-bottom: 0.3rem;
        }
        .gallery-item-info p {
            color: rgba(255,255,255,0.9);
            margin: 0;
            font-size: 0.9rem;
        }
        @media (max-width: 768px) {
            .gallery-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 16px;
            }
        }
    </style>
</head>
<body>

<div class="container" id`="gallery">

<!-- Gallery Heading -->
    <h2 class="display-2 fw-bold text-center mb-4 " style="letter-spacing:2px;">Gallery</h2>
    
    <!-- Category Filters -->
    <div class="category-filters">
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
        <div class="gallery-item" data-category="academics">
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
        <div class="gallery-item" data-category="academics">
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
        <div class="gallery-item" data-category="academics">
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
        <div class="gallery-item" data-category="sports">
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
        <div class="gallery-item" data-category="sports">
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
        <div class="gallery-item" data-category="sports">
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
        <div class="gallery-item" data-category="cultural">
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
        <div class="gallery-item" data-category="cultural">
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
        <div class="gallery-item" data-category="cultural">
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
        <!-- Infrastructure Photos -->
        <div class="gallery-item" data-category="infrastructure">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600" alt="Building">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>School Building</h4>
                        <p>Modern architecture and facilities</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-item" data-category="infrastructure">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=600" alt="Library">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>School Library</h4>
                        <p>Extensive collection of books</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-item" data-category="infrastructure">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?w=600" alt="Cafeteria">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>Cafeteria</h4>
                        <p>Nutritious meals in hygienic environment</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Activities Photos -->
        <div class="gallery-item" data-category="activities">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=600" alt="Reading">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>Reading Club</h4>
                        <p>Fostering love for literature</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-item" data-category="activities">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1581092918484-8313e1f6d46c?w=600" alt="Field Trip">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>Educational Trip</h4>
                        <p>Learning beyond classroom</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-item" data-category="activities">
            <div class="gallery-item-image">
                <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?w=600" alt="Drama">
                <div class="gallery-item-overlay">
                    <div class="gallery-item-info">
                        <h4>Drama Club</h4>
                        <p>Theater and performing arts</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Category filter functionality
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');
    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Update active button
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const category = btn.dataset.category;
            // Filter gallery items
            galleryItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
</script>
</body>
</html>
