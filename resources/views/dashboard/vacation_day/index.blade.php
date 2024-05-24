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
                                    <th>Nhân viên</th>
                                    <th>Năm</th>
                                    <th>Tổng số ngày nghỉ</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vacationDays as $vacationDay)
                                    <tr>
                                        <td>{{ $vacationDay->id }}</td>
                                        <td>{{ $vacationDay->employee->name }}</td>
                                        <td>{{ $vacationDay->year }}</td>
                                        <td>{{ $vacationDay->total_vacation_days }}</td>
                                        <td>
                                            <a href="{{ route('vacation_days.edit', $vacationDay->id) }}" class="btn btn-warning">Sửa</a>
                                            <form action="{{ route('vacation_days.destroy', $vacationDay->id) }}" method="POST" style="display:inline-block;">
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
                        <form action="{{ route('vacation_days.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="employee_id">Nhân viên:</label>
                                <select name="employee_id" id="employee_id" class="form-control" required>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="year">Năm:</label>
                                <input type="number" name="year" id="year" class="form-control" value="{{ old('year') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="total_vacation_days">Tổng số ngày nghỉ:</label>
                                <input type="number" name="total_vacation_days" id="total_vacation_days" class="form-control" value="{{ old('total_vacation_days') }}" required>
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


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nhân viên</th>
                                    <th>Năm</th>
                                    <th>Tổng số ngày nghỉ</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vacationDays as $vacationDay)
                                    <tr>
                                        <td>{{ $vacationDay->id }}</td>
                                        <td>{{ $vacationDay->employee->name }}</td>
                                        <td>{{ $vacationDay->year }}</td>
                                        <td>{{ $vacationDay->total_vacation_days }}</td>
                                        <td>
                                            <a href="{{ route('vacation_days.edit', $vacationDay->id) }}" class="btn btn-warning">Sửa</a>
                                            <form action="{{ route('vacation_days.destroy', $vacationDay->id) }}" method="POST" style="display:inline-block;">
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
