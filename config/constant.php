<?php

return [

    /**
     *
     */
    'quarantinedLimit' => 1001,

    /**
     *
     */
    'quizReward' => 200,

    /**
     *  Various statuses
     */
    "status" => [

        /** Started signup flow, but not reached `Bearwithus` screen */
        'pending' => 'PENDING',

        /** Completed signup flow and reached `Bearwithus` screen */
        'awaiting' => 'AWAITING_APPROVAL',

        /** Approved by trunnarative, but not logged into app */
        'approved' => 'ACCEPT',

        /**  Opened app after approval and see's welcome to tally screen */
        'complete' => 'COMPLETE',

        /** Rejected by trunnarative */
        'decline' => 'DECLINE',

        /** User closed account */
        'closed' => 'CLOSED',

    ],

    /**
     *
     */
    "invite" => [

        /**
         * Inviter amount of tally
         */
        "inviter_amount" => 0,

        /**
         * Inviter amount of tally
         */
        "signup_amount" => 0,

    ],

    /**
     *
     */
    "gold" => [

        /**
         * Gold Spread Value
         */
        "spread" => [
            "buy" => 0.0022,
            "sell" => 0.0022,
        ],
    ],

    /**
     *
     */
    "app" => [

        /**
         *
         */
        "in_review" => true,

        /**
         *
         */
        'minimum-version' => "3.30.0",

        /**
         *
         */
        'api-bases' => ["/v1/", "/v2/", "/v3/", "/t1/", "v1/", "v2/", "v3/", "t1/"],

        /**
         *  Amount of minutes to freeze a user out
         */
        'lock_user_in_minutes' => 2,

        /**
         * number of log in attempts
         */
        'log_in_attempts' => 3,

        /**
         * number of transactions per page
         */
        'transactions_per_page' => 20,
    ],

    /**
     *
     */
    'verify' => [

        /**
         * Length of SMS verification codes
         */
        'sms_length' => 6,

        /**
         * Length of E-Mail verification codes
         */
        'email_length' => 6,

    ],

    # See DB.tallymoney.external_services
    'external' => [
        'railsbank' => 1,
        'mastercard' => 2,
    ],

    /**
     *
     */
    'success' => [

        // GLOBAL
        'unauthenticated' => 1000,
        'logged-in' => 1001,
        'resume' => 1002,
        'logged-out' => 1003,
        'signup-session' => 1004,
        'recovery-session' => 1005,
        // 'logged-in-refresh-token'   => 2006,

        'gold-buy' => 1041,
        'gold-sell' => 1042,
        'gold-prices' => 1043,
        'tally-exchange' => 1044,
        'gold-history' => 1045,

        'invite-user' => 1070,

        'account-details' => 1101,
        'user-biometrics' => 1102,
        'quiz' => 1103,

        'fees' => 1105,

        'documents-upload' => 1201,
        'profile-upload' => 1202,
        'documents-list' => 1203,
        'profile-delete' => 1204,
        'profile-update' => 1205,
        'share-url' => 1206,
        'invite-friend' => 1207,
        'account-transactions' => 1208,
        'transactions-time' => 1209,
        'account-balance' => 1210,

        'address-lookup' => 1301,

        'signup-phone' => 1401,
        'signup-phone-verify' => 1402,
        'signup-email' => 1403,
        'signup-email-verify' => 1404,
        'signup-passcode' => 1405,
        'signup-details' => 1406,
        'signup-dob' => 1407,
        'signup-addresses' => 1408,
        'signup-promo' => 1409,
        'signup-submit' => 1410,
        'signup-status' => 1411,
        'signup-complete' => 1412,

        // signup-phone-already-exists => 1415

        // CardController
        'available-cards' => 1501,
        'ordered-card' => 1502,
        'freeze-card' => 1503,
        'unfreeze-card' => 1504,
        'card-pin' => 1505,
        'card-list' => 1506,
        'card-activation' => 1507,

        // Account
        'account-payee' => 1601,
        'payment' => 1602,

        'waitinglist-join' => 1651,

        'recovery-phone' => 1700,
        'recovery-phone-passcode' => 1701,
        'recovery-lost-access-to-phone' => 1702,
        'recovery-lost-access-to-phone-verify-code' => 1703,
        'recovery-lost-access-to-phone-new-number' => 1704,
        'recovery-lost-access-to-phone-new-number-verify-code' => 1705,

        'available-statements' => 1801,
        'generated-statement' => 1802,

        'products' => 1902,
        'goals' => 1950,
        'documents-upload-country' => 1951,
    ],

    'fees-calculation' => [
        'daily-storage-fee-return' => 0.000027397260273973,
    ],

    'errors' => [

        // GLOBAL
        'unauthenticated' => 2000,
        'logged-in' => 2001,
        'resume' => 2002,
        'logged-out' => 2003,
        'signup-session' => 2004,
        'recovery-session' => 2005,
        'logged-in-refresh-token' => 2006,
        'locked-out' => 2007,
        'auth-verification-mismatch' => 2008,
        'invalid-login' => 2009,

        'gold-buy' => 2041,
        'gold-sell' => 2042,
        'gold-prices' => 2043,
        'tally-exchange' => 2044,
        'gold-history' => 2045,

        'invite-user' => 2070,

        'account-details' => 2101,
        'user-biometrics' => 2102,
        'quiz' => 2103,
        'fees' => 2105,

        'documents-upload' => 2201,
        'profile-upload' => 2202,
        'documents-list' => 2203,
        'profile-delete' => 2204,
        'profile-update' => 2205,
        'share-url' => 2206,
        'invite-friend' => 2207,
        'account-transactions' => 2208,
        'transactions-time' => 2209,
        'account-balance' => 2210,

        'address-lookup' => 2301,

        'signup-phone' => 2401,
        'signup-phone-verify' => 2402,
        'signup-email' => 2403,
        'signup-email-verify' => 2404,
        'signup-passcode' => 2405,
        'signup-details' => 2406,
        'signup-dob' => 2407,
        'signup-addresses' => 2408,
        'signup-promo' => 2409,
        'signup-submit' => 2410,
        'signup-status' => 2411,
        'signup-complete' => 2412,

        'signup-phone-already-exists' => 2415,

        // CardController
        'available-cards' => 2501,
        'ordered-card' => 2502,
        'freeze-card' => 2503,
        'unfreeze-card' => 2504,
        'card-pin' => 2505,
        'card-list' => 2506,
        'card-activation' => 2507,

        // Account
        'account-payee' => 2601,
        'payment' => 2602,

        'waitinglist-join' => 2651,

        'recovery-phone' => 2700,
        'recovery-phone-passcode' => 2701,
        'recovery-lost-access-to-phone' => 2702,
        'recovery-lost-access-to-phone-verify-code' => 2703,
        'recovery-lost-access-to-phone-new-number' => 2704,
        'recovery-lost-access-to-phone-new-number-verify-code' => 2705,

        'available-statements' => 2801,
        'generated-statement' => 2802,

        'products' => 2902,
        'goals' => 2950,
        'minimum-app-version' => 9999,
        'documents-upload-country' => 2951,
    ],

    'countryArray' => [
        'AD' => ['name' => 'ANDORRA', 'code' => '376'],
        'AE' => ['name' => 'UNITED ARAB EMIRATES', 'code' => '971'],
        'AF' => ['name' => 'AFGHANISTAN', 'code' => '93'],
        'AG' => ['name' => 'ANTIGUA AND BARBUDA', 'code' => '1268'],
        'AI' => ['name' => 'ANGUILLA', 'code' => '1264'],
        'AL' => ['name' => 'ALBANIA', 'code' => '355'],
        'AM' => ['name' => 'ARMENIA', 'code' => '374'],
        'AN' => ['name' => 'NETHERLANDS ANTILLES', 'code' => '599'],
        'AO' => ['name' => 'ANGOLA', 'code' => '244'],
        'AQ' => ['name' => 'ANTARCTICA', 'code' => '672'],
        'AR' => ['name' => 'ARGENTINA', 'code' => '54'],
        'AS' => ['name' => 'AMERICAN SAMOA', 'code' => '1684'],
        'AT' => ['name' => 'AUSTRIA', 'code' => '43'],
        'AU' => ['name' => 'AUSTRALIA', 'code' => '61'],
        'AW' => ['name' => 'ARUBA', 'code' => '297'],
        'AZ' => ['name' => 'AZERBAIJAN', 'code' => '994'],
        'BA' => ['name' => 'BOSNIA AND HERZEGOVINA', 'code' => '387'],
        'BB' => ['name' => 'BARBADOS', 'code' => '1246'],
        'BD' => ['name' => 'BANGLADESH', 'code' => '880'],
        'BE' => ['name' => 'BELGIUM', 'code' => '32'],
        'BF' => ['name' => 'BURKINA FASO', 'code' => '226'],
        'BG' => ['name' => 'BULGARIA', 'code' => '359'],
        'BH' => ['name' => 'BAHRAIN', 'code' => '973'],
        'BI' => ['name' => 'BURUNDI', 'code' => '257'],
        'BJ' => ['name' => 'BENIN', 'code' => '229'],
        'BL' => ['name' => 'SAINT BARTHELEMY', 'code' => '590'],
        'BM' => ['name' => 'BERMUDA', 'code' => '1441'],
        'BN' => ['name' => 'BRUNEI DARUSSALAM', 'code' => '673'],
        'BO' => ['name' => 'BOLIVIA', 'code' => '591'],
        'BR' => ['name' => 'BRAZIL', 'code' => '55'],
        'BS' => ['name' => 'BAHAMAS', 'code' => '1242'],
        'BT' => ['name' => 'BHUTAN', 'code' => '975'],
        'BW' => ['name' => 'BOTSWANA', 'code' => '267'],
        'BY' => ['name' => 'BELARUS', 'code' => '375'],
        'BZ' => ['name' => 'BELIZE', 'code' => '501'],
        'CA' => ['name' => 'CANADA', 'code' => '1'],
        'CC' => ['name' => 'COCOS (KEELING) ISLANDS', 'code' => '61'],
        'CD' => ['name' => 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'code' => '243'],
        'CF' => ['name' => 'CENTRAL AFRICAN REPUBLIC', 'code' => '236'],
        'CG' => ['name' => 'CONGO', 'code' => '242'],
        'CH' => ['name' => 'SWITZERLAND', 'code' => '41'],
        'CI' => ['name' => 'COTE D IVOIRE', 'code' => '225'],
        'CK' => ['name' => 'COOK ISLANDS', 'code' => '682'],
        'CL' => ['name' => 'CHILE', 'code' => '56'],
        'CM' => ['name' => 'CAMEROON', 'code' => '237'],
        'CN' => ['name' => 'CHINA', 'code' => '86'],
        'CO' => ['name' => 'COLOMBIA', 'code' => '57'],
        'CR' => ['name' => 'COSTA RICA', 'code' => '506'],
        'CU' => ['name' => 'CUBA', 'code' => '53'],
        'CV' => ['name' => 'CAPE VERDE', 'code' => '238'],
        'CX' => ['name' => 'CHRISTMAS ISLAND', 'code' => '61'],
        'CY' => ['name' => 'CYPRUS', 'code' => '357'],
        'CZ' => ['name' => 'CZECH REPUBLIC', 'code' => '420'],
        'DE' => ['name' => 'GERMANY', 'code' => '49'],
        'DJ' => ['name' => 'DJIBOUTI', 'code' => '253'],
        'DK' => ['name' => 'DENMARK', 'code' => '45'],
        'DM' => ['name' => 'DOMINICA', 'code' => '1767'],
        'DO' => ['name' => 'DOMINICAN REPUBLIC', 'code' => '1809'],
        'DZ' => ['name' => 'ALGERIA', 'code' => '213'],
        'EC' => ['name' => 'ECUADOR', 'code' => '593'],
        'EE' => ['name' => 'ESTONIA', 'code' => '372'],
        'EG' => ['name' => 'EGYPT', 'code' => '20'],
        'ER' => ['name' => 'ERITREA', 'code' => '291'],
        'ES' => ['name' => 'SPAIN', 'code' => '34'],
        'ET' => ['name' => 'ETHIOPIA', 'code' => '251'],
        'FI' => ['name' => 'FINLAND', 'code' => '358'],
        'FJ' => ['name' => 'FIJI', 'code' => '679'],
        'FK' => ['name' => 'FALKLAND ISLANDS (MALVINAS)', 'code' => '500'],
        'FM' => ['name' => 'MICRONESIA, FEDERATED STATES OF', 'code' => '691'],
        'FO' => ['name' => 'FAROE ISLANDS', 'code' => '298'],
        'FR' => ['name' => 'FRANCE', 'code' => '33'],
        'GA' => ['name' => 'GABON', 'code' => '241'],
        'GB' => ['name' => 'UNITED KINGDOM', 'code' => '44'],
        'GD' => ['name' => 'GRENADA', 'code' => '1473'],
        'GE' => ['name' => 'GEORGIA', 'code' => '995'],
        'GH' => ['name' => 'GHANA', 'code' => '233'],
        'GI' => ['name' => 'GIBRALTAR', 'code' => '350'],
        'GL' => ['name' => 'GREENLAND', 'code' => '299'],
        'GM' => ['name' => 'GAMBIA', 'code' => '220'],
        'GN' => ['name' => 'GUINEA', 'code' => '224'],
        'GQ' => ['name' => 'EQUATORIAL GUINEA', 'code' => '240'],
        'GR' => ['name' => 'GREECE', 'code' => '30'],
        'GT' => ['name' => 'GUATEMALA', 'code' => '502'],
        'GU' => ['name' => 'GUAM', 'code' => '1671'],
        'GW' => ['name' => 'GUINEA-BISSAU', 'code' => '245'],
        'GY' => ['name' => 'GUYANA', 'code' => '592'],
        'HK' => ['name' => 'HONG KONG', 'code' => '852'],
        'HN' => ['name' => 'HONDURAS', 'code' => '504'],
        'HR' => ['name' => 'CROATIA', 'code' => '385'],
        'HT' => ['name' => 'HAITI', 'code' => '509'],
        'HU' => ['name' => 'HUNGARY', 'code' => '36'],
        'ID' => ['name' => 'INDONESIA', 'code' => '62'],
        'IE' => ['name' => 'IRELAND', 'code' => '353'],
        'IL' => ['name' => 'ISRAEL', 'code' => '972'],
        'IM' => ['name' => 'ISLE OF MAN', 'code' => '44'],
        'IN' => ['name' => 'INDIA', 'code' => '91'],
        'IQ' => ['name' => 'IRAQ', 'code' => '964'],
        'IR' => ['name' => 'IRAN, ISLAMIC REPUBLIC OF', 'code' => '98'],
        'IS' => ['name' => 'ICELAND', 'code' => '354'],
        'IT' => ['name' => 'ITALY', 'code' => '39'],
        'JM' => ['name' => 'JAMAICA', 'code' => '1876'],
        'JO' => ['name' => 'JORDAN', 'code' => '962'],
        'JP' => ['name' => 'JAPAN', 'code' => '81'],
        'KE' => ['name' => 'KENYA', 'code' => '254'],
        'KG' => ['name' => 'KYRGYZSTAN', 'code' => '996'],
        'KH' => ['name' => 'CAMBODIA', 'code' => '855'],
        'KI' => ['name' => 'KIRIBATI', 'code' => '686'],
        'KM' => ['name' => 'COMOROS', 'code' => '269'],
        'KN' => ['name' => 'SAINT KITTS AND NEVIS', 'code' => '1869'],
        'KP' => ['name' => 'KOREA DEMOCRATIC PEOPLES REPUBLIC OF', 'code' => '850'],
        'KR' => ['name' => 'KOREA REPUBLIC OF', 'code' => '82'],
        'KW' => ['name' => 'KUWAIT', 'code' => '965'],
        'KY' => ['name' => 'CAYMAN ISLANDS', 'code' => '1345'],
        'KZ' => ['name' => 'KAZAKSTAN', 'code' => '7'],
        'LA' => ['name' => 'LAO PEOPLES DEMOCRATIC REPUBLIC', 'code' => '856'],
        'LB' => ['name' => 'LEBANON', 'code' => '961'],
        'LC' => ['name' => 'SAINT LUCIA', 'code' => '1758'],
        'LI' => ['name' => 'LIECHTENSTEIN', 'code' => '423'],
        'LK' => ['name' => 'SRI LANKA', 'code' => '94'],
        'LR' => ['name' => 'LIBERIA', 'code' => '231'],
        'LS' => ['name' => 'LESOTHO', 'code' => '266'],
        'LT' => ['name' => 'LITHUANIA', 'code' => '370'],
        'LU' => ['name' => 'LUXEMBOURG', 'code' => '352'],
        'LV' => ['name' => 'LATVIA', 'code' => '371'],
        'LY' => ['name' => 'LIBYAN ARAB JAMAHIRIYA', 'code' => '218'],
        'MA' => ['name' => 'MOROCCO', 'code' => '212'],
        'MC' => ['name' => 'MONACO', 'code' => '377'],
        'MD' => ['name' => 'MOLDOVA, REPUBLIC OF', 'code' => '373'],
        'ME' => ['name' => 'MONTENEGRO', 'code' => '382'],
        'MF' => ['name' => 'SAINT MARTIN', 'code' => '1599'],
        'MG' => ['name' => 'MADAGASCAR', 'code' => '261'],
        'MH' => ['name' => 'MARSHALL ISLANDS', 'code' => '692'],
        'MK' => ['name' => 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'code' => '389'],
        'ML' => ['name' => 'MALI', 'code' => '223'],
        'MM' => ['name' => 'MYANMAR', 'code' => '95'],
        'MN' => ['name' => 'MONGOLIA', 'code' => '976'],
        'MO' => ['name' => 'MACAU', 'code' => '853'],
        'MP' => ['name' => 'NORTHERN MARIANA ISLANDS', 'code' => '1670'],
        'MR' => ['name' => 'MAURITANIA', 'code' => '222'],
        'MS' => ['name' => 'MONTSERRAT', 'code' => '1664'],
        'MT' => ['name' => 'MALTA', 'code' => '356'],
        'MU' => ['name' => 'MAURITIUS', 'code' => '230'],
        'MV' => ['name' => 'MALDIVES', 'code' => '960'],
        'MW' => ['name' => 'MALAWI', 'code' => '265'],
        'MX' => ['name' => 'MEXICO', 'code' => '52'],
        'MY' => ['name' => 'MALAYSIA', 'code' => '60'],
        'MZ' => ['name' => 'MOZAMBIQUE', 'code' => '258'],
        'NA' => ['name' => 'NAMIBIA', 'code' => '264'],
        'NC' => ['name' => 'NEW CALEDONIA', 'code' => '687'],
        'NE' => ['name' => 'NIGER', 'code' => '227'],
        'NG' => ['name' => 'NIGERIA', 'code' => '234'],
        'NI' => ['name' => 'NICARAGUA', 'code' => '505'],
        'NL' => ['name' => 'NETHERLANDS', 'code' => '31'],
        'NO' => ['name' => 'NORWAY', 'code' => '47'],
        'NP' => ['name' => 'NEPAL', 'code' => '977'],
        'NR' => ['name' => 'NAURU', 'code' => '674'],
        'NU' => ['name' => 'NIUE', 'code' => '683'],
        'NZ' => ['name' => 'NEW ZEALAND', 'code' => '64'],
        'OM' => ['name' => 'OMAN', 'code' => '968'],
        'PA' => ['name' => 'PANAMA', 'code' => '507'],
        'PE' => ['name' => 'PERU', 'code' => '51'],
        'PF' => ['name' => 'FRENCH POLYNESIA', 'code' => '689'],
        'PG' => ['name' => 'PAPUA NEW GUINEA', 'code' => '675'],
        'PH' => ['name' => 'PHILIPPINES', 'code' => '63'],
        'PK' => ['name' => 'PAKISTAN', 'code' => '92'],
        'PL' => ['name' => 'POLAND', 'code' => '48'],
        'PM' => ['name' => 'SAINT PIERRE AND MIQUELON', 'code' => '508'],
        'PN' => ['name' => 'PITCAIRN', 'code' => '870'],
        'PR' => ['name' => 'PUERTO RICO', 'code' => '1'],
        'PT' => ['name' => 'PORTUGAL', 'code' => '351'],
        'PW' => ['name' => 'PALAU', 'code' => '680'],
        'PY' => ['name' => 'PARAGUAY', 'code' => '595'],
        'QA' => ['name' => 'QATAR', 'code' => '974'],
        'RO' => ['name' => 'ROMANIA', 'code' => '40'],
        'RS' => ['name' => 'SERBIA', 'code' => '381'],
        'RU' => ['name' => 'RUSSIAN FEDERATION', 'code' => '7'],
        'RW' => ['name' => 'RWANDA', 'code' => '250'],
        'SA' => ['name' => 'SAUDI ARABIA', 'code' => '966'],
        'SB' => ['name' => 'SOLOMON ISLANDS', 'code' => '677'],
        'SC' => ['name' => 'SEYCHELLES', 'code' => '248'],
        'SD' => ['name' => 'SUDAN', 'code' => '249'],
        'SE' => ['name' => 'SWEDEN', 'code' => '46'],
        'SG' => ['name' => 'SINGAPORE', 'code' => '65'],
        'SH' => ['name' => 'SAINT HELENA', 'code' => '290'],
        'SI' => ['name' => 'SLOVENIA', 'code' => '386'],
        'SK' => ['name' => 'SLOVAKIA', 'code' => '421'],
        'SL' => ['name' => 'SIERRA LEONE', 'code' => '232'],
        'SM' => ['name' => 'SAN MARINO', 'code' => '378'],
        'SN' => ['name' => 'SENEGAL', 'code' => '221'],
        'SO' => ['name' => 'SOMALIA', 'code' => '252'],
        'SR' => ['name' => 'SURINAME', 'code' => '597'],
        'ST' => ['name' => 'SAO TOME AND PRINCIPE', 'code' => '239'],
        'SV' => ['name' => 'EL SALVADOR', 'code' => '503'],
        'SY' => ['name' => 'SYRIAN ARAB REPUBLIC', 'code' => '963'],
        'SZ' => ['name' => 'SWAZILAND', 'code' => '268'],
        'TC' => ['name' => 'TURKS AND CAICOS ISLANDS', 'code' => '1649'],
        'TD' => ['name' => 'CHAD', 'code' => '235'],
        'TG' => ['name' => 'TOGO', 'code' => '228'],
        'TH' => ['name' => 'THAILAND', 'code' => '66'],
        'TJ' => ['name' => 'TAJIKISTAN', 'code' => '992'],
        'TK' => ['name' => 'TOKELAU', 'code' => '690'],
        'TL' => ['name' => 'TIMOR-LESTE', 'code' => '670'],
        'TM' => ['name' => 'TURKMENISTAN', 'code' => '993'],
        'TN' => ['name' => 'TUNISIA', 'code' => '216'],
        'TO' => ['name' => 'TONGA', 'code' => '676'],
        'TR' => ['name' => 'TURKEY', 'code' => '90'],
        'TT' => ['name' => 'TRINIDAD AND TOBAGO', 'code' => '1868'],
        'TV' => ['name' => 'TUVALU', 'code' => '688'],
        'TW' => ['name' => 'TAIWAN, PROVINCE OF CHINA', 'code' => '886'],
        'TZ' => ['name' => 'TANZANIA, UNITED REPUBLIC OF', 'code' => '255'],
        'UA' => ['name' => 'UKRAINE', 'code' => '380'],
        'UG' => ['name' => 'UGANDA', 'code' => '256'],
        'US' => ['name' => 'UNITED STATES', 'code' => '1'],
        'UY' => ['name' => 'URUGUAY', 'code' => '598'],
        'UZ' => ['name' => 'UZBEKISTAN', 'code' => '998'],
        'VA' => ['name' => 'HOLY SEE (VATICAN CITY STATE)', 'code' => '39'],
        'VC' => ['name' => 'SAINT VINCENT AND THE GRENADINES', 'code' => '1784'],
        'VE' => ['name' => 'VENEZUELA', 'code' => '58'],
        'VG' => ['name' => 'VIRGIN ISLANDS, BRITISH', 'code' => '1284'],
        'VI' => ['name' => 'VIRGIN ISLANDS, U.S.', 'code' => '1340'],
        'VN' => ['name' => 'VIET NAM', 'code' => '84'],
        'VU' => ['name' => 'VANUATU', 'code' => '678'],
        'WF' => ['name' => 'WALLIS AND FUTUNA', 'code' => '681'],
        'WS' => ['name' => 'SAMOA', 'code' => '685'],
        'XK' => ['name' => 'KOSOVO', 'code' => '381'],
        'YE' => ['name' => 'YEMEN', 'code' => '967'],
        'YT' => ['name' => 'MAYOTTE', 'code' => '262'],
        'ZA' => ['name' => 'SOUTH AFRICA', 'code' => '27'],
        'ZM' => ['name' => 'ZAMBIA', 'code' => '260'],
        'ZW' => ['name' => 'ZIMBABWE', 'code' => '263'],
    ],

    /**
     * Generic error message
     */
    "error_message" => "Looks like something has gone wrong.",
    "error_title" => "Uh oh...",

    /**
     *
     */
    "error_messages" => [
        "payee" => [
            "recipientName" => [
                "min" => [
                    "message" => "Please enter a name that has more than 5 characters",
                    "title" => "Name entered is too short",
                ],
                "max" => [
                    "message" => "Please enter a name that has less than 32 characters",
                    "title" => "Name entered is too long",
                ],
            ],
            "tallySortCode" => [
                "message" => "This looks like a Tally bank account. Please go back and add them as a Tally payee",
                "title" => "Tally Payee",
            ],
            "invalidAccount" => [
                "message" => "Please enter a valid sort code and account number",
                "title" => "Invalid bank details",
            ],
            "adding_self" => [
                "message" => "You can't add yourself as a payee",
                "title" => "Invalid bank details",
            ],
            "invalid_reference" => [
                "message" => "Please only use letters and numbers in your payment reference.",
                "title" => "Invalid payment reference",
            ],
            "type_tally" => [
                "missing" => [
                    "message" => "Please enter a valid sort code and account number",
                    "title" => "Invalid bank details",
                ],
                "invalid" => [
                    "message" => "Please add a phone number tied to a valid Tally account. ",
                    "title" => "Invalid Tally account",
                ],
            ],
        ],
        "promocode" => [
            "does-not-exist" => [
                "message" => "Please enter a valid promo code",
                "title" => "Promo code not valid",
            ],
        ],
        "auth" => [
            "invalidLogin" => [
                "emptyUser" => [
                    "message" => "Invalid Login - empty user record",
                    "title" => "Invalid Login",
                ],
                "emptyPublicKey" => [
                    "message" => "Invalid Login - empty public key",
                    "title" => "Invalid Login",
                ],
                "userNotActive" => [
                    "message" => "Invalid Login - user not active",
                    "title" => "Invalid Login",
                ],
                "sslSignatureFail" => [
                    "message" => "Invalid Login - SSL Signature Failure",
                    "title" => "Invalid Login",
                ],
                "noAccessToken" => [
                    "message" => "Invalid Login - No access token found",
                    "title" => "Invalid Login",
                ],
                "invalidCredentials" => [
                    "message" => "Invalid Login - Invalid Credentials",
                    "title" => "Invalid Login",
                ],
            ],
            "verificationMismatch" => [
                "emptyUserResponse" => [
                    "message" => "Unable to Login - Empty User Response",
                    "title" => "Unable to login",
                ],
                "userResponseNotSet" => [
                    "message" => "Unable to login - User not set",
                    "title" => "Unable to login",
                ],
                "userNotActive" => [
                    "message" => "Unable to login - User not active",
                    "title" => "Unable to login",
                ],
                "responseError" => [
                    "message" => "Unable to login - Response error",
                    "title" => "Unable to login",
                ],
            ],
            "lockedOut" => [
                "message" => "You have been locked out of your account",
                "title" => "Account locked",
            ],
        ],
        "user" => [
            "fees" => [
                "insufficient-funds-to-upgrade-early" => [
                    "message" => "You don’t have enough funds in your everyday account to pay your one-off joining fee.",
                    "title" => "Insufficient Funds",
                ],
            ],
        ],
        "cards" => [
            "newly-created" => [
                "message" => "Your card pin will appear once your physical card has been received",
                "title" => "Newly Registered Card",
            ],
            "invalid-token-activation" => [
                "message" => "The token you've entered is incorrect, please try again.",
                "title" => "Invalid token",
            ],
            "admin-freeze" => [
                "message" => "Sorry, you are not able to freeze your card at the moment. Please try again later.",
                "title" => "Freeze Card",
            ],
            "admin-unfreeze" => [
                "message" => "Sorry, you are not able to unfreeze your card at the moment. Please try again later.",
                "title" => "Unfreeze Card",
            ],
        ],
    ],

    'backoffice-transaction-limit' => 50,
];
