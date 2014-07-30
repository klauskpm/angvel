<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use User;

class UserTransformer extends TransformerAbstract {

    public function transform(User $user)
    {
        return [
            'login' => $user->username,
            'url' => '/users/' . $user->id
        ];
    }

}