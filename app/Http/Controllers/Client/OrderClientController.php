<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderClientController extends Controller
{
    public function show()
    {
        $step = session('step', 1);
        return view('client.order.index', compact('step'));
    }

    public function next(Request $request)
    {
        $data = $request->except('_token');
        session()->put('order', array_merge(session('order', []), $data));

        $step = session('step', 1);
        session()->put('step', $step + 1);
        return redirect()->route('order.show');
    }

    public function back()
    {
        $step = session('step', 1);
        session()->put('step', max($step - 1, 1));
        return redirect()->route('order.show');
    }

    public function submit(Request $request)
    {
        $data = array_merge(session('order', []), $request->except('_token'));

        // Simpan ke database
        // Order::create($data);

        session()->forget(['step', 'order']);
        return redirect()->route('order.show')->with('success', 'Order berhasil dikirim!');
    }


}
