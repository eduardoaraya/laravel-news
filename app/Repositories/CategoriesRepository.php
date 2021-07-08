<?php

namespace App\Repositories;

use App\Models\Categories;

class CategoriesRepository
{
    /**
     * @var Categories
     */
    private $model;

    /**
     * @param News $categoriesModel
     */
    public function __construct(Categories $categoriesModel)
    {
        $this->model = $categoriesModel;
    }

    /**
     * Get all categories active
     */
    public function getAll()
    {
        return $this->model->where('active', true)->get();
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
