<?php
/**
 * Created by PhpStorm.
 * User: Lenh Ho Xung
 * Date: 10/7/2017
 * Time: 6:42 PM
 */

namespace App\Models;

class News extends AppModel
{
    protected $table = 'news';
    protected $fillable = [
        'news_category_id', 'small_image', 'short_description', 'meta_keywords', 'meta_title', 'meta_description',
        'title', 'content', 'is_show'
    ];

    /**
     * Relation with table new_categories
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function newsCategory()
    {
        return $this->belongsTo('App\Models\NewsCategory', 'news_category_id', 'id');
    }

    /**
     * Get Detail News with id
     * @param null $id
     * @return array
     */
    protected static function getDetailNews($id = null, $field = [])
    {
        if (empty($id)) {
            return [];
        }

        if (empty($field)) {
            $field = [
                'news_category_id', 'small_image', 'short_description', 'meta_keywords', 'meta_title', 'meta_description',
                'title', 'content', 'is_show', 'created_at', 'updated_at', 'created_by', 'updated_by'
            ];
        }

        $news = self::select($field)
            ->where('id', $id)
            ->whereNull('deleted_at')
            ->with(['newsCategory' => function ($q) {
                $q->select('id', 'parent_id', 'position', 'name', 'description');
            }])
            ->first();
        if (empty($news)) {
            return [];
        }
        return $news->toArray();
    }
}