<?php


	namespace App\Traits;


	use Carbon\Carbon;
    use stdClass;
    use VIISON\AddressSplitter\AddressSplitter;

    trait Import
	{
        /**
         * @param string $type
         * @return string
         */
        private static function getGender(string $type): string
        {
            switch ($type) {
                case 'man':
                    return 'male';
                case 'vrouw':
                    return 'female';
                default:
                    return 'order';
            }
        }

        /**
         * @param string $date
         * @return string
         */
        private static function setDateFormat(string $date): string
        {
            return Carbon::parse($date)->format('Y-m-d');
        }

        /**
         * @param string $country
         * @return string
         */
        private static function getCountry(string $country): string
        {
            switch (strtolower($country)) {
                case 'duitsland':
                case 'germany':
                    return 'Germany';
                default:
                    return 'Netherlands';
            }
        }

        /**
         * @param string $location
         * @return object
         */
        private static function getLocation(string $location): object
        {
            $splitLocation = explode(' ', $location);
            $countries = collect(json_decode(file_get_contents(storage_path('app/countries/countries.json')), true));

            $country = (object) $countries->where('name', self::getCountry($splitLocation[3] ?? ''))->first();
            $region = (object) collect($country->states)->where('name', ucfirst(strtolower($splitLocation[2] ?? 'Groningen')))->first();

            $newLocation = new stdClass();
            $newLocation->country = strtoupper($country->code2);
            $newLocation->region = strtoupper($region->code);
            $newLocation->city = ucfirst($splitLocation[1]);
            $newLocation->postalCode = strtoupper($splitLocation[0]);

            return $newLocation;
        }

        /**
         * @param string $address
         * @return object
         */
        private static function getAddress(string $address): object
        {
            $splitAddress = (object) AddressSplitter::splitAddress($address);

            $newAddress = new stdClass();
            $newAddress->street = ucfirst($splitAddress->streetName);
            $newAddress->number = $splitAddress->houseNumber;

            return $newAddress;
        }
	}
