<?php

if( ! function_exists('is_api_domain') ) {
    /**
     * Determine if the current request is for HTTP api.
     *
     * @return bool
     */
    function is_api_domain()
    {
        return starts_with(request()->getHttpHost(), config('project.api_domain'));
    }
}