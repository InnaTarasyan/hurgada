<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
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
            $images = collect(config('red_sea_images.gallery_fallback'))
                ->map(fn (array $img) => [
                    'src' => $img['src'],
                    'thumb' => str_replace('w=1600', 'w=600', $img['src']),
                    'width' => 1600,
                    'height' => 1066,
                    'alt' => $img['alt'],
                ])
                ->all();
        }

        return view('pages.gallery', compact('images'));
    }
}
