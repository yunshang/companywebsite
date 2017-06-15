<?php


namespace App\Repositories\Admin;


use App\ArticleKind;
use App\User;
use App\Article;

class AdminRepository
{
    public function dashboard_init_data()
    {
        return $collects = collect(
            [
                [
                    'count' => User::all()->count(),
                    'title' => '用户',
                    'sup' => '人',
                    'icon' => 'ion-person-add',
                    'bck' => 'bg-aqua',
                    'url' => '/admin/users'
                ],
                [
                    'count' => Article::all()->count(),
                    'title' => '新闻',
                    'sup' => '条',
                    'icon' => 'ion-android-chat',
                    'bck' => 'bg-red',
                    'url' => 'admin/articles/index'
                ],
                [
                    'count' => ArticleKind::all()->count(),
                    'title' => '新闻分类',
                    'sup' => '条',
                    'icon' => 'ion-pricetags',
                    'bck' => 'bg-olive',
                    'url' => 'admin/articlekind/index'
                ],
                [
                    'count' => 0,
                    'title' => '视频',
                    'sup' => '个',
                    'icon' => 'ion-videocamera',
                    'bck' => 'bg-purple',
                    'url' => 'admin/video/index'
                ],
            ]
        );
    }
}