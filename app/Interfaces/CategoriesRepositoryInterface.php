<?php

namespace App\Interfaces;

use App\Models\Categories;
use Illuminate\Support\Collection;

interface CategoriesRepositoryInterface
{
    /**
     * @param array $newsData
     * @return Categories
     */
    public function createCategory(array $newsData): Categories;

    /**
     * @return Collection
     */
    public function getAllCategories(): Collection;
}
