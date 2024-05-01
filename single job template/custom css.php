<script>
document.addEventListener("DOMContentLoaded", function() {
document.querySelector('.block-cover').style.color="#fff";

// Change elements place in hero
const engineeringInfo = document.querySelector('.block-cover .tracking-widest');
const responseTimeInfo = document.querySelector('.block-cover .mt-10');
if (engineeringInfo && responseTimeInfo) {
  // Move the engineeringInfo div before the responseTimeInfo paragraph
  responseTimeInfo.parentNode.insertBefore(engineeringInfo, responseTimeInfo);
}
// Change hero button text
const heroButtontext = document.querySelector('.block-cover .careersite-button .truncate');
heroButtontext.innerHTML = "Apply now";
// Create All jobs link in hero
const moreJobsLink = document.createElement('a');
moreJobsLink.href = '/jobs';
moreJobsLink.classList.add('all-jobs-link');
moreJobsLink.setAttribute('data-turbo', 'false');

// Set the innerHTML of <a> with the desired HTML content
moreJobsLink.innerHTML = `
  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M19.5 12L4.5 12M4.5 12L11.25 5.25M4.5 12L11.25 18.75" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  <span>Back to all jobs</span>
`;
const targetElementJobs = document.querySelector('.block-cover>div>div');
if (targetElementJobs) {
  targetElementJobs .insertBefore(moreJobsLink, targetElementJobs .firstChild);
}

// Add apply button to jobs
const jobCardImages = document.querySelectorAll('.z-career-job-card-image');

// Iterate over each job card image element
jobCardImages.forEach(jobCardImage => {
    // Find the flex container inside the job card image
    const flexContainer = jobCardImage.querySelector('.flex.flex-col');
    if (flexContainer) {
        // Create and append the apply button to the flex container
        const applyButton = document.createElement('span');
        applyButton.classList.add('red_btn');
        applyButton.textContent = 'Apply';
        flexContainer.appendChild(applyButton);
    }
});
  const jobButton = document.querySelector('#jobs .careersite-button .truncate')
if (jobButton) {
    // Change the text of the apply button
    jobButton.textContent = 'All jobs';
}
  const targetElement2 = document.querySelector('.jobs-container .block-max-w--md');
  if (targetElement2) {
    const title = document.createElement('h2');
    title.classList.add('jobs_title');
    title.textContent = 'Explore more roles';
    const existingContent = targetElement2.firstChild;
    targetElement2.insertBefore(title, existingContent);
  }

// Create the sidebar for description section
const sidebar = document.createElement('div');
sidebar.classList.add('col-lg-4', 'sidebar');
sidebar.style.minHeight = '3184.97px';

const widgetArea = document.createElement('div');
widgetArea.classList.add('widget-area');
widgetArea.setAttribute('role', 'complementary');

const widgetStayUpToDate = document.createElement('div');
widgetStayUpToDate.classList.add('widget', 'stay-up-to-date', 'style-1');

const title = document.createElement('h2');
title.classList.add('title');
title.textContent = 'Make your move';

const text = document.createElement('p');
text.classList.add('text');
text.innerHTML = 'Found what you’re looking for? <br>If you’re ready, we’re ready.';

const subscribeLink = document.createElement('a');
subscribeLink.classList.add('red_btn');
subscribeLink.classList.add('no-company-style');
subscribeLink.textContent = 'Apply now';
subscribeLink.href = '#form';

// Append the elements to construct the hierarchy
widgetStayUpToDate.appendChild(title);
widgetStayUpToDate.appendChild(text);
widgetStayUpToDate.appendChild(subscribeLink);

widgetArea.appendChild(widgetStayUpToDate);

sidebar.appendChild(widgetArea);

// Append the sidebar to the parent element
const parentElement = document.querySelector('.company-links ');
parentElement.appendChild(sidebar);

  // Add ID to form section
  const sectionElement = document.querySelector('section[data-jobs--overlay-overlay-class*="z-career-job-application-form-overlay"]');
  if (sectionElement) {
    // Set the ID attribute for the section element
    sectionElement.setAttribute('id', 'form');
  }

  // Add smooth scroll to button
    const redBtn = document.querySelector('.red_btn');

  // Smooth scroll function
  function smoothScrollTo(targetId) {
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop,
        behavior: 'smooth'
      });
    }
  }

  // Add click event listener to the red button
  redBtn.addEventListener('click', function(e) {
    e.preventDefault();
    smoothScrollTo(this.getAttribute('href').substring(1)); // Remove the '#' from the href
  });

/** Create Contact section **/
// Create the section element and its contents
const section = document.createElement('section');
section.classList.add('contact_block');

// Add the inner HTML content to the section element
section.innerHTML = `
    <div class="container container_wide">
        <div class="row">
            <div class="col-lg-6">
                <picture><img decoding="async" src="https://smartclip.wpenginepowered.com/wp-content/uploads/2023/07/image-31-1-1.png" alt=""></picture>
            </div>
            <div class="col-lg-6">
                <div class="cb_wrapper">
                    <h3><span class="ez-toc-section" id="Hi_Im_Sarah_senior_recruiter_at_smartclip_Lets_talk"></span>Hi, I’m Sarah, senior recruiter at smartclip.&nbsp;<br>Let’s talk.<span class="ez-toc-section-end"></span></h3>
                    <p>If you have any additional questions, feel free to reach out via <a herf="mailto:recruiting@smartclip.tv">recruiting@smartclip.tv</a></p>
                </div>
            </div>
        </div>
    </div>
`;
// Get the section with id "form"
const formSection = document.getElementById('form');

// Insert the newly created section after the formSection
formSection.insertAdjacentElement('afterend', section);


/** Form copy changes **/
var formTitle = document.querySelector('#form .font-company-header');
formTitle.innerHTML = 'Submit your application';
var formText = document.createElement('p');
formText.textContent = 'Tell us a bit about yourself, submit your CV, and we’ll be in touch';

var formTitle = document.querySelector('#form .z-career-block-content .relative');
formTitle.appendChild(formText);


});
</script>
<style>
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-Light.woff2") format('woff2'), url("font/Aeonik-Light.woff") format('woff');
  font-weight: 200;
  font-style: normal;
}
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-LightItalic.woff2") format('woff2'), url("font/Aeonik-LightItalic.woff") format('woff');
  font-weight: 200;
  font-style: italic;
}
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-Regular.woff2") format('woff2'), url("font/Aeonik-Regular.woff") format('woff');
  font-weight: 400;
  font-style: normal;
}
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-RegularItalic.woff2") format('woff2'), url("font/Aeonik-RegularItalic.woff") format('woff');
  font-weight: 400;
  font-style: italic;
}
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-Bold.woff2") format('woff2'), url("font/Aeonik-Bold.woff") format('woff');
  font-weight: 700;
  font-style: normal;
}
@font-face {
  font-family: 'Aeonik';
  src: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/Aeonik-BoldItalic.woff2") format('woff2'), url("font/Aeonik-BoldItalic.woff") format('woff');
  font-weight: 700;
  font-style: italic;
}
@font-face {
  font-family: 'icomoon';
  src: url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/icomoon.eot?daellb');
  src: url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/icomoon.eot?daellb#iefix') format('embedded-opentype'),
  url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/icomoon.ttf') format('truetype'),
  url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/icomoon.woff') format('woff'),
  url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/fonts/icomoon.svg?daellb#icomoon') format('svg');
  font-weight: normal;
  font-style: normal;
  font-display: block;
}

.header {
  display:none;
}
.font-company-body,
.font-company-header {
    font-family: 'Aeonik';
}
.block--custom, .block--custom .block-px {
    padding: 0;
}
.block--custom .block-max-w--lg {
    max-width: 100%;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
.col-xl, .col-xl-auto, .col-xl-12, .col-xl-11, .col-xl-10, .col-xl-9, .col-xl-8, .col-xl-7, .col-xl-6, .col-xl-5, .col-xl-4, .col-xl-3, .col-xl-2, .col-xl-1, .col-lg, .col-lg-auto, .col-lg-12, .col-lg-11, .col-lg-10, .col-lg-9, .col-lg-8, .col-lg-7, .col-lg-6, .col-lg-5, .col-lg-4, .col-lg-3, .col-lg-2, .col-lg-1, .col-md, .col-md-auto, .col-md-12, .col-md-11, .col-md-10, .col-md-9, .col-md-8, .col-md-7, .col-md-6, .col-md-5, .col-md-4, .col-md-3, .col-md-2, .col-md-1, .col-sm, .col-sm-auto, .col-sm-12, .col-sm-11, .col-sm-10, .col-sm-9, .col-sm-8, .col-sm-7, .col-sm-6, .col-sm-5, .col-sm-4, .col-sm-3, .col-sm-2, .col-sm-1, .col, .col-auto, .col-12, .col-11, .col-10, .col-9, .col-8, .col-7, .col-6, .col-5, .col-4, .col-3, .col-2, .col-1 {
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
}
@media (min-width: 992px) {
  .col-lg-3 {
    flex: 0 0 25%;
    max-width: 25%;
  }
  .col-lg-12 {
    flex: 0 0 100%;
    max-width: 100%;
  }
  .col-lg-4 {
    flex: 0 0 33.3333333333%;
    max-width: 33.3333333333%;
  }
  .col-lg-6 {
    flex: 0 0 50%;
    max-width: 50%;
  }
}
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}
.container, .container-fluid, .container-xl, .container-lg, .container-md, .container-sm,#jobs {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}
.md\:max-w-\[75\%\],footer .block-max-w--lg {
    padding-right: 15px;
    padding-left: 15px;
}
.container_wide,.md\:max-w-\[75\%\],#jobs,.company-links,footer .block-max-w--lg,#form .h-full.px-4.py-20.overflow-y-auto, #jobs .block-max-w--md {
    max-width: 100%;
}
.company-links {
    margin: auto;
    width: 100%;
    padding-right: 0px;
    padding-left: 0px;
    display: flex;
    flex-wrap: wrap;
}
.ml-auto, .mx-auto {
    margin-left: auto !important;
}
@media (min-width: 768px) {
  .container_wide,.md\:max-w-\[75\%\],#jobs,.company-links,footer .block-max-w--lg,#form .h-full.px-4.py-20.overflow-y-auto {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .container_wide,.md\:max-w-\[75\%\],#jobs,.company-links,footer .block-max-w--lg,#form .h-full.px-4.py-20.overflow-y-auto {
    max-width: 980px;
  }
}
@media (min-width: 1200px) {
  .container_wide,.md\:max-w-\[75\%\],#jobs,.company-links,footer .block-max-w--lg,#form .h-full.px-4.py-20.overflow-y-auto {
    max-width: 1160px;
  }
}
@media (min-width: 1300px) {
  .container_wide,.md\:max-w-\[75\%\],#jobs,.company-links,footer .block-max-w--lg,#form .h-full.px-4.py-20.overflow-y-auto {
    max-width: 1278px;
  }
}
@media (max-width: 767px) {
  .container .row>div {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
  .container {
    padding: 0 20px;
  }
  .container .row {
    margin-left: -20px;
    margin-right: -20px;
  }
}
.careersite-button svg {
    display:none;
}
.red_btn,
.careersite-button {
    position: relative;
    display: inline-flex;
    align-items: center;
    align-content: center;
    justify-content: center;
    background: #bf005c;
    border: none;
    font-size: 18px;
    color: #fbfbfb;
    font-weight: 700;
    line-height: 1.4;
    height: 2.666666667em;
    letter-spacing: 0.01em;
    border-radius: 3.111111111em;
    padding: 0.6388888889em 1.333333333em 0.6388888889em 1.333333333em;
    text-decoration: none;
    white-space: nowrap;
}
.red_btn:hover,
.careersite-button:hover {
    text-decoration: none;
    border-color: #99004a;
    background: #99004a;
    color: #fbfbfb !important;
}
.red_btn:after,
.careersite-button:after {
    content: "";
    display: inline-block;
    width: 18px;
    height: 16px;
    background: url(https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/new/btn_arrow.svg) no-repeat;
    margin-left: 20px;
    position: relative;
    vertical-align: middle;
    /* top: -2px; */
    left: 0;
    transition: left 0.3s;
}
@media (max-width: 991.98px) {
  .red_btn,.careersite-button {
    font-size: 16px;
    height: 2.5em;
    padding: 0.5625em 1.25em 0.5625em 1.25em;
  }
}

/* hero style */
.block-cover {
background: url('https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/teamtailor/hero.jpg') no-repeat center/cover;
}
.block-cover:after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #0000004D;
}
.block-cover .tracking-widest {
    font-size: 24px;
    line-height: 1.45;
    letter-spacing: 0.01em;
    font-weight: 500;
    text-transform: none;
    margin: 22px 0;
}
.block-cover p.text-sm {
    display: none;
}
.block-cover .relative,.block-cover .text-center {
    text-align: left;
}
.block-cover .font-company-header {
    font-family: 'Aeonik';
    font-size: 64px;
    font-weight: 700;
    line-height: 1.06;
    text-align: left;
    max-width: 600px;
}
.block-cover button.rounded-full {
    display: none;
}
.block-cover .all-jobs-link {
    display: flex;
    align-items: center;
    gap: 9px;
    font-family: Aeonik;
    font-size: 16px;
    font-weight: 700;
    letter-spacing: 0.01em;
    text-align: left;
    margin: 0 0 33px;
}
@media (max-width: 1300px) {
  .block-cover .font-company-header {
    font-size: 50px;
  }
}
@media (max-width: 991.98px) {
  .block-cover .font-company-header {
    font-size: 44px;
    line-height: 1.09;
  }
}
@media (max-width: 767px) {
  .block-cover .relative {
    padding-left: 10px;
    padding-right: 10px;
  }
}
/* Description style */
.prose :where(h3):not(:where([class~=not-prose] *)),
.prose :where(h2):not(:where([class~=not-prose] *)) {
    font-family: 'Aeonik';
    font-size: 32px;
    line-height: 1.09;
}
.widget-area {
    position: -webkit-sticky;
    position: sticky;
    top: 110px;
}
.sidebar {
    padding-left: 2.9375rem;
}
.stay-up-to-date.style-1 {
    background: #EFEFEF;
}
.stay-up-to-date {
    padding: 1.75rem 1.5rem;
    border-radius: 1.5625rem;
}
.stay-up-to-date.style-1 h2 {
    color: #0F0F0F;
}
.stay-up-to-date h2 {
    font-size: 2rem;
    line-height: 2.5rem;
    margin-bottom: 1.5rem;
    font-weight: 700;
}
.stay-up-to-date p {
    font-size: 1.125rem;
    line-height: 1.4;
    color: #7F7F7F;
    letter-spacing: 0.01em;
    margin-bottom: 2rem;
    font-weight: 400;
}
.company-links .font-company-body {
    margin: 0!important;
    position: relative;
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    font-size: 24px;
    line-height: 1.45;
    letter-spacing: 0.01em;
}
@media (min-width: 992px) {
  .company-links .font-company-body {
    flex: 0 0 66.6666666667%;
    max-width: 66.6666666667%;
  }
}
@media (max-width: 991.98px) {
  .sidebar {
    min-height: 0!important;
    padding-left: 15px;
  }
  .sidebar .widget-area {
    position: unset !important;
  }
  .sidebar .widget-area .widget {
    margin: 51px 0 0 0;
    max-width: 100% !important;
    width: 100% !important;
  }
  .stay-up-to-date h2 {
    font-size: 1.5rem;
    line-height: 2rem;
    margin-bottom: 0.875rem;
  }
  .stay-up-to-date p {
    font-size: 1rem;
    line-height: 1.4;
    color: #7F7F7F;
    letter-spacing: 0.01em;
    margin-bottom: 1.5rem;
    font-weight: 400;
  }
  .red_btn {
    font-size: 16px;
    height: 2.5em;
    padding: 0.5625em 1.25em 0.5625em 1.25em;
  }
  .prose :where(h3):not(:where([class~=not-prose] *)),
  .prose :where(h2):not(:where([class~=not-prose] *)) {
    font-size: 26px;
  }
  .company-links .font-company-body {
    font-size: 20px;
  }
}
@media (max-width: 767px) {
  .company-links .font-company-body, .sidebar {
    padding-left: 20px;
    padding-right: 25px;
  }
}
/* Related jobs style */
section[data-section-name="related-jobs"] .bg-company-primary {
    background: #F5F5F5;
}
.z-career-job-card-image {
    min-height: 0;
    width: 100%;
    border-radius: 16px;
    border: 1px solid #E1E1E1;
}
.z-career-job-card-image a .w-full {
    display: none;
}
.z-career-job-card-image .flex.flex-col {
    flex-direction: row;
    gap: 50px;
    align-items: center;
    justify-content: space-between;
    padding: 24px 14px 24px 24px;
    min-height: 0;
}
.z-career-job-card-image .text-block-base-link {
    font-family: Aeonik;
    font-size: 24px;
    font-weight: 700;
    line-height: 34.8px;
    letter-spacing: 0.01em;
    text-align: left;
    color: #0F0F0F;
}
.z-career-job-card-image .text-md {
    color: #7F7F7F;
    font-size: 16px;
    font-weight: 400;
    line-height: 22.4px;
    letter-spacing: 0.01em;
    margin: 0;
}
.z-career-job-card-image .red_btn:after {
   display: none;
   width: 98px;
}
.jobs_title {
    font-family: Aeonik;
    font-size: 64px;
    font-weight: 700;
    line-height: 68px;
    text-align: left;
    color: #0F0F0F;
    margin-bottom: 67px;
}
#jobs .mt-12.justify-center {
    justify-content: start;
}
#jobs .careersite-button {
    min-width: 0;
}
@media (max-width: 1300px) {
  .jobs_title {
    font-size: 50px;
  }
}
@media (max-width: 991.98px) {
  .jobs_title {
    font-size: 44px;
    line-height: 1.09;
  }
  .z-career-job-card-image .text-block-base-link {
    font-size: 20px;
  }
}
@media (max-width: 767px) {
  .z-career-job-card-image .flex.flex-col {
    flex-direction: column;
    padding: 16px !important;
    align-items: start;
    gap: 8px;
  }
  .z-career-job-card-image .text-md {
    margin-bottom: 8px;
  }
  #jobs {
    padding-right: 20px;
    padding-left: 20px;
  }
}
/* Form style */
#form .h-full.px-4.py-20.overflow-y-auto {
    display: flex;
    margin: auto;
    padding: 160px 0;
}
#form .z-career-block-content {
    justify-content: start;
    text-align: left;
}
#form .z-career-block-content .text-center {
    text-align: left;
}
#form .z-career-block-content .text-sm {
    display: none;
}
#form .z-career-block-content .relative p {
    margin-top: 16px;
    font-size: 24px;
    font-weight: 400;
    line-height: 34.8px;
    letter-spacing: 0.01em;
    text-align: left;
    max-width: 500px;
}
#form .font-company-header span,
#form .font-company-header {
    color: #0F0F0F;
    font-size: 56px!important;
    line-height: 1.07;
    letter-spacing: 0em;
}
#form {
    background: #fff;
    color: #7F7F7F;
}
#form .font-medium {
    font-size: 14px;
    font-weight: 400;
    line-height: 19.6px;
    letter-spacing: 0.01em;
    margin-bottom: 8px;
}
#form input[type="submit"] {
    line-height: 1.4;
    background: #bf005c;
    border-color: #bf005c;
    color: #fbfbfb;
    text-transform: none;
    letter-spacing: normal;
    margin-left: 12px;
    font-size: 18px;
    font-weight: 700;
    box-shadow: none;
}
#form .text-gray-800 {
    color: #7F7F7F;
}
#form .rounded-md {
    border-radius: 40px;
    border: 1px solid #E1E1E1;
    box-shadow: none;
    font-size: 18px;
    font-weight: 400;
    line-height: 25.2px;
    letter-spacing: 0.01em;
    color: #7F7F7F;
    height: 48px;
    padding: 0 24px;
}
#form textarea.rounded-md {
    border-radius: 24px;
    height: 200px;
    padding: 24px 24px;
}
#form div[data-careersite--form-target="socialButtonContainer"] {
    border: none;
    height: auto;
    align-items: start;
    padding: 0;
}
#form .choice-input-wrapper {
    box-shadow: none;
}
#form .lined-background--company .lined-background__text {
    background: #fff;
    color: #0F0F0F;
    padding: 0;
    font-weight: 700;
}
#form input[type="checkbox"] {
    width: 24px;
    min-width: 24px;
    height: 24px;
    border-radius: 4px;
    appearance: none;
    padding: 0;
    border: 1px solid #e1e1e1;
    margin-bottom: 0;
    transform: translateY(4px);
    background: none;
    --tw-ring-color: transparent;
}
#form input[type="checkbox"]:checked {
    border-color: #bf005c;
}
#form input[type="checkbox"]:checked:before {
    content: "✓";
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    padding: 0.2rem;
    color: #bf005c;
    display: flex;
    align-items: center;
    align-content: center;
    justify-content: center;
}
#form input[type="checkbox"] + label {
    color: #1B1B1B;
    font-size: 18px;
}
#form .border-dashed {
    border: none;
}
#form .lined-background--company:before {
    display: none;
}
#form .lined-background--company {
    text-align: left;
}
#application_form {
    flex: 0 0 50%;
    max-width: 50%;
    padding: 0 15px;
}
#form .sm\:px-8 {
    padding: 0;
}
@media (max-width:1300px) {
  #form .font-company-header span {
    font-size: 48px;!important;
  }
}
@media (max-width:991.98px) {
  #form .h-full.px-4.py-20.overflow-y-auto {
    flex-direction: column;
  }
  #application_form {
    flex: 0 0 100%;
    max-width: 100%;
  }
  #form .font-company-header span {
    font-size: 40px!important;
    line-height: 1.1;
  }
  #form .z-career-block-content {
    margin-bottom: 1rem;
  }
  #form .z-career-block-content .text-center {
    margin-bottom: 0;
  }
}
@media (max-width: 767px) {
  #form .h-full.px-4.py-20.overflow-y-auto {
    padding: 107px 0 55px 0;
  }
  #form .z-career-block-content {
    padding-right: 5px;
    padding-left: 5px;
  }
  #application_form {
    padding-right: 20px;
    padding-left: 20px;
  }
}
/* Contact section style */
.contact_block {
	 background: #232323;
	 padding: 100px 0;
	 min-height: 100vh;
	 height: auto;
	 display: flex;
	 align-items: center;
}
 .contact_block picture {
	 height: 477px;
	 width: 100%;
	 max-width: 596px;
	 position: relative;
	 border-radius: 24px;
	 overflow: hidden;
	 display: flex;
}
 .contact_block picture img {
	 width: 100%;
	 height: 100%;
	 position: absolute;
	 left: 0;
	 top: 0;
	 object-fit: cover;
}
 .contact_block .cb_wrapper {
	 display: flex;
	 flex-direction: column;
	 justify-content: center;
	 height: 100%;
}
 .contact_block .cb_wrapper h3 {
	 color: #fbfbfb;
	 font-weight: 700;
     font-size: 56px;
     line-height: 1.07;
     letter-spacing: 0em;
     margin-bottom: 16px;
}
.contact_block .cb_wrapper p {
	 color: #fbfbfb;
     font-size: 24px;
     font-weight: 400;
     line-height: 34.8px;
     letter-spacing: 0.01em;
}
.contact_block .cb_wrapper p a {
	 text-decoration: underline;
     text-underline-offset: 5px;
}
 @media (min-height: 1100px) {
	 .contact_block {
		/*min-height: 1100px;
		*/
	}
}
@media (max-width: 1300px) {
  .contact_block .cb_wrapper h3 {
    font-size: 48px;
  }
}
@media (max-width: 991.98px) {
  .contact_block .cb_wrapper h3 {
    font-size: 40px;
    line-height: 1.1;
  }
  .contact_block .cb_wrapper p {
    font-size: 20px;
  }
}
 @media (max-width: 767px) {
	 .contact_block {
		 padding: 79px 0 111px 0;
	}
	 .contact_block picture {
		 height: auto;
		 padding-top: 80%;
		 border-radius: 16px;
	}
	 .contact_block picture img {
		 width: 100%;
		 height: 100%;
		 position: absolute;
		 left: 0;
		 top: 0;
		 object-fit: cover;
	}
	 .contact_block .row {
		 margin-bottom: -32px;
	}
	 .contact_block .row > div {
		 margin-bottom: 32px;
	}
}

/* Footer style */
main {
    z-index: 23;
}
footer.z-career-footer {
    background: #0F0F10;
    height: 563px;
    padding-top: 430px;
}
footer.z-career-footer:after {
    content: '';
    position: absolute;
    background: url(https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/footer-desktop.png) no-repeat bottom right -7vw / 112vw;
    width: 100%;
    height: 19vw;
    z-index: -1;
    bottom: 0;
    left: 0;
}
footer.block-px {
    position: absolute;
    width: 100%;
    color: #fff;
}
footer .font-company-header {
    font-size: 18px;
    font-weight: 700;
    line-height: 25.2px;
    letter-spacing: 0.01em;
}
footer.block-px ul li a,
footer.block-px ul li button,
footer.block-px a {
    font-size: 16px;
    font-weight: 400;
    line-height: 22.4px;
    letter-spacing: 0.01em;
    color: #fff !important;
}
footer .border-company-primary-text {
    border-color: rgb(255 255 255 / 10%);
}
.z-career-floating-job-apply-button {
    display: none;
}

@media (max-width: 767px) {
  footer.z-career-footer:after {
    height: 380px;
    background: url("https://smartclip.tv/wp-content/themes/smartclip-new/assets/images/footer-mobile.png");
    background-size: cover;
    background-position: bottom center;
    background-repeat: no-repeat;
  }
  footer.block-px {
    padding-left: 5px;
    padding-right: 5px;
  }
}
</style>
