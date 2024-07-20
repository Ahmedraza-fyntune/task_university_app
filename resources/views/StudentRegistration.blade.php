<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
</div>
<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-view-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 16:41:14 GMT -->
<x-head />
<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">







<!-- Menu -->
<x-sidebar />
<!-- / Menu -->



    <!-- Layout container -->
    <div class="layout-page">





<!-- Navbar -->
<x-header />
<!-- / Navbar -->



      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">

            <div class="col-xl">
                <div class="card mb-4">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Student Registration form</h5> <
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="mb-3">
                        <label class="form-label" for="fname">First Name</label>
                        <input type="text" class="form-control" id="fname" name="F-name" placeholder="Your First Name  ">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="lname">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="L-name" placeholder="Last Name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="email">Email</label>
                        <div class="input-group input-group-merge">
                            <input type="text" id="email" class="form-control" name="email" placeholder="john.doe" aria-label="john.doe" aria-describedby="email2">
                            <span class="input-group-text" id="email2">@example.com</span>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="form-text"> You can use letters, numbers &amp; periods </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="phone">Phone No</label>
                        <input type="text" id="phone" name="contact" class="form-control phone-mask" placeholder="658 799 8941">
                        <div class="invalid-feedback"></div>
                    </div>
                        <div class="mb-3">

                            <label class="form-label" for="phone">Gender : </label>

                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="M" id="defaultRadio2" checked="">
                                    <label class="form-check-label" for="defaultRadio2">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input name="gender" class="form-check-input" type="radio" value="F" id="defaultRadio3" checked="">
                                    <label class="form-check-label" for="defaultRadio3">
                                        Female
                                    </label>
                                </div>
                        </div>
                    <div class="mb-3">
                        <label class="form-label" for="dateofbirth">Date Of Birth</label>
                        <input id="dateofbirth" class="form-control" name="dob" placeholder="birth date" type="date"/>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <input id="address" class="form-control" name="add" placeholder="Enter Residential Address" type="text"/>
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address">Teacher</label>
                        <select name="sel_teacher" class="form-control" id="">
                            <option value="">Teachers List </option>
                            @foreach ($Teachers  as $teach )
                            <option value="{{$teach->id}}">{{$teach->name}}</option>

                            @endforeach

                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                        <div class="mb-3">
                        <label class="form-label" for="address">Subject</label>
                        <select name="sel_sub" class="form-control" id="">
                            <option value="">Subject List </option>
                            @foreach ($Subjects  as $sub )
                            <option value="{{$sub->id}}">{{$sub->name}}</option>

                            @endforeach

                        </select>
                        <div class="invalid-feedback"></div>
                    </div>
                      <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                  </div>
                </div>
              </div>
          <!-- / Content -->




<!-- Footer -->
<x-footer />
<!-- / Footer -->


          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

  </div>
  <!-- / Layout wrapper -->




 <x-core-scripts />

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-view-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 16:41:14 GMT -->
</html>

<!-- beautify ignore:end -->

