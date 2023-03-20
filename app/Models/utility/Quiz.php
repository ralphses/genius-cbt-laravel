<?php

namespace App\Models\utility;

class Quiz 
{
    public int $id;
    public string $title;
    public string $courseTitle;
    public string $date;
    public string $type;
    public string $noOptions;
    public int $noQuestions;
    public int $duration;
}