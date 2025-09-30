<?php
include '../data.php';

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';

if ($name && $email) {
    $newId = count($users) + 1;
    $users[] = ['id' => $newId, 'name' => $name, 'email' => $email];

    // Сохраняем в data.php (если хочешь, чтобы было persist)
    file_put_contents('../data.php', '<?php $users = ' . var_export($users, true) . '; ?>');

    echo json_encode(['success' => true, 'user' => end($users)]);
} else {
    echo json_encode(['success' => false]);
}
