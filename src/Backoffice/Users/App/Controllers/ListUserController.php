<?php

declare(strict_types=1);

namespace Lightit\Backoffice\Users\App\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Lightit\Backoffice\Users\App\Transformers\UserTransformer;
use Lightit\Backoffice\Users\Domain\Actions\ListUserAction;

class ListUserController
{
    public function __invoke(
        Request $request,
        ListUserAction $action,
    ): JsonResponse {
        $users = $action->execute();

        return responder()
            ->success($users, UserTransformer::class)
            ->respond();
    }
}
