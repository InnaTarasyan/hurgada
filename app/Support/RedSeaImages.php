<?php

namespace App\Support;

class RedSeaImages
{
    public const FALLBACK_KEY = 'reef_diver';

    public static function url(string $key, int $width = 800): string
    {
        $pool = config('red_sea_images.pool', []);
        $base = $pool[$key]['src'] ?? $pool[self::FALLBACK_KEY]['src'] ?? '';

        return self::withWidth($base, $width);
    }

    public static function alt(string $key): string
    {
        $pool = config('red_sea_images.pool', []);

        return $pool[$key]['alt'] ?? 'Red Sea underwater scene';
    }

    public static function withWidth(string $src, int $width): string
    {
        if ($src === '') {
            return '';
        }

        $base = strtok($src, '?');

        if (str_contains($base, 'images.unsplash.com')) {
            return "{$base}?auto=format&fit=crop&w={$width}&q=80";
        }

        if (str_contains($base, 'images.pexels.com')) {
            return "{$base}?auto=compress&cs=tinysrgb&w={$width}";
        }

        return $src;
    }

    public static function section(string $name): array
    {
        $section = config("red_sea_images.{$name}", []);

        return array_map(function (array $item) use ($name) {
            $width = match ($name) {
                'hero' => 2000,
                'carousel', 'about' => 1200,
                'gallery_fallback' => 1600,
                'mosaic' => 900,
                'polaroids' => 600,
                default => 800,
            };

            if (isset($item['key'])) {
                $key = $item['key'];
                $item['src'] = self::url($key, $width);
                $item['alt'] = $item['alt'] ?? self::alt($key);

                if ($name === 'gallery_fallback') {
                    $item['thumb'] = self::url($key, 600);
                    $item['width'] = 1600;
                    $item['height'] = 1066;
                }
            }

            return $item;
        }, $section);
    }

    public static function hero(): string
    {
        return self::url(self::FALLBACK_KEY, 2000);
    }
}
