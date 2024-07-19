<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoriesServiceInterface;
use App\Interfaces\NewsServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;


class NewsController extends Controller
{
    protected NewsServiceInterface $newsService;
    protected CategoriesServiceInterface $categoriesService;

    /**
     * @param NewsServiceInterface $newsService
     * @param CategoriesServiceInterface $categoriesService
     */
    public function __construct(NewsServiceInterface $newsService, CategoriesServiceInterface $categoriesService)
    {
        $this->newsService = $newsService;
        $this->categoriesService = $categoriesService;
    }

    /**
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $query = $request->get('like');

        $cacheKeyQuery = $query ? ":query:{$query}" : "";

        $allNews = Cache::remember("news{$cacheKeyQuery}", 60, function () use ($query) {
            return ($query) ? $this->newsService->getNewsByQuery($query) : $this->newsService->getAllNews();
        });

        return view('home', [
            'allNews' => $allNews,
        ]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $allCategories = $this->categoriesService->getAllCategories();

        return view('create', [
           'allCategories' => $allCategories,
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->except('_token');

        $this->newsService->createNews($data);

        return redirect()->route('home');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function show(Request $request): View
    {
        $id = $request->route('newsId');

        return view('show', [
            'news' => $this->newsService->getNewsById($id)
        ]);
    }
}
