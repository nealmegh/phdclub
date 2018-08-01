<?php

namespace App\Repositories\Backend\Auth;

use App\Category;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use App\Events\Backend\Auth\Category\CategoryCreated;
use App\Events\Backend\Auth\Category\CategoryUpdated;

/**
 * Class CategoryRepository.
 */
class CategoryRepository extends BaseRepository
{
    /**
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    /**
     * @param array $data
     *
     * @return Category
     * @throws GeneralException
     */
    public function create(array $data) : Category
    {
        // Make sure it doesn't already exist
        if ($this->CategoryExists($data['name'])) {
            throw new GeneralException('A Category already exists with the name '.$data['name']);
        }

//        if (! isset($data['permissions']) || ! \count($data['permissions'])) {
//            $data['permissions'] = [];
//        }
//
//        //See if the Category must contain a permission as per config
//        if (config('access.categories.category_must_contain_permission') && \count($data['permissions']) === 0) {
//            throw new GeneralException(__('exceptions.backend.access.categories.needs_permission'));
//        }

        return DB::transaction(function () use ($data) {
            $category = parent::create(['name' => strtolower($data['name'])]);

            if ($category) {


                event(new CategoryCreated($category));

                return $category;
            }

            throw new GeneralException(trans('exceptions.backend.access.categories.create_error'));
        });
    }

    /**
     * @param Category  $category
     * @param array $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function update(Category $category, array $data)
    {
        if ($category->isAdmin()) {
            throw new GeneralException('You can not edit the administrator category.');
        }

        // If the name is changing make sure it doesn't already exist
        if ($category->name !== strtolower($data['name'])) {
            if ($this->categoryExists($data['name'])) {
                throw new GeneralException('A category already exists with the name '.$data['name']);
            }
        }

        if (! isset($data['permissions']) || ! \count($data['permissions'])) {
            $data['permissions'] = [];
        }

        //See if the category must contain a permission as per config
        if (config('access.categories.category_must_contain_permission') && \count($data['permissions']) === 0) {
            throw new GeneralException(__('exceptions.backend.access.categories.needs_permission'));
        }

        return DB::transaction(function () use ($category, $data) {
            if ($category->update([
                'name' => strtolower($data['name']),
            ])) {
                $category->syncPermissions($data['permissions']);

                event(new CategoryUpdated($category));

                return $category;
            }

            throw new GeneralException(trans('exceptions.backend.access.categories.update_error'));
        });
    }

    /**
     * @param $name
     *
     * @return bool
     */
    protected function CategoryExists($name) : bool
    {
        return $this->model
                ->where('name', strtolower($name))
                ->count() > 0;
    }
}
