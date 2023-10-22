<?php

namespace App\Service;

use App\Comment\CommentSpamCounterInterface;

/**
 * If only one class implements an interface ( ex: RegexSpamWordHelper implements CommentSpamCounterInterface)
 * then Symfony will autowire RegexSpamWordHelper for that interface
 */
class RegexSpamWordHelper implements CommentSpamCounterInterface
{
    public function countSpamWords(string $content): int
    {
        return count($this->getMatchedSpamWords($content));
    }

    private function getMatchedSpamWords(string $content): array
    {
        $badWordsOnComment = [];

        $regex = implode('|', $this->spamWords());

        preg_match_all("/$regex/i", $content, $badWordsOnComment);

        return $badWordsOnComment[0];
    }

    private function spamWords(): array
    {
        return [
            'follow me',
            'twitter',
            'facebook',
            'earn money',
            'SymfonyCats',
        ];
    }
}