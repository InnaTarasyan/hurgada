<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Support\RedSeaImages;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $records = Gallery::query()
            ->where('collection', 'hurghada')
            ->orderByDesc('created_at')
            ->get();

        $images = $records->map(function (Gallery $g) {
            $src = $g->file_path ? Storage::url($g->file_path) : null;
            $thumb = $g->thumbnail_path ? Storage::url($g->thumbnail_path) : $src;
            return [
                'src' => $src,
                'thumb' => $thumb,
                'width' => $g->width ?? 1600,
                'height' => $g->height ?? 1066,
                'alt' => $g->title ?: 'Hurghada',
            ];
        })->filter(fn ($img) => $img['src'])->values()->all();

        if (empty($images)) {
            $images = RedSeaImages::section('gallery_fallback');
        }

        return view('pages.gallery', compact('images'));
    }
}
