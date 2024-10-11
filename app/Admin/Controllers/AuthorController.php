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
        $show->field('image', __('Image'));
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
        $url = request()->url();
        $segments = explode('/', $url);
        $id = end($segments); // Get the last part of the URL

        // If updating, apply the unique rule excluding the current category ID
        $rules = 'required|numeric|unique:authors,PhoneNumber';
        if ($id) {
            $rules .= ',' . $id; // Exclude the current category from the unique validation
        }
        $form->text('name', __('Name'))->rules(["required", "min:5", "max:40", "string"],);
        $form->textarea('descriotion', __('Descriotion'))->rules(["nullable", "max:255"]);
        $form->date('DOB', __('DOB'))->default(date('Y-m-d'))->rules(["required", "date", 'before_or_equal:Today']);
        $form->date('DOD', __('DOD'))->default(date('Y-m-d'))->rules(["nullable", "date", 'after:DOB','before_or_equal:Today']);
        $form->text('nationality', __('Nationality'))->rules(["string", "required"]);
        $form->text('phoneNumber', __('PhoneNumber'))->rules($rules);
        $form->email('email', __('Email'))->rules(["required", "email"],);
        $form->text('job', __('Job'))->rules(["nullable", "string"]);
        $form->image('image', __('Image'))->rules(["nullable", "mimes:png,jpg", 'max:5120']);

        return $form;
    }
}