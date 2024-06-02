<?php namespace App\Repositories\user\client\search;

use App\Models\User;

class SearchClientUserRepository implements SearchClientUserInterface
{

    public function searchCreators(): array
    {
        $creators = User::AcceptRequest(getFillableSort('User'))
        ->where(['is_creator' => 1,"is_active" => 1])
        ->filter()
        ->orderBy(request()->get('sort') ?? 'id')
        ->paginate(request()->get('perpage')??8, ['*'], 'page');
        $data = array(
            'creators' => $creators,
        );
        return $data;
    }

}
