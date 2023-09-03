# Json Placeholder fake API

## Installation

```
git clone
cd directory
composer install
```

## Usage



```php
$api = new App\JsonApi();

$users = $api->users()->list();

foreach($users as $user) {
    echo $user->name;
}
```

## Available Resources

- Users
  - List all users
  - List posts user
  - List todos user
  - Get a single user

- Posts
  - Create a post
  - Update a post
  - Delete a post

## Methods

```php
//Users
$user = $api->users()->user(1);

$users = $api->users()->list();

$posts = $api->users()->posts(1);

$todos = $api->users()->todos(1);

//Posts
$post = $api->posts()->remove([
    'id' => 10
]);

$post = $api->posts()->update([
    'id' => 10,
    'json' => [
        'userId' => 2,
        'title2' => 'post title 2',
        'body' => 'post body 2'
    ]
]);

$post = $api->posts()->add([
    'json' => [
        'userId' => 1,
        'title' => 'post title 1',
        'body' => 'post body 1'
    ]
]);
```

## Exceptions

```php
$api = new App\JsonApi();

try {
    
    $users = $api->users()->list();

    foreach($users as $user) {
        echo $user->name;
    }

} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    
    echo $e;
    
}
```


