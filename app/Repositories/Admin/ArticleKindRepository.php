<?php
namespace App\Repositories\Admin;

use App\Article;
use App\ArticleKind;
use App\Topic;

class ArticleKindRepository
{
    public function byId($id)
    {
        return ArticleKind::find($id);
    }

    public function getArticlesFeed()
    {
        return ArticleKind::all();
    }

    //创建问题
    public function ArticleKind(array $attributes)
    {
        return ArticleKind::create($attributes);
    }

    //更新问题的标签
    public function normalizeTopics(array $topics)
    {
        return collect($topics)->map(function ($topic) {
            if (is_numeric($topic)) {
                Topic::find($topic)->increment('questions_count');
                return (int)$topic;
            }
            $newTopic = Topic::create(['name' => $topic, 'questions_count' => 1]);
            return $newTopic->id;
        })->toArray();
    }

    //拿到问题的topics和答案
    public function byIdWithTopicsAndAnswers($id)
    {
        return Article::where('id', $id)->with(['topics','answers'])->first();
    }
}