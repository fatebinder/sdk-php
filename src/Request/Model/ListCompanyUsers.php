<?php

namespace Easir\SDK\Request\Model;

use Easir\SDK\Request\Model;

class ListCompanyUsers extends Model
{
    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $searchTerm = '';
    /**
     * @var integer
     */
    public $page = 1;
    /**
     * @var integer
     */
    public $perPage = 15;
}