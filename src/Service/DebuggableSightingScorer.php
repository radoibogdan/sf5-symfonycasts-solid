<?php

namespace App\Service;

use App\Entity\BigFootSighting;
use App\Model\DebuggableBigFootSightingScore;

class DebuggableSightingScorer extends SightingScorer
{
    public function score(BigFootSighting $sighting): DebuggableBigFootSightingScore
    {
        $bfScore =  parent::score($sighting);

        return new DebuggableBigFootSightingScore(
            $bfScore->getScore(),
            100
        );
    }

}