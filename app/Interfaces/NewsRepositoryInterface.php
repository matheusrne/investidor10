<?php

namespace App\Interfaces;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NewsRepositoryInterface
{
    /**
     * @param array $newsData
     * @return News
     */
    public function createNews(array $newsData): News;

    /**
     * @return Collection
     */
    public function getAllNews(): Collection;

    /**
     * @param int $newsId
     * @return Model|null
     */
    public function getNewsById(int $newsId): Model|null;

    /**
     * @param string $query
     * @return Collection
     */
    public function getNewsByQueryString(string $query): Collection;
}
