<?php

namespace App\Http\Controllers;

use App\Services\TestMemoryLeakerService;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Str;

class TestMemoryLeakerController extends Controller
{
    // public function test(TestMemoryLeakerService $testMemoryLeakerService)
    public function test()
    {
        // Tạo string data với dung lượng 1MB
        // $testMemoryLeakerService->array[] = Str::repeat('a', 1024 * 1024);
        TestMemoryLeakerService::$staticArray[] = Str::repeat('a', 1024 * 1024);
        $memoryUsage = memory_get_peak_usage(true) / 1024 / 1024;

        // dd ra kết quả và bạn sẽ thấy memory sẽ tăng liên tục mỗi khi bạn refresh trang
        dd($memoryUsage . "MB");
    }

    public function data(Request $request):RedirectResponse {
        dd($request->input());
    }
}
