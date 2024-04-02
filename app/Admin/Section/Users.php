<?php

namespace App\Admin\Section;

use AdminColumn;
use AdminColumnFilter;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use Illuminate\Database\Eloquent\Model;
use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Form\Buttons\Cancel;
use SleepingOwl\Admin\Form\Buttons\Save;
use SleepingOwl\Admin\Form\Buttons\SaveAndClose;
use SleepingOwl\Admin\Form\Buttons\SaveAndCreate;
use SleepingOwl\Admin\Section;

/**
 * Class Users
 *
 * @property \AppModelsUser $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Users extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Konta";

    /**
     * @var string
     */
    protected $alias;
    

    /**
     * Initialize class.
     */
    public function initialize()
    {
        // $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
    }

    /**
     * @param array $payload
     *
     * @return DisplayInterface
     */
    public function onDisplay($payload = [])
    {
        $columns = [
            AdminColumn::text('id', '#')->setWidth('50px')->setHtmlAttribute('class', 'text-center'),
            AdminColumn::text('name', 'Name','created_at'),
            AdminColumn::text('email', 'Email')
            // AdminColumn::boolean('active', 'Konto aktywne')
            //     ->setSearchCallback(function($column, $query, $search){
            //         return $query
            //             ->orWhere('name', 'like', '%'.$search.'%')
            //             ->orWhere('created_at', 'like', '%'.$search.'%')
            //         ;
            //     })
            //     ->setOrderable(function($query, $direction) {
            //         $query->orderBy('created_at', $direction);
            //     })
            // ,
            // AdminColumn::boolean('name', 'On'),
            // AdminColumn::text('created_at', 'Created / updated', 'updated_at')
            //     ->setWidth('160px')
            //     ->setOrderable(function($query, $direction) {
            //         $query->orderBy('updated_at', $direction);
            //     })
            //     ->setSearchable(true)
            ,
        ];

        $display = AdminDisplay::datatablesAsync()
            ->setApply(function($query) {
                if(!\Auth::user()->isAdmin())
                    $query->where('id', \Auth::user()->getKey());
            })
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
             ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        // $display->setColumnFilters([
        //     AdminColumnFilter::select()
        //         ->setModelForOptions(\App\Models\User::class, 'name')
        //         ->setLoadOptionsQueryPreparer(function($element, $query) {
        //             return $query;
        //         })
        //         ->setDisplay('name')
        //         ->setColumnName('name')
        //         ->setPlaceholder('All names')
        //     ,
        // ]);
        // $display->getColumnFilters()->setPlacement('card.heading');

        return $display;
    }

    /**
     * @param int|null $id
     * @param array $payload
     *
     * @return FormInterface
     */
    public function onEdit($id = null, $payload = [])
    {
        if(!\Auth::user()->isAdmin())
        {
            if($id != \Auth::user()->getKey())
                    return response('Brak autoryzacji. :)', 401);
        }

        $ed = [
            AdminFormElement::text('name', 'Nazwa')->required()
                ->setReadonly(!\Auth::user()->isAdmin()),
            AdminFormElement::text('email', 'Email')->required()
                ->setReadonly(!\Auth::user()->isAdmin()),
            // AdminFormElement::checkbox('active', 'Konto aktywne')
            //     ->setReadonly(!\Auth::user()->isAdmin()),
            AdminFormElement::password('pass', 'Hasło'),
        ];
        // if(\Auth::user()->isAdmin())
        // {
        //     $ed[]= AdminFormElement::multiselect('perms', 'Uprawnienia', 
        // [1=>'Administrator'/*,2=>'Rejestry'*/]); // kolejne bity;
        // }

        $form = AdminForm::card()->addBody($ed);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            // 'save_and_create'  => new SaveAndCreate(),
            'cancel'  => (new Cancel()),
        ]);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate($payload = [])
    {
        return $this->onEdit(null, $payload);
    }

    /**
     * @return bool
     */
    public function isDeletable(Model $model)
    {
        return (\Auth::user()->isAdmin() && \Auth::user() != $model);
    }

    /**
     * @return bool
     */
    public function isEditable(Model $model)
    {
        return \Auth::user()->isAdmin() || \Auth::user() == $model;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
