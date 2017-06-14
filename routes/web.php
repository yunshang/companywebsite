<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','QuestionsController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/group', 'GroupController@index');
Route::get('/culture', 'CultureController@index');
Route::get('/joinus', 'JoinusController@index');
Route::post('/joinus','JoinusController@store');
Route::get('/subsidiary', 'SubsidiaryController@index');
Route::get('/contactus', 'ContactusController@index');
Route::get('/new', 'NewController@index');
Route::get('/newlist', 'NewController@newlist');

//邮件的验证
Route::get('/email/verify/{token}',['as'=>'email.verify','uses'=>'EmailController@verify']);

//问题的创建和显示视图
Route::resource('questions','QuestionsController',['names'=>[
    'create'=>'questions.create',
    'show'=>'questions.show'
]]);


Route::post('questions/{questionId}/answer','AnswersController@store');//创建问题的答案

Route::get('/questions/{questionId}/follow','QuestionFollowController@follow');//用户关注某个问题


Route::get('messages','NotificationsController@index');//用户的站内信通知
Route::get('message/{message}','NotificationsController@show');//用户的站内信通知
Route::get('messages/read','NotificationsController@read');//标记消息为已读

Route::get('inbox','InboxController@index');
Route::get('inbox/{dialogId}','InboxController@show');//私信消息详情
Route::post('inbox/{dialogId}/store','InboxController@store');//私信回复


Route::get("/avatar",'UsersController@avatar');//用户头像
Route::post("/avatar",'UsersController@changeAvatar');//修改用户头像

Route::get("/password",'PasswordController@password');//修改密码
Route::post("/password/update",'PasswordController@update');//用户修改密码

Route::get("/setting",'SettingController@index');//用户设置面板
Route::post("/setting",'SettingController@store');//用户设置保存

Route::get("/people/{userName}",'ProfileController@index')->name('questions');//用户的个人主页
Route::get("/people/{userName}/answers",'ProfileController@answers')->name('answers');//用户的个人主页
Route::get("/people/{userName}/like",'ProfileController@like')->name('like');//用户的个人主页
Route::get("/people/{userName}/followers",'ProfileController@followers')->name('followers');//用户的个人主页
Route::get("/people/{userName}/following",'ProfileController@following')->name('following');//用户的个人主页



Route::group(['namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.index'); //后台首页
    Route::get('/admin/profile','AdminController@adminInfo');//管理员资料
    Route::get('/admin/users','UsersController@index')->name('admin.users');//系统用户信息
    Route::get('/admin/users/{id}','UsersController@edit');//系统用户信息
    Route::patch('/admin/users/{id}','UsersController@update');//系统用户信息修改
    Route::delete('/admin/users/{id}','UsersController@destroy');//系统用户删除
    Route::post('/admin/profile/update','UsersController@updateProfile');//管理员信息修改

    Route::get('/admin/question/index','QuestionsController@index')->name('admin.questions');//问题列表界面
    Route::get('/admin/question/create','QuestionsController@create');//创建问题
    Route::post('/admin/question','QuestionsController@store');//创建问题
    Route::get('/admin/question/edit/{id}','QuestionsController@edit');//编辑问题页面
    Route::patch('/admin/question/{id}','QuestionsController@update');//编辑问题
    Route::delete('/admin/question/{id}','QuestionsController@destroy');//删除问题

    Route::get('/admin/comments/index','CommentsController@index')->name('admin.comments');//评论列表
    Route::delete('/admin/comment/{id}','CommentsController@destroy');//删除评论

    Route::get('/admin/topics/index','TopicsController@index')->name('admin.topics');//标签列表
    Route::delete('/admin/comment/{id}','TopicsController@destroy');//删除标签

    Route::get('/admin/articles/index','ArticlesController@index')->name('admin.articles');
    Route::get('/admin/articles/create','ArticlesController@create');//创建问题
    Route::post('/admin/articles/uploadimage','ArticlesController@uploadimage');//上传图片
    Route::patch('/admin/articles/uploadimage','ArticlesController@uploadimage');//上传图片
    Route::post('/admin/articles','ArticlesController@store');//创建问题
    Route::get('/admin/articles/edit/{id}','ArticlesController@edit');//编辑问题页面
    Route::patch('/admin/articles/{id}','ArticlesController@update');//编辑问题
    Route::delete('/admin/articles/{id}','ArticlesController@destroy');//删除问题

    Route::get('/admin/articlekind/index','ArticleKindController@index')->name('admin.articlekind');
    Route::get('/admin/articlekind/create','ArticleKindController@create');//创建问题
    Route::post('/admin/articlekind','ArticlekindController@store');
    Route::get('/admin/articlekind/edit/{id}','ArticlekindController@edit');
    Route::patch('/admin/articlekind/{id}','ArticleKindController@update');//编辑问题
    Route::delete('/admin/articlekind/{id}','ArticleKindController@destroy');//删除问题

    Route::get('/admin/resume/index','ResumeController@index')->name('admin.resume');
    Route::get('/admin/resume/show/{id}','ResumeController@show');
    Route::delete('/admin/resume/{id}','ResumeController@destroy');//删除问题
    Route::get('/admin/resume/download/{id}', 'ResumeController@getDownload');

    Route::get('/admin/positions/index','PositionsController@index')->name('admin.positions');
    Route::get('/admin/positions/create','PositionsController@create');//创建问题
    Route::post('/admin/positions','PositionsController@store');
    Route::get('/admin/positions/edit/{id}','PositionsController@edit');
    Route::patch('/admin/positions/{id}','PositionsController@update');//编辑问题
    Route::delete('/admin/positions/{id}','PositionsController@destroy');//删除问题
});