<?php

namespace App\Http\Controllers;

use App\Models\CategoryShare;
use Illuminate\Http\Request;

class ShareController extends Controller
{
    public function delete(CategoryShare $share)
    {
        $this->authorize('delete', $share);

        $share->delete();

        return redirect()->back();
    }
}
