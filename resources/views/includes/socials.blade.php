<!-- Sticky Share Component - Complete Include File -->
<style>
/* Sticky Share Icon Styles */
.sticky-share {
    position: fixed;
    top: 200px; /* Adjust based on your header height */
    right: 20px;
    z-index: 1000;
}

.share-icon {
    background: #007bff;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 4px 12px rgba(0, 123, 255, 0.3);
    transition: all 0.3s ease;
    border: none;
    outline: none;
}

.share-icon:hover {
    background: #0056b3;
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
}

.share-icon i {
    font-size: 24px;
}

.share-dropdown {
    position: absolute;
    top: 60px;
    right: 0;
    background: white;
    border-radius: 10px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    padding: 15px;
    min-width: 200px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(-10px);
    transition: all 0.3s ease;
}

.share-dropdown.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.share-dropdown::before {
    content: '';
    position: absolute;
    top: -8px;
    right: 20px;
    width: 0;
    height: 0;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 8px solid white;
}

.dropdown-title {
    color: #333;
    font-size: 24px;
    font-weight: 600;
    margin-bottom: 15px;
    text-align: center;
}

.social-links {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.social-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-decoration: none;
    color: white;
    transition: all 0.3s ease;
    transform: scale(0.9);
}
.logo-icon {
    fill: white;
}

.social-link:hover {
    transform: scale(1.1);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.social-link.facebook {
    background: #1877f2;
}

.social-link.twitter {
    background: #000000;
}

.social-link.linkedin {
    background: #0a66c2;
}

.social-link.instagram {
    background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
}

.social-link i {
    font-size: 24px;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .sticky-share {
        top: 100px;
        right: 15px;
    }
    
    .share-icon {
        width: 45px;
        height: 45px;
    }
    
    .share-icon i {
        font-size: 16px;
    }
    
    .share-dropdown {
        min-width: 180px;
        right: -10px;
    }
    
    .social-link {
        width: 35px;
        height: 35px;
    }
    
    .social-link i {
        font-size: 14px;
    }
    
}

/* Animation for social links */
@keyframes socialPulse {
    0% { transform: scale(0.9); }
    50% { transform: scale(1.05); }
    100% { transform: scale(0.9); }
}

.share-dropdown.active .social-link {
    animation: socialPulse 0.6s ease-in-out;
}

.share-dropdown.active .social-link:nth-child(1) { animation-delay: 0.1s; }
.share-dropdown.active .social-link:nth-child(2) { animation-delay: 0.2s; }
.share-dropdown.active .social-link:nth-child(3) { animation-delay: 0.3s; }
.share-dropdown.active .social-link:nth-child(4) { animation-delay: 0.4s; }
</style>

<!-- Sticky Share Icon HTML -->
<div class="sticky-share">
    <button class="share-icon" onclick="toggleShareDropdown()">
        <i class="fas fa-share-alt"></i>
    </button>
    
    <div class="share-dropdown" id="shareDropdown">
        <div class="dropdown-title">Share & Follow Us</div>
        <div class="social-links">
            <a href="https://www.facebook.com/coretechinfo007/" target="_blank" class="social-link facebook" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://x.com/coretechinfo" target="_blank" class="social-link twitter" title="X">
                {{-- <i class="fab fa-twitter"></i> --}}
                <svg style="margin-top: 5px;" version="1.1" id="svg5" xmlns:svg="http://www.w3.org/2000/svg"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1668.56 1221.19"
                                        style="enable-background:new 0 0 1668.56 1221.19;" xml:space="preserve">
                                    <g id="layer1" transform="translate(52.390088,-25.058597)">
                                        <path class="logo-icon " id="path1009" d="M283.94,167.31l386.39,516.64L281.5,1104h87.51l340.42-367.76L984.48,1104h297.8L874.15,558.3l361.92-390.99
                                            h-87.51l-313.51,338.7l-253.31-338.7H283.94z M412.63,231.77h136.81l604.13,807.76h-136.81L412.63,231.77z"/>
                                    </g>
                                </svg>
            </a>
            <a href="https://www.linkedin.com/in/coretechinfo-rohini-94b84926a/?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="social-link linkedin" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/coretech.info/" target="_blank" class="social-link instagram" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</div>

<!-- Sticky Share JavaScript -->
<script>
function toggleShareDropdown() {
    const dropdown = document.getElementById('shareDropdown');
    dropdown.classList.toggle('active');
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const shareContainer = document.querySelector('.sticky-share');
    if (!shareContainer.contains(event.target)) {
        document.getElementById('shareDropdown').classList.remove('active');
    }
});

// Close dropdown on scroll (optional)
window.addEventListener('scroll', function() {
    document.getElementById('shareDropdown').classList.remove('active');
});

// Add smooth entrance animation when page loads
document.addEventListener('DOMContentLoaded', function() {
    const shareIcon = document.querySelector('.share-icon');
    if (shareIcon) {
        shareIcon.style.transform = 'scale(0)';
        shareIcon.style.transition = 'transform 0.5s ease';
        
        setTimeout(() => {
            shareIcon.style.transform = 'scale(1)';
        }, 500);
    }
});
</script>