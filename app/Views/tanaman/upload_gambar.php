<?php echo $this->extend('_partials/template') ?>
<?php echo $this->section('isi') ?>


<style>

    body {
        background-color: #ffffff;
        min-height: 100vh;
    }

    .main-title {
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
        z-index: 2;
    }

    .title-text::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #28a745, #20c997);
        border-radius: 2px;
    }

    .title-subtitle {
        color: #6c757d;
        font-size: 1.1rem;
        font-weight: 400;
        margin-top: 1rem;
    }

    .upload-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        box-shadow: 
            0 20px 60px rgba(0, 0, 0, 0.1),
            0 8px 25px rgba(0, 0, 0, 0.08),
            inset 0 1px 0 rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 3rem;
        margin-top: 30px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .upload-card:hover {
        transform: translateY(-8px);
        box-shadow: 
            0 30px 80px rgba(0, 0, 0, 0.15),
            0 12px 35px rgba(0, 0, 0, 0.1),
            inset 0 1px 0 rgba(255, 255, 255, 0.9);
    }

    .card-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 2rem;
        position: relative;
        overflow: hidden;
    }

    .card-icon::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: rotate(45deg);
        animation: shine 3s ease-in-out infinite;
    }

    @keyframes shine {
        0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
        50% { transform: translateX(100%) translateY(100%) rotate(45deg); }
        100% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
    }

    .card-icon i {
        font-size: 2.5rem;
        color: white;
        z-index: 1;
        position: relative;
    }

    .card-title {
        font-size: 1.75rem;
        font-weight: 700;
        color: #212529;
        text-align: center;
        margin-bottom: 1rem;
    }

    .card-description {
        color: #6c757d;
        text-align: center;
        margin-bottom: 2.5rem;
        font-size: 1.05rem;
        line-height: 1.6;
    }

    .upload-form {
        position: relative;
    }

    .file-input-wrapper {
        position: relative;
        margin-bottom: 2rem;
    }

    .file-drop-zone {
        border: 2px dashed #28a745;
        border-radius: 16px;
        padding: 3rem 2rem;
        text-align: center;
        background: linear-gradient(135deg, rgba(40, 167, 69, 0.05) 0%, rgba(32, 201, 151, 0.05) 100%);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    .file-drop-zone::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(40, 167, 69, 0.1), transparent);
        transition: left 0.6s ease;
    }

    .file-drop-zone:hover::before {
        left: 100%;
    }

    .file-drop-zone:hover {
        border-color: #20c997;
        background: linear-gradient(135deg, rgba(40, 167, 69, 0.1) 0%, rgba(32, 201, 151, 0.1) 100%);
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.2);
    }

    .file-drop-zone.dragover {
        border-color: #20c997;
        background: linear-gradient(135deg, rgba(40, 167, 69, 0.15) 0%, rgba(32, 201, 151, 0.15) 100%);
        transform: scale(1.02);
    }

    .file-input {
        position: absolute;
        opacity: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        z-index: 2;
    }

    .upload-icon {
        font-size: 3rem;
        color: #28a745;
        margin-bottom: 1rem;
        display: block;
        transition: all 0.3s ease;
    }

    .file-drop-zone:hover .upload-icon {
        color: #20c997;
        transform: scale(1.1);
    }

    .upload-text {
        font-size: 1.1rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }

    .upload-hint {
        font-size: 0.9rem;
        color: #6c757d;
    }

    .file-info {
        display: none;
        background: rgba(40, 167, 69, 0.1);
        border: 1px solid #28a745;
        border-radius: 12px;
        padding: 1rem;
        margin-top: 1rem;
        text-align: left;
    }

    .file-info.show {
        display: block;
        animation: slideDown 0.3s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .file-name {
        font-weight: 600;
        color: #28a745;
        margin-bottom: 0.25rem;
    }

    .file-size {
        font-size: 0.85rem;
        color: #6c757d;
    }

    .submit-btn {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border: none;
        border-radius: 50px;
        padding: 1rem 3rem;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        width: 100%;
        box-shadow: 0 8px 25px rgba(40, 167, 69, 0.3);
    }

    .submit-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.6s ease;
    }

    .submit-btn:hover::before {
        left: 100%;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(40, 167, 69, 0.4);
    }

    .submit-btn:active {
        transform: translateY(-1px);
    }

    .submit-btn:disabled {
        background: #6c757d;
        cursor: not-allowed;
        transform: none;
        box-shadow: none;
    }

    .btn-icon {
        margin-right: 0.5rem;
        font-size: 1.2rem;
    }

    /* ===== IMPROVED HISTORY SECTION ===== */
    .history-section {
        margin-top: 5rem;
        position: relative;
    }

    .section-divider {
        background: linear-gradient(90deg, transparent, rgba(40, 167, 69, 0.3), transparent);
        height: 2px;
        border: none;
        margin: 4rem 0;
        border-radius: 1px;
    }

    .history-header {
        text-align: center;
        margin-bottom: 3rem;
        position: relative;
    }

    .history-title {
        font-size: 2.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #28a745, #20c997);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 1rem;
        position: relative;
    }

    .history-subtitle {
        color: #6c757d;
        font-size: 1.1rem;
        font-weight: 400;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .history-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(380px, 1fr));
        gap: 2rem;
        margin-top: 2rem;
        align-items: start;
    }

    .history-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        box-shadow: 
            0 10px 40px rgba(0, 0, 0, 0.08),
            0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .history-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #28a745, #20c997);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .history-card:hover {
        transform: translateY(-12px) scale(1.02);
        box-shadow: 
            0 25px 60px rgba(0, 0, 0, 0.15),
            0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .history-card:hover::before {
        opacity: 1;
    }

    .card-image-container {
        position: relative;
        height: 220px;
        overflow: hidden;
        background: linear-gradient(135deg, #f8f9fa, #e9ecef);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-image {
        width: 100%;
        height: 100%;
        object-fit: contain;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
    }

    .history-card:hover .card-image {
        transform: scale(1.05);
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(
            135deg,
            rgba(40, 167, 69, 0.1) 0%,
            rgba(32, 201, 151, 0.1) 100%
        );
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .history-card:hover .image-overlay {
        opacity: 1;
    }

    .card-content {
        padding: 2rem;
        position: relative;
    }

    .plant-label {
        font-size: 1.4rem;
        font-weight: 700;
        color: #28a745;
        margin-bottom: 0.75rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .plant-label::before {
        content: '🌱';
        font-size: 1.2rem;
    }

    .plant-description {
        color: #495057;
        font-size: 0.95rem;
        line-height: 1.6;
        margin-bottom: 1rem;
        white-space: pre-line;
        text-align: justify;
        position: relative;
    }

    /* Read More Functionality Styles */
    .description-container {
        position: relative;
        margin-bottom: 1rem;
    }

    .description-preview {
        color: #495057;
        font-size: 0.95rem;
        line-height: 1.6;
        text-align: justify;
        overflow: hidden;
        position: relative;
        max-height: 4.5em; /* Show approximately 3 lines */
        transition: max-height 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .description-preview.expanded {
        max-height: none;
    }

    .description-full {
        color: #495057;
        font-size: 0.95rem;
        line-height: 1.6;
        text-align: justify;
        white-space: pre-line;
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        transform: translateY(-10px);
    }

    .description-full.show {
        opacity: 1;
        max-height: 1000px;
        transform: translateY(0);
        margin-top: 0.5rem;
    }

    .read-more-btn {
        background: none;
        border: none;
        color: #28a745;
        font-size: 0.85rem;
        font-weight: 600;
        cursor: pointer;
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.3rem;
        transition: all 0.3s ease;
        margin-top: 0.5rem;
        position: relative;
    }

    .read-more-btn:hover {
        color: #20c997;
        gap: 0.5rem;
    }

    .read-more-btn i {
        font-size: 0.8rem;
        transition: transform 0.3s ease;
    }

    .read-more-btn.expanded i {
        transform: rotate(180deg);
    }

    .read-more-btn::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background: linear-gradient(90deg, #28a745, #20c997);
        transition: width 0.3s ease;
    }

    .read-more-btn:hover::after {
        width: 100%;
    }

    .fade-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 1.5em;
        background: linear-gradient(transparent, rgba(255, 255, 255, 0.95));
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .fade-overlay.hidden {
        opacity: 0;
    }

    .card-footer {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        margin-top: 1rem;
    }

    .timestamp {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6c757d;
        font-size: 0.85rem;
        font-weight: 500;
    }

    .timestamp i {
        color: #28a745;
        font-size: 0.9rem;
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 24px;
        border: 2px dashed rgba(40, 167, 69, 0.3);
        margin-top: 2rem;
    }

    .empty-icon {
        font-size: 4rem;
        color: #28a745;
        margin-bottom: 1.5rem;
        opacity: 0.7;
    }

    .empty-title {
        font-size: 1.5rem;
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.75rem;
    }

    .empty-description {
        color: #6c757d;
        font-size: 1rem;
        max-width: 400px;
        margin: 0 auto;
        line-height: 1.6;
    }

    /* Animation for cards */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .history-card {
        animation: fadeInUp 0.6s ease forwards;
    }

    .history-card:nth-child(1) { animation-delay: 0.1s; }
    .history-card:nth-child(2) { animation-delay: 0.2s; }
    .history-card:nth-child(3) { animation-delay: 0.3s; }
    .history-card:nth-child(4) { animation-delay: 0.4s; }
    .history-card:nth-child(5) { animation-delay: 0.5s; }
    .history-card:nth-child(6) { animation-delay: 0.6s; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .title-text {
            font-size: 2.2rem;
        }
        
        .upload-card {
            padding: 2rem 1.5rem;
            margin: 1rem;
        }
        
        .file-drop-zone {
            padding: 2rem 1rem;
        }
        
        .upload-icon {
            font-size: 2.5rem;
        }

        .history-title {
            font-size: 2rem;
        }

        .history-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .card-content {
            padding: 1.5rem;
        }

        .plant-label {
            font-size: 1.2rem;
        }

        .card-image-container {
            height: 200px;
        }

        .description-preview {
            max-height: 3.6em; /* Adjust for mobile */
        }
    }

    @media (max-width: 480px) {
        .title-text {
            font-size: 1.8rem;
        }
        
        .upload-card {
            padding: 1.5rem 1rem;
        }
        
        .card-title {
            font-size: 1.5rem;
        }
        
        .submit-btn {
            padding: 0.875rem 2rem;
            font-size: 1rem;
        }

        .history-title {
            font-size: 1.8rem;
        }

        .history-grid {
            grid-template-columns: 1fr;
            gap: 1rem;
        }

        .card-content {
            padding: 1.25rem;
        }

        .card-image-container {
            height: 180px;
        }

        .empty-state {
            padding: 3rem 1.5rem;
        }

        .empty-icon {
            font-size: 3rem;
        }

        .description-preview {
            max-height: 3em; /* Fewer lines on small screens */
        }
    }

    /* Loading Animation */
    .loading {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.9);
        z-index: 9999;
        justify-content: center;
        align-items: center;
    }

    .loading.show {
        display: flex;
    }

    .spinner {
        width: 60px;
        height: 60px;
        border: 4px solid #e9ecef;
        border-top: 4px solid #28a745;
        border-radius: 50%;
        animation: spin 1s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>

<div class="upload-container d-flex justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="upload-card">
                    <div class="card-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    
                    <h2 class="card-title">Deteksi Tanaman</h2>
                    <p class="card-description">
                        Unggah gambar tanaman dan biarkan sistem kami mengidentifikasi jenis tanamannya.
                    </p>
                    
                    <form action="/tanaman/hasil" method="post" enctype="multipart/form-data" class="upload-form" id="uploadForm">
                        <div class="file-input-wrapper">
                            <div class="file-drop-zone" id="dropZone">
                                <input type="file" name="gambar" required class="file-input" id="fileInput" accept="image/*">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <div class="upload-text">Klik untuk memilih gambar</div>
                                <div class="upload-hint">atau seret dan lepas file gambar di sini</div>
                            </div>
                            
                            <div class="file-info" id="fileInfo">
                                <div class="file-name" id="fileName"></div>
                                <div class="file-size" id="fileSize"></div>
                            </div>
                        </div>
                        
                        <button type="submit" class="submit-btn" id="submitBtn" disabled>
                            <i class="fas fa-leaf btn-icon"></i>
                            Analisis Tanaman
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- History Section -->
<div class="history-section">
    <hr class="section-divider">
    
    <?php if (!empty($riwayat)) : ?>
        <div class="history-header">
            <h2 class="history-title">Riwayat Deteksi</h2>
            <p class="history-subtitle">
                Jelajahi hasil deteksi tanaman sebelumnya dan temukan kembali informasi yang telah dianalisis sistem kami
            </p>
        </div>
        
        <div class="history-grid">
            <?php foreach ($riwayat as $index => $item) : ?>
                <div class="history-card" style="animation-delay: <?= ($index * 0.1) ?>s;">
                    <div class="card-image-container">
                        <img src="<?= esc($item['gambar']) ?>" class="card-image" alt="<?= esc($item['label']) ?>">
                        <div class="image-overlay"></div>
                    </div>
                    
                    <div class="card-content">
                        <h3 class="plant-label"><?= esc($item['label']) ?></h3>
                        
                        <div class="description-container">
                            <div class="description-preview" id="preview-<?= $index ?>">
                                <?= esc($item['deskripsi']) ?>
                                <div class="fade-overlay" id="fade-<?= $index ?>"></div>
                            </div>
                            <div class="description-full" id="full-<?= $index ?>">
                                <?= esc($item['deskripsi']) ?>
                            </div>
                            <button class="read-more-btn" onclick="toggleDescription(<?= $index ?>)" id="btn-<?= $index ?>">
                                <span class="btn-text">Lihat Selengkapnya</span>
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        
                        <div class="card-footer">
                            <div class="timestamp">
                                <i class="fas fa-calendar-alt"></i>
                                <span><?= date('d M Y, H:i', strtotime($item['waktu'])) ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        
    <?php else : ?>
        <div class="empty-state">
            <div class="empty-icon">
                <i class="fas fa-seedling"></i>
            </div>
            <h3 class="empty-title">Belum Ada Riwayat Deteksi</h3>
            <p class="empty-description">
                Mulai deteksi tanaman pertama Anda dengan mengunggah gambar di atas. 
                Semua hasil akan tersimpan di sini untuk referensi masa depan.
            </p>
        </div>
    <?php endif; ?>
</div>

<div class="loading" id="loading">
    <div class="spinner"></div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropZone = document.getElementById('dropZone');
    const fileInput = document.getElementById('fileInput');
    const fileInfo = document.getElementById('fileInfo');
    const fileName = document.getElementById('fileName');
    const fileSize = document.getElementById('fileSize');
    const submitBtn = document.getElementById('submitBtn');
    const uploadForm = document.getElementById('uploadForm');
    const loading = document.getElementById('loading');

    // Drag and drop functionality
    dropZone.addEventListener('dragover', function(e) {
        e.preventDefault();
        dropZone.classList.add('dragover');
    });

    dropZone.addEventListener('dragleave', function(e) {
        e.preventDefault();
        dropZone.classList.remove('dragover');
    });

    dropZone.addEventListener('drop', function(e) {
        e.preventDefault();
        dropZone.classList.remove('dragover');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            handleFileSelect(files[0]);
        }
    });

    // File input change
    fileInput.addEventListener('change', function(e) {
        if (e.target.files.length > 0) {
            handleFileSelect(e.target.files[0]);
        }
    });

    // Handle file selection
    function handleFileSelect(file) {
        // Check if file is an image
        if (!file.type.startsWith('image/')) {
            alert('Mohon pilih file gambar yang valid.');
            return;
        }

        // Check file size (max 10MB)
        if (file.size > 10 * 1024 * 1024) {
            alert('Ukuran file terlalu besar. Maksimal 10MB.');
            return;
        }

        // Display file info
        fileName.textContent = file.name;
        fileSize.textContent = formatFileSize(file.size);
        fileInfo.classList.add('show');
        
        // Enable submit button
        submitBtn.disabled = false;
        
        // Update drop zone appearance
        dropZone.style.borderColor = '#20c997';
        dropZone.querySelector('.upload-text').textContent = 'Gambar siap dianalisis';
        dropZone.querySelector('.upload-hint').textContent = 'Klik tombol analisis untuk memulai';
        dropZone.querySelector('.upload-icon').className = 'fas fa-check-circle upload-icon';
    }

    // Format file size
    function formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

    // Form submission
    uploadForm.addEventListener('submit', function(e) {
        if (!fileInput.files.length) {
            e.preventDefault();
            alert('Mohon pilih file gambar terlebih dahulu.');
            return;
        }
        
        // Show loading
        loading.classList.add('show');
    });

    // History card interactions
    const historyCards = document.querySelectorAll('.history-card');
    historyCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.zIndex = '10';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.zIndex = '1';
        });
    });

    // Lazy loading for images
    const images = document.querySelectorAll('.card-image');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.style.opacity = '1';
                observer.unobserve(img);
            }
        });
    });

    images.forEach(img => {
        img.style.opacity = '0';
        img.style.transition = 'opacity 0.3s ease';
        img.addEventListener('load', () => {
            img.style.opacity = '1';
        });
        imageObserver.observe(img);
    });

    function previewImage(file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            // You can add image preview functionality here if needed
        };
        reader.readAsDataURL(file);
    }
});
function toggleDescription(index) {
    const preview = document.getElementById(`preview-${index}`);
    const fadeOverlay = document.getElementById(`fade-${index}`);
    const button = document.getElementById(`btn-${index}`);
    const buttonText = button.querySelector('.btn-text');
    const buttonIcon = button.querySelector('i');
    
    // Toggle expanded class
    const isExpanded = preview.classList.contains('expanded');
    
    if (isExpanded) {
        // Collapse - tutup dropdown
        preview.classList.remove('expanded');
        fadeOverlay.classList.remove('hidden');
        buttonText.textContent = 'Lihat Selengkapnya';
        button.classList.remove('expanded');
    } else {
        // Expand - buka dropdown
        preview.classList.add('expanded');
        fadeOverlay.classList.add('hidden');
        buttonText.textContent = 'Lihat Lebih Sedikit';
        button.classList.add('expanded');
    }
}
</script>

<?php echo $this->endSection() ?>