<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPhotoController extends Controller
{
    /**
     * @param Request $request
     */
    public function removePhoto(Request $request)
    {
        $photoName = $request->get('photoName');
        if (Storage::disk('public')->exists($photoName))
        {
            Storage::disk('public')->delete($photoName);
        }
        $removePhoto = ProductPhotoController::where('image', $photoName);
        $productId = $removePhoto->first()->product_id;
        $removePhoto->delete();
        flash('Imagem removida com sucesso!')->success();
        return redirect()->route('admin.products.edit', ['product' => $productId]);
    }
}
