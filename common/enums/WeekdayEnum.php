<?php

declare(strict_types=1);

namespace common\enums;

enum WeekdayEnum: int
{
    case MONDAY = 1;
    case TUESDAY = 2;
    case WEDNESDAY = 3;
    case THURSDAY = 4;
    case FRIDAY = 5;
    case SATURDAY = 6;
    case SUNDAY = 0;
    public function toString(): ?string
    {
        return match ($this) {
            self::MONDAY => 'Понедельник',
            self::TUESDAY => 'Вторник',
            self::WEDNESDAY => 'Среда',
            self::THURSDAY => 'Четверг',
            self::FRIDAY => 'Пятница',
            self::SATURDAY => 'Суббота',
            self::SUNDAY => 'Воскресенье',
        };
    }
}
