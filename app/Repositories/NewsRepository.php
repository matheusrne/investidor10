<?php

namespace App\Repositories;

use App\Interfaces\NewsRepositoryInterface;
use App\Models\News;
use Illuminate\Support\Collection;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @param array $newsData
     * @return News
     */
    public function createNews(array $newsData): News
    {
        return News::create($newsData);
    }

    /**
     * @return Collection
     */
    public function getAllNews(): Collection
    {
        return News::all();
    }

    /**
     * @param int $newsId
     * @return News|null
     */
    public function getNewsById(int $newsId): News|null
    {
        return News::find($newsId);
    }

    /**
     * @param string $query
     * @return Collection
     */
    public function getNewsByQueryString(string $query): Collection
    {
        return News::where("title", "LIKE", "%".$query."%")
            ->orWhere("body", "LIKE", "%".$query."%")
            ->orWhere("category", "LIKE", "%".$query."%")
            ->get();
    }
}
