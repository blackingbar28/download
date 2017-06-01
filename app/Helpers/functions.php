<?php
if (!function_exists('buttonDelete')) {

    /**
     * Generate button delete
     *
     * @param string        $link      Link click
     * @param string|null   $title     Title
     * @param string|null   $text      Text
     * @param boolean|false $isDeletes IsDeletes
     *
     * @return string
     */
    function buttonDelete($link, $title = null, $text = null, $isDeletes = false)
    {
        if ($isDeletes) {
            $format = '<button data-url="%s" data-deletes="true" data-token="%s" title="%s" data-method="post" class="btn btn-danger">%s</button>';
        } else {
            $format = '<a href="javascript:void" data-url="%s" data-toggle="tooltip" data-delete="true" data-token="%s" title="%s" data-method="delete" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>%s</a>';
        }
        $token = csrf_token();
        $title = $title ?: trans('labels.delete_item');
        return sprintf($format, $link, $token, $title, $text);
    }
}