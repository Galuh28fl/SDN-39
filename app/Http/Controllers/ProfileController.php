<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class ProfileController extends Controller
{
    public function index(Request $request): Response
    {
        $kegiatanData = \App\Models\Kegiatan::with('tag')
            ->orderBy('tanggal', 'desc')
            ->limit(3)
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'judul' => $item->judul,
                    'tanggal' => $item->tanggal,
                    'image' => $item->image,
                    'deskripsi' => $item->deskripsi,
                    'tag' => $item->tag->nama ?? null,
                ];
            })
            ->toArray();

        $ekstraData = \App\Models\Extra::limit(3)->get()->map(function ($item) {
            $plainText = strip_tags($item->deskripsi ?? '');

            if (empty($plainText)) {
                $item->deskripsi = str_pad('-', 100, ' ', STR_PAD_RIGHT);
            } elseif (strlen($plainText) > 100) {
                $item->deskripsi = Str::limit($plainText, 100, '...');
            } else {
                $item->deskripsi = str_pad($plainText, 100, ' ', STR_PAD_RIGHT);
            }

            return $item;
        })->toArray();

        $artikelData = \App\Models\Artikel::orderBy('tanggal', 'desc')->get()->toArray();
        $pengumumanData = \App\Models\Pengumuman::all()->toArray();

        return response()->view('index', [
            'kegiatanData' => $kegiatanData,
            'ekstraData' => $ekstraData,
            'pengumumanData' => $pengumumanData,
            'artikelData' => $artikelData
        ]);
    }

    public function gallery(Request $request): Response
    {
        $gambarData = \App\Models\gambar::with('tag')->get()->map(function ($item) {
            return [
                'id' => $item->id,
                'image' => $item->image,
                'tag' => $item->tag->nama ?? null,
                'tag_slug' => $item->tag ? Str::slug($item->tag->nama) : null,
            ];
        })->toArray();

        $tagData = \App\Models\Tag::whereHas('gambar')->get()->map(function ($tag) {
            return [
                'nama' => $tag->nama,
                'slug' => Str::slug($tag->nama),
            ];
        })->toArray();
        return response()->view('gallery', [
            'gambarData' => $gambarData,
            'tagData' => $tagData
        ]);
    }

    public function class(Request $request): Response
    {
        $ekstraData = \App\Models\Extra::all()->toArray();
        return response()->view('class', [
            'ekstraData' => $ekstraData,
        ]);
    }

    public function activity(Request $request): Response
    {
        $search = $request->input('search');

        // Query dasar
        $query = \App\Models\Kegiatan::with('tag')->orderBy('tanggal', 'desc');

        // Filter jika ada input pencarian
        if ($search) {
            $query->where('judul', 'like', '%' . $search . '%');
        }

        // Ambil data paginasi
        $kegiatanPaginator = $query->paginate(6)->appends(['search' => $search]);

        // Ubah ke bentuk array yang disesuaikan
        $kegiatanData = $kegiatanPaginator->getCollection()->map(function ($item) {
            return [
                'id' => $item->id,
                'judul' => $item->judul,
                'tanggal' => $item->tanggal,
                'image' => $item->image,
                'deskripsi' => $item->deskripsi,
                'tag' => $item->tag->nama ?? null,
            ];
        });

        // Buat ulang pagination berdasarkan hasil map
        $paginatedData = new LengthAwarePaginator(
            $kegiatanData,
            $kegiatanPaginator->total(),
            $kegiatanPaginator->perPage(),
            $kegiatanPaginator->currentPage(),
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return response()->view('activity', [
            'kegiatanData' => $paginatedData,
            'search' => $search
        ]);
    }

    public function news(Request $request): Response
    {
        $search = $request->input('search');

        $artikelQuery = \App\Models\Artikel::orderBy('tanggal', 'desc');

        if ($search) {
            $artikelQuery->where('judul', 'like', '%' . $search . '%');
        }

        $artikelData = $artikelQuery->paginate(6)->withQueryString(); // penting agar pagination tetap bawa query pencarian

        return response()->view('news', [
            'artikelData' => $artikelData,
            'search' => $search
        ]);
    }

    public function newsShow(Request $request, string $id): Response
    {
        $artikelData = \App\Models\Artikel::find($id)->toArray();;
        return response()->view('news_show', [
            'artikelData' => $artikelData
        ]);
    }
}
