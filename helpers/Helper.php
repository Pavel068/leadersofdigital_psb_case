<?php

namespace app\helpers;

class Helper
{
    public const ROLES = [
        'admin' => 'Администратор',
        'novice' => 'Новичок',
        'worker' => 'Сотрудник',
        'manager' => 'Менеджер',
        'coach' => 'Наставник'
    ];

    public const BINARY = [
        'Нет', 'Да'
    ];

    public const DEPARTMENTS = [
        'tech' => 'Технический департамент',
        'code' => 'Отдел разработки ПО',
        'support' => 'Группа технической поддержки',
    ];

    public const TASK_TYPES = [
        'tech' => 'Техническая',
        'corporate' => 'Корпоративная',
        'organize' => 'Организационная',
        'fan' => 'Развлекательная',
    ];

    public const RANKS = [
        'Юнга',
        'Матрос',
        'Гардемарин',
        'Морской волк',
        'Мичман',
        'Корсар',
        'Флибустьер',
        'Боцман',
        'Старшина',
        'Джек Воробей',
    ];
}