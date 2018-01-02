<?php

namespace App\Application\Transformers;

use Illuminate\Database\Eloquent\Model;

class ActiviteTransformers extends AbstractTransformer
{

    public function transformModel(Model $modelOrCollection)
    {
        return [
            "id" => $modelOrCollection->id,
			"title" => $modelOrCollection->title,
			"video" => $modelOrCollection->video

        ];
    }

    public function transformModelAr(Model $modelOrCollection)
    {
        return [
           "id" => $modelOrCollection->id,
			"title" => $modelOrCollection->title,
			"video" => $modelOrCollection->video

        ];
    }

}