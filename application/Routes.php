<?php

Route::set('index.php', function(){
    appController::CreateView('index');
});

Route::set('userList', function(){
    appController::CreateView('userList');
});

Route::set('advertisements', function(){
    appController::CreateView('advertisements');
});

?>