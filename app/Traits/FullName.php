<?php


	namespace App\Traits;


	trait FullName
	{
        /**
         * @return string
         */
        public function fullName(): string
        {
            return $this->first_name . ($this->middle_name ? ' ' . $this->middle_name . ' ' : ' ') . $this->last_name;
        }
	}
