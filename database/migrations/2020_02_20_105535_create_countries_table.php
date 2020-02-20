<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('country_code', 3);
            $table->string('country_name', 255);
            $table->string('code', 2);
            $table->timestamps();
            $table->softDeletes();
        });

        DB::table('countries')->insert([
            ['country_code'=>'AFG', 'country_name' => 'Afghanistan','code' => 'AF'],
            ['country_code'=>'ALA', 'country_name' => 'Åland','code' => 'AX'],
            ['country_code'=>'ALB', 'country_name' => 'Albania','code' => 'AL'],
            ['country_code'=>'DZA', 'country_name' => 'Algeria','code' => 'DZ'],
            ['country_code'=>'ASM', 'country_name' => 'American Samoa','code' => 'AS'],
            ['country_code'=>'AND', 'country_name' => 'Andorra','code' => 'AD'],
            ['country_code'=>'AGO', 'country_name' => 'Angola','code' => 'AO'],
            ['country_code'=>'AIA', 'country_name' => 'Anguilla','code' => 'AI'],
            ['country_code'=>'ATA', 'country_name' => 'Antarctica','code' => 'AQ'],
            ['country_code'=>'ATG', 'country_name' => 'Antigua and Barbuda','code' => 'AG'],
            ['country_code'=>'ARG', 'country_name' => 'Argentina','code' => 'AR'],
            ['country_code'=>'ARM', 'country_name' => 'Armenia','code' => 'AM'],
            ['country_code'=>'ABW', 'country_name' => 'Aruba','code' => 'AW'],
            ['country_code'=>'AUS', 'country_name' => 'Australia','code' => 'AU'],
            ['country_code'=>'AUT', 'country_name' => 'Austria','code' => 'AT'],
            ['country_code'=>'AZE', 'country_name' => 'Azerbaijan','code' => 'AZ'],
            ['country_code'=>'BHS', 'country_name' => 'Bahamas','code' => 'BS'],
            ['country_code'=>'BHR', 'country_name' => 'Bahrain','code' => 'BH'],
            ['country_code'=>'BGD', 'country_name' => 'Bangladesh','code' => 'BD'],
            ['country_code'=>'BRB', 'country_name' => 'Barbados','code' => 'BB'],
            ['country_code'=>'BLR', 'country_name' => 'Belarus','code' => 'BY'],
            ['country_code'=>'BEL', 'country_name' => 'Belgium','code' => 'BE'],
            ['country_code'=>'BLZ', 'country_name' => 'Belize','code' => 'BZ'],
            ['country_code'=>'BEN', 'country_name' => 'Benin','code' => 'BJ'],
            ['country_code'=>'BMU', 'country_name' => 'Bermuda','code' => 'BM'],
            ['country_code'=>'BTN', 'country_name' => 'Bhutan','code' => 'BT'],
            ['country_code'=>'BOL', 'country_name' => 'Bolivia','code' => 'BO'],
            ['country_code'=>'BES', 'country_name' => 'Bonaire','code' => 'BQ'],
            ['country_code'=>'BIH', 'country_name' => 'Bosnia and Herzegovina','code' => 'BA'],
            ['country_code'=>'BWA', 'country_name' => 'Botswana','code' => 'BW'],
            ['country_code'=>'BVT', 'country_name' => 'Bouvet Island','code' => 'BV'],
            ['country_code'=>'BRA', 'country_name' => 'Brazil','code' => 'BR'],
            ['country_code'=>'IOT', 'country_name' => 'British Indian Ocean Territory','code' => 'IO'],
            ['country_code'=>'VGB', 'country_name' => 'British Virgin Islands','code' => 'VG'],
            ['country_code'=>'BRN', 'country_name' => 'Brunei','code' => 'BN'],
            ['country_code'=>'BGR', 'country_name' => 'Bulgaria','code' => 'BG'],
            ['country_code'=>'BFA', 'country_name' => 'Burkina Faso','code' => 'BF'],
            ['country_code'=>'BDI', 'country_name' => 'Burundi','code' => 'BI'],
            ['country_code'=>'KHM', 'country_name' => 'Cambodia','code' => 'KH'],
            ['country_code'=>'CMR', 'country_name' => 'Cameroon','code' => 'CM'],
            ['country_code'=>'CAN', 'country_name' => 'Canada','code' => 'CA'],
            ['country_code'=>'CPV', 'country_name' => 'Cape Verde','code' => 'CV'],
            ['country_code'=>'CYM', 'country_name' => 'Cayman Islands','code' => 'KY'],
            ['country_code'=>'CAF', 'country_name' => 'Central African Republic','code' => 'CF'],
            ['country_code'=>'TCD', 'country_name' => 'Chad','code' => 'TD'],
            ['country_code'=>'CHL', 'country_name' => 'Chile','code' => 'CL'],
            ['country_code'=>'CHN', 'country_name' => 'China','code' => 'CN'],
            ['country_code'=>'CXR', 'country_name' => 'Christmas Island','code' => 'CX'],
            ['country_code'=>'CCK', 'country_name' => 'Cocos'=>'Keeling Islands','code' => 'CC'],
['country_code'=>'COL', 'country_name' => 'Colombia','code' => 'CO'],
['country_code'=>'COM', 'country_name' => 'Comoros','code' => 'KM'],
['country_code'=>'COK', 'country_name' => 'Cook Islands','code' => 'CK'],
['country_code'=>'CRI', 'country_name' => 'Costa Rica','code' => 'CR'],
['country_code'=>'HRV', 'country_name' => 'Croatia','code' => 'HR'],
['country_code'=>'CUB', 'country_name' => 'Cuba','code' => 'CU'],
['country_code'=>'CUW', 'country_name' => 'Curacao','code' => 'CW'],
['country_code'=>'CYP', 'country_name' => 'Cyprus','code' => 'CY'],
['country_code'=>'CZE', 'country_name' => 'Czech Republic','code' => 'CZ'],
['country_code'=>'COD', 'country_name' => 'Democratic Republic of the Congo','code' => 'CD'],
['country_code'=>'DNK', 'country_name' => 'Denmark','code' => 'DK'],
['country_code'=>'DJI', 'country_name' => 'Djibouti','code' => 'DJ'],
['country_code'=>'DMA', 'country_name' => 'Dominica','code' => 'DM'],
['country_code'=>'DOM', 'country_name' => 'Dominican Republic','code' => 'DO'],
['country_code'=>'TLS', 'country_name' => 'East Timor','code' => 'TL'],
['country_code'=>'ECU', 'country_name' => 'Ecuador','code' => 'EC'],
['country_code'=>'EGY', 'country_name' => 'Egypt','code' => 'EG'],
['country_code'=>'SLV', 'country_name' => 'El Salvador','code' => 'SV'],
['country_code'=>'GNQ', 'country_name' => 'Equatorial Guinea','code' => 'GQ'],
['country_code'=>'ERI', 'country_name' => 'Eritrea','code' => 'ER'],
['country_code'=>'EST', 'country_name' => 'Estonia','code' => 'EE'],
['country_code'=>'ETH', 'country_name' => 'Ethiopia','code' => 'ET'],
['country_code'=>'FLK', 'country_name' => 'Falkland Islands','code' => 'FK'],
['country_code'=>'FRO', 'country_name' => 'Faroe Islands','code' => 'FO'],
['country_code'=>'FJI', 'country_name' => 'Fiji','code' => 'FJ'],
['country_code'=>'FIN', 'country_name' => 'Finland','code' => 'FI'],
['country_code'=>'FRA', 'country_name' => 'France','code' => 'FR'],
['country_code'=>'GUF', 'country_name' => 'French Guiana','code' => 'GF'],
['country_code'=>'PYF', 'country_name' => 'French Polynesia','code' => 'PF'],
['country_code'=>'ATF', 'country_name' => 'French Southern Territories','code' => 'TF'],
['country_code'=>'GAB', 'country_name' => 'Gabon','code' => 'GA'],
['country_code'=>'GMB', 'country_name' => 'Gambia','code' => 'GM'],
['country_code'=>'GEO', 'country_name' => 'Georgia','code' => 'GE'],
['country_code'=>'DEU', 'country_name' => 'Germany','code' => 'DE'],
['country_code'=>'GHA', 'country_name' => 'Ghana','code' => 'GH'],
['country_code'=>'GIB', 'country_name' => 'Gibraltar','code' => 'GI'],
['country_code'=>'GRC', 'country_name' => 'Greece','code' => 'GR'],
['country_code'=>'GRL', 'country_name' => 'Greenland','code' => 'GL'],
['country_code'=>'GRD', 'country_name' => 'Grenada','code' => 'GD'],
['country_code'=>'GLP', 'country_name' => 'Guadeloupe','code' => 'GP'],
['country_code'=>'GUM', 'country_name' => 'Guam','code' => 'GU'],
['country_code'=>'GTM', 'country_name' => 'Guatemala','code' => 'GT'],
['country_code'=>'GGY', 'country_name' => 'Guernsey','code' => 'GG'],
['country_code'=>'GIN', 'country_name' => 'Guinea','code' => 'GN'],
['country_code'=>'GNB', 'country_name' => 'Guinea-Bissau','code' => 'GW'],
['country_code'=>'GUY', 'country_name' => 'Guyana','code' => 'GY'],
['country_code'=>'HTI', 'country_name' => 'Haiti','code' => 'HT'],
['country_code'=>'HMD', 'country_name' => 'Heard Island and McDonald Islands','code' => 'HM'],
['country_code'=>'HND', 'country_name' => 'Honduras','code' => 'HN'],
['country_code'=>'HKG', 'country_name' => 'Hong Kong','code' => 'HK'],
['country_code'=>'HUN', 'country_name' => 'Hungary','code' => 'HU'],
['country_code'=>'ISL', 'country_name' => 'Iceland','code' => 'IS'],
['country_code'=>'IND', 'country_name' => 'India','code' => 'IN'],
['country_code'=>'IDN', 'country_name' => 'Indonesia','code' => 'ID'],
['country_code'=>'IRN', 'country_name' => 'Iran','code' => 'IR'],
['country_code'=>'IRQ', 'country_name' => 'Iraq','code' => 'IQ'],
['country_code'=>'IRL', 'country_name' => 'Ireland','code' => 'IE'],
['country_code'=>'IMN', 'country_name' => 'Isle of Man','code' => 'IM'],
['country_code'=>'ISR', 'country_name' => 'Israel','code' => 'IL'],
['country_code'=>'ITA', 'country_name' => 'Italy','code' => 'IT'],
['country_code'=>'CIV', 'country_name' => 'Ivory Coast','code' => 'CI'],
['country_code'=>'JAM', 'country_name' => 'Jamaica','code' => 'JM'],
['country_code'=>'JPN', 'country_name' => 'Japan','code' => 'JP'],
['country_code'=>'JEY', 'country_name' => 'Jersey','code' => 'JE'],
['country_code'=>'JOR', 'country_name' => 'Jordan','code' => 'JO'],
['country_code'=>'KAZ', 'country_name' => 'Kazakhstan','code' => 'KZ'],
['country_code'=>'KEN', 'country_name' => 'Kenya','code' => 'KE'],
['country_code'=>'KIR', 'country_name' => 'Kiribati','code' => 'KI'],
['country_code'=>'XKX', 'country_name' => 'Kosovo','code' => 'XK'],
['country_code'=>'KWT', 'country_name' => 'Kuwait','code' => 'KW'],
['country_code'=>'KGZ', 'country_name' => 'Kyrgyzstan','code' => 'KG'],
['country_code'=>'LAO', 'country_name' => 'Laos','code' => 'LA'],
['country_code'=>'LVA', 'country_name' => 'Latvia','code' => 'LV'],
['country_code'=>'LBN', 'country_name' => 'Lebanon','code' => 'LB'],
['country_code'=>'LSO', 'country_name' => 'Lesotho','code' => 'LS'],
['country_code'=>'LBR', 'country_name' => 'Liberia','code' => 'LR'],
['country_code'=>'LBY', 'country_name' => 'Libya','code' => 'LY'],
['country_code'=>'LIE', 'country_name' => 'Liechtenstein','code' => 'LI'],
['country_code'=>'LTU', 'country_name' => 'Lithuania','code' => 'LT'],
['country_code'=>'LUX', 'country_name' => 'Luxembourg','code' => 'LU'],
['country_code'=>'MAC', 'country_name' => 'Macao','code' => 'MO'],
['country_code'=>'MKD', 'country_name' => 'Macedonia','code' => 'MK'],
['country_code'=>'MDG', 'country_name' => 'Madagascar','code' => 'MG'],
['country_code'=>'MWI', 'country_name' => 'Malawi','code' => 'MW'],
['country_code'=>'MYS', 'country_name' => 'Malaysia','code' => 'MY'],
['country_code'=>'MDV', 'country_name' => 'Maldives','code' => 'MV'],
['country_code'=>'MLI', 'country_name' => 'Mali','code' => 'ML'],
['country_code'=>'MLT', 'country_name' => 'Malta','code' => 'MT'],
['country_code'=>'MHL', 'country_name' => 'Marshall Islands','code' => 'MH'],
['country_code'=>'MTQ', 'country_name' => 'Martinique','code' => 'MQ'],
['country_code'=>'MRT', 'country_name' => 'Mauritania','code' => 'MR'],
['country_code'=>'MUS', 'country_name' => 'Mauritius','code' => 'MU'],
['country_code'=>'MYT', 'country_name' => 'Mayotte','code' => 'YT'],
['country_code'=>'MEX', 'country_name' => 'Mexico','code' => 'MX'],
['country_code'=>'FSM', 'country_name' => 'Micronesia','code' => 'FM'],
['country_code'=>'MDA', 'country_name' => 'Moldova','code' => 'MD'],
['country_code'=>'MCO', 'country_name' => 'Monaco','code' => 'MC'],
['country_code'=>'MNG', 'country_name' => 'Mongolia','code' => 'MN'],
['country_code'=>'MNE', 'country_name' => 'Montenegro','code' => 'ME'],
['country_code'=>'MSR', 'country_name' => 'Montserrat','code' => 'MS'],
['country_code'=>'MAR', 'country_name' => 'Morocco','code' => 'MA'],
['country_code'=>'MOZ', 'country_name' => 'Mozambique','code' => 'MZ'],
['country_code'=>'MMR', 'country_name' => 'Myanmar ['country_code'=>Burma]','code' => 'MM'],
['country_code'=>'NAM', 'country_name' => 'Namibia','code' => 'NA'],
['country_code'=>'NRU', 'country_name' => 'Nauru','code' => 'NR'],
['country_code'=>'NPL', 'country_name' => 'Nepal','code' => 'NP'],
['country_code'=>'NLD', 'country_name' => 'Netherlands','code' => 'NL'],
['country_code'=>'NCL', 'country_name' => 'New Caledonia','code' => 'NC'],
['country_code'=>'NZL', 'country_name' => 'New Zealand','code' => 'NZ'],
['country_code'=>'NIC', 'country_name' => 'Nicaragua','code' => 'NI'],
['country_code'=>'NER', 'country_name' => 'Niger','code' => 'NE'],
['country_code'=>'NGA', 'country_name' => 'Nigeria','code' => 'NG'],
['country_code'=>'NIU', 'country_name' => 'Niue','code' => 'NU'],
['country_code'=>'NFK', 'country_name' => 'Norfolk Island','code' => 'NF'],
['country_code'=>'PRK', 'country_name' => 'North Korea','code' => 'KP'],
['country_code'=>'MNP', 'country_name' => 'Northern Mariana Islands','code' => 'MP'],
['country_code'=>'NOR', 'country_name' => 'Norway','code' => 'NO'],
['country_code'=>'OMN', 'country_name' => 'Oman','code' => 'OM'],
['country_code'=>'PAK', 'country_name' => 'Pakistan','code' => 'PK'],
['country_code'=>'PLW', 'country_name' => 'Palau','code' => 'PW'],
['country_code'=>'PSE', 'country_name' => 'Palestine','code' => 'PS'],
['country_code'=>'PAN', 'country_name' => 'Panama','code' => 'PA'],
['country_code'=>'PNG', 'country_name' => 'Papua New Guinea','code' => 'PG'],
['country_code'=>'PRY', 'country_name' => 'Paraguay','code' => 'PY'],
['country_code'=>'PER', 'country_name' => 'Peru','code' => 'PE'],
['country_code'=>'PHL', 'country_name' => 'Philippines','code' => 'PH'],
['country_code'=>'PCN', 'country_name' => 'Pitcairn Islands','code' => 'PN'],
['country_code'=>'POL', 'country_name' => 'Poland','code' => 'PL'],
['country_code'=>'PRT', 'country_name' => 'Portugal','code' => 'PT'],
['country_code'=>'PRI', 'country_name' => 'Puerto Rico','code' => 'PR'],
['country_code'=>'QAT', 'country_name' => 'Qatar','code' => 'QA'],
['country_code'=>'COG', 'country_name' => 'Republic of the Congo','code' => 'CG'],
['country_code'=>'REU', 'country_name' => 'Réunion','code' => 'RE'],
['country_code'=>'ROU', 'country_name' => 'Romania','code' => 'RO'],
['country_code'=>'RUS', 'country_name' => 'Russia','code' => 'RU'],
['country_code'=>'RWA', 'country_name' => 'Rwanda','code' => 'RW'],
['country_code'=>'BLM', 'country_name' => 'Saint Barthélemy','code' => 'BL'],
['country_code'=>'SHN', 'country_name' => 'Saint Helena','code' => 'SH'],
['country_code'=>'KNA', 'country_name' => 'Saint Kitts and Nevis','code' => 'KN'],
['country_code'=>'LCA', 'country_name' => 'Saint Lucia','code' => 'LC'],
['country_code'=>'MAF', 'country_name' => 'Saint Martin','code' => 'MF'],
['country_code'=>'SPM', 'country_name' => 'Saint Pierre and Miquelon','code' => 'PM'],
['country_code'=>'VCT', 'country_name' => 'Saint Vincent and the Grenadines','code' => 'VC'],
['country_code'=>'WSM', 'country_name' => 'Samoa','code' => 'WS'],
['country_code'=>'SMR', 'country_name' => 'San Marino','code' => 'SM'],
['country_code'=>'STP', 'country_name' => 'São Tomé and Príncipe','code' => 'ST'],
['country_code'=>'SAU', 'country_name' => 'Saudi Arabia','code' => 'SA'],
['country_code'=>'SEN', 'country_name' => 'Senegal','code' => 'SN'],
['country_code'=>'SRB', 'country_name' => 'Serbia','code' => 'RS'],
['country_code'=>'SYC', 'country_name' => 'Seychelles','code' => 'SC'],
['country_code'=>'SLE', 'country_name' => 'Sierra Leone','code' => 'SL'],
['country_code'=>'SGP', 'country_name' => 'Singapore','code' => 'SG'],
['country_code'=>'SXM', 'country_name' => 'Sint Maarten','code' => 'SX'],
['country_code'=>'SVK', 'country_name' => 'Slovakia','code' => 'SK'],
['country_code'=>'SVN', 'country_name' => 'Slovenia','code' => 'SI'],
['country_code'=>'SLB', 'country_name' => 'Solomon Islands','code' => 'SB'],
['country_code'=>'SOM', 'country_name' => 'Somalia','code' => 'SO'],
['country_code'=>'ZAF', 'country_name' => 'South Africa','code' => 'ZA'],
['country_code'=>'SGS', 'country_name' => 'South Georgia and the South Sandwich Islands','code' => 'GS'],
['country_code'=>'KOR', 'country_name' => 'South Korea','code' => 'KR'],
['country_code'=>'SSD', 'country_name' => 'South Sudan','code' => 'SS'],
['country_code'=>'ESP', 'country_name' => 'Spain','code' => 'ES'],
['country_code'=>'LKA', 'country_name' => 'Sri Lanka','code' => 'LK'],
['country_code'=>'SDN', 'country_name' => 'Sudan','code' => 'SD'],
['country_code'=>'SUR', 'country_name' => 'Suriname','code' => 'SR'],
['country_code'=>'SJM', 'country_name' => 'Svalbard and Jan Mayen','code' => 'SJ'],
['country_code'=>'SWZ', 'country_name' => 'Swaziland','code' => 'SZ'],
['country_code'=>'SWE', 'country_name' => 'Sweden','code' => 'SE'],
['country_code'=>'CHE', 'country_name' => 'Switzerland','code' => 'CH'],
['country_code'=>'SYR', 'country_name' => 'Syria','code' => 'SY'],
['country_code'=>'TWN', 'country_name' => 'Taiwan','code' => 'TW'],
['country_code'=>'TJK', 'country_name' => 'Tajikistan','code' => 'TJ'],
['country_code'=>'TZA', 'country_name' => 'Tanzania','code' => 'TZ'],
['country_code'=>'THA', 'country_name' => 'Thailand','code' => 'TH'],
['country_code'=>'TGO', 'country_name' => 'Togo','code' => 'TG'],
['country_code'=>'TKL', 'country_name' => 'Tokelau','code' => 'TK'],
['country_code'=>'TON', 'country_name' => 'Tonga','code' => 'TO'],
['country_code'=>'TTO', 'country_name' => 'Trinidad and Tobago','code' => 'TT'],
['country_code'=>'TUN', 'country_name' => 'Tunisia','code' => 'TN'],
['country_code'=>'TUR', 'country_name' => 'Turkey','code' => 'TR'],
['country_code'=>'TKM', 'country_name' => 'Turkmenistan','code' => 'TM'],
['country_code'=>'TCA', 'country_name' => 'Turks and Caicos Islands','code' => 'TC'],
['country_code'=>'TUV', 'country_name' => 'Tuvalu','code' => 'TV'],
['country_code'=>'UMI', 'country_name' => 'U.S. Minor Outlying Islands','code' => 'UM'],
['country_code'=>'VIR', 'country_name' => 'U.S. Virgin Islands','code' => 'VI'],
['country_code'=>'UGA', 'country_name' => 'Uganda','code' => 'UG'],
['country_code'=>'UKR', 'country_name' => 'Ukraine','code' => 'UA'],
['country_code'=>'ARE', 'country_name' => 'United Arab Emirates','code' => 'AE'],
['country_code'=>'GBR', 'country_name' => 'United Kingdom','code' => 'GB'],
['country_code'=>'USA', 'country_name' => 'United States','code' => 'US'],
['country_code'=>'URY', 'country_name' => 'Uruguay','code' => 'UY'],
['country_code'=>'UZB', 'country_name' => 'Uzbekistan','code' => 'UZ'],
['country_code'=>'VUT', 'country_name' => 'Vanuatu','code' => 'VU'],
['country_code'=>'VAT', 'country_name' => 'Vatican City','code' => 'VA'],
['country_code'=>'VEN', 'country_name' => 'Venezuela','code' => 'VE'],
['country_code'=>'VNM', 'country_name' => 'Vietnam','code' => 'VN'],
['country_code'=>'WLF', 'country_name' => 'Wallis and Futuna','code' => 'WF'],
['country_code'=>'ESH', 'country_name' => 'Western Sahara','code' => 'EH'],
['country_code'=>'YEM', 'country_name' => 'Yemen','code' => 'YE'],
['country_code'=>'ZMB', 'country_name' => 'Zambia','code' => 'ZM'],
['country_code'=>'ZWE', 'country_name' => 'Zimbabwe','code' => 'ZW']
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
