<?php

namespace SdkMelhorEnvio;

const URL = 'https://q-engine-hub.melhorenvio.com';

Class Quotation {

    public function __construct()
    {

    }

    public static function make($data)
    {   
        $client = new \GuzzleHttp\Client();

        // $result = $client->request('POST', 'https://q-engine-hub.melhorenvio.com/api/v1/calculate', [
        //     'headers' => [
        //         'Content-type' => 'application/json',
        //         'Authorization' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjJlMWRhNDc5NDNjY2Y3Y2Q5NDU1NDJlNTQxNjM4YTU1OTFlNTQ0M2I0OTc1ZTA5NWU5MDcyMGRkYjE3NTk4MWEzZjE5YmYzYmZmMjExZGNlIn0.eyJhdWQiOiIxIiwianRpIjoiMmUxZGE0Nzk0M2NjZjdjZDk0NTU0MmU1NDE2MzhhNTU5MWU1NDQzYjQ5NzVlMDk1ZTkwNzIwZGRiMTc1OTgxYTNmMTliZjNiZmYyMTFkY2UiLCJpYXQiOjE1NjAzNTY0OTUsIm5iZiI6MTU2MDM1NjQ5NSwiZXhwIjoxNTkxOTc4ODk1LCJzdWIiOiJkZmZkN2EyYy0xMzYzLTQ4ZWQtOGFkYy00ZWZiOGZlNjI5ZWEiLCJzY29wZXMiOlsiY2FydC1yZWFkIiwiY2FydC13cml0ZSIsImNvbXBhbmllcy1yZWFkIiwiY29tcGFuaWVzLXdyaXRlIiwiY291cG9ucy1yZWFkIiwiY291cG9ucy13cml0ZSIsIm5vdGlmaWNhdGlvbnMtcmVhZCIsIm9yZGVycy1yZWFkIiwicHJvZHVjdHMtcmVhZCIsInByb2R1Y3RzLXdyaXRlIiwicHVyY2hhc2VzLXJlYWQiLCJzaGlwcGluZy1jYWxjdWxhdGUiLCJzaGlwcGluZy1jYW5jZWwiLCJzaGlwcGluZy1jaGVja291dCIsInNoaXBwaW5nLWNvbXBhbmllcyIsInNoaXBwaW5nLWdlbmVyYXRlIiwic2hpcHBpbmctcHJldmlldyIsInNoaXBwaW5nLXByaW50Iiwic2hpcHBpbmctc2hhcmUiLCJzaGlwcGluZy10cmFja2luZyIsImVjb21tZXJjZS1zaGlwcGluZyIsInRyYW5zYWN0aW9ucy1yZWFkIiwidXNlcnMtcmVhZCIsInVzZXJzLXdyaXRlIiwid2ViaG9va3MtcmVhZCIsIndlYmhvb2tzLXdyaXRlIl19.WOuW8zcHUTVrqTuxh-SXK3epZK0qm55l1vnNrpvKbc86flOm98EjrWFsZ4T3hCW-EBpWCXVR2aNwRs-0YFLqdcmaGiTnmzq5K8gc0hsONrJ-lAEv8BOBq8OkKdzeO3TLdT0LNoHfRJ2FZg-WYSoof9M8-2ap30EB0eToHpjcngcJ8tAREPhjDB0RIH60ZKoW5cnlmHjej74h9xJ9XpuMWTsNcQchmZt7uuVQHx9DOVAPvaUovORs4ehKzGC3f9Zc2syqC7KqL5MonVsbkyPcUUvHSvS2GibI4WDyVklcc7EkSenq5RxCb7xTP-QbA1GEqmdpNegCWNYk6DT8HDIXsMDUyeuJ6hIIk0Y8I_s7dhiQZvaUGaZjUsxCy9MnemM0yMgfkTbsJFTzclIrRS0JZSEj1s007shoQN-gg2lYjBZh9NcwFtISPTucsuhxDMwBeqZ-yI2YjOmi2QpiAzh9q7NriuuPsQDS7dt2m5CxrIRe-R_VAmyiCNGV7wXM6zDhUuGhqu3-lI9tBp5cbPAnamJhkcTaGXrjuQlrifIpqsJkzsT4gXfcGMA8R9zT5gdx4e7ilPxd5CDqlf2bU22qDAUatbzctpBFV-4K5JbkxTs22HmBqO4cf9WwPURuNwojlUVwpNmK56u2xROhr97ZJDsOfZi_6SsO6-veoUTLDiw'
        //     ],
        //     'json' => $data
        // ]);

        $result = json_decode('{
            "id": 1,
            "name": "PAC",
            "delivery": {
                "min": 12,
                "max": 12
            },
            "custom_delivery": {
                "min": 34,
                "max": 34
            },
            "additional_services": {
                "receipt": false,
                "own_hand": false,
                "collect": false
            },
            "rate": {
                "rate": 0.96,
                "type": "price"
            },
            "company": {
                "id": 1,
                "name": "Correios",
                "picture": "https://www.melhorenvio.com.br/images/shipping-companies/correios.png"
            },
            "weight_ranges": [
                {
                    "price": "26.59",
                    "custom_price": "26.59",
                    "weight": 1
                },
                {
                    "price": "31.49",
                    "custom_price": "31.49",
                    "weight": 2
                },
                {
                    "price": "36.38",
                    "custom_price": "36.38",
                    "weight": 3
                },
                {
                    "price": "46.46",
                    "custom_price": "46.46",
                    "weight": 4
                },
                {
                    "price": "48.58",
                    "custom_price": "48.58",
                    "weight": 5
                },
                {
                    "price": "56.45",
                    "custom_price": "56.45",
                    "weight": 6
                },
                {
                    "price": "60.19",
                    "custom_price": "60.19",
                    "weight": 7
                },
                {
                    "price": "77.66",
                    "custom_price": "77.66",
                    "weight": 8
                },
                {
                    "price": "79.78",
                    "custom_price": "79.78",
                    "weight": 9
                },
                {
                    "price": "81.31",
                    "custom_price": "81.31",
                    "weight": 10
                },
                {
                    "price": "91.58",
                    "custom_price": "91.58",
                    "weight": 11
                },
                {
                    "price": "101.86",
                    "custom_price": "101.86",
                    "weight": 12
                },
                {
                    "price": "112.13",
                    "custom_price": "112.13",
                    "weight": 13
                },
                {
                    "price": "122.40",
                    "custom_price": "122.40",
                    "weight": 14
                },
                {
                    "price": "132.67",
                    "custom_price": "132.67",
                    "weight": 15
                },
                {
                    "price": "142.94",
                    "custom_price": "142.94",
                    "weight": 16
                },
                {
                    "price": "153.22",
                    "custom_price": "153.22",
                    "weight": 17
                },
                {
                    "price": "163.49",
                    "custom_price": "163.49",
                    "weight": 18
                },
                {
                    "price": "173.76",
                    "custom_price": "173.76",
                    "weight": 19
                },
                {
                    "price": "184.03",
                    "custom_price": "184.03",
                    "weight": 20
                },
                {
                    "price": "194.30",
                    "custom_price": "194.30",
                    "weight": 21
                },
                {
                    "price": "204.58",
                    "custom_price": "204.58",
                    "weight": 22
                },
                {
                    "price": "214.85",
                    "custom_price": "214.85",
                    "weight": 23
                },
                {
                    "price": "225.12",
                    "custom_price": "225.12",
                    "weight": 24
                },
                {
                    "price": "235.39",
                    "custom_price": "235.39",
                    "weight": 25
                },
                {
                    "price": "245.66",
                    "custom_price": "245.66",
                    "weight": 26
                },
                {
                    "price": "255.94",
                    "custom_price": "255.94",
                    "weight": 27
                },
                {
                    "price": "266.21",
                    "custom_price": "266.21",
                    "weight": 28
                },
                {
                    "price": "276.48",
                    "custom_price": "276.48",
                    "weight": 29
                },
                {
                    "price": "286.75",
                    "custom_price": "286.75",
                    "weight": 30
                }
            ],
            "details": {
                "cubic_factor_divisor": 6000,
                "cubic_factor_multiplier": 166.7,
                "destiny_state": "RS",
                "format_restrictions": {
                    "box": {
                        "weight": {
                            "min": 0.1,
                            "max": 30
                        },
                        "height": {
                            "min": 2,
                            "max": 105
                        },
                        "width": {
                            "min": 11,
                            "max": 105
                        },
                        "length": {
                            "min": 16,
                            "max": 105
                        },
                        "sum": 200
                    },
                    "letter": {
                        "width": {
                            "min": 11,
                            "max": 60
                        },
                        "length": {
                            "min": 16,
                            "max": 60
                        },
                        "weight": {
                            "min": 0.1,
                            "max": 1
                        },
                        "sum": 120
                    },
                    "roll": {
                        "weight": {
                            "min": 0.3,
                            "max": 30
                        },
                        "diameter": {
                            "min": 5,
                            "max": 91
                        },
                        "length": {
                            "min": 18,
                            "max": 105
                        },
                        "sum": 200
                    }
                },
                "taxes": [
                    {
                        "name": "advalorem",
                        "limit": 19.5,
                        "tax": 0.02
                    },
                    {
                        "name": "receipt",
                        "tax": 5.75
                    },
                    {
                        "name": "own_hand",
                        "tax": 6.8
                    },
                    {
                        "name": "big_object",
                        "tax": 79
                    }
                ]
            }
        }');

        return $result;
    }
}
