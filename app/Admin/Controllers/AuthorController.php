<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Author;

class AuthorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Author';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Author());


        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('descriotion', __('Descriotion'));
        $grid->column('DOB', __('DOB'));
        $grid->column('DOD', __('DOD'));
        $grid->column('nationality', __('Nationality'));
        $grid->column('phoneNumber', __('PhoneNumber'));
        $grid->column('email', __('Email'));
        $grid->column('image')->image();
        $grid->column('job', __('Job'));
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
        $show = new Show(Author::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('descriotion', __('Descriotion'));
        $show->field('DOB', __('DOB'));
        $show->field('DOD', __('DOD'));
        $show->field('nationality', __('Nationality'));
        $show->field('phoneNumber', __('PhoneNumber'));
        $show->field('email', __('Email'));
        $show->field('job', __('Job'));
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
        $form = new Form(new Author());

        $nationalities = [
            '' => '-- select one --',
            'afghan' => 'Afghan',
            'albanian' => 'Albanian',
            'algerian' => 'Algerian',
            'american' => 'American',
            'andorran' => 'Andorran',
            'angolan' => 'Angolan',
            'antiguans' => 'Antiguans',
            'argentinean' => 'Argentinean',
            'armenian' => 'Armenian',
            'australian' => 'Australian',
            'austrian' => 'Austrian',
            'azerbaijani' => 'Azerbaijani',
            'bahamian' => 'Bahamian',
            'bahraini' => 'Bahraini',
            'bangladeshi' => 'Bangladeshi',
            'barbadian' => 'Barbadian',
            'barbudans' => 'Barbudans',
            'batswana' => 'Batswana',
            'belarusian' => 'Belarusian',
            'belgian' => 'Belgian',
            'belizean' => 'Belizean',
            'beninese' => 'Beninese',
            'bhutanese' => 'Bhutanese',
            'bolivian' => 'Bolivian',
            'bosnian' => 'Bosnian',
            'brazilian' => 'Brazilian',
            'british' => 'British',
            'bruneian' => 'Bruneian',
            'bulgarian' => 'Bulgarian',
            'burkinabe' => 'Burkinabe',
            'burmese' => 'Burmese',
            'burundian' => 'Burundian',
            'cambodian' => 'Cambodian',
            'cameroonian' => 'Cameroonian',
            'canadian' => 'Canadian',
            'cape verdean' => 'Cape Verdean',
            'central african' => 'Central African',
            'chadian' => 'Chadian',
            'chilean' => 'Chilean',
            'chinese' => 'Chinese',
            'colombian' => 'Colombian',
            'comoran' => 'Comoran',
            'congolese' => 'Congolese',
            'costa rican' => 'Costa Rican',
            'croatian' => 'Croatian',
            'cuban' => 'Cuban',
            'cypriot' => 'Cypriot',
            'czech' => 'Czech',
            'danish' => 'Danish',
            'djibouti' => 'Djibouti',
            'dominican' => 'Dominican',
            'dutch' => 'Dutch',
            'east timorese' => 'East Timorese',
            'ecuadorean' => 'Ecuadorean',
            'egyptian' => 'Egyptian',
            'emirian' => 'Emirian',
            'equatorial guinean' => 'Equatorial Guinean',
            'eritrean' => 'Eritrean',
            'estonian' => 'Estonian',
            'ethiopian' => 'Ethiopian',
            'fijian' => 'Fijian',
            'filipino' => 'Filipino',
            'finnish' => 'Finnish',
            'french' => 'French',
            'gabonese' => 'Gabonese',
            'gambian' => 'Gambian',
            'georgian' => 'Georgian',
            'german' => 'German',
            'ghanaian' => 'Ghanaian',
            'greek' => 'Greek',
            'grenadian' => 'Grenadian',
            'guatemalan' => 'Guatemalan',
            'guinea-bissauan' => 'Guinea-Bissauan',
            'guinean' => 'Guinean',
            'guyanese' => 'Guyanese',
            'haitian' => 'Haitian',
            'herzegovinian' => 'Herzegovinian',
            'honduran' => 'Honduran',
            'hungarian' => 'Hungarian',
            'icelander' => 'Icelander',
            'indian' => 'Indian',
            'indonesian' => 'Indonesian',
            'iranian' => 'Iranian',
            'iraqi' => 'Iraqi',
            'irish' => 'Irish',
            'israeli' => 'Israeli',
            'italian' => 'Italian',
            'ivorian' => 'Ivorian',
            'jamaican' => 'Jamaican',
            'japanese' => 'Japanese',
            'jordanian' => 'Jordanian',
            'kazakhstani' => 'Kazakhstani',
            'kenyan' => 'Kenyan',
            'kittian and nevisian' => 'Kittian and Nevisian',
            'kuwaiti' => 'Kuwaiti',
            'kyrgyz' => 'Kyrgyz',
            'laotian' => 'Laotian',
            'latvian' => 'Latvian',
            'lebanese' => 'Lebanese',
            'liberian' => 'Liberian',
            'libyan' => 'Libyan',
            'liechtensteiner' => 'Liechtensteiner',
            'lithuanian' => 'Lithuanian',
            'luxembourger' => 'Luxembourger',
            'macedonian' => 'Macedonian',
            'malagasy' => 'Malagasy',
            'malawian' => 'Malawian',
            'malaysian' => 'Malaysian',
            'maldivan' => 'Maldivan',
            'malian' => 'Malian',
            'maltese' => 'Maltese',
            'marshallese' => 'Marshallese',
            'mauritanian' => 'Mauritanian',
            'mauritian' => 'Mauritian',
            'mexican' => 'Mexican',
            'micronesian' => 'Micronesian',
            'moldovan' => 'Moldovan',
            'monacan' => 'Monacan',
            'mongolian' => 'Mongolian',
            'moroccan' => 'Moroccan',
            'mosotho' => 'Mosotho',
            'motswana' => 'Motswana',
            'mozambican' => 'Mozambican',
            'namibian' => 'Namibian',
            'nauruan' => 'Nauruan',
            'nepalese' => 'Nepalese',
            'new zealander' => 'New Zealander',
            'ni-vanuatu' => 'Ni-Vanuatu',
            'nicaraguan' => 'Nicaraguan',
            'nigerien' => 'Nigerien',
            'north korean' => 'North Korean',
            'northern irish' => 'Northern Irish',
            'norwegian' => 'Norwegian',
            'omani' => 'Omani',
            'pakistani' => 'Pakistani',
            'palauan' => 'Palauan',
            'panamanian' => 'Panamanian',
            'papua new guinean' => 'Papua New Guinean',
            'paraguayan' => 'Paraguayan',
            'peruvian' => 'Peruvian',
            'polish' => 'Polish',
            'portuguese' => 'Portuguese',
            'qatari' => 'Qatari',
            'romanian' => 'Romanian',
            'russian' => 'Russian',
            'rwandan' => 'Rwandan',
            'saint lucian' => 'Saint Lucian',
            'salvadoran' => 'Salvadoran',
            'samoan' => 'Samoan',
            'san marinese' => 'San Marinese',
            'sao tomean' => 'Sao Tomean',
            'saudi' => 'Saudi',
            'scottish' => 'Scottish',
            'senegalese' => 'Senegalese',
            'serbian' => 'Serbian',
            'seychellois' => 'Seychellois',
            'sierra leonean' => 'Sierra Leonean',
            'singaporean' => 'Singaporean',
            'slovakian' => 'Slovakian',
            'slovenian' => 'Slovenian',
            'solomon islander' => 'Solomon Islander',
            'somali' => 'Somali',
            'south african' => 'South African',
            'south korean' => 'South Korean',
            'spanish' => 'Spanish',
            'sri lankan' => 'Sri Lankan',
            'sudanese' => 'Sudanese',
            'surinamer' => 'Surinamer',
            'swazi' => 'Swazi',
            'swedish' => 'Swedish',
            'swiss' => 'Swiss',
            'syrian' => 'Syrian',
            'taiwanese' => 'Taiwanese',
            'tajik' => 'Tajik',
            'tanzanian' => 'Tanzanian',
            'thai' => 'Thai',
            'togolese' => 'Togolese',
            'tongan' => 'Tongan',
            'trinidadian or tobagonian' => 'Trinidadian or Tobagonian',
            'tunisian' => 'Tunisian',
            'turkish' => 'Turkish',
            'tuvaluan' => 'Tuvaluan',
            'ugandan' => 'Ugandan',
            'ukrainian' => 'Ukrainian',
            'uruguayan' => 'Uruguayan',
            'uzbekistani' => 'Uzbekistani',
            'venezuelan' => 'Venezuelan',
            'vietnamese' => 'Vietnamese',
            'welsh' => 'Welsh',
            'yemenite' => 'Yemenite',
            'zambian' => 'Zambian',
            'zimbabwean' => 'Zimbabwean',
        ];
        $url = request()->url();
        $segments = explode('/', $url);
        $id = end($segments); // Get the last part of the URL (assuming it's the ID)

        // If updating, apply the unique rule excluding the current author ID
        $phoneRules = 'required|numeric|unique:authors,PhoneNumber';
        $emailRules = 'required|email|unique:authors,email';

        if ($id) {
            $phoneRules .= ',' . $id; // Exclude the current record from phone number unique validation
            $emailRules .= ',' . $id; // Exclude the current record from email unique validation
        }
        $form->text('name', __('Name'))->rules(["required", "min:5", "max:40", "string"], );
        $form->textarea('description', __('Descriotion'))->rules(["nullable", "max:255"]);
        $form->date('DOB', __('DOB'))->default(date('Y-m-d'))->rules(["required", "date", 'before_or_equal:Today']);
        $form->date('DOD', __('DOD'))->default(date('Y-m-d'))->rules(["nullable", "date", 'after:DOB', 'before_or_equal:Today']);
        $form->select('nationality', __('Nationality'))->options($nationalities)->rules(["string", "required"]);
        $form->text('phoneNumber', __('PhoneNumber'))->rules($phoneRules);
        $form->email('email', __('Email'))->rules($emailRules);
        $form->text('job', __('Job'))->rules(["nullable", "string"]);
        $form->image('image', __('Image'))->rules(["nullable", "mimes:png,jpg", 'max:5120']);

        return $form;
    }
}
