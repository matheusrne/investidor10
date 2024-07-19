<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoriesServiceInterface;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class CategoriesController extends Controller
{

    protected CategoriesServiceInterface $categoriesService;

    /**
     * @param CategoriesServiceInterface $categoriesService
     */
    public function __construct(CategoriesServiceInterface $categoriesService)
    {
        $this->categoriesService = $categoriesService;
    }

    /**
     * @return View
     */
    public function showAll(): View
    {
        $allCategories = $this->categoriesService->getAllCategories();

        return view('show-categories', [
            'data' => $allCategories
        ]);
    }

    /**
     * @return View
     */
    public function show(): View
    {
        return view('create-category', [
            'data' => []
        ]);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->all();

        if (empty($data['name'])) {
            throw new Exception('Favor digitar um nome.', 404);
        }

        $this->categoriesService->createCategory($data);

        return redirect()->route('categories-show');
    }
}
