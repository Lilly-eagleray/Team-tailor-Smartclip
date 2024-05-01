<script>
document.addEventListener("DOMContentLoaded", function() {
window.addEventListener('scroll', () => {
  const header =  document.querySelector('.stickynav');
  if (window.scrollY > 50) {
    header.classList.add('js-is-sticky');
  } else {
    header.classList.remove('js-is-sticky');
  }
});

  const dropdowns = document.querySelectorAll(".dropdown");

  dropdowns.forEach(dropdown => {
    const dropdownToggle = dropdown.querySelector(".dropdown-toggle");
    const dropdownMenu = dropdown.querySelector(".dropdown-menu");

    dropdownToggle.addEventListener("click", function(e) {
      e.preventDefault();

      dropdowns.forEach(item => {
        if (item !== dropdown) {
          item.classList.remove("show");
        }
      });

      dropdown.classList.toggle("show");
      dropdownMenu.classList.toggle("show");
    });

    document.addEventListener("click", function(e) {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove("show");
        dropdownMenu.classList.remove("show");
      }
    });
  });
});
document.addEventListener("DOMContentLoaded", function() {
  const menuButton = document.querySelector('.burger-menu-btn');
  const mobileMenu = document.querySelector('.navbar-collapse');
  const header = document.querySelector('.stickynav');

  menuButton.addEventListener('click', function() {
    const isCollapsed = menuButton.classList.contains('collapsed');

    if (isCollapsed) {
      menuButton.classList.remove('collapsed');
      mobileMenu.classList.add('show');
      header.classList.add('is_menu-active');
    } else {
      menuButton.classList.add('collapsed');
      mobileMenu.classList.remove('show');
      header.classList.remove('is_menu-active');
    }
  });
});
</script>
<div class="stickynav " style="position: sticky;">
    <div class="container container_wide">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-sc navbar-expand-xl">
                    <a href="/" class="custom-logo-link navbar-brand" rel="home" aria-label="Smartclip">
                        <svg viewBox="0 0 127.56 31.12" xmlns="http://www.w3.org/2000/svg"><g fill="#ffffff"><path d="m1.18 8.34 7.14-6.95a14.9 14.9 0 0 0 -1.42.75l-5.37 5.5z"></path><path d="m0 12.39 12.63-12.28c-.33 0-.66.11-1 .17l-11.58 11.88a1.64 1.64 0 0 1 -.05.23z"></path><path d="m.13 15.22 15.54-15.14c-.28 0-.56 0-.85-.06l-14.71 15.09a.36.36 0 0 1 .02.11z"></path><path d="m.81 17.49 17.34-16.9c-.25-.08-.49-.16-.75-.22l-16.62 17.06z"></path><path d="m1.89 19.36 18.33-17.86c-.22-.12-.43-.25-.65-.35l-17.71 18.17z"></path><path d="m3.3 20.91 18.64-18.17c-.17-.16-.35-.32-.54-.47l-18.13 18.61z"></path><path d="m5.05 22.14 18.3-17.84a6.17 6.17 0 0 0 -.44-.57l-17.91 18.38z"></path><path d="m3.24 27.4 17.92-18.4h-.05l-18.3 17.83c.19.17.28.39.43.57z"></path><path d="m4.75 28.85 18.14-18.6-18.68 18.14c.18.15.35.32.54.46z"></path><path d="m6.58 30 17.72-18.2-18.36 17.83c.21.12.42.24.64.37z"></path><path d="m8.75 30.76 16.63-17.06v-.07l-17.38 16.91z"></path><path d="m11.33 31.11 14.67-15.11a.5.5 0 0 0 0-.12l-15.51 15.17c.28.02.56.05.84.06z"></path><path d="m14.52 30.84 11.58-11.84v-.23l-12.57 12.23c.33 0 .66-.09.99-.16z"></path><path d="m19.25 29 5.37-5.51c.13-.23.24-.46.35-.7l-7.13 7a13.64 13.64 0 0 0 1.41-.79z"></path><path d="m37.3 17.9h2.7c.1 1.1 1.16 1.89 2.76 1.89 1.41 0 2.41-.52 2.41-1.4 0-1.08-1-1.19-2.83-1.41-2.68-.32-4.84-.88-4.84-3.27 0-2.24 2-3.71 5-3.68s5.14 1.35 5.3 3.71h-2.8c-.09-1-1.08-1.64-2.47-1.64s-2.25.51-2.25 1.37 1.07 1 2.76 1.23c2.68.3 4.93.9 4.93 3.49 0 2.25-2.18 3.67-5.19 3.67-3.19 0-5.39-1.47-5.48-3.96z"></path><path d="m49 10.18h2.5l.3 1.49a4.16 4.16 0 0 1 3.49-1.62 3.71 3.71 0 0 1 3.59 2 4.74 4.74 0 0 1 4.1-2c2.32 0 4.38 1.26 4.38 5.24v6.43h-2.85v-6.48c0-1.86-.77-2.85-2.3-2.85s-2.57 1.14-2.57 3.06v6.27h-2.89v-6.48c0-1.86-.76-2.85-2.29-2.85s-2.57 1.21-2.57 3.1v6.23h-2.89z"></path><path d="m68.14 18.46c0-2.41 1.83-3.76 5.28-3.76h2.66v-.63c0-1.16-.9-1.88-2.4-1.88s-2.27.6-2.44 1.55h-2.77c.23-2.36 2.26-3.69 5.32-3.69 3.24 0 5.14 1.46 5.14 4.18v7.49h-2.52l-.23-1.55a4.48 4.48 0 0 1 -3.71 1.69c-2.59 0-4.33-1.24-4.33-3.4zm7.94-1.46v-.32h-2.75c-1.44 0-2.27.54-2.27 1.62 0 .9.74 1.49 2 1.49a2.73 2.73 0 0 0 3.02-2.79z"></path><path d="m80.16 10.18h2.59l.25 1.74a3.66 3.66 0 0 1 3.47-1.74h.56v2.57h-1.18c-2.08 0-2.85 1.48-2.85 3.25v5.73h-2.84z"></path><path d="m87.89 18.51v-11.51h2.87v3.21h2.8v2.41h-2.8v5.53c0 .86.35 1.2 1.21 1.2h1.78v2.4h-2.55c-2.27-.03-3.31-1.09-3.31-3.24z"></path><path d="m93.82 15.94c0-3.55 2.38-5.89 6-5.89 3.1 0 5.12 1.66 5.58 4.34h-3a2.6 2.6 0 0 0 -2.67-2c-1.85 0-3 1.46-3 3.57s1.2 3.6 3 3.6a2.57 2.57 0 0 0 2.69-2.07h2.94c-.46 2.7-2.48 4.39-5.63 4.39a5.6 5.6 0 0 1 -5.91-5.94z"></path><path d="m106.39 6h2.87v15.72h-2.87z"></path><path d="m110.63 7.08a1.6 1.6 0 0 1 1.69-1.6 1.62 1.62 0 0 1 1.68 1.6 1.64 1.64 0 0 1 -1.71 1.64 1.62 1.62 0 0 1 -1.66-1.64zm.25 3.1h2.87v11.54h-2.87z"></path><path d="m115.37 10.18h2.5l.33 1.67a4.52 4.52 0 0 1 3.75-1.8c3.24 0 5.58 2.25 5.58 5.91s-2.34 5.9-5.56 5.9a4.49 4.49 0 0 1 -3.72-1.69v6h-2.88zm9.24 5.76c0-2.11-1.27-3.57-3.22-3.57s-3.17 1.46-3.17 3.55 1.23 3.62 3.17 3.62 3.22-1.48 3.22-3.6z"></path></g></svg>                        <div class="img" style="-webkit-mask-image: url('https://smartclip.wpenginepowered.com/wp-content/themes/smartclip-new/assets/images/logo.png'); mask-image: url('https://smartclip.wpenginepowered.com/wp-content/themes/smartclip-new/assets/images/logo.png');"></div>
                    </a>
                    <button class="navbar-toggler burger-menu-btn" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-burger"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto"><li class="dropdown nav-item"><a title="Technology" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-8580">Technology</a>
<div class="dropdown-menu" aria-labelledby="menu-item-dropdown-8580" role="menu">
<a title="smartx Ad Server &amp; SSP" href="https://smartclip.tv/smartx/" class="dropdown-item">smartx Ad Server &amp; SSP</a><a title="Ad Product Gallery" href="https://smartclip.tv/ad-product-gallery/" class="dropdown-item">Ad Product Gallery</a><a title="Technology Partnerships" href="https://smartclip.tv/technology-partnerships/" class="dropdown-item">Technology Partnerships</a></div>
</li>
<li class="dropdown nav-item"><a title="Broadcasters" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-8581">Broadcasters</a>
<div class="dropdown-menu" aria-labelledby="menu-item-dropdown-8581" role="menu">
<a title="Broadcaster Solutions" href="https://smartclip.tv/broadcasters/" class="dropdown-item">Broadcaster Solutions</a><a title="Product Advisory Board" href="https://smartclip.tv/product-advisory-board/" class="dropdown-item">Product Advisory Board</a></div>
</li>
<li class="nav-item"><a title="Publishers" href="https://smartclip.tv/publishers/" class="nav-link">Publishers</a></li>
<li class="dropdown nav-item"><a title="Resources" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-429">Resources</a>
<div class="dropdown-menu" aria-labelledby="menu-item-dropdown-429" role="menu">
<a title="Resource Hub" href="https://smartclip.tv/resources/" class="dropdown-item">Resource Hub</a><a title="Adtech Glossary" href="https://smartclip.tv/adtech-glossary/" class="dropdown-item">Adtech Glossary</a></div>
</li>
<li class="dropdown nav-item"><a title="Careers" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-8582">Careers</a><span class="number">21</span>
<div class="dropdown-menu" aria-labelledby="menu-item-dropdown-8582" role="menu">
<a title="Jobs" href="https://smartclip.tv/jobs/" class="dropdown-item">Jobs</a><a title="Culture" href="https://smartclip.tv/culture/" class="dropdown-item">Culture</a><a title="Blog - Life at smartclip" href="/culture/life-at-smartclip-blog/" class="dropdown-item">Blog – Life at smartclip</a></div>
</li>
<li class="dropdown nav-item"><a title="Company" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle nav-link" id="menu-item-dropdown-418">Company</a>
<div class="dropdown-menu" aria-labelledby="menu-item-dropdown-418" role="menu">
<a title="About Us" href="https://smartclip.tv/about/" class="dropdown-item">About Us</a><a title="Responsibility" href="https://smartclip.tv/responsibility/" class="dropdown-item">Responsibility</a><a title="Newsroom" href="https://smartclip.tv/newsroom/" class="dropdown-item">Newsroom</a></div>
</li>
<li class="button_style nav-item"><a title="Contact" href="https://smartclip.tv/contact/" class="nav-link">Contact</a></li>
</ul>                    </div>
                </nav>
            </div>
        </div>
    </div>
    </div>
    <style>
    .stickynav {
    transform: translate3d(0, 0, 0);
    padding-top: 1.5625rem;
    font-weight: bold;
    z-index: 999;
    top: 0;
    left: 0;
    right: 0;
    min-width: 320px;
    position: fixed !important;
    transition: background 0.5s ease;
}
.stickynav .navbar .custom-logo-link {
    position: relative
}

@media (max-width: 991.98px) {
    .stickynav .navbar .custom-logo-link {
        opacity:1 !important
    }
}

.stickynav .navbar .custom-logo-link .img {
    position: absolute;
    left: 0;
    top: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    -webkit-mask-size: contain;
    -webkit-mask-position: center center;
    -webkit-mask-repeat: no-repeat;
    background-color: #fff
}

.stickynav .navbar .custom-logo-link svg {
    max-width: 245px;
}
.stickynav.js-is-sticky .navbar .custom-logo-link svg {
    width: 13.077rem;
}
.stickynav .custom-logo-link svg {
    height: 100%;
    width: 15.5625rem;
}

@media (max-width: 1300px) {
    .stickynav .navbar .custom-logo-link svg {
        max-width:190px
    }
}

@media (max-width: 991.98px) {
    .stickynav .navbar .custom-logo-link svg {
        max-width:152px;
        width: 100%
    }
}

.stickynav .navbar .burger-menu-btn {
    font-size: 16px
}

.stickynav .navbar .navbar-nav {
    align-items: center;
    align-content: center
}

@media (max-width: 991.98px) {
    .stickynav .navbar .navbar-nav li {
        width:100%
    }
}

.stickynav .navbar .navbar-nav li .number {
    display: none
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #212529;
    text-align: inherit;
    white-space: nowrap;
    white-space-collapse: collapse;
    text-wrap: nowrap;
    background-color: transparent;
    border: 0;
}
.stickynav .navbar .navbar-nav li a {
    font-weight: 600;
    color: #fff;
    position: relative;
    z-index: 1000;
    display: inline-flex;
    align-items: center;
    align-content: center;
    line-height: 30px;
    font-size: 18px;
    padding: 8px 12px;
}
.dropdown {
    position: relative;
}
.stickynav.js-is-sticky .navbar-sc .navbar-nav li a, .stickynav.js-is-stuck .navbar-sc .navbar-nav li a {
    color: #000;
}
@media (max-width: 1300px) {
    .stickynav .navbar .navbar-nav li a {
        padding:8px
    }
}

@media (max-width: 991.98px) {
    .stickynav .navbar .navbar-nav li a {
        color:#000;
        font-weight: 400;
        vertical-align: top;
        font-size: 1.25rem;
        line-height: 1.875rem;
        padding: 0.9375rem 1.5625rem
    }
}

.stickynav .navbar .navbar-nav li a:before {
    left: 12px !important;
    right: 12px !important
}

.stickynav .navbar .navbar-nav li.disabled a {
    color: rgba(15, 15, 15, 0.3);
    pointer-events: none
}

.stickynav .navbar .navbar-nav li.active a:before {
    height: 1px;
    bottom: 0
}

.stickynav .navbar .navbar-nav li:hover:not(.active) a:before {
    content: "";
    position: absolute;
    left: 0.5rem;
    right: 0.5rem;
    bottom: 0;
    display: block;
    height: 1px;
    background: #fff;
    opacity: 0.5
}

.stickynav .navbar .navbar-nav li.button_style a {
    display: inline-flex;
    background: #bf005c;
    font-size: 18px;
    color: #fbfbfb;
    font-weight: 700;
    line-height: 1.4;
    height: 2.666666667em;
    letter-spacing: 0.01em;
    border-radius: 3.111111111em;
    vertical-align: middle;
    padding: 0.688888889em 1.333333333em 0.6388888889em 1.333333333em !important;
    margin-left: 12px
}

.stickynav .navbar .navbar-nav li.button_style a:before {
    display: none !important
}

.stickynav .navbar .navbar-nav li.button_style a:hover {
    text-decoration: none !important;
    background: #99004a;
    border-color: #99004a
}

@media (max-width: 991.98px) {
    .stickynav .navbar .navbar-nav li.button_style a {
        color:#000 !important;
        font-weight: 400 !important;
        vertical-align: top !important;
        font-size: 1.25rem !important;
        height: auto !important;
        background: none !important;
        border-radius: 0 !important;
        line-height: 1.875rem !important;
        padding: 0.9375rem 1.5625rem !important;
        margin-left: 0 !important
    }

    .stickynav .navbar .navbar-nav li.button_style a:hover {
        background: transparent !important
    }
}
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: 0.5rem 0;
    margin: 0.125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.15);
}
.dropdown-menu.show {
    display: block;
}
.stickynav .navbar .navbar-nav li .dropdown-menu {
    padding: 24px;
    border-radius: 16px;
    background: #fff;
    box-shadow: 0px 3px 8px 0px rgba(0, 0, 0, 0.15);
    top: 60px;
}
.stickynav .navbar-nav .dropdown-toggle:after {
    border: none;
    content: "\e907";
    font-size: 0.5625rem;
    margin-left: 0.5rem;
    font-family: "icomoon" !important;
    vertical-align: middle;
}
.stickynav .navbar .navbar-nav li .dropdown-menu:before {
    left: 0 !important;
    right: 0 !important;
    background: none !important;
    height: 60px
}

.stickynav .navbar .navbar-nav li .dropdown-menu a {
    font-size: 18px;
    color: #242937;
    line-height: 140%;
    letter-spacing: 0.18px;
    font-weight: 400
}

.stickynav .navbar .navbar-nav li .dropdown-menu a:not(:last-child) {
    margin-bottom: 16px
}

@media (max-width: 991.98px) {
    .stickynav .navbar .navbar-nav li .dropdown-menu {
        border-radius:0;
        box-shadow: none;
        padding: 0
    }

    .stickynav .navbar .navbar-nav li .dropdown-menu a:not(:last-child) {
        margin-bottom: 0
    }
}

@media (max-width: 991.98px) {
    .stickynav .navbar .navbar-nav li.dropdown>a {
        width:100%
    }
}

.stickynav.js-is-sticky {
    box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.2);
    padding-top: 0 !important;
    background: #fff;
}

.stickynav.js-is-sticky .img {
    background-color: #bf005c !important
}

.stickynav.js-is-sticky svg g {
    fill: #bf005c
}

.stickynav.js-is-sticky .navbar .navbar-nav li.nav-item:last-child .nav-link {
    line-height: 1.4;
    background: #bf005c;
    border-color: #bf005c;
    color: #fbfbfb;
    text-transform: none;
    letter-spacing: normal;
    margin-left: 12px;
    font-size: 18px;
    font-weight: 700
}

.stickynav.js-is-sticky .navbar .navbar-nav li.nav-item:last-child .nav-link:hover {
    background: #99004a;
    border-color: #99004a
}

.stickynav.js-is-sticky .navbar .navbar-nav li.disabled a {
    color: rgba(255, 255, 255, 0.3);
    pointer-events: none
}

.stickynav.js-is-sticky .navbar .navbar-nav li.active a:before {
    height: 1px;
    bottom: 0;
    background: #0f0f0f
}

.stickynav.js-is-sticky .navbar .navbar-nav li:hover:not(.active)>a:before {
    content: "";
    position: absolute;
    left: 0.5rem;
    right: 0.5rem;
    bottom: 0;
    display: block;
    height: 1px;
    background: #afafaf;
    opacity: 1
}

@media (max-width: 1199px) {
    .stickynav {
        padding-top:0
    }

    .stickynav .navbar-sc .navbar-nav {
        padding-top: 0;
        overflow: auto;
        max-height: 100vh
    }

    .stickynav .navbar-collapse {
        margin: 1.5625rem -30px 0
    }

    .stickynav .navbar .custom-logo-link svg {
        max-width: 152px;
        width: 100%
    }

    .stickynav .navbar .navbar-nav li {
        width: 100%;
        height: auto;
        border-bottom: solid 1px #d8d8d8
    }

    .stickynav .navbar .navbar-nav li:first-child {
        border-top: solid 1px #d8d8d8
    }

    .stickynav .navbar .navbar-nav li a {
        color: #000;
        font-weight: 400;
        vertical-align: top;
        font-size: 1.25rem;
        line-height: 1.875rem;
        padding: 0.9375rem 1.5625rem
    }

    .stickynav .navbar .navbar-nav li a.dropdown-item {
        margin: 0;
        font-weight: 400;
        color: #000;
        font-size: 1.25rem;
        line-height: 1.875rem;
        border-bottom: solid 1px #d8d8d8;
        padding: 0.9375rem 3.125rem !important
    }

    .stickynav .navbar .navbar-nav li.dropdown>a {
        position: relative;
        width: 100%
    }

    .stickynav .navbar .navbar-nav li.dropdown>a:after {
        border: none;
        content: "";
        margin-left: 0;
        top: 50%;
        right: 1.5625rem;
        position: absolute;
        color: #000;
        font-size: 1.25rem;
        transform: translate(0, -50%);
        font-family: "icomoon" !important
    }

    .stickynav .navbar .navbar-nav li.button_style a {
        color: #000 !important;
        font-weight: 400 !important;
        vertical-align: top !important;
        font-size: 1.25rem !important;
        height: auto !important;
        background: none !important;
        border-radius: 0 !important;
        line-height: 1.875rem !important;
        padding: 0.9375rem 1.5625rem !important;
        margin-left: 0 !important;
        border: none !important
    }

    .stickynav .navbar .navbar-nav li .dropdown-menu {
        border-radius: 0;
        box-shadow: none;
        padding: 0
    }

    .stickynav .navbar .navbar-nav li .dropdown-menu a:not(:last-child) {
        margin-bottom: 0
    }
}

@media (max-width: 1199px) {
    .stickynav.is_menu-active {
        background:#fff;
        height: auto;
        min-height: 100%
    }

    .stickynav.is_menu-active svg g {
        fill: #bf005c
    }

    .stickynav.is_menu-active .img {
        background-color: #bf005c !important
    }

    .stickynav.is_menu-active .navbar-sc .burger-menu-btn {
        color: #000
    }

    .stickynav.is_menu-active .navbar-sc .navbar-nav {
        margin: 0
    }
}
.nav {
    display: flex;
    flex-wrap: wrap;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.nav-link {
    display: block;
    padding: 0.5rem 1rem
}

.nav-link:hover,.nav-link:focus {
    text-decoration: none
}

.nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default
}

.nav-tabs {
    border-bottom: 1px solid #dee2e6
}

.nav-tabs .nav-item {
    margin-bottom: -1px
}

.nav-tabs .nav-link {
    border: 1px solid transparent
}

.nav-tabs .nav-link:hover,.nav-tabs .nav-link:focus {
    border-color: #e9ecef #e9ecef #dee2e6
}

.nav-tabs .nav-link.disabled {
    color: #6c757d;
    background-color: transparent;
    border-color: transparent
}

.nav-tabs .nav-link.active,.nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff
}

.nav-tabs .dropdown-menu {
    margin-top: -1px
}

.nav-pills .nav-link.active,.nav-pills .show>.nav-link {
    color: #fff;
    background-color: #E4002B
}

.nav-fill>.nav-link,.nav-fill .nav-item {
    flex: 1 1 auto;
    text-align: center
}

.nav-justified>.nav-link,.nav-justified .nav-item {
    flex-basis: 0;
    flex-grow: 1;
    text-align: center
}

.tab-content>.tab-pane {
    display: none
}

.tab-content>.active {
    display: block
}

.navbar {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 0.5rem 0;
}

.navbar .container,.navbar .container-fluid,.navbar .container-sm,.navbar .container-md,.navbar .container-lg,.navbar .container-xl,.navbar>.container-sm,.navbar>.container-md,.navbar>.container-lg,.navbar>.container-xl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between
}

.navbar-brand {
    display: inline-block;
    padding-top: 0.3125rem;
    padding-bottom: 0.3125rem;
    margin-right: 1rem;
    font-size: 1.25rem;
    line-height: inherit;
    white-space: nowrap
}

.navbar-brand:hover,.navbar-brand:focus {
    text-decoration: none
}

.navbar-nav {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0;
    list-style: none
}

.navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0
}

.navbar-nav .dropdown-menu {
    position: static;
    float: none
}

.navbar-text {
    display: inline-block;
    padding-top: 0.5rem;
    padding-bottom: 0.5rem
}

.navbar-collapse {
    flex-basis: 100%;
    flex-grow: 1;
    align-items: center;
}

.navbar-toggler {
    padding: 0.25rem 0.75rem;
    font-size: 1.25rem;
    line-height: 1;
    background-color: transparent;
    border: 1px solid transparent
}

.navbar-toggler:hover,.navbar-toggler:focus {
    text-decoration: none
}

.navbar-toggler-icon {
    display: inline-block;
    width: 1.5em;
    height: 1.5em;
    vertical-align: middle;
    content: "";
    background: no-repeat center center;
    background-size: 100% 100%
}

@media (max-width: 575.98px) {
    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 576px) {
    .navbar-expand-sm {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-sm .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-sm>.container,.navbar-expand-sm>.container-fluid,.navbar-expand-sm>.container-sm,.navbar-expand-sm>.container-md,.navbar-expand-sm>.container-lg,.navbar-expand-sm>.container-xl {
        flex-wrap: nowrap
    }

    .navbar-expand-sm .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-sm .navbar-toggler {
        display: none
    }
}

@media (max-width: 767.98px) {
    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-md,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 768px) {
    .navbar-expand-md {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-md .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-md>.container,.navbar-expand-md>.container-fluid,.navbar-expand-md>.container-sm,.navbar-expand-md>.container-md,.navbar-expand-md>.container-lg,.navbar-expand-md>.container-xl {
        flex-wrap: nowrap
    }

    .navbar-expand-md .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-md .navbar-toggler {
        display: none
    }
}

@media (max-width: 991.98px) {
    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 992px) {
    .navbar-expand-lg {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-lg .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-lg>.container,.navbar-expand-lg>.container-fluid,.navbar-expand-lg>.container-sm,.navbar-expand-lg>.container-md,.navbar-expand-lg>.container-lg,.navbar-expand-lg>.container-xl {
        flex-wrap: nowrap
    }

    .navbar-expand-lg .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-lg .navbar-toggler {
        display: none
    }
}

@media (max-width: 1199.98px) {
    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-xl {
        padding-right:0;
        padding-left: 0
    }
}

@media (min-width: 1200px) {
    .navbar-expand-xl {
        flex-flow:row nowrap;
        justify-content: flex-start
    }

    .navbar-expand-xl .navbar-nav {
        flex-direction: row
    }

    .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute
    }

    .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem
    }

    .navbar-expand-xl>.container,.navbar-expand-xl>.container-fluid,.navbar-expand-xl>.container-sm,.navbar-expand-xl>.container-md,.navbar-expand-xl>.container-lg,.navbar-expand-xl>.container-xl {
        flex-wrap: nowrap
    }

    .navbar-expand-xl .navbar-collapse {
        display: flex !important;
        flex-basis: auto
    }

    .navbar-expand-xl .navbar-toggler {
        display: none
    }
}

.navbar-expand {
    flex-flow: row nowrap;
    justify-content: flex-start
}

.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-sm,.navbar-expand>.container-md,.navbar-expand>.container-lg,.navbar-expand>.container-xl {
    padding-right: 0;
    padding-left: 0
}

.navbar-expand .navbar-nav {
    flex-direction: row
}

.navbar-expand .navbar-nav .dropdown-menu {
    position: absolute
}

.navbar-expand .navbar-nav .nav-link {
    padding-right: 0.5rem;
    padding-left: 0.5rem
}

.navbar-expand>.container,.navbar-expand>.container-fluid,.navbar-expand>.container-sm,.navbar-expand>.container-md,.navbar-expand>.container-lg,.navbar-expand>.container-xl {
    flex-wrap: nowrap
}

.navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto
}

.navbar-expand .navbar-toggler {
    display: none
}

.navbar-light .navbar-brand {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-brand:hover,.navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-nav .nav-link {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-nav .nav-link:hover,.navbar-light .navbar-nav .nav-link:focus {
    color: rgba(0, 0, 0, 0.7)
}

.navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3)
}

.navbar-light .navbar-nav .show>.nav-link,.navbar-light .navbar-nav .active>.nav-link,.navbar-light .navbar-nav .nav-link.show,.navbar-light .navbar-nav .nav-link.active {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-toggler {
    color: rgba(0, 0, 0, 0.5);
    border-color: rgba(0, 0, 0, 0.1)
}

.navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%280, 0, 0, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-light .navbar-text {
    color: rgba(0, 0, 0, 0.5)
}

.navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-light .navbar-text a:hover,.navbar-light .navbar-text a:focus {
    color: rgba(0, 0, 0, 0.9)
}

.navbar-dark .navbar-brand {
    color: #fff
}

.navbar-dark .navbar-brand:hover,.navbar-dark .navbar-brand:focus {
    color: #fff
}

.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-nav .nav-link:hover,.navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75)
}

.navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25)
}

.navbar-dark .navbar-nav .show>.nav-link,.navbar-dark .navbar-nav .active>.nav-link,.navbar-dark .navbar-nav .nav-link.show,.navbar-dark .navbar-nav .nav-link.active {
    color: #fff
}

.navbar-dark .navbar-toggler {
    color: rgba(255, 255, 255, 0.5);
    border-color: rgba(255, 255, 255, 0.1)
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e")
}

.navbar-dark .navbar-text {
    color: rgba(255, 255, 255, 0.5)
}

.navbar-dark .navbar-text a {
    color: #fff
}

.navbar-dark .navbar-text a:hover,.navbar-dark .navbar-text a:focus {
    color: #fff
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125)
}
@media (min-width:1200px) {
  .navbar-expand-xl {
      flex-flow: row nowrap;
      justify-content: flex-start;
  }
}

.stickynav .navbar .navbar-nav li a.dropdown-item {
    padding: 0 !important;

    margin: 0 0 0.0625rem;

}
.stickynav .navbar .navbar-nav li a.dropdown-item:hover {
    color: #BF005C;
    background: transparent;
}
.icon-burger:before {
    content: "\e901";
    font-family: "icomoon" !important;
}
.stickynav .navbar .burger-menu-btn {
    outline: none;
    font-size: 1.125rem;
    color: #fff;
    padding: 0.625rem 0 0.4375rem 1rem;
}
.stickynav .navbar .burger-menu-btn {
    font-size: 16px;
}
.stickynav.js-is-sticky .burger-menu-btn, .stickynav.js-is-stuck .burger-menu-btn {
    color: #000;
    padding-right: 0;
    border: 0;
}
.collapse:not(.show) {
    display: none;
}
.stickynav.is_menu-active .icon-burger:before {
    content: "\e902";
}
.stickynav .navbar .navbar-nav li .dropdown-menu {
    margin-top: 0;
    border: none;
    left: 0rem;
    padding: 0.9375rem 0.875rem;
    -webkit-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 10px 0 rgba(0, 0, 0, 0.5);
    top: 41px;
}
@media (max-width: 1199px) {
  .stickynav .navbar .navbar-nav li.dropdown > a:after {
    border: none;
    content: "\e907";
    margin-left: 0;
    top: 50%;
    right: 1.5625rem;
    position: absolute;
    color: #000;
    font-size: 1.25rem;
    transform: translate(0, -50%);
    font-family: "icomoon" !important;
  }
  .stickynav .navbar .navbar-nav li .dropdown-menu {
    border-radius: 0;
    box-shadow: none;
    padding: 0;
  }
}
@media (max-width: 991.98px) {
  .stickynav .navbar .navbar-nav li.show {
    background: #BF005C;
  }
  .stickynav .navbar .navbar-nav li.show>a {
    color: #fff !important;
  }
}
    </style>
