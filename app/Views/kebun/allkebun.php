<?php echo $this->extend('_partials/template')?>
<?php echo $this->section('isi')?>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    background-color: #ffffff;
    line-height: 1.6;
  }

  /* Hero Section */
  .hero-section {
    padding: 60px 0 40px;
    text-align: center;
    background: linear-gradient(180deg, #ffffff 0%, #ffffff 100%);
  }

  .catalog-text {
    font-family: 'Inter', sans-serif;
    font-weight: 800;
    font-size: 3.2rem;
    color: #00b383;
    text-shadow: none;
    animation: slideInFromTop 1s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    margin-bottom: 12px;
  }

  .catalog-text::after {
    content: '';
    position: absolute;
    bottom: -12px;
    left: 50%;
    transform: translateX(-50%);
    width: 80px;
    height: 4px;
    background: #00b383;
    border-radius: 2px;
    animation: slideInFromBottom 1s cubic-bezier(0.4, 0, 0.2, 1) 0.3s both;
  }

  @keyframes slideInFromTop {
    0% {
      transform: translateY(-50px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  @keyframes slideInFromBottom {
    0% {
      transform: translateX(-50%) scaleX(0);
      opacity: 0;
    }
    100% {
      transform: translateX(-50%) scaleX(1);
      opacity: 1;
    }
  }

  /* Card Container */
  .card-container {
    display: flex;
    flex-direction: column;
    gap: 32px;
    padding: 40px 20px;
    max-width: 1200px;
    margin: 0 auto;
  }

  /* Modern Card Design */
  .modern-card {
    background: #ffffff;
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 
      0 4px 20px rgba(0, 179, 131, 0.1),
      0 2px 8px rgba(0, 179, 131, 0.05);
    border: 1px solid #00b383;
    animation: cardSlideIn 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
  }

  .modern-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: linear-gradient(90deg, #00b383 0%, #00b383 50%, #00b383 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .modern-card:hover::before {
    opacity: 1;
  }

  .modern-card:hover {
    transform: translateY(-8px);
    box-shadow: 
      0 12px 40px rgba(0, 179, 131, 0.2),
      0 4px 16px rgba(0, 179, 131, 0.1);
  }

  @keyframes cardSlideIn {
    0% {
      transform: translateY(40px);
      opacity: 0;
    }
    100% {
      transform: translateY(0);
      opacity: 1;
    }
  }

  /* Card Header */
  .modern-card-header {
    padding: 32px;
    border-bottom: 1px solid rgba(0, 179, 131, 0.1);
  }

  .garden-title {
    font-size: 1.8rem;
    font-weight: 700;
    color:#00b383;
    margin-bottom: 24px;
    text-decoration: none;
    transition: color 0.3s ease;
    display: inline-block;
  }

  .garden-title:hover {
    color:rgb(0, 0, 0);
    text-decoration: none;
  }

  /* Owner Section */
  .owner-section {
    margin-bottom: 28px;
  }

  .owner-label {
    color: #00b383;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 12px;
    display: block;
    text-transform: uppercase;
    letter-spacing: 0.5px;
  }

  .modern-chip {
    background: #ffffff;
    border: 1px solid #00b383;
    border-radius: 50px;
    padding: 12px 20px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    text-decoration: none;
    color: #00b383;
    font-weight: 600;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
  }

  .modern-chip::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 179, 131, 0.1), transparent);
    transition: left 0.5s ease;
  }

  .modern-chip:hover::before {
    left: 100%;
  }

  .modern-chip:hover {
    transform: translateY(-2px);
    background: #00b383;
    color: #ffffff;
    text-decoration: none;
    box-shadow: 
      0 8px 25px rgba(0, 179, 131, 0.3),
      0 2px 8px rgba(0, 179, 131, 0.2);
    border-color: #00b383;
  }

  .profile-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #00b383;
    transition: all 0.3s ease;
  }

  .modern-chip:hover .profile-avatar {
    border-color: #ffffff;
    transform: scale(1.05);
  }

  /* Card Content Layout */
  .card-content {
    display: grid;
    grid-template-columns: 320px 1fr;
    gap: 36px;
    align-items: start;
  }

  /* Garden Image */
  .garden-image-container {
    position: relative;
  }

  .garden-image {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 16px;
    box-shadow: 
      0 8px 24px rgba(0, 179, 131, 0.15),
      0 2px 8px rgba(0, 179, 131, 0.1);
    transition: all 0.3s ease;
    border: 1px solid #00b383;
  }

  .garden-image:hover {
    transform: scale(1.02);
    box-shadow: 
      0 12px 32px rgba(0, 179, 131, 0.25),
      0 4px 12px rgba(0, 179, 131, 0.15);
  }

  /* Plants Section */
  .plants-section {
    flex: 1;
  }

  .section-title {
    color: #00b383;
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 24px;
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
  }

  .section-title::before {
    content: '🌱';
    font-size: 1.4rem;
  }

  .section-title::after {
    content: '';
    flex: 1;
    height: 1px;
    background: linear-gradient(90deg, #00b383, transparent);
    margin-left: 16px;
  }

  /* Plant Items */
  .plant-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }

  .plant-item {
    background: #ffffff;
    border-radius: 16px;
    padding: 24px;
    margin-bottom: 16px;
    border: 1px solid #00b383;
    transition: all 0.3s ease;
    position: relative;
  }

  .plant-item::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 4px;
    background: #00b383;
    border-radius: 0 4px 4px 0;
    opacity: 0;
    transition: opacity 0.3s ease;
  }

  .plant-item:hover .plant-name {
    color: #00b383;
  }

  .plant-item:hover .plant-date {
    background: #ffffff;
    color: #00b383;
    border-color: #ffffff;
  }

  .plant-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 16px;
  }

  .plant-name {
    color: #00b383;
    font-weight: 700;
    font-size: 1.1rem;
    transition: color 0.3s ease;
  }

  .plant-date {
    color: #00b383;
    font-size: 0.9rem;
    font-weight: 500;
    background: #ffffff;
    padding: 6px 16px;
    border-radius: 20px;
    border: 1px solid #00b383;
    box-shadow: 0 2px 4px rgba(0, 179, 131, 0.1);
    transition: all 0.3s ease;
  }

  /* Modern Progress Bar */
  .modern-progress {
    position: relative;
    height: 12px;
    background: rgba(0, 179, 131, 0.1);
    border-radius: 20px;
    overflow: hidden;
    margin-top: 12px;
    box-shadow: inset 0 2px 4px rgba(0, 179, 131, 0.1);
  }

  .modern-progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #00b383 0%, #00b383 100%);
    border-radius: 20px;
    position: relative;
    transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 0 2px 8px rgba(0, 179, 131, 0.3);
  }


  @keyframes shimmer {
    0% { left: -100%; }
    100% { left: 100%; }
  }

  .progress-text {
    position: absolute;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    color: #ffffff;
    font-size: 0.8rem;
    font-weight: 700;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
  }

  /* Empty State */
  .empty-plants {
    text-align: center;
    color: #00b383;
    font-style: italic;
    padding: 48px 24px;
    background: #ffffff;
    border-radius: 16px;
    border: 2px dashed #00b383;
    transition: all 0.3s ease;
  }



  .empty-plants::before {
    content: '🌿';
  }

  /* No Data State */
  .no-data {
    text-align: center;
    color: #00b383;
    font-size: 1.3rem;
    font-weight: 600;
    padding: 80px 20px;
    background: #ffffff;
    border-radius: 24px;
    border: 1px solid #00b383;
    box-shadow: 
      0 4px 16px rgba(0, 179, 131, 0.1),
      0 2px 8px rgba(0, 179, 131, 0.05);
  }

  /* Breadcrumb */
  .breadcrumb a {
    color: #00b383;
    text-decoration: none;
  }

  .breadcrumb a:hover {
    color: #00b383;
    text-decoration: underline;
  }

  .breadcrumb-item {
    color: #00b383;
  }

  /* Responsive Design */
  @media (max-width: 768px) {
    .catalog-text {
      font-size: 2.4rem;
    }

    .card-content {
      grid-template-columns: 1fr;
      gap: 28px;
    }

    .modern-card-header {
      padding: 24px;
    }

    .card-container {
      padding: 20px 12px;
      gap: 24px;
    }

    .plant-header {
      flex-direction: column;
      align-items: flex-start;
      gap: 12px;
    }

    .plant-date {
      align-self: flex-end;
    }

    .garden-image {
      height: 180px;
    }
  }

  @media (max-width: 480px) {
    .catalog-text {
      font-size: 2rem;
    }

    .modern-chip {
      padding: 10px 16px;
      gap: 8px;
    }

    .profile-avatar {
      width: 32px;
      height: 32px;
    }

    .plant-item {
      padding: 20px;
    }

    .modern-card-header {
      padding: 20px;
    }
  }


</style>

<!-- Breadcrumb -->
<nav aria-label="breadcrumb" class="px-4 px-lg-5" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%2300b383'/%3E%3C/svg%3E&#34;);">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Semua Kebun</li>
    </ol>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1 class="catalog-text">Semua Kebun</h1>
    </div>
</section>

<!-- Catalog Section -->
<section class="catalog-section">
    <div class="container">
        <div class="card-container">
            <?php if (isset($kebun) && !empty($kebun)): ?>
                <?php foreach ($kebun as $item):?>
                    <?php
                        // Foto Profile
                        $profilePath = $item['profile'] ?? 'default.png';
                        if (filter_var($profilePath, FILTER_VALIDATE_URL)) {
                            $profile = $profilePath;
                        } else {
                            $profile = base_url('uploads/profile/' . $profilePath);
                        }
                    ?>
                    <div class="modern-card">
                        <div class="modern-card-header">
                            <!-- Garden Title -->
                            <h2>
                                <a href="/kebun/detail/<?= $item['id_kebun']; ?>" class="garden-title">
                                    <?= esc($item['nama_kebun']); ?>
                                </a>
                            </h2>
                            
                            <!-- Owner Section -->
                            <div class="owner-section">
                                <span class="owner-label">Owner</span>
                                <a href="/kebun/kebun-<?= esc($item['id_user']); ?>" class="modern-chip">
                                    <img src="<?= esc($profile); ?>" alt="<?= esc($item['nama_users']); ?>" class="profile-avatar">
                                    <?= esc($item['nama_users']); ?>
                                </a>
                            </div>

                            <!-- Card Content -->
                            <div class="card-content">
                                <!-- Garden Image -->
                                <div class="garden-image-container">
                                    <img src="/uploads/kebun/<?= $item['poto_kebun']; ?>" alt="<?= esc($item['nama_kebun']); ?>" class="garden-image">
                                </div>

                                <!-- Plants Section -->
                                <div class="plants-section">
                                    <h3 class="section-title">Tanaman</h3>
                                    
                                    <?php if (!empty($item['tanaman'])): ?>
                                        <ul class="plant-list">
                                            <?php foreach ($item['tanaman'] as $tanaman): ?>
                                                <li class="plant-item">
                                                    <div class="plant-header">
                                                        <span class="plant-name"><?= esc($tanaman['nama']); ?></span>
                                                        <span class="plant-date"><?= esc($tanaman['tanggal_selesai']) ?></span>
                                                    </div>
                                                    
                                                    <div class="modern-progress">
                                                        <div class="modern-progress-bar" style="width: <?= $tanaman['progress']; ?>%">
                                                            <div class="progress-text"><?= $tanaman['progress']; ?>%</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <div class="empty-plants">
                                            Belum ada tanaman
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="no-data">
                    Data Kebun Tidak Tersedia
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
const successMessage = "<?= session()->getFlashdata('success') ?>";
const errorMessage = "<?= session()->getFlashdata('error') ?>";

if (successMessage) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
        customClass: {
            popup: 'toast-popup'
        }
    });
    Toast.fire({
        icon: "success",
        title: successMessage 
    });
}

if (errorMessage) {
    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
        customClass: {
            popup: 'toast-popup'
        }
    });
    Toast.fire({
        icon: "error",
        title: errorMessage 
    });
}

// Progressive loading animation for progress bars
document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.modern-progress-bar');
    
    progressBars.forEach((bar, index) => {
        const targetWidth = bar.style.width;
        bar.style.width = '0%';
        
        setTimeout(() => {
            bar.style.width = targetWidth;
        }, 800 + (index * 150));
    });

    // Smooth reveal animation for cards
    const cards = document.querySelectorAll('.modern-card');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>

<?php echo $this->endSection()?>