<section class="banner_block banner_block--careers-page single_column with-parallax banner-new_jobs_block_bb046ba54428c302f934c8cb43669413 in-viewport" style="--mh: 563px;">
    		<div id="departmentBackground" class="banner_block-bg banner_block-bg_desktop no-mob"></div>
								<div class="banner_block-main">
		<div class="container container_wide">
			<div class="row">
									<div class="col-lg-12 text-side">
						<div class="banner_text">
														<h2><span class="ez-toc-section" id="Explore_more_of_life_at_smartclip"></span>Find out more <br>
about your team<span class="ez-toc-section-end"></span></h2>
<div class="bt_text">
	<p id="departmentText">The Architecture department ensures that we develop and work with robust and future-proof products.</p>
</div>																					<div class="bt_button">
									<a target="" href="#" class="red_btn" id="departmentLink">Explore more</a>
								</div>
																				</div>
					</div>
							</div>
		</div>
	</div>

	<div class="bottom-space"></div></section>
<script>
    const inViewport = (elem) => {
        let allElements = document.getElementsByClassName(elem);
        let windowHeight = window.innerHeight;
        const elems = () => {
            for (let i = 0; i < allElements.length; i++) {  //  loop through the sections
                let viewportOffset = allElements[i].getBoundingClientRect();  //  returns the size of an element and its position relative to the viewport
                let top = viewportOffset.top;  //  get the offset top
                if(top < windowHeight){  //  if the top offset is less than the window height
                    allElements[i].classList.add('in-viewport');  //  add the class
                } else{
                    allElements[i].classList.remove('in-viewport');  //  remove the class
                }
                if (top < 0) {
                    allElements[i].classList.add('sticked');
                } else {
                    allElements[i].classList.remove('sticked');
                }
            }
        };
        elems();
        window.addEventListener('scroll', elems);
    };

    const sectionsToDetect = document.querySelectorAll('.banner_block.with-parallax');
    sectionsToDetect.forEach(itm => {
        itm.style.setProperty('--mh', `${itm.querySelector('.banner_block-main').scrollHeight}px`)
    });

    inViewport('with-parallax');
</script>
<script>
var departmentsData = {
        "Architecture": {
            text: "The Architecture Department ensures that we develop and work with robust and future-proof products.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/architecture-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/architecture-department/",
        },
        "Advertising Platform": {
            text: "The Advertising Platform Department works to exceed client expectations by redefining the status quo and delivering innovative adtech solutions that set us apart from the rest.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/advertising-platform-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/ad-platform-department/",
        },
        "Engineering": {
            text: "The Engineering Department is responsible for building and maintaining platform features.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Engineering-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/engineering-department/",
        },
        "Data Products": {
            text: "The Data Products Department works to convert strategy into identity-related solutions and audience products that work for across all publisher content and screens.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Data-products-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/data-products-department/",
        },
        "Advanced Products": {
            text: "The Advanced Products Department plays a paramount role in creating a product roadmap that benefits all by aligning the demands of our clients and key stakeholders with the strategic goals of our company.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Advanced-products-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/advanced-products-department/",
        },
        "Operations": {
            text: "The Operations Department ensures the company-wide seamless coordination and optimisation of internal processes.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Operations-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/operations-department/",
        },
        "Data Privacy & Tech Partnerships": {
            text: "The Data Privacy & Tech Partnerships Department works to safeguard sensitive information and ensure compliance with privacy regulations.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Data-privacy-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/data-privacy-and-technology-partnerships-department/",
        },
        "People & Culture": {
            text: "The People & Culture Department works to create a healthy, diverse, and empowering work environment.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/People-culture-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/people-and-culture-department/",
        },
        "Marketing & Product Education": {
            text: "The Marketing & Product Education Department works to spread awareness and knowledge about our products to current and potential customers.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Marketing-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/marketing-and-product-education-department/",
        },
        "Research & Development": {
            text: "The Research & Development Department takes a hands-on approach to problem-solving and developing the next solutions and products for our customers.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/Research-and-Development-TeamTailor-image.jpg",
            linkUrl: "https://smartclip.tv/jobs/research-and-development-department/",
        },
        "System Operations": {
            text: "The System Operations Department supports our DevOps Team and maintains our platform infrastructure, keeping it at the forefront of technological advancements and innovation.",
            imageUrl: "https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/System-Ops-team-tailor-banner.jpg",
            linkUrl: "https://smartclip.tv/jobs/system-operations-department/",
        },
    };

    function setDepartmentInfo(department) {
        var dynamicTextElement = document.getElementById("departmentText");
        var departmentBackgroundElement = document.getElementById("departmentBackground");
        var departmentLinkElement = document.getElementById("departmentLink");

        if (departmentsData.hasOwnProperty(department)) {
            var departmentInfo = departmentsData[department];
            dynamicTextElement.textContent = departmentInfo.text;
            departmentBackgroundElement.style.backgroundImage = "url('" + departmentInfo.imageUrl + "')";
            departmentLinkElement.href = departmentInfo.linkUrl;
        }
    }

     var departmentName = document.querySelector(".block-cover .tracking-widest span:first-child").textContent;
     setDepartmentInfo(departmentName);
</script>
<style>
.banner_block {
	 position: relative;
	 color: #7f7f7f;
	 background-repeat: no-repeat;
	 background-position: center center !important;
	 background-size: cover !important;
}
 .banner_block .container {
	 position: relative;
	 z-index: 1;
}
 .banner_block .video_bg {
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 z-index: 0;
}
.banner_block-bg {
	 position: absolute;
	 left: 0;
	 top: 0;
	 width: 100%;
	 height: 100%;
	 background-repeat: no-repeat;
	 background-position: center center !important;
	 background-size: cover !important;
	 z-index: 0;
	 transition: filter 1s;
	 background-color: #000;
     background-image: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/department.jpg");
}
 @media (max-width: 767px) {
	 .banner_block--life .banner_block-bg_mobile {
		 background-position: left center !important;
	}
}
 .banner_block-main {
	 position: relative;
	 padding: 100px 0;
	 width: 100%;
	 height: 100%;
	 z-index: 1;
}
 .banner_block .bottom-space {
	 position: relative;
	 height: 60vh;
}
 @media (max-width: 991px) {
	 .banner_block .bottom-space {
		 height: 70vh;
	}
}
 @media (min-width: 768px) {
	 .banner_block .banner_block-bg_mobile {
		 display: none;
	}
}
 @media (max-width: 767px) {
	 .banner_block .banner_block-bg_mobile + .video_bg {
		 display: none;
	}
}
 @media (max-width: 767px) {
	 .banner_block .banner_block-bg_desktop:not(.no-mob) {
		 display: none;
	}
}
 .banner_block.with-parallax {
	 background: #1b1b1b;
}
 .banner_block.with-parallax .banner_block-bg {
	 background-color: #1b1b1b !important;
}
 @media (max-width: 991px) {
	 .banner_block.with-parallax {
		 overflow: visible !important;
	}
}
 .banner_block.with-parallax > div.banner_block-bg {
	 position: sticky;
	 top: 85px;
	 height: calc(100vh - 83px);
}
 @media (max-width: 1199px) {
	 .banner_block.with-parallax > div.banner_block-bg {
		 top: 71px;
		 height: calc(100vh - 69px);
	}
}
 .banner_block.with-parallax > div.banner_block-main {
	 padding-top: 0 !important;
	 height: auto;
	 overflow: hidden !important;
}
 .banner_block.with-parallax .video_bg {
	 position: sticky;
	 top: 85px;
	 height: calc(100vh - 83px);
}
 @media (max-width: 1199px) {
	 .banner_block.with-parallax .video_bg {
		 top: 71px;
		 height: calc(100vh - 69px);
	}
}
 .banner_block.with-parallax.sticked .banner_block-bg {
	 filter: brightness(0.6);
}
 .banner_block .banner_text {
	 padding-top: 0px;
	 max-width: 1080px;
}
 .banner_block .banner_text h5.light_text {
	 color: #fff;
}
 @media (max-width: 767px) {
	 .banner_block .banner_text h5 {
		 font-size: 20px;
		 color: #fbfbfb;
	}
}
 .banner_block .banner_text h2 {
	 color: #fbfbfb;
     font-size: 64px;
     line-height: 1.06;
     letter-spacing: 0em;
     font-weight: 700;
     margin-bottom: 50px;
}
@media (max-width: 1300px) {
  .banner_block .banner_text h2 {
     font-size: 50px;
  }
}
@media (max-width: 991.98px) {
  .banner_block .banner_text h2 {
     font-size: 44px;
     line-height: 1.09;
     margin-bottom: 16px;
  }
}
 @media (max-width: 767px) {
	 .banner_block .banner_text h2 {
		 max-width: 350px;
	}
	 .banner_block .banner_text h2 br {
		 display: none;
	}
}
 .banner_block .banner_text h3 {
	 color: #fbfbfb;
}
 @media (max-width: 767px) {
	 .banner_block .banner_text h3 {
		 font-size: 40px;
	}
}
 .banner_block .banner_text .bt_text {
	 font-family: Aeonik;
	 font-size: 24px;
	 font-weight: 400;
	 line-height: 1.45;
	 letter-spacing: 0.01em;
     color: #E1E1E1;
     max-width: 600px;
     margin-bottom: 70px;
}

 .banner_block .banner_text .bt_text p {
	 letter-spacing: inherit;
}
 .banner_block .banner_text .bt_text p:last-child {
	 margin-bottom: 0;
}
 @media (max-width: 767px) {
	 .banner_block .banner_text .bt_text {
		 font-size: 20px;
         margin-bottom: 16px;
	}
}
 .banner_block .banner_text .bt_button {
	 margin-top: 16px;
}
 @media (max-width: 767px) {
	 .banner_block .banner_text .bt_button {
		 margin-top: 16px;
	}
}
 @media (max-width: 767px) {
	 .banner_block {
		 overflow: hidden;
	}
	 .banner_block .banner_text {
		 padding-top: 0;
	}
	 .banner_block .image-side {
		 order: 2;
	}
	 .banner_block .text-side {
		 order: 1;
	}
	 .banner_block .text-side:not(:last-child) {
		 margin-bottom: 32px;
	}
	 .banner_block.two_columns .banner_block-main {
		 padding: 72px 0;
	}
	 .banner_block.two_columns .banner_image {
		 margin-top: 50px;
	}
	 .banner_block.two_columns .banner_image img {
		 max-width: 125%;
	}
}
</style>
