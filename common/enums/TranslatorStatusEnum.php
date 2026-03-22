<?php

declare(strict_types=1);

namespace common\enums;

enum TranslatorStatusEnum: int
{
    case NEW = 0;
    case CONFIRMED = 1;
    case NOT_CONFIRMED = 2;
    case ARCHIVE = 3;
    case BLOCKED = -1;
    public function toString(): ?string
    {
        return match ($this) {
            self::CONFIRMED => 'Подтвержденный (активный)',
            self::NOT_CONFIRMED => 'Не подтвержденный',
            self::ARCHIVE => 'В архиве',
            self::BLOCKED => 'Заблокирован',
        };
    }
}
