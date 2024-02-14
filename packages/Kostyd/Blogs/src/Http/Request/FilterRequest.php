<?php

namespace Kostyd\Blogs\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Kostyd\Blogs\Contracts\FilterRequestInterface;

class FilterRequest implements FilterRequestInterface
{
    private Request $req;

    public function __construct(Request $req)
    {
        $this->req = $req;
    }

    public function fullUrlWithoutArrayParamsQuery($array, $keys)
    {
        $arrayParams = array_diff($this->req->query()[$array], is_array($keys) ? $keys : [$keys]);
        $query =  $this->req->query();
        $query[$array] = $arrayParams;
        $question = $this->req->getBaseUrl().$this->req->getPathInfo() === '/' ? '/?' : '?';

        return count($query) > 0
            ? $this->req->url().$question.Arr::query($query)
            : $this->req->url();
    }

}
