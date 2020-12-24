<?php

return array (
  'error' => 
  array (
    'exact' => 
    array (
      'customer' => 
      array (
        'get' => 'error',
        'update' => 'error',
        'contact' => 
        array (
          'get' => 'customer contact error',
        ),
      ),
    ),
    'account' => 
    array (
      'get' => 'Something went wrong well getting user data',
      'update' => 'Something went wrong while updating your account',
      'password' => 
      array (
        'update' => 'Something went wrong while changing your password. Please try again',
        'wrong' => 'Your previous password is incorrect',
        'reset' => 
        array (
          'email' => 
          array (
            'invalid' => 'Invalid email',
          ),
        ),
      ),
      'unauthorized' => 'Unauthorized',
      'verify' => 
      array (
        'email' => 'Please verify your email',
        'code' => 'Invalid verification code',
        'expired' => 'Verification code expired. A new email has been sent',
      ),
      'verified' => 'Your account is already verified',
    ),
    'email' => 
    array (
      'sent' => 'Something went wrong while sending the email',
    ),
    'translation' => 
    array (
      'publish' => 'Something went wrong while publishing the translations',
    ),
  ),
  'success' => 
  array (
    'user' => 
    array (
      'verify' => 'Account ":name" has been verified',
      'update' => 'Account  ":name" has been updated',
      'delete' => 'Account ":name" has been deleted',
      'create' => 'Account ":name" has been successful created',
    ),
    'account' => 
    array (
      'update' => 'Your account has been updated',
      'password' => 
      array (
        'update' => 'Your password has been changed',
        'reset' => 
        array (
          'email' => 
          array (
            'sent' => 'The email has been sent',
          ),
        ),
      ),
      'login' => 'You are logged in',
      'logout' => 'Logged out successfully',
      'verified' => 'Your account has been verified',
    ),
    'translation' => 
    array (
      'publish' => 'Translations was succesfully published',
    ),
  ),
);
