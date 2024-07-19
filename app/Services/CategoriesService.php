<?php

namespace App\Services;

use App\Interfaces\CategoriesRepositoryInterface;
use App\Interfaces\CategoriesServiceInterface;
use App\Models\Categories;
use Illuminate\Support\Collection;

class CategoriesService implements CategoriesServiceInterface
{
    protected CategoriesRepositoryInterface $categoriesRepository;

    /**
     * @param CategoriesRepositoryInterface $categoriesRepository
     */
    public function __construct(CategoriesRepositoryInterface $categoriesRepository)
    {
        $this->categoriesRepository = $categoriesRepository;
    }

    /**
     * @param array $categoryData
     * @return Categories
     */
    public function createCategory(array $categoryData): Categories
    {
        return $this->categoriesRepository->createCategory($categoryData);
    }

    /**
     * @return Collection
     */
    public function getAllCategories(): Collection
    {
        return $this->categoriesRepository->getAllCategories();
    }
}
