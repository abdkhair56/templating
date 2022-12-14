<div class="logo">
  <a href="{{ asset('/') }}">
    <img alt="RekapDigi" class="img-fluid" src="{{ asset('images/logo/no-image.png') }}">
  </a>
</div>
<div class="navigation">
  <nav>
    <div class="hamburger hamburger--spring js-hamburger ">
      <div class="hamburger-box">
        <div class="hamburger-inner"></div>
      </div>
    </div>
    <ul>
      <li class="has-sub-menu current_page">
        <a href="{{asset('/')}}">Home</a>
        <ul class="sub-menu">
          <li>
            <a href="index.html">Homepage 1</a>
          </li>
          <li>
            <a href="home-page-2.html">Homepage 2</a>
          </li>
          <li class="current_page">
            <a href="home-page-3.html">Homepage 3</a>
          </li>
          <li>
            <a href="home-page-4.html">Homepage 4</a>
          </li>
        </ul>
      </li>
      <li class="has-sub-menu">
        <a href="index.html">Job Seekers</a>
        <ul class="sub-menu">
          <li>
            <a href="job-seeker-dashboard.html">Job dashboard</a>
          </li>
          <li>
            <a href="browse-jobs.html">Browse jobs</a>
          </li>
          <li>
            <a href="job-single.html">Job single</a>
          </li>
          <li>
            <a href="my-stared-jobs.html">My stared jobs</a>
          </li>
          <li>
            <a href="edit-profile.html">Update my profile</a>
          </li>
          <li>
            <a href="edit-password.html">Change password</a>
          </li>
          <li>
            <a href="registration.html">Registration</a>
          </li>

        </ul>
      </li>


      <li class="has-sub-menu">
        <a href="#">For employers</a>
        <ul class="sub-menu">
          <li>
            <a href="job-dashboard.html">Job dashboard</a>
          </li>
          <li>
            <a href="post-a-job.html">Post a job</a>
          </li>
          <li>
            <a href="my-job-listing.html">My Jobs listing</a>
          </li>
          <li>
            <a href="find-staff.html">Find staff</a>
          </li>

          <li>
            <a href="emp-edit-profile.html">Update profile</a>
          </li>
          <li>
            <a href="emp-edit-password.html">Change password</a>
          </li>
          <li>
            <a href="emp-registration.html">Employer registration</a>
          </li>
        </ul>
      </li>

      <li class="has-sub-menu">
        <a href="#">Pages</a>
        <ul class="sub-menu">

          <li>
            <a href="blog.html">blog</a>
          </li>
          <li>
            <a href="blog-single.html">Blog single</a>
          </li>
          <li>
            <a href="contact-us.html">Contact us</a>
          </li>
          <li>
            <a href="plan-page.html">Membership Plans</a>
          </li>
          <li>
            <a href="login.html">Login</a>
          </li>
          <li>
            <a href="lost-password.html">Lost password</a>
          </li>
          <li>
            <a href="404.html">404</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <div class="ac_nav">
    <!--Not logedin-->
    <div class="login_pop">
      <button class="btn btn-primary">Login / Sign up <i class="fas fa-caret-down"></i></button>
      <div class="login_pop_box">
										<span class="twobtn_cont">
											<a class=" signjs_btn" href="registration.html">
											<span>Job seekers</span> Sign up
											<i class="far fa-user"></i>
											</a>
										<a class=" signrs_btn" href="emp-registration.html">	<span>EMPLOYERS</span> Sign up
											<i class="fas fa-landmark"></i>
										</a>
										</span>
        <div>
          <span class="member_btn">Already a member?</span>
          <a class="lgin_btn btn btn-primary" href="login.html">
            Login
          </a>
        </div>
      </div>
    </div>
    <!--end logedin-->
  </div>
</div>
