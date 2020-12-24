<?php

return array (
  'error' => 
  array (
    'exact' => 
    array (
      'customer' => 
      array (
        'get' => 'fout',
        'update' => 'fout',
        'contact' => 
        array (
          'get' => 'klant contact fout',
        ),
      ),
    ),
    'account' => 
    array (
      'get' => 'Er is iets fout gegaan tijdens het ophalen van jouw gegevens',
      'update' => 'Er is iets fout gegaan tijden het bewerken van je account',
      'password' => 
      array (
        'update' => 'Er is iets fout gegaan tijdens het veranderen van je wachtwoord. Alsjeblieft probeer opnieuw',
        'wrong' => 'Uw vorige wachtwoord is onjuist',
        'reset' => 
        array (
          'email' => 
          array (
            'invalid' => 'Ongeldig email',
          ),
        ),
      ),
      'unauthorized' => 'Ongeautoriseerd',
      'verify' => 
      array (
        'email' => 'Bevestig je email alstublieft',
        'code' => 'Ongeldige verificatie code',
        'expired' => 'Verificatie code verlopen. Er is een nieuwe email verstuurd',
      ),
      'verified' => 'Je account is al geverifieerd',
    ),
    'email' => 
    array (
      'sent' => 'Er is iets fout gegaan tijdens het versturen van de email',
    ),
    'translation' => 
    array (
      'publish' => 'Er is iets fout gegaan tijdens het publiceren van de vertaling',
    ),
  ),
  'success' => 
  array (
    'account' => 
    array (
      'update' => 'Je account is bijgewerkt',
      'password' => 
      array (
        'update' => 'Je wachtwoord is veranderd',
        'reset' => 
        array (
          'email' => 
          array (
            'sent' => 'De email is verstuurd',
          ),
        ),
      ),
      'login' => 'Je bent ingelogt',
      'logout' => 'Uitloggen gelukt',
      'verified' => 'Je account is geverifieerd',
    ),
    'translation' => 
    array (
      'publish' => 'De vertaling is met succes gepubliceerd',
    ),
  ),
);
