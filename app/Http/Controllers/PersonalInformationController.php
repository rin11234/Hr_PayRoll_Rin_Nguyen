<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Models\PersonalInformation;

class PersonalInformationController extends Controller
{
    // Hiển thị danh sách các bản ghi
    public function index()
    {
        $personals = Personal::all();
        return view('dashboard.personals.index', compact('personals'));
    }

    // Hiển thị form tạo mới
    public function create()
    {
        return view('personal_information.create');
    }

    // Lưu bản ghi mới
    public function store(Request $request)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            'current_first_name' => 'required|string|max:50',
            'current_last_name' => 'required|string|max:255',
            // Thêm các quy tắc validation tương ứng cho từng trường khác nếu cần
        ]);

        try {
            // Tạo mới bản ghi
            Personal::create($request->all());

            // Chuyển hướng và thông báo thành công
            return redirect()->route('employees.index')->with('success', 'Đã tạo mới thông tin cá nhân thành công.');
        } catch (\Throwable $th) {
            // Xử lý lỗi nếu có
            return redirect()->back()->with('error', 'Đã xảy ra lỗi khi tạo mới thông tin cá nhân: ' . $th->getMessage());
        }
    }

    // Hiển thị thông tin chi tiết của một bản ghi
    public function show($id)
    {
        $personalInformation = Personal::findOrFail($id);
        return view('personal_information.show', compact('personalInformation'));
    }

    // Hiển thị form chỉnh sửa bản ghi
    public function edit($id)
    {
        $personalInformation = Personal::findOrFail($id);
        return view('personal_information.edit', compact('personalInformation'));
    }

    // Cập nhật thông tin của bản ghi
    public function update(Request $request, $id)
    {
        // Validate dữ liệu đầu vào
        $request->validate([
            // Thêm các quy tắc validation tương ứng cho từng trường
        ]);

        // Tìm bản ghi cần cập nhật
        $personalInformation = Personal::findOrFail($id);

        // Cập nhật thông tin
        $personalInformation->update($request->all());

        // Chuyển hướng và thông báo thành công
        return redirect()->route('personal_informations.index')->with('success', 'Đã cập nhật thông tin cá nhân thành công.');
    }

    // Xóa bản ghi
    public function destroy($id)
    {
        // Tìm bản ghi cần xóa
        $personalInformation = Personal::findOrFail($id);

        // Xóa bản ghi
        $personalInformation->delete();

        // Chuyển hướng và thông báo thành công
        return redirect()->route('personal_informations.index')->with('success', 'Đã xóa thông tin cá nhân thành công.');
    }
}
