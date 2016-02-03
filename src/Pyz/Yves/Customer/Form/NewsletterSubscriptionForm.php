<?php

namespace Pyz\Yves\Customer\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class NewsletterSubscriptionForm extends AbstractType
{
    const FIELD_SUBSCRIBE = 'subscribe';

    /**
     * @return string
     */
    public function getName()
    {
        return 'newsletterSubscriptionForm';
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->addSubscribeField($builder);
    }

    /**
     * @param \Symfony\Component\Form\FormBuilderInterface $builder
     *
     * @return $this
     */
    protected function addSubscribeField(FormBuilderInterface $builder)
    {
        $builder->add(self::FIELD_SUBSCRIBE, 'checkbox', [
            'label' => 'customer.newsletter.subscription_agreement',
            'required' => false,
        ]);

        return $this;
    }

}
