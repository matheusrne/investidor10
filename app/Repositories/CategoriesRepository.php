<?php

namespace App\Repositories;

use App\Interfaces\CategoriesRepositoryInterface;
use App\Models\Categories;
use Illuminate\Support\Collection;

class CategoriesRepository implements CategoriesRepositoryInterface
{
    /**
     * @param array $newsData
     * @return Categories
     */
    public function createCategory(array $newsData): Categories
    {
        return Categories::create($newsData);
    }

    /**
     * @return Collection
     */
    public function getAllCategories(): Collection
    {
        return Categories::all();
    }
}
