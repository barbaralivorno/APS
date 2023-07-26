<?php 
  $background_image = get_field('background_image');
  $title = get_field('title');
  $short_description = get_field('short_description');
  $form_text = get_field('form_text');
  $reasons_for_reaching_out = array_column(get_field('reasons_for_reaching_out'), 'reason');
?>
<section class="contact-page">
  <div class="contact-page__columns">
    <div class="contact-page__left-column">
      <?= hd_component('media', [
        'type' => 'image',
        'resource' => $background_image,
        'class' => "contact-page__background-image",
        'sizes' => ['crop-615w-41:31', 'crop-1230w-41:31', 'scale-600w'],
        'display_sizes' => ['desktop' => '42.5vw', 'phone' => '100vw'],
        'fallback' => 'crop-615w-41:31',
        'background' => true,
        'fit' => 'cover',
      ]) ?>
      <div class="contact-page__left-column-group">
        <?= hd_component('title', [
          'modifier' => 'xxl',
          'class' => "contact-page__title",
          'text' => $title,
        ]) ?>
        <?php if (!empty($short_description)): ?>
          <div class="contact-page__short-description">
            <?= $short_description ?>
          </div>
        <?php endif ?>
      </div>
    </div>
    <div class="contact-page__right-column">
      <div class="contact-page__right-column-group">
        <div class="contact-page__form-text"><?= $form_text ?></div>
        <form class="contact-page__form" action="<?= hd_api_url('contact') ?>">
          <?= hd_nonce_field('contact') ?>
          <div class="contact-page__form-group">
            <div class="contact-page__form-field-group">
              <span class="contact-page__label">Your Name</span>
              <?= component('field', [
                'name' => 'name',
                'class' => 'contact-page__form-field-name',
                'required' => true,
              ]) ?>
            </div>
            <div class="contact-page__form-field-group">
              <span class="contact-page__label">Company</span>
              <?= component('field', [
                'name' => 'company',
                'class' => 'contact-page__form-field-company',
                'required' => true,
              ]) ?>
            </div>
          </div>
          <div class="contact-page__form-group">
            <div class="contact-page__form-field-group">
              <span class="contact-page__label">Email</span>
              <?= component('field', [
                'name' => 'email',
                'type' => 'email',
                'class' => 'contact-page__form-field-email',
                'required' => true,
              ]) ?>
            </div>
            <div class="contact-page__form-field-group">
              <span class="contact-page__label">Phone Number</span>
              <?= component('field', [
                'name' => 'phone_number',
                'class' => 'contact-page__form-field-phone-number',
                'required' => true,
              ]) ?>
            </div>
          </div>
          <span class="contact-page__label">Reason for Reaching Out</span>
          <?= component('field', [
            'name' => 'reasons_for_reaching_out',
            'type' => 'select',
            'options' => array_combine(range(1, count($reasons_for_reaching_out)), array_values($reasons_for_reaching_out)),
            'placeholder' => ' ',
            'class' => 'contact-page__form-field-reason',
          ]) ?>
          <span class="contact-page__label">Message</span>
          <?= component('field', [
            'name' => 'message',
            'class' => 'contact-page__form-message',
            'type' => 'textarea',
            'rows' => 8,
            'maxwords' => 500,
            'required' => true,
          ]) ?>
          <?= component('field', [
            'name' => 'terms_and_conditions',
            'class' => 'contact-page__form-terms-and-conditions',
            'type' => 'checkbox',
            'value' => true,
            'label' => 'I agree to the terms and conditions',
            'required' => true,
          ]) ?>
          <?= hd_component('button', [
            'class' => 'contact-page__form-submit',
            'modifier' => ['orange', 'with-arrow'],
            'text' => 'Submit',
            'type' => 'submit',
          ]) ?>
        </form>
      </div>
    </div>
  </div>
</section>