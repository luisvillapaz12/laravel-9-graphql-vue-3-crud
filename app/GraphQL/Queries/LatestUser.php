<?php

namespace App\GraphQL\Queries;
use App\Models\User;

final class LatestUser
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver
        //complex logic 
        return User::all()-last();
    }
}
