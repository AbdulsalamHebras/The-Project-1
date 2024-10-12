<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\PublishingHome;

class PublishingHomeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'PublishingHome';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new PublishingHome());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('country', __('Country'));
        $grid->column('phoneNumber', __('PhoneNumber'));
        $grid->column('email', __('Email'));
        $grid->column('image')->image();
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(PublishingHome::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('country', __('Country'));
        $show->field('phoneNumber', __('PhoneNumber'));
        $show->field('email', __('Email'));
        $show->field('image')->image();
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new PublishingHome());
        $countries = [
            'afghanistan' => 'Afghanistan',
            'aland_islands' => 'Åland Islands',
            'albania' => 'Albania',
            'algeria' => 'Algeria',
            'american_samoa' => 'American Samoa',
            'andorra' => 'Andorra',
            'angola' => 'Angola',
            'anguilla' => 'Anguilla',
            'antarctica' => 'Antarctica',
            'antigua_barbuda' => 'Antigua and Barbuda',
            'argentina' => 'Argentina',
            'armenia' => 'Armenia',
            'aruba' => 'Aruba',
            'australia' => 'Australia',
            'austria' => 'Austria',
            'azerbaijan' => 'Azerbaijan',
            'bahamas' => 'Bahamas',
            'bahrain' => 'Bahrain',
            'bangladesh' => 'Bangladesh',
            'barbados' => 'Barbados',
            'belarus' => 'Belarus',
            'belgium' => 'Belgium',
            'belize' => 'Belize',
            'benin' => 'Benin',
            'bermuda' => 'Bermuda',
            'bhutan' => 'Bhutan',
            'bolivia' => 'Bolivia',
            'bosnia_herzegovina' => 'Bosnia and Herzegovina',
            'botswana' => 'Botswana',
            'bouvet_island' => 'Bouvet Island',
            'brazil' => 'Brazil',
            'british_indian_ocean_territory' => 'British Indian Ocean Territory',
            'brunei_darussalam' => 'Brunei Darussalam',
            'bulgaria' => 'Bulgaria',
            'burkina_faso' => 'Burkina Faso',
            'burundi' => 'Burundi',
            'cambodia' => 'Cambodia',
            'cameroon' => 'Cameroon',
            'canada' => 'Canada',
            'cape_verde' => 'Cape Verde',
            'cayman_islands' => 'Cayman Islands',
            'central_african_republic' => 'Central African Republic',
            'chad' => 'Chad',
            'chile' => 'Chile',
            'china' => 'China',
            'christmas_island' => 'Christmas Island',
            'cocos_keeling_islands' => 'Cocos (Keeling) Islands',
            'colombia' => 'Colombia',
            'comoros' => 'Comoros',
            'congo' => 'Congo',
            'congo_democratic_republic' => 'Congo, The Democratic Republic of The',
            'cook_islands' => 'Cook Islands',
            'costa_rica' => 'Costa Rica',
            'cote_divoire' => 'Cote D\'ivoire',
            'croatia' => 'Croatia',
            'cuba' => 'Cuba',
            'cyprus' => 'Cyprus',
            'czech_republic' => 'Czech Republic',
            'denmark' => 'Denmark',
            'djibouti' => 'Djibouti',
            'dominica' => 'Dominica',
            'dominican_republic' => 'Dominican Republic',
            'ecuador' => 'Ecuador',
            'egypt' => 'Egypt',
            'el_salvador' => 'El Salvador',
            'equatorial_guinea' => 'Equatorial Guinea',
            'eritrea' => 'Eritrea',
            'estonia' => 'Estonia',
            'ethiopia' => 'Ethiopia',
            'falkland_islands' => 'Falkland Islands (Malvinas)',
            'faroe_islands' => 'Faroe Islands',
            'fiji' => 'Fiji',
            'finland' => 'Finland',
            'france' => 'France',
            'french_guiana' => 'French Guiana',
            'french_polynesia' => 'French Polynesia',
            'french_southern_territories' => 'French Southern Territories',
            'gabon' => 'Gabon',
            'gambia' => 'Gambia',
            'georgia' => 'Georgia',
            'germany' => 'Germany',
            'ghana' => 'Ghana',
            'gibraltar' => 'Gibraltar',
            'greece' => 'Greece',
            'greenland' => 'Greenland',
            'grenada' => 'Grenada',
            'guadeloupe' => 'Guadeloupe',
            'guam' => 'Guam',
            'guatemala' => 'Guatemala',
            'guernsey' => 'Guernsey',
            'guinea' => 'Guinea',
            'guinea_bissau' => 'Guinea-Bissau',
            'guyana' => 'Guyana',
            'haiti' => 'Haiti',
            'heard_mcdonald_islands' => 'Heard Island and Mcdonald Islands',
            'vatican_city' => 'Holy See (Vatican City State)',
            'honduras' => 'Honduras',
            'hong_kong' => 'Hong Kong',
            'hungary' => 'Hungary',
            'iceland' => 'Iceland',
            'india' => 'India',
            'indonesia' => 'Indonesia',
            'iran' => 'Iran, Islamic Republic of',
            'iraq' => 'Iraq',
            'ireland' => 'Ireland',
            'isle_of_man' => 'Isle of Man',
            'israel' => 'Israel',
            'italy' => 'Italy',
            'jamaica' => 'Jamaica',
            'japan' => 'Japan',
            'jersey' => 'Jersey',
            'jordan' => 'Jordan',
            'kazakhstan' => 'Kazakhstan',
            'kenya' => 'Kenya',
            'kiribati' => 'Kiribati',
            'north_korea' => 'Korea, Democratic People\'s Republic of',
            'south_korea' => 'Korea, Republic of',
            'kuwait' => 'Kuwait',
            'kyrgyzstan' => 'Kyrgyzstan',
            'laos' => 'Lao People\'s Democratic Republic',
            'latvia' => 'Latvia',
            'lebanon' => 'Lebanon',
            'lesotho' => 'Lesotho',
            'liberia' => 'Liberia',
            'libya' => 'Libyan Arab Jamahiriya',
            'liechtenstein' => 'Liechtenstein',
            'lithuania' => 'Lithuania',
            'luxembourg' => 'Luxembourg',
            'macao' => 'Macao',
            'north_macedonia' => 'Macedonia, The Former Yugoslav Republic of',
            'madagascar' => 'Madagascar',
            'malawi' => 'Malawi',
            'malaysia' => 'Malaysia',
            'maldives' => 'Maldives',
            'mali' => 'Mali',
            'malta' => 'Malta',
            'marshall_islands' => 'Marshall Islands',
            'martinique' => 'Martinique',
            'mauritania' => 'Mauritania',
            'mauritius' => 'Mauritius',
            'mayotte' => 'Mayotte',
            'mexico' => 'Mexico',
            'micronesia' => 'Micronesia, Federated States of',
            'moldova' => 'Moldova, Republic of',
            'monaco' => 'Monaco',
            'mongolia' => 'Mongolia',
            'montenegro' => 'Montenegro',
            'montserrat' => 'Montserrat',
            'morocco' => 'Morocco',
            'mozambique' => 'Mozambique',
            'myanmar' => 'Myanmar',
            'namibia' => 'Namibia',
            'nauru' => 'Nauru',
            'nepal' => 'Nepal',
            'netherlands' => 'Netherlands',
            'netherlands_antilles' => 'Netherlands Antilles',
            'new_caledonia' => 'New Caledonia',
            'new_zealand' => 'New Zealand',
            'nicaragua' => 'Nicaragua',
            'niger' => 'Niger',
            'nigeria' => 'Nigeria',
            'niue' => 'Niue',
            'norfolk_island' => 'Norfolk Island',
            'northern_mariana_islands' => 'Northern Mariana Islands',
            'norway' => 'Norway',
            'oman' => 'Oman',
            'pakistan' => 'Pakistan',
            'palau' => 'Palau',
            'palestine' => 'Palestinian Territory, Occupied',
            'panama' => 'Panama',
            'papua_new_guinea' => 'Papua New Guinea',
            'paraguay' => 'Paraguay',
            'peru' => 'Peru',
            'philippines' => 'Philippines',
            'pitcairn' => 'Pitcairn',
            'poland' => 'Poland',
            'portugal' => 'Portugal',
            'puerto_rico' => 'Puerto Rico',
            'qatar' => 'Qatar',
            'reunion' => 'Reunion',
            'romania' => 'Romania',
            'russian_federation' => 'Russian Federation',
            'rwanda' => 'Rwanda',
            'saint_barthelemy' => 'Saint Barthelemy',
            'saint_helena' => 'Saint Helena',
            'saint_kitts_nevis' => 'Saint Kitts and Nevis',
            'saint_lucia' => 'Saint Lucia',
            'saint_martin' => 'Saint Martin',
            'saint_pierre_miquelon' => 'Saint Pierre and Miquelon',
            'saint_vincent_grenadines' => 'Saint Vincent and The Grenadines',
            'samoa' => 'Samoa',
            'san_marino' => 'San Marino',
            'sao_tome_principe' => 'Sao Tome and Principe',
            'saudi_arabia' => 'Saudi Arabia',
            'senegal' => 'Senegal',
            'serbia' => 'Serbia',
            'seychelles' => 'Seychelles',
            'sierra_leone' => 'Sierra Leone',
            'singapore' => 'Singapore',
            'slovakia' => 'Slovakia',
            'slovenia' => 'Slovenia',
            'solomon_islands' => 'Solomon Islands',
            'somalia' => 'Somalia',
            'south_africa' => 'South Africa',
            'south_sudan' => 'South Sudan',
            'spain' => 'Spain',
            'sri_lanka' => 'Sri Lanka',
            'sudan' => 'Sudan',
            'suriname' => 'Suriname',
            'svalbard_jan_mayen' => 'Svalbard and Jan Mayen',
            'eswatini' => 'Eswatini',
            'sweden' => 'Sweden',
            'switzerland' => 'Switzerland',
            'syrian_arab_republic' => 'Syrian Arab Republic',
            'taiwan' => 'Taiwan, Province of China',
            'tajikistan' => 'Tajikistan',
            'tanzania' => 'Tanzania, United Republic of',
            'thailand' => 'Thailand',
            'timor_leste' => 'Timor-Leste',
            'togo' => 'Togo',
            'tokelau' => 'Tokelau',
            'tonga' => 'Tonga',
            'trinidad_tobago' => 'Trinidad and Tobago',
            'tunisia' => 'Tunisia',
            'turkey' => 'Turkey',
            'turkmenistan' => 'Turkmenistan',
            'tuvalu' => 'Tuvalu',
            'uganda' => 'Uganda',
            'ukraine' => 'Ukraine',
            'united_arab_emirates' => 'United Arab Emirates',
            'united_kingdom' => 'United Kingdom',
            'united_states' => 'United States',
            'uruguay' => 'Uruguay',
            'uzbekistan' => 'Uzbekistan',
            'vanuatu' => 'Vanuatu',
            'venezuela' => 'Venezuela',
            'viet_nam' => 'Viet Nam',
            'western_sahara' => 'Western Sahara',
            'yemen' => 'Yemen',
            'zambia' => 'Zambia',
            'zimbabwe' => 'Zimbabwe'
        ];
        $url = request()->url();
        $segments = explode('/', $url);
        $id = end($segments);

        $phoneRules = 'required|numeric|unique:publishing_homes,PhoneNumber';
        $emailRules = 'required|email|unique:publishing_homes,email';
        $nameRules='required|string|max:50';

        if ($id) {
            $phoneRules .= ',' . $id;
            $emailRules .= ',' . $id;
            $nameRules .= ',' . $id;
        }
        $form->text('name', __('Name'))->rules($nameRules);
        $form->select('country', __('Country'))->options($countries)->rules("required|string");
        $form->text('phoneNumber', __('PhoneNumber'))->rules($phoneRules);
        $form->email('email', __('Email'))->rules($emailRules);
        $form->image('image', __('Image'))->rules("nullable|mimes:png,jpg|max:5120");

        return $form;
    }
}
