<?php
declare(strict_types = 1);

namespace common\enums;

enum WeekdayEnum: int
{
    case MON = 1;
    case WEN = 2;
    public function toString(): ?string
    {
        return match ($this) {
            self::MON => 'Понедельник',
            self::WEN => 'Вторник',
        };
    }
}