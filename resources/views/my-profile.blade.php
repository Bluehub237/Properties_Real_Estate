@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('content')
  <!--===== HERO AREA STARTS =======-->
  <div class="inner-header-area">
    <div class="containe-fluid">
      <div class="row">
        <div class="col-lg-6">
          <div class="inner-header heading1">
            <h2>My Profile</h2>
            <div class="space28"></div>
            <p><a href="index.html">Home</a> <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 9 16" fill="none">
                <path d="M1.5 1.74997L7.75 7.99997L1.5 14.25" stroke="#1B1B1B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg> My Profile</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="inner-images">
            <img src="assets/img/all-images/hero/hero-img9.png" alt="housa">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->
  <div class="space30"></div>
  <!--===== DASHBOARD AREA STARTS =======-->
  <div class="profile-section-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="heading1">
            <h2>My Profile</h2>
            <div class="space32"></div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="account-details-boxarea">
            <h4>Upload Profile Photo</h4>
            <div class="space24"></div>
            <div class="box-agent-avt">
              <div class="img-poster">
                <img src="assets/img/all-images/others/others-img11.png" alt="avatar" loading="lazy">
              </div>
              <div class="content uploadfile">
                <p>Upload a new poster</p>
                <div class="space16"></div>
                <div class="box-ip">
                  <input type="file" class="ip-file">
                </div>
                <div class="space16"></div>
                <span>PNG/JPEG (100/100)</span>
              </div>
            </div>
            <div class="space30"></div>
            <div class="personal-info-area">
              <h3>Upload Profile Photo</h3>
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Username*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Username">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Email*</h5>
                    <div class="space16"></div>
                    <input type="email" placeholder="Email*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Phone*</h5>
                    <div class="space16"></div>
                    <input type="number" placeholder="Phone*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>First Name*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="First Name*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Last Name*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Last Name*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Position*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Position*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Language*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Language*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Company Name*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Company Name*">
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Tax Number*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Tax Number*">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>Address*</h5>
                    <div class="space16"></div>
                    <input type="text" placeholder="Address*">
                  </div>
                </div>
                <div class="col-lg-12 col-md-12">
                  <div class="space28"></div>
                  <div class="input-area">
                    <h5>About Me*</h5>
                    <div class="space16"></div>
                    <textarea placeholder="Your Message"></textarea>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="space32"></div>
                  <div class="btn-area1 text-end">
                    <a href="index.html" class="vl-btn1">Update Profile <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="space30"></div>
          <div class="password-info-area">
            <h2>Change Your Password</h2>
            <div class="box">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <div class="box-fieldset">
                    <label>Old Password:<span>*</span></label>
                    <div class="box-password">
                      <input type="password" class="form-contact style-1 password-field" placeholder="Password">
                      <span class="show-pass">
                        <i class="fa-regular fa-eye"></i>
                        <i class="fa-regular fa-eye-slash"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="box-fieldset">
                    <label>New Password:<span>*</span></label>
                    <div class="box-password">
                      <input type="password" class="form-contact style-1 password-field2" placeholder="Password">
                      <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div>
                      <span class="show-pass2">
                        <i class="fa-regular fa-eye"></i>
                        <i class="fa-regular fa-eye-slash"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="box-fieldset">
                    <label>Confirm Password:<span>*</span></label>
                    <div class="box-password">
                      <input type="password" class="form-contact style-1 password-field3" placeholder="Password">
                      <div data-lastpass-icon-root="" style="position: relative !important; height: 0px !important; width: 0px !important; float: left !important;"></div><span class="show-pass3">
                        <i class="fa-regular fa-eye"></i>
                        <i class="fa-regular fa-eye-slash"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="space32"></div>
            <div class="btn-area1 text-end">
              <a href="index.html" class="vl-btn1">Update Password <span class="arrow1"><i class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i class="fa-solid fa-arrow-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== DASHBOARD AREA ENDS =======-->
  <div class="space30"></div>
@endsection
