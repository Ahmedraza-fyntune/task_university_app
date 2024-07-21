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


                    <div class="card">
                        <h5 class="card-header">Teacher Details</h5>
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_2_length"><label>Show <select name="DataTables_Table_2_length" aria-controls="DataTables_Table_2" class="form-select"><option value="7">7</option><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"><div id="DataTables_Table_2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control" placeholder="" aria-controls="DataTables_Table_2"></label></div></div></div><table class="dt-row-grouping table border-top dataTable dtr-column" id="DataTables_Table_2" aria-describedby="DataTables_Table_2_info" style="width: 995px;">
                                    <thead>
                                    <tr>
                                        <th class="control sorting_disabled dtr-hidden" rowspan="1" colspan="1"
                                            style="width: 23px; display: none;" aria-label="">sr.no</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 81px;"
                                            aria-label="Name: activate to sort column ascending">sr.no
                                        </th>  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 81px;"
                                            aria-label="Name: activate to sort column ascending">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 85px;"
                                            aria-label="Email: activate to sort column ascending">Qualification
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 68px;"
                                            aria-label="City: activate to sort column ascending">Actions
                                        </th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($teachers as $teach)
                                    <tr class="odd">
                                        <td>
                                       {{$loop->iteration}}
                                        </td>
                                        <td>{{$teach->name}}</td>
                                        <td>{{$teach->qualification}}</td>
                                        <td>
                                            <div class="attrteach" tadd="{{$teach->address}}" tname="{{$teach->name}}" tqual="{{$teach->qualification}}" tid="{{$teach->id}}">

                                            <button class="btn btn-sm btn-primary edit"> edit</button>
                                            <button class="delete btn btn-sm btn-secondary">
                                                Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                        @endforeach
                                    </tbody>

                                </table><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_info" id="DataTables_Table_2_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div></div><div class="col-sm-12 col-md-6"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_2_previous"><a aria-controls="DataTables_Table_2" aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_2_next"><a aria-controls="DataTables_Table_2" aria-disabled="true" role="link" data-dt-idx="next" tabindex="-1" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>



                    <!-- Footer -->
                    <x-footer />
                    <!-- / Footer -->
                    <div class="modal fade" id="basicModal" tabindex="-1" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" name="msl_teacher_frm">
                                        @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label for="nameBasic" class="form-label">Name</label>
                                            <input type="text" id="mdlName" class="form-control" name="teachname" placeholder="Enter Name" value="">
                                        </div>
                                    </div>
                                    <div class="row g-2">
                                        <div class="col mb-0">
                                            <label for="emailBasic" class="form-label">Qualification</label>
                                            <input type="email" id="mdlQualification" name="qual" class="form-control" placeholder="xxxx@xxx.xx" value="">
                                        </div>
                                        <div class="col mb-0">
                                            <label for="dobBasic" class="form-label">Address</label>
                                            <input type="text" id="address" name="add" class="form-control" value="">
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="modal-footer">
                                    <div class="valid-feedback"></div>
                                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary sub_up">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

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
    <script src="{{asset('Js/teacherView.js')}}"></script>
</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-view-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 16:41:14 GMT -->
</html>

<!-- beautify ignore:end -->

