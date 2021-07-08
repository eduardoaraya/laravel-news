<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository
{
    /**
     * @var News
     */
    private $model;

    /**
     * @param News $newsModel
     */
    public function __construct(News $newsModel)
    {
        $this->model = $newsModel;
    }

    /**
     * Search news by input
     *
     * @var string $search
     */
    public function search(string $search)
    {
        return $this->model->where(function($query) use ($search) {
            $query->orWhere('title', 'like', "%$search%");
            $query->orWhere('author', 'like', "%$search%");
            $query->orWhereHas('categorie', function ($subquery) use ($search) {
                $subquery->where('name', 'like', "%$search%");
            });
        })->get();
    }

    /**
     * Get recents news
     */
    public function getRecents()
    {
        return $this->model->orderBy('created_at', 'desc')->get();
    }

    /**
     * Get recents news
     */
    public function find(string $id)
    {
        return $this->model->findOrFail((int) $id);
    }

    /**
     * Create News
     *
     * @param array $data
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }
}
