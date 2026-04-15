<?php

declare(strict_types=1);

namespace App\Services;

final class AgeGroupClassifier
{
    private const CHILD_MAX = 12;
    private const TEENAGER_MAX = 19;
    private const ADULT_MAX = 59;

    public static function classify(int $age): string
    {
        return match (true) {
            $age <= self::CHILD_MAX => 'child',
            $age <= self::TEENAGER_MAX => 'teenager',
            $age <= self::ADULT_MAX => 'adult',
            default => 'senior',
        };
    }
}
