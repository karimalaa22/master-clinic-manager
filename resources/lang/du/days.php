<?php
use Stichoza\GoogleTranslate\TranslateClient;
    $translator = new TranslateClient('en', 'du');
return[
    'saturday' => $translator->translate('Saturday'),
    'sunday' => $translator->translate('Sunday'),
    'monday' => $translator->translate('Monday'),
    'tuesday' => $translator->translate('Tuesday'),
    'wednesday' => $translator->translate('Wednesday'),
    'thursday' => $translator->translate('Thursday'),
    'friday' => $translator->translate('Friday'),
];