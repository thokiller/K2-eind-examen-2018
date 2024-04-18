<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
Use App\Order;

class UsersController extends Controller
{
    /**
     * undocumented function
     *
     * @return void
     */
    public function index()
    {
        $users = User::all();

        return view('users_overview', compact('users'));
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function deactivate(Request $request)
    {
        $params = $request->all();
        $id = $params['id'];

        $user = User::find($id);
        if ($user->customer_status == 1) {
            $user->customer_status = 0;
        }else{
            $user->customer_status = 1;
        }

        $user->save();
    }

    /**
     * undocumented function
     *
     * @return void
     */
    public function delete(Request $request)
    {
        $params = $request->all();
        $id = $params['id'];

        $user = User::find($id);

        $orders = Order::all();
        $ordered = $orders->where('customer_id', '=', $user->customer_id)->first();

        if ($ordered == null || $ordered == NULL) {
            $license = $user->license();
            $license->first()->licenseType()->delete();
            $user->delete();
            $license->delete();

            return 'success';
        }else {
            return 'error';
        }
    }
}
