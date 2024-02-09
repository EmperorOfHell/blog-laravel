<?php

namespace Kostyd\Blogs\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class FilterRequest extends Request
{

    public function fullUrlWithoutArrayParamsQuery($array, $keys)
    {
        $arrayParams = array_diff($this->query()[$array], is_array($keys) ? $keys : [$keys]);
        $query =  $this->query();
        $query[$array] = $arrayParams;
        $question = $this->getBaseUrl().$this->getPathInfo() === '/' ? '/?' : '?';

        return count($query) > 0
            ? $this->url().$question.Arr::query($query)
            : $this->url();
    }
}
