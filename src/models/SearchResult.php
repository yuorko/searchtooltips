<?php
namespace yk\models;

use yk\core\DB;

/**
 * Class SearchResult
 * @package yk\models
 */
class SearchResult
{
    /**
     * @param $request_id
     * @param string $location
     * @return int
     * @throws \Exception
     */
    public function add(int $request_id, string $location)
    {
        $sql = "INSERT INTO search_results (request_id, name) VALUES ({$request_id}, '{$location}')";
        if(DB::getInstance()->execute($sql)) {
            return DB::getInstance()->getLastInsertId();
        }
        return 0;
    }
}