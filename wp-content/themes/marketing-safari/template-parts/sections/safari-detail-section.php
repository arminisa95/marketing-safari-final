<?php
if (!defined('ABSPATH')) {
    exit;
}

$defaults = [
    'section_id' => '',
    'badge_icon' => '',
    'badge_alt' => '',
    'heading' => '',
    'subtitle' => '',
    'body' => '',
    'feature_icon' => '',
    'feature_rows' => [],
    'meta' => '',
    'form_variant' => 'orange',
    'form_anchor_id' => '',
    'privacy_id' => '',
    'form_heading' => 'Danach erhältst du einen Link um dir ein kostenloses Info-Gespräch zu vereinbaren.',
];

$data = wp_parse_args($args ?? [], $defaults);
$section_classes = 'sds-section';
$form_classes = 'sds-form-box ' . ($data['form_variant'] === 'green' ? 'sds-form-green' : 'sds-form-orange');
?>

<section class="<?php echo esc_attr($section_classes); ?>"<?php echo $data['section_id'] ? ' id="' . esc_attr($data['section_id']) . '"' : ''; ?>>
  <div class="sds-inner">

    <div class="sds-title-row">
      <img src="<?php echo esc_url(ms_image_url($data['badge_icon'])); ?>" alt="<?php echo esc_attr($data['badge_alt']); ?>" class="sds-badge">
      <div class="sds-title-block">
        <h2 class="sds-heading"><?php echo wp_kses_post($data['heading']); ?></h2>
        <p class="sds-subtitle"><?php echo esc_html($data['subtitle']); ?></p>
      </div>
    </div>

    <p class="sds-body"><?php echo esc_html($data['body']); ?></p>

    <div class="sds-features">
      <?php foreach ($data['feature_rows'] as $row) : ?>
        <div class="sds-features-row">
          <?php foreach ($row as $item) : ?>
            <div class="sds-feature">
              <img src="<?php echo esc_url(ms_image_url($data['feature_icon'])); ?>" alt="" class="sds-check">
              <span><?php echo esc_html($item); ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <p class="sds-meta"><?php echo esc_html($data['meta']); ?></p>

    <div class="<?php echo esc_attr($form_classes); ?>"<?php echo $data['form_anchor_id'] ? ' id="' . esc_attr($data['form_anchor_id']) . '"' : ''; ?>>
      <h3 class="sds-form-heading"><?php echo esc_html($data['form_heading']); ?></h3>
      <form class="sds-form" action="#" method="post">
        <div class="sds-form-grid">
          <div class="sds-field">
            <label>Vorname*</label>
            <input type="text" name="vorname" placeholder="Max" required>
          </div>
          <div class="sds-field">
            <label>Nachname*</label>
            <input type="text" name="nachname" placeholder="Mustermann" required>
          </div>
          <div class="sds-field">
            <label>Unternehmen*</label>
            <input type="text" name="unternehmen" placeholder="Musterunternehmen" required>
          </div>
          <div class="sds-field">
            <label>E-Mail*</label>
            <input type="email" name="email" placeholder="max@unternehmen.at" required>
          </div>
          <div class="sds-field">
            <label>Telefon*</label>
            <input type="tel" name="telefon" placeholder="+43 664 123 456 789" required>
          </div>
          <div class="sds-field">
            <label>Geplantes monatliches Werbebudget</label>
            <input type="text" name="budget" placeholder="30.000 €">
          </div>
        </div>
        <div class="sds-field sds-field-full">
          <label>Erzähle uns mehr von dir, deiner Idee oder deinem Unternehmen</label>
          <textarea name="message" placeholder="Erzähl uns etwas über dich und dein Projekt ..."></textarea>
        </div>
        <div class="sds-checkbox-row">
          <input type="checkbox" id="<?php echo esc_attr($data['privacy_id']); ?>" name="privacy" required>
          <label for="<?php echo esc_attr($data['privacy_id']); ?>">Ich habe die Datenschutzerklärung gelesen und stimme dieser zu.</label>
        </div>
        <button type="submit" class="sds-submit">Anfrage absenden</button>
      </form>
    </div>

  </div>
</section>
