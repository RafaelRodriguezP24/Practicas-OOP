<?php
namespace Medine;

use Medine\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name' => 'John',
    'last_name' => 'Doe',
]);

$user->nickname = 'johndoe';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset($user->nickname)) {
    echo "<p>Tu apodo es {$user->nickname}</p>";
} else {
    echo "<p>No tienes apodo</p>";
}
