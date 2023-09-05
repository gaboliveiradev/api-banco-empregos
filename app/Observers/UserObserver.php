<?php

namespace App\Observers;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use SebastianBergmann\Type\VoidType;

class UserObserver
{
    public function creating(User $model): void
    {
        $model->id = Uuid::uuid4();
    }
}
