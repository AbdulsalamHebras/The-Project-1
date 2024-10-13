<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Story;

class StoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Story';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Story());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('summary', __('Summary'));
        $grid->column('writing_date', __('Writing date'));
        $grid->column('image')->image();
        $grid->column('category_id', __('Category id'));
        $grid->column('language', __('Language'));

        $grid->column('parts', __('Parts'));
        $grid->column('deposit_number', __('Deposit number'));
        $grid->column('edition_number', __('Edition number'));
        $grid->column('deposit_date', __('Deposit date'));
        $grid->column('pages', __('Pages'));
        $grid->column('copies', __('Copies'));
        $grid->column('price', __('Price'));
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
        $show = new Show(Story::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('summary', __('Summary'));
        $show->field('writing_date', __('Writing date'));
        $show->field('image')->image();
        $show->field('category_id', __('Category id'));
        $show->field('language', __('Language'));

        $show->field('parts', __('Parts'));
        $show->field('deposit_number', __('Deposit number'));
        $show->field('edition_number', __('Edition number'));
        $show->field('deposit_date', __('Deposit date'));
        $show->field('pages', __('Pages'));
        $show->field('copies', __('Copies'));
        $show->field('price', __('Price'));
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
        $form = new Form(new Story());
        $languages = [
            'Afrikaans' => 'Afrikaans',
            'Albanian' => 'Albanian',
            'Arabic' => 'Arabic',
            'Armenian' => 'Armenian',
            'Basque' => 'Basque',
            'Bengali' => 'Bengali',
            'Bulgarian' => 'Bulgarian',
            'Catalan' => 'Catalan',
            'Cambodian' => 'Cambodian',
            'Chinese (Mandarin)' => 'Chinese (Mandarin)',
            'Croatian' => 'Croatian',
            'Czech' => 'Czech',
            'Danish' => 'Danish',
            'Dutch' => 'Dutch',
            'English' => 'English',
            'Estonian' => 'Estonian',
            'Fiji' => 'Fiji',
            'Finnish' => 'Finnish',
            'French' => 'French',
            'Georgian' => 'Georgian',
            'German' => 'German',
            'Greek' => 'Greek',
            'Gujarati' => 'Gujarati',
            'Hebrew' => 'Hebrew',
            'Hindi' => 'Hindi',
            'Hungarian' => 'Hungarian',
            'Icelandic' => 'Icelandic',
            'Indonesian' => 'Indonesian',
            'Irish' => 'Irish',
            'Italian' => 'Italian',
            'Japanese' => 'Japanese',
            'Javanese' => 'Javanese',
            'Korean' => 'Korean',
            'Latin' => 'Latin',
            'Latvian' => 'Latvian',
            'Lithuanian' => 'Lithuanian',
            'Macedonian' => 'Macedonian',
            'Malay' => 'Malay',
            'Malayalam' => 'Malayalam',
            'Maltese' => 'Maltese',
            'Maori' => 'Maori',
            'Marathi' => 'Marathi',
            'Mongolian' => 'Mongolian',
            'Nepali' => 'Nepali',
            'Norwegian' => 'Norwegian',
            'Persian' => 'Persian',
            'Polish' => 'Polish',
            'Portuguese' => 'Portuguese',
            'Punjabi' => 'Punjabi',
            'Quechua' => 'Quechua',
            'Romanian' => 'Romanian',
            'Russian' => 'Russian',
            'Samoan' => 'Samoan',
            'Serbian' => 'Serbian',
            'Slovak' => 'Slovak',
            'Slovenian' => 'Slovenian',
            'Spanish' => 'Spanish',
            'Swahili' => 'Swahili',
            'Swedish' => 'Swedish',
            'Tamil' => 'Tamil',
            'Tatar' => 'Tatar',
            'Telugu' => 'Telugu',
            'Thai' => 'Thai',
            'Tibetan' => 'Tibetan',
            'Tonga' => 'Tonga',
            'Turkish' => 'Turkish',
            'Ukrainian' => 'Ukrainian',
            'Urdu' => 'Urdu',
            'Uzbek' => 'Uzbek',
            'Vietnamese' => 'Vietnamese',
            'Welsh' => 'Welsh',
            'Xhosa' => 'Xhosa',
        ];


        $categories = \App\Models\Category::pluck('name', 'id');

        // Fetch authors (for dropdown)
        $authors = \App\Models\Author::pluck('name', 'id');
        $publishingHomes=\App\Models\PublishingHome::pluck('name','id');

        // Fetch last deposit number and set next one
        $lastDepositNumber = \App\Models\Story::max('deposit_number') ?? 0;
        $nextDepositNumber = $lastDepositNumber + 1;

        // Set the current date for deposit_date
        $currentDate = date('Y-m-d');

        $form->text('name', __('Name'))->rules('required|min:5|max:20|string|unique:stories,name');
        $form->textarea('summary', __('Summary'))->rules('nullable|max:255');
        $form->date('writing_date', __('Writing date'))->default(date('Y-m-d'))->rules('required|date|before_or_equal:Today');
        $form->image('image', __('Image'))->rules('nullable|mimes:png,jpg|max:5120');

        $form->select('category_id', __('Category'))->options($categories)->rules('required');

        $form->select('language', __('Language'))->options($languages)->rules('required|string');

        $form->multipleSelect('authors', __('Authors'))->options($authors)->rules('required');

        $form->multipleSelect('publishingHomes', __('Publishing homes'))->options($publishingHomes)->rules('required');

        $form->number('parts', __('Parts'))->rules('numeric|required');
        $form->number('deposit_number', __('Deposit number'))->default($nextDepositNumber)->attribute('readonly', true)->rules('numeric|required');
        $form->date('deposit_date', __('Deposit date'))->default($currentDate)->attribute('readonly', true)->rules('date|required');
        $form->number('edition_number', __('Edition number'))->rules('numeric|required');
        $form->number('pages', __('Pages'))->rules('numeric|required');
        $form->number('copies', __('Copies'))->rules('numeric|required');
        $form->decimal('price', __('Price'))->rules('numeric|required');

        return $form;
    }

}