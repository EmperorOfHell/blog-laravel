<?php

namespace Kostyd\Blogs\Contracts;

interface FilterRequestInterface
{
    public function fullUrlWithoutArrayParamsQuery($array, $keys);
}
