<?php

/*
|-------------------------------------------------------------------------- | Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', 'HomeController@index');

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


Route::group(['namespace' => 'Admin'], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index'); //后台首页
    Route::get('/admin/profile','AdminController@adminInfo');//管理员资料
    Route::get('/admin/users','UsersController@index')->name('admin.users');//系统用户信息
    Route::get('/admin/users/{id}','UsersController@edit');//系统用户信息
    Route::patch('/admin/users/{id}','UsersController@update');//系统用户信息修改
    Route::delete('/admin/users/{id}','UsersController@destroy');//系统用户删除

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
    Route::get('/admin/positions/create','PositionsController@create');
    Route::post('/admin/positions','PositionsController@store');
    Route::get('/admin/positions/edit/{id}','PositionsController@edit');
    Route::patch('/admin/positions/{id}','PositionsController@update');
    Route::delete('/admin/positions/{id}','PositionsController@destroy');

    Route::get('/admin/enterprisestyles/index','EnterpriseStyleController@index')->name('admin.enterprisestyles');
    Route::get('/admin/enterprisestyles/create','EnterpriseStyleController@create');
    Route::post('/admin/enterprisestyles','EnterpriseStyleController@store');
    Route::get('/admin/enterprisestyles/edit/{id}','EnterpriseStyleController@edit');
    Route::patch('/admin/enterprisestyles/{id}','EnterpriseStyleController@update');
    Route::delete('/admin/enterprisestyles/{id}','EnterpriseStyleController@destroy');

    Route::get('/admin/entries/index','EntryController@index')->name('admin.entries');
    Route::get('/admin/entries/create','EntryController@create');
    Route::post('/admin/entries','EntryController@store');
    Route::get('/admin/entries/edit/{id}','EntryController@edit');
    Route::patch('/admin/entries/{id}','EntryController@update');
    Route::delete('/admin/entries/{id}','EntryController@destroy');

    Route::get('/admin/settings','SettingController@companyInfo');//管理员资料
    Route::post('/admin/settings/{id}','SettingController@update');//系统用户信息修改
});
