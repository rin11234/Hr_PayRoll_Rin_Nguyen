@extends('dashboard.index');
@section('main')
<div class="main-wrapper">


    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Department</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Department</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_department"><i class="fa fa-plus"></i> Add Department</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Phòng ban</th>
                                    <th>Giới tính</th>
                                    <th>Sắc tộc</th>
                                    <th>Loại công việc</th>
                                    <th>Cổ đông</th>
                                    <th>Ngày tuyển dụng</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($earnings as $employee)
                                    <tr>
                                        <td>{{ $employee->id }}</td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->department->name }}</td>
                                        <td>{{ $employee->gender }}</td>
                                        <td>{{ $employee->ethnicity }}</td>
                                        <td>{{ $employee->employment_type }}</td>
                                        <td>{{ $employee->shareholder ? 'Có' : 'Không' }}</td>
                                        <td>{{ $employee->hire_date }}</td>
                                        <td>
                                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Sửa</a>
                                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Department Modal -->
        <div id="add_department" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('earning.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="department_id">Phòng ban:</label>
                                <select name="department_id" id="department_id" class="form-control" required>
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->id }}">{{ $department->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name">Tên:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="gender">Giới tính:</label>
                                <input type="text" name="gender" id="gender" class="form-control" value="{{ old('gender') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="ethnicity">Sắc tộc:</label>
                                <input type="text" name="ethnicity" id="ethnicity" class="form-control" value="{{ old('ethnicity') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="employment_type">Loại công việc:</label>
                                <select name="employment_type" id="employment_type" class="form-control" required>
                                    <option value="part-time">Part-time</option>
                                    <option value="full-time">Full-time</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shareholder">Cổ đông:</label>
                                <select name="shareholder" id="shareholder" class="form-control" required>
                                    <option value="1">Có</option>
                                    <option value="0">Không</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="hire_date">Ngày tuyển dụng:</label>
                                <input type="date" name="hire_date" id="hire_date" class="form-control" value="{{ old('hire_date') }}" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Department Modal -->

        <!-- Edit Department Modal -->
        <div id="edit_department" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Department</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Is</th>
                                    <th>Departments Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($departments as $department)
                                    <tr>
                                        <td>{{ $department->id }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>
                                            <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-warning">Sửa</a>
                                            <form action="{{ route('departments.destroy', $department->id) }}" method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Xóa</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Department Modal -->

        <!-- Delete Department Modal -->
        <div class="modal custom-modal fade" id="delete_department" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Department</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Department Modal -->

    </div>
    <!-- /Page Wrapper -->

</div>
@endsection
