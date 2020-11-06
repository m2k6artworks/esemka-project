document.addEventListener("DOMContentLoaded", () => {
    const profileBtn = document.querySelector('.profile-dropdown .profile-btn');
    const profileMenu = document.querySelector('.profile-dropdown .profile-menu');
    const notificationBtn = document.querySelector('.notification-dropdown .notification-btn');
    const notificationMenu = document.querySelector('.notification-dropdown .notification-menu');

    // Navbar Window Scroll Adjustment
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector('.navbar');
        const scrollMin = 50;

        if (document.body.scrollTop > scrollMin || document.documentElement.scrollTop > scrollMin)
            navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
        else
            navbar.style.boxShadow = "none";
    });

    // Navbar Profile button show and hide
    profileBtn.addEventListener("click", () => {
        if(notificationMenu.classList.contains("show"))
            notificationMenu.classList.remove("show");

        profileMenu.classList.toggle('show');
    });

    notificationBtn.addEventListener("click", () => {
        if(profileMenu.classList.contains("show"))
            profileMenu.classList.remove("show");
        
        notificationMenu.classList.toggle('show');
    });
});