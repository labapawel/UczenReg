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
 * Class Uczens
 *
 * @property \App\Models\Uczen $model
 *
 * @see https://sleepingowladmin.ru/#/ru/model_configuration_section
 */
class Uczens extends Section implements Initializable
{
    /**
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = "Dane kandydatów";

    /**
     * @var string
     */
    protected $alias;

    /**
     * Initialize class.
     */
    public function initialize()
    {
        $this->addToNavigation()->setPriority(100)->setIcon('fa fa-lightbulb-o');
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
            AdminColumn::image('img', 'Zdjęcie'),
            AdminColumn::link('imie', 'imie', 'created_at'),
            AdminColumn::text('nazwisko', 'Nazwisko'),
            AdminColumn::text('pesel', 'Pesel'),
            
            AdminColumn::text('created_at', 'Created / updated', 'updated_at')
                ->setWidth('160px')
                ->setOrderable(function($query, $direction) {
                    $query->orderBy('updated_at', $direction);
                })
                // ->setSearchable(false)
            ,
        ];

        $display = AdminDisplay::datatables()
            ->setName('firstdatatables')
            ->setOrder([[0, 'asc']])
            ->setDisplaySearch(true)
            ->paginate(25)
            ->setColumns($columns)
            ->setHtmlAttribute('class', 'table-primary table-hover th-center')
        ;

        // $display->setColumnFilters([
        //     AdminColumnFilter::select()
        //         ->setModelForOptions(\App\Models\Uczen::class, 'name')
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
       $this->titie = "";
        $form = AdminForm::card()->addBody([
            AdminFormElement::text('kierunek', 'Kierunek 1-Prog. 2-Inf. 3-inf. i prog.'),
            AdminFormElement::columns()->addColumn([
                AdminFormElement::text('imie', 'Imię'),
            ],'col')
            ->addColumn([
                AdminFormElement::text('imie2', 'Drugie imię'),
            ],'col'),
            AdminFormElement::columns()->addColumn([
                AdminFormElement::text('nazwisko', 'Nazwisko'),
            ],'col-md-12'),
            AdminFormElement::columns()->addColumn([
                AdminFormElement::text('telefon', 'Telefon'),
            ],'col')->addColumn([
            AdminFormElement::text('email', 'Email'),
         ],'col'),

         AdminFormElement::columns()->addColumn([
            AdminFormElement::text('data_urodzenia', 'Data urodzenia'),
        ],'col')->addColumn([
            AdminFormElement::text('pesel', 'PESEL'),
        ],'col'),

        AdminFormElement::text('miejsce_urodzenia', 'Miejsce urodzenia'),
        AdminFormElement::html('<h3 class="mt-4">Zamieszkanie</h3>'),
        AdminFormElement::columns()->addColumn([
            AdminFormElement::text('adres_miasto', 'Miasto'),
        ],'col')->addColumn([
            AdminFormElement::text('adres_kodpocz', 'Kod pocztowy'),
        ],'col-2'),
        AdminFormElement::columns()->addColumn([
            AdminFormElement::text('adres_ulica', 'Ulica'),
        ],'col')->addColumn([
            AdminFormElement::text('adres_nrdom', 'Numer domu'),
        ],'col-2')->addColumn([
            AdminFormElement::text('adres_nrmie', 'Numer mieszkania'),
        ],'col-2'),
        AdminFormElement::image('img', 'Zdjęcie'),
        AdminFormElement::textarea('komentarz', 'Komentarz'),

        AdminFormElement::html('<h3 class="mt-4">Dane opiekuma/Matki</h3>'),
        AdminFormElement::text('imie_nazwisko_matki', 'Imię i nazwisko'),
        AdminFormElement::columns()->addColumn([
            AdminFormElement::text('telefon_matki', 'Telefon'),
        ],'col')->addColumn([
        AdminFormElement::text('email_matki', 'Email'),
     ],'col'),
     AdminFormElement::columns()->addColumn([
        AdminFormElement::text('adres_miasto_matki', 'Miasto'),
    ],'col')->addColumn([
        AdminFormElement::text('adres_kodpocz_matki', 'Kod pocztowy'),
    ],'col-2'),
    AdminFormElement::columns()->addColumn([
        AdminFormElement::text('adres_ulica_matki', 'Ulica'),
    ],'col')->addColumn([
        AdminFormElement::text('adres_nrdom_matki', 'Numer domu'),
    ],'col-2')->addColumn([
        AdminFormElement::text('adres_nrmie_matki', 'Numer mieszkania'),
    ],'col-2'),

        AdminFormElement::html('<h3 class="mt-4">Dane opiekuma/Ojca</h3>'),
        AdminFormElement::text('imie_nazwisko_ojca', 'Imię i nazwisko'),
        AdminFormElement::columns()->addColumn([
            AdminFormElement::text('telefon_ojca', 'Telefon'),
        ],'col')->addColumn([
        AdminFormElement::text('email_ojca', 'Email'),
     ],'col'),
     AdminFormElement::columns()->addColumn([
        AdminFormElement::text('adres_miasto_ojca', 'Miasto'),
    ],'col')->addColumn([
        AdminFormElement::text('adres_kodpocz_ojca', 'Kod pocztowy'),
    ],'col-2'),
    AdminFormElement::columns()->addColumn([
        AdminFormElement::text('adres_ulica_ojca', 'Ulica'),
    ],'col')->addColumn([
        AdminFormElement::text('adres_nrdom_ojca', 'Numer domu'),
    ],'col-2')->addColumn([
        AdminFormElement::text('adres_nrmie_ojca', 'Numer mieszkania'),
    ],'col-2'),




        ]);

        $form->getButtons()->setButtons([
            'save'  => new Save(),
            'save_and_close'  => new SaveAndClose(),
            'save_and_create'  => new SaveAndCreate(),
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
        return true;
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
