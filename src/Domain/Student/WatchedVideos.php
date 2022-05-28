<?php

declare(strict_types=1);

namespace Alura\Calisthenics\Domain\Student;

use Alura\Calisthenics\Domain\Video\Video;
use Countable;
use DateTimeInterface;
use Ds\Map;

class WatchedVideos implements Countable
{
    private Map $videos;

    public function __construct()
    {
        $this->videos = new Map();
    }

    public function add(Video $video, DateTimeInterface $date): void
    {
        $this->videos->put($video, $date);
    }

    public function isEmpty(): bool
    {
        return $this->videos->isEmpty();
    }

    public function count(): int
    {
        return $this->videos->count();
    }

    public function dateOfFirstVideo(): ?DateTimeInterface
    {
        $this->videos->sort(fn (DateTimeInterface $dateA, DateTimeInterface $dateB) => $dateA <=> $dateB);
        return $this->videos->first()->value;
    }
}
