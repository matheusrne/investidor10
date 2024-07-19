<?php

namespace App\Interfaces;

use App\Models\Categories;
use Illuminate\Support\Collection;

interface CategoriesServiceInterface
{
    /**
     * @param array $categoryData
     * @return Categories
     */
    public function createCategory(array $categoryData): Categories;

    /**
     * @return Collection
     */
    public function getAllCategories(): Collection;
}
