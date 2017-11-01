<?php

namespace Lyal\Checkr\Entities\Resources;

use Lyal\Checkr\Client;
use Lyal\Checkr\Traits\Deleteable;
use Lyal\Checkr\Traits\Listable;
use Lyal\Checkr\Traits\Saveable;

class Employer extends AbstractResource
{
    use Listable, Saveable, Deleteable;

    /**
     * Employer constructor.
     *
     * @param null|string|array $values
     * @param null|Client       $client
     */
    public function __construct($values = null, Client $client = null)
    {
        $this->setFields(
            ['id', 'object', 'uri', 'candidate_id', 'name', 'position', 'salary', 'contract_type', 'do_not_contact', 'start_date', 'end_date', 'employer_url', 'address', 'manager']
        );

        $this->setSavePath('candidates/:candidate_id/employers');
        $this->setLoadPath('candidates/:candidate_id/employers/:id');
        $this->setListPath('candidates/:candidate_id/employers');
        $this->setDeletePath('candidates/:candidate_id/employers/:id');

        parent::__construct($values, $client);
    }
}
