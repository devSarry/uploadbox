<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class PortfolioForm extends Form {

    public function buildForm()
    {
        $this
            ->add('photo_name', 'image')
            ->add('title', 'text')
            ->add('sub_title', 'text')
            ->add('client', 'text')
            ->add('date', 'date')
            ->add('service', 'text')
            ->add('description', 'textarea', ['attr' => ['rows' => 3]])
            ->add('submit', 'submit',
                ['label' => 'Save form',
                 'attr'  => ['class' => 'btn btn-primary btn-raised']])
            ->add('clear', 'reset',
                ['label' => 'Clear form',
                 'attr'  => ['class' => 'btn btn-default btn-raised']]);
    }
}
