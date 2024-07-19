<?php

namespace App\Services;

use App\Interfaces\NewsRepositoryInterface;
use App\Interfaces\NewsServiceInterface;
use App\Jobs\Notification;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class NewsService implements NewsServiceInterface
{
    protected NewsRepositoryInterface $newsRepository;

    /**
     * @param NewsRepositoryInterface $newsRepository
     */
    public function __construct(NewsRepositoryInterface $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @param array $newsData
     * @return News
     */
    public function createNews(array $newsData): News
    {
        Cache::flush();
        Notification::dispatch($newsData);
        return $this->newsRepository->createNews($newsData);
    }

    /**
     * @return Collection
     */
    public function getAllNews(): Collection
    {
        return $this->newsRepository->getAllNews();
    }

    /**
     * @param $id
     * @return Model|null
     */
    public function getNewsById($id): Model|null
    {
        return $this->newsRepository->getNewsById($id);
    }

    /**
     * @param $query
     * @return Collection
     */
    public function getNewsByQuery($query): Collection
    {
        return $this->newsRepository->getNewsByQueryString($query);
    }
}
