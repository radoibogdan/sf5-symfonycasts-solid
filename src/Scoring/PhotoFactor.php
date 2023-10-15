<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

class PhotoFactor implements ScoringFactorInterface
{

    public function score(BigFootSighting $sighting): int
    {
        if (count($sighting->getImages()) === 0) {
            return 0;
        }
        $score = 0;
        foreach ($sighting->getImages() as $image) {
            $score += rand(1, 100);
        }
        return $score;
    }
}