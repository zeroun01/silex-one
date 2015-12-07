<?php

namespace MicroCMS\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content', 'textarea'); // 'content' correspond exactement à la propriété content de la classe métier Comment
    }

    public function getName()
    {
        return 'comment';
    }
}