<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">



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
                            </div>
                            <div class="card-body">
                                <form name="tfrm" method="post">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label" for="teachname">Name</label>
                                        <input type="text" class="form-control" name="teachname" placeholder="Teacher Name">
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="Qualification">Qualification</label>
                                        <select class="form-select" id="Qualification" name="qual">
                                            <option value="">Select Qualification</option>
                                            @foreach($teacher_edu as $edu)
                                                <option value="{{$edu->id}}">{{$edu->name}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="add">address</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="add" class="form-control" name="address" placeholder="room no 434 street state country" aria-label="john.doe" aria-describedby="add2">
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="add">Contact</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="add" class="form-control" maxlength="12" name="teacher_contact" placeholder="999999999" aria-label="999999999" aria-describedby="add2">
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="add">Email</label>
                                        <div class="input-group input-group-merge">
                                            <input type="text" id="add" class="form-control" maxlength="100" name="teacher_email" placeholder="something@mail.com" aria-label="john.doe" aria-describedby="add2">
                                        </div>
                                        <div class="invalid-feedback"></div>
                                    </div>


                                    <button type="button" class="btn btn-primary addteach">Send</button>
                                </form>
                                <div class="valid-feedback server_msg"></div>
                            </div>
                        </div>
                    </div>
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
    <script src="{{asset('Js/teacher.js')}}"></script>
</body>



</html>

<!-- beautify ignore:end -->

