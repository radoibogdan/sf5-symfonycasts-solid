<?php

namespace App\Service;

use App\Entity\BigFootSighting;
use App\Model\BigFootSightingScore;
use App\Scoring\ScoreAdjusterInterface;
use App\Scoring\ScoringFactorInterface;

class SightingScorer
{
    /**
     * @var ScoringFactorInterface[]
     */
    private iterable $scoringFactors;
    /**
     * @var ScoreAdjusterInterface[]
     */
    private iterable $scoringAdjusters;

    public function __construct(iterable $scoringFactors, iterable $scoringAdjusters)
    {
        $this->scoringFactors = $scoringFactors;
        $this->scoringAdjusters = $scoringAdjusters;
    }

    public function score(BigFootSighting $sighting): BigFootSightingScore
    {
        $score = 0;
        foreach ($this->scoringFactors as $scoringFactor) {
            $score += $scoringFactor->score($sighting);
        }

        foreach ($this->scoringAdjusters as $scoringAdjuster) {
            $score = $scoringAdjuster->adjustScore($score, $sighting);
        }

        return new BigFootSightingScore($score);
    }
}
