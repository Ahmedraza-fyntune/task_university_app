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
                    <div class="card">
                        <h5 class="card-header">Students Details </h5>
                        <div class="card-datatable table-responsive">
                            <div id="DataTables_Table_2_wrapper" class="dataTables_wrapper dt-bootstrap5">

                                <table class="dt-row-grouping table border-top dataTable dtr-column"
                                       id="DataTables_Table_2" aria-describedby="DataTables_Table_2_info"
                                       style="width: 995px;">
                                    <thead>
                                    <tr>

                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 81px;"
                                            aria-label="Name: activate to sort column ascending">Sr.no
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 81px;"
                                            aria-label="Name: activate to sort column ascending">Name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 85px;"
                                            aria-label="Email: activate to sort column ascending">Email
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 68px;"
                                            aria-label="City: activate to sort column ascending">Teacher
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 73px;"
                                            aria-label="Date: activate to sort column ascending">Subject
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_2" rowspan="1"
                                            colspan="1" style="width: 101px;"
                                            aria-label="Salary: activate to sort column ascending">Gender
                                        </th>

                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 106px;"
                                            aria-label="Actions">Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($allStudents as $data)
                                    <tr class="odd">
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->fname . ' ' . $data->lname}}</td>
                                        <td>{{$data->email}}</td>
                                        <td>{{$data->teacher_name}}</td>
                                        <td>{{$data->sub_name}}</td>
                                        <td>{{$data->gender}}</td>

                                        <td><span class="badge bg-label-warning me-1 edit" edt_id="{{$data->stud_id}}">edit</span>
                                        <span class="badge bg-label-danger me-1 delete" del_id="{{ $data->stud_id}}">delete</span></span>
                                        </td>

                                    </tr>
                                    @endforeach
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
{{--for edit operation --}}
                    <div class="modal fade" id="basicModal" tabindex="-1" >
                        <div class="modal-dialog modal-xl" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Edit Student Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" name="mdl_edt_frm">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-4 mb-4 ">
                                                <label for="mdlname" class="form-label">first Name</label>
                                                <input type="text" id="mdlname" class="form-control" name="mdl_fname" placeholder="Enter Name" value="">
                                            </div>
                                            <div class="col-sm-4 mb-4 ">
                                                <label for="mdlname" class="form-label">Last Name</label>
                                                <input type="text" id="mdlname" class="form-control" name="mdl_lname" placeholder="Enter Name" value="">
                                            </div>


                                            <div class="col-sm-4">
                                                <div class="col mb-0">
                                                    <label for="mdladd" class="form-label">Address</label>
                                                    <input type="text" id="mdladd" name="mdl_add" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col mb-0">
                                                    <label for="mdladd" class="form-label">Email</label>
                                                    <input type="email" id="mdladd" name="mdl_email" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col mb-0">
                                                    <label for="mdladd" class="form-label">Contact</label>
                                                    <input type="text" id="mdladd" name="mdl_contact" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="col mb-0">
                                                    <label for="mdladd" class="form-label">Date Of Birth</label>
                                                    <input type="date" id="mdladd" name="mdl_dob" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <div class="valid-feedback"></div>

                                    <button type="button" class="btn btn-primary edt_save">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>


{{--                    foe delete operation modal --}}
                    <div class="modal fade" id="deleteModal" tabindex="-1" >
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel1">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="post" name="msl_teacher_frm">
                                    @csrf
                                    <div class="modal-body">
                                        <p>Are you sure you want to delete this record?<br></p>
                                    </div>
                                </form>
                                <div class="modal-footer">
                                    <div class="valid-feedback"></div>

                                    <button type="button" class="btn btn-danger cnf_del">Delete</button>
                                </div>
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
    <script >
        $('#DataTables_Table_2').DataTable({

            dom: 'lBfrtip',
            buttons: [
            'copy', 'excel', 'pdf', 'csv'
        ]
        }
        );

    </script>
    <script src="{{asset('Js/studentlistview.js')}}"></script>
</body>



</html>

<!-- beautify ignore:end -->

