<?php

namespace App\Interfaces;

use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface NewsServiceInterface
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
     * @param int $id
     * @return Model|null
     */
    public function getNewsById(int $id): Model|null;

    /**
     * @param string $query
     * @return Collection
     */
    public function getNewsByQuery(string $query): Collection;
}
