<?php

namespace App\GraphQL\Types;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'Object type of the Post model',
        'model' => Post::class,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The id of the post',
            ],
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The title of the post',
            ],
            'content' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The content of the post',
            ],
            'author' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The author of the post',
            ],
        ];
    }
}
