<?php

namespace TheHome\StatamicElasticsearch;

use Statamic\Search\QueryBuilder;

class Query extends QueryBuilder
{
    public function getSearchResults($query)
    {
        return $this->index->searchUsingApi($query);
    }
}