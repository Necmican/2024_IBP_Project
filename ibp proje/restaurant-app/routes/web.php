<?php
use App\Models\Message;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});
Route::middleware('auth')->group(function () {
    Route::get('/admin/panel', function () {

        $users = User::all();
        return view('admin_panel', compact('users'));
    })->name('admin_panel');

    Route::get('/User/panel', function () {
        $userId = 1;
        $messages = Message::where(function ($query) use ($userId) {
            $query->where('sender_id', Auth::id())->where('receiver_id', $userId);
        })->orWhere(function ($query) use ($userId) {
            $query->where('sender_id', $userId)->where('receiver_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        return view('kullanici_panel', compact('messages'));
    })->name('user_panel');
});
Route::get('/home', [Controller::class, 'home'])->name('home');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::post('/login', [Controller::class, 'loginPost'])->name('login.post');
Route::get('/registration', [Controller::class, 'registration'])->name('registration');
Route::post('/registration', [Controller::class, 'registrationPost'])->name('registration.post');
Route::get('/forgot_my_password', [Controller::class, 'forgot_my_password'])->name('forgot_my_password');
Route::post('/forgot_my_password', [Controller::class, 'forgot_my_passwordPost'])->name('forgot_my_password.post');
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::get('/addUser', [Controller::class, 'addUser'])->name('addUser');
Route::post('/addUser', [Controller::class, 'addUserPost'])->name('addUser.post');
Route::get('/Userupdate', [Controller::class, 'updateUser'])->name('updateUser');
Route::post('/Userupdate', [Controller::class, 'updateUserPost'])->name('updateUser.post');
Route::get('/deleteUser', [Controller::class, 'deleteUser'])->name('deleteUser');
Route::post('/deleteUser', [Controller::class, 'deleteUserPost'])->name('deleteUser.post');
Route::get('/showallUsers', [Controller::class, 'showAllUsers'])->name('showAllUsers');
Route::get('/addRestaurant', [Controller::class, 'addRestaurant'])->name('addRestaurant');
Route::post('/addRestaurant', [Controller::class, 'addRestaurantPost'])->name('addRestaurant.post');
Route::get('/Restaurantupdate', [Controller::class, 'updateRestaurant'])->name('updateRestaurant');
Route::post('/Restaurantupdate', [Controller::class, 'updateRestaurantPost'])->name('updateRestaurant.post');
Route::get('/deleteRestaurant', [Controller::class, 'deleteRestaurant'])->name('deleteRestaurant');
Route::post('/deleteRestaurant', [Controller::class, 'deleteRestaurantPost'])->name('deleteRestaurant.post');
Route::get('/showallRestaurants', [Controller::class, 'showAllRestaurants'])->name('showAllRestaurants');
Route::get('/addAnnouncement', [Controller::class, 'addAnnouncement'])->name('addAnnouncement');
Route::post('/addAnnouncement', [Controller::class, 'addAnnouncementPost'])->name('addAnnouncement.post');
Route::get('/editlastAnnouncement', [Controller::class, 'editLastAnnouncement'])->name('editLastAnnouncement');
Route::post('/editlastAnnouncement', [Controller::class, 'editLastAnnouncementPost'])->name('editLastAnnouncement.post');
Route::get('/showallAnnouncements', [Controller::class, 'showAllAnnouncements'])->name('showAllAnnouncements');
Route::get('/messages', [Controller::class, 'messages'])->name('messages');
Route::post('/messages', [Controller::class, 'messagesPost'])->name('messages.post');
Route::get('/chat', [Controller::class, 'messageChat'])->name('messageChat');
Route::post('/chat', [Controller::class, 'messageChatPost'])->name('messageChat.post');
Route::post('/homechat', [Controller::class, 'messageChatHomePost'])->name('messageChatHome.post');
Route::get('/usermessages', [Controller::class, 'usermessages'])->name('usermessages');
Route::post('/usermessages', [Controller::class, 'usermessagesPost'])->name('usermessages.post');
Route::get('/usershowallAnnouncements', [Controller::class, 'usershowAllAnnouncements'])->name('usershowAllAnnouncements');
Route::get('/userchat', [Controller::class, 'userChat'])->name('userChat');
Route::post('/userchat', [Controller::class, 'userChatPost'])->name('userChatPost.post');
Route::get('/duyurular', [Controller::class, 'userAnnouncements'])->name('userAnnouncements');
Route::post('/duyurular', [Controller::class, 'userAnnouncementsPost'])->name('userAnnouncements.post');
