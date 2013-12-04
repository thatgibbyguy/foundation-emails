<?php $thisPage="inliner"; ?>
<?php $title = "Ink: Email CSS Inliner"; include 'includes/_header.php' ?>
<section role="main">
<?php include 'includes/_top-bar.php' ?>

<section class="top-area">
  <div class="row">
    <div class="large-12 columns">
      <a class='sidebar-button show-for-small' id="sidebarButton" href="#sidebar" ><img alt="Menu-wht" src="images/offcanvas/menu-wht.png" /><h4>Ink</h4></a>
      <h2 class="hide-for-small">Inliner</h2>
    </div>
  </div>
</section>

<div class="row top-headlines">
  <div class="large-12 columns">
    <h1 class="light text-center">Bring your email styles inline</h1>
    <p class="lead text-center">Use Inky's Inliner to do it in one fell swoop.</p>
  </div>
</div>

<div class="row">
  <div class="large-7 columns">
    <form id="skateForm" class="inky-inliner">
      <h4 class="normal">Email content &amp; options</h4>
      
      <div class="inliner-form">      
        <label>Paste your email content here. Styles should be included. Links should be full URLs.</label>
        <textarea id="emailSource" placeholder="Paste your HTML here"></textarea>
      </div>
      
      
      <div class="inliner-form options hide-on-submit">   
        <label for="appendQuery">
          <input type="checkbox" id="appendQuery"> Append query string to links
        </label>
        <input id="linkAppend" type="text" placeholder="Enter append string (do not include the ?)" class="inactive">
        <!-- <label for="removeComments">
          <input type="checkbox" id="removeComments"> Remove Comments
        </label> -->
      </div>
      
      <br>
      
      <div id="emailBox" class="inliner-form">      
        <label>Enter your email and we'll send you a note once we add new features to Ink! <small>OPTIONAL</small></label>
        <input id="inlinerEmailSignup" type="email" placeholder="e.g. you@yourdomain.com">
      </div>
      
      <br>
     
      <a id="inlinerReset" href="#" class="button show-on-submit secondary">Convert Another Email</a>
      <a id="showPreview" href="#" class="button show-on-submit">Preview</a>
      
      <button type="submit" class="button hide-on-submit">Convert Email</button>
    </form>
  </div>
  <div class="large-4 columns">
    <img src="images/inky-computer.svg"/>
    <h4 class="normal">Why inline styles?</h4>
    <ul class="inline-advantages">
      <li>
        <div class="gmail">
          <p>Popular email clients like Gmail strip out CSS in the <code>&lt;style&gt;</code> tag.</p>
        </div>
      </li>
      <li>
        <div class="gmail">
          <p>This is the best way to guarantee your email works properly on the compatible clients listed in the docs.</p>
        </div>
      </li>
    </ul>
  </div>
</div>
<div id="previewModal">
  <div class="control-bar">
    <a class="close-btn" href="#">&larr; Return</a>
    <a class="button small secondary report-btn" href="#" data-reveal-id="inlinerReportModal">Report Broken</a>
  </div>
  <iframe src="process.php"></iframe>
</div>

<section class="callout course">
  <div class="row">
    <div class="large-4 columns">
      <div class="course-image">
        <a href="http://zurb.com/university/responsive-emails-intro?utm_source=Ink%20Marketing%20Site&utm_medium=Marketing%20Site&utm_content=Ink%20Inliner&utm_campaign=Introduction%20to%20Responsive%20Emails" target="_blank"><img src="http://zurb.com/university/assets/courses/responsive-emails-intro.png"/></a>
      </div>
    </div>
    <div class="large-7 columns">
      <div class="course-callout">
        <h3 class="light">Responsive Email Design Training</h3>
        <p>We practice Responsive Email Design daily at ZURB, sending out 10 email newsletter campaigns a month and creating email templates for our clients. We even built Ink to help us and others send emails. This course covers the basics that designers and developers &mdash; even marketers &mdash; should know to get started with responsive emails.</p>
        <a href="http://zurb.com/university/responsive-emails-intro?utm_source=Ink%20Marketing%20Site&utm_medium=Marketing%20Site&utm_content=Ink%20Inliner&utm_campaign=Introduction%20to%20Responsive%20Emails" class="button primary" target="_blank">View Course</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/_subscribe.php' ?>	
<div class="show-for-small">
  <ul class="mobile-nav">
    <li><a href="index.php">Home</a></li>
    <li><a href="process.php">Process</a></li>
    <li><a href="docs.php">Docs</a></li>
    <li><a href="templates.php">Email Templates</a></li>
  </ul>
</div>
<?php include 'includes/_footer.php' ?>