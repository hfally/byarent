<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function setFeedback ($status, $message, $request = null, $redirect = null)
    {
        session()->flash('feedback', [
            'status' => $status,
            'message' => $message
        ]);

        $redirect = $redirect ?? redirect()->back();

        if ($request == null) {
            return $redirect;
        }

        return $redirect->withInput($request->all());
    }
}
